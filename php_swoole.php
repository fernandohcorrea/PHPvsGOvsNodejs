<?php
require 'vendor/autoload.php';

use OpenSwoole\Http\Server;
use OpenSwoole\Http\Request;
use OpenSwoole\Http\Response;

$server = new Server("127.0.0.1", 8081);

$server->on("Start", function (Server $server) {
  echo "Swoole server is started at http://127.0.0.1:8081\n";
});

$server->on("Request", function (Request $request, Response $response) {
  $response->header("Content-Type", "application/json");

  $data = json_decode(file_get_contents(__DIR__ . '/posts.json'));

  $items = array_map(function ($item) {
    return [
      'id' => $item->id,
      'title' => strtoupper($item->title),
    ];
  }, $data);

  $response->end(json_encode($items));
});

$server->start();
