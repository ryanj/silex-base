<?php
//Allow PHP's built-in server to serve our static content in local dev:
if (php_sapi_name() === 'cli-server' && is_file(__DIR__.'/static'.preg_replace('#(\?.*)$#','', $_SERVER['REQUEST_URI']))
   ) {
  return false;
}

require 'vendor/autoload.php';
use Symfony\Component\HttpFoundation\Response;
$app = new \Silex\Application();

$app->get('/', function () use ($app) {
  return $app->sendFile('./static/index.html');
});

$app->get('/hello/{name}', function ($name) use ($app) {
  //return $app->json( array('Hello'=> $app->escape($name)));
  return new Response( "Hello, {$app->escape($name)}!");
});

// the .htaccess file should handle our static content in Production.
// PHP-5.4's local server can handle static content as well (see README) 
// This alternate method for serving static files should not be needed: 
//$app->get('/{folder}/{filename}', function ($folder, $filename) use ($app){
//  $filepath = __DIR__.'/static/'.$folder.'/'.$filename;
//  if (!file_exists($filepath)) {
//    $app->abort(404);
//  }
//  if($folder == 'css'){
//    return $app->sendFile($filepath, 200, array('Content-Type' => 'text/css'));
//  }else{
//    return $app->sendFile($filepath, 200);
//  }
//});

$app->run();
?>
