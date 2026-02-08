<?php
# $ php -S localhost:8080 
$data = json_decode(file_get_contents(__DIR__ . '/posts.json'));

$items = array_map(function ($item) {
  return [
    'id' => $item->id,
    'title' => strtoupper($item->title),
  ];
}, $data);

header("Content-Type: application/json");
echo json_encode($items);
