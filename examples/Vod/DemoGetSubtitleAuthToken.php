<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodGetSubtitleInfoListRequest;
use Volc\Service\Vod\Vod;

// Create a VOD instance in the specified region.
// $client = Volc\Service\Vod\Vod::getInstance('cn-north-1');
$client = Volc\Service\Vod\Vod::getInstance();

// Configure your Access Key ID (AK) and Secret Access Key (SK) in the environment variables or in the local ~/.volc/config file. For detailed instructions, see https://www.volcengine.com/docs/4/4408.
// The SDK will automatically fetch the AK and SK from the environment variables or the ~/.volc/config file as needed.
// During testing, you may use the following code snippet. However, do not store the AK and SK directly in your project code to prevent potential leakage and safeguard the security of all resources associated with your account.
// $client->setAccessKey('your ak');
// $client->setSecretKey('your sk');

$vid = "vid";

echo "\n获取字幕token\n";

$req = new VodGetSubtitleInfoListRequest();

$req->setVid($vid);

try {
    $token = $client->getSubtitleAuthToken($req, 60);
} catch (Throwable $e) {
    print($e);
}

echo $token;