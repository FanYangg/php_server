<?php
require('../../vendor/autoload.php');

use Volc\Service\Visual;

$client = Visual::getInstance();
// call below method if you dont set ak and sk in ～/.volc/config
$client->setAccessKey();
$client->setSecretKey();

echo "\nDemo CVProcess\n";

// 特别注意：body完整入参请参考不同接口的请求body部分
$body = [
    "req_key"=>"high_aes_general_v20_L",
    "prompt"=>"千军万马",
    "model_version"=>"general_v2.0_L",
    "req_schedule_conf"=>"general_v20_9B_rephraser",
    "seed"=>-1,
    "scale"=>3.5,
    "ddim_steps"=>16,
    "width"=>512,
    "height"=>512,
    "use_sr"=>False,
    "return_url"=>True,

    //...
];

$response = $client->CVProcess(['json' => $body]);
$response = str_replace('\u0026', '&', $response);
echo $response;

