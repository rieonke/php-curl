<?php
require __DIR__ . '/../../../../vendor/autoload.php';

use \Rieon\Common\Curl\Curl;

$curl = new Curl();
$curl->clearCookie();
$curl->setUserAgent("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2845.0 Safari/537.36");
$curl->get('http://www.anshi7.com/oauth/weibo/');

if ($curl->error) {
    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage;
}
else {
    echo 'Response:' . "\n";
    var_dump($curl->getResponseCookies());
}
