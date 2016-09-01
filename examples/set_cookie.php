<?php
require __DIR__ . '/vendor/autoload.php';

use \Rieon\Common\Curl\Curl;

$curl = new Curl();
$curl->setCookie('foo', 'bar');
$curl->get('https://httpbin.org/cookies');
var_dump($curl->response->cookies->foo === 'bar');
