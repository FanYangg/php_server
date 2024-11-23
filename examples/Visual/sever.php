<?php

require('../../vendor/autoload.php');
use Volc\Service\Visual;

function getimageurl($input) {
    $client = Visual::getInstance();
    // call below method if you dont set ak and sk in ～/.volc/config
    $client->setAccessKey();
    $client->setSecretKey();

    echo "\nDemo CVProcess\n";

    // 特别注意：body完整入参请参考不同接口的请求body部分
    $body = [
        "req_key"=>"high_aes_general_v20_L",
        "prompt"=>$input,
        "model_version"=>"general_v2.0_L",
        "req_schedule_conf"=>"general_v20_9B_rephraser",
        "seed"=>-1,
        "scale"=>3.5,
        "ddim_steps"=>16,
        "width"=>512,
        "height"=>512,
        "use_sr"=>False,
        "return_url"=>True,
    ];

    $response = $client->CVProcess(['json' => $body]);
    $response = str_replace('\u0026', '&', $response);
    echo $response;
    return $response;
}


// 设置监听地址和端口
$address = "0.0.0.0";
$port = 1236;

// 创建一个 TCP 服务器
$server = stream_socket_server("tcp://$address:$port", $errno, $errstr);

if (!$server) {
    die("无法启动服务器: $errstr ($errno)\n");
}

echo "服务器正在监听端口 $port...\n";

while (true) {
    // 等待客户端连接
    $client = @stream_socket_accept($server);

    if ($client) {
        // 读取客户端发送的请求
        $request = fread($client, 1024);
        //echo "收到请求:\n$request\n";

        // 检测是否是 OPTIONS 请求
        if (strpos($request, "OPTIONS") !== false) {
            echo "收到 OPTIONS 请求\n";
        
            // 构造 OPTIONS 响应报文
            $optionsResponse = "HTTP/1.1 200 OK\r\n";
            $optionsResponse .= "Allow: OPTIONS, POST\r\n"; // 指定允许的方法
            $optionsResponse .= "Access-Control-Allow-Origin: null\r\n"; // 跨域来源
            $optionsResponse .= "Access-Control-Allow-Headers: api-key, content-type\r\n"; // 允许的请求头
            $optionsResponse .= "Access-Control-Allow-Methods: DELETE, GET, HEAD, OPTIONS, PATCH, POST, PUT\r\n"; // 允许的请求方法
            $optionsResponse .= "Vary: Origin\r\n"; // 动态响应
            $optionsResponse .= "Content-Length: 0\r\n"; // 确保无正文
            $optionsResponse .= "\r\n"; // 响应结束
        
            // 发送响应
            fwrite($client, $optionsResponse);
        
        }
        
        elseif (strpos($request, "POST") !== false) {
            // 解析 POST 数据
            $postData = "";
            if (preg_match("/\r\n\r\n(.*)/s", $request, $matches)) {
                $postData = trim($matches[1]);
            }

            echo "POST 数据:\n$postData\n";
            
            $tempdata = json_decode($postData, true);

            // 检查 JSON 解码是否成功
            if (json_last_error() !== JSON_ERROR_NONE) {
                echo "JSON 解码错误: " . json_last_error_msg();
            } else {
                // 获取 'prompt' 字段的值
                $prompt = isset($tempdata['prompt']) ? $tempdata['prompt'] : null;

                echo "Prompt 字段值:\n$prompt\n";
            }

            $imageurl = getimageurl($prompt); // 假设这个函数返回的是 JSON 格式字符串

            // 解码 JSON 字符串为关联数组
            $data = json_decode($imageurl, true); // 注意：这里需要解码

            // 检查 JSON 解码是否成功
            if (json_last_error() !== JSON_ERROR_NONE) {
                echo "JSON 解码错误: " . json_last_error_msg();
            } else {
                // 获取 'image_urls' 字段的值
                $imageUrls = isset($data['data']['image_urls']) ? $data['data']['image_urls'] : null;

                if ($imageUrls) {
                } else {
                    echo "没有找到 image_urls 字段。\n";
                }
            }

            // 构造响应报文
            $responseBody = json_encode([
                "status" => "success",
                "message" => "已收到请求",
                "echo" => $postData,  
                "imageurl"=>implode("", $imageUrls),
            ]);
            
            $response = "HTTP/1.1 200 OK\r\n";
            $response .= "Content-Type: application/json\r\n";
            $response .= "Access-Control-Allow-Origin: *\r\n"; // 允许跨域
            $response .= "Content-Length: " . strlen($responseBody) . "\r\n";
            $response .= "Connection: close\r\n\r\n";
            $response .= $responseBody;
            echo $response;
            // 发送响应
            fwrite($client, $response);
        } else {
            // 如果不是 POST 或 OPTIONS 请求，返回错误信息
            $errorResponse = "HTTP/1.1 405 Method Not Allowed\r\n";
            $errorResponse .= "Content-Type: text/plain\r\n";
            $errorResponse .= "Content-Length: 18\r\n";
            $errorResponse .= "Connection: close\r\n\r\n";
            $errorResponse .= "Only POST allowed.";
            fwrite($client, $errorResponse);
        }

        // 关闭客户端连接
        fclose($client);
    }
}

// 关闭服务器
fclose($server);
