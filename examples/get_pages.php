<?php
require __DIR__ . '/vendor/autoload.php';

use \Rieon\Common\Curl\Curl;

$curl = new Curl();
for ($i = 1; $i <= 10; $i++) {
    $curl->get('https://httpbin.org/get', array(
        'page' => $i,
    ));
    // TODO: Do something with result $curl->response.
}
