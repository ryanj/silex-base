<?php
require 'vendor/autoload.php';
$app = new \Silex\Application();

$app->get('/', function () use ($app) {
  return $app->sendFile('static/index.html');
});

$app->get('/{filename}', function ($filename) use ($app){
  if (!file_exists('static/' . $filename)) {
    $app->abort(404);
  }
  return $app->sendFile('static/' . $filename, 200);
});

$app->get('/hello/{name}', function ($name) use ($app) {
  return new Response( "Hello, {$app->escape($name)}!");
});

$app->run();
?>
