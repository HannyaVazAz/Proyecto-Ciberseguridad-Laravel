<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Kernel::class);
$request = Request::create('/', 'GET');
$response = $kernel->handle($request);
http_response_code($response->getStatusCode());
echo 'Status: '.$response->getStatusCode().PHP_EOL;
foreach ($response->headers->all() as $k => $v) {
    echo $k.': '.implode(', ', $v).PHP_EOL;
}
$kernel->terminate($request, $response);
