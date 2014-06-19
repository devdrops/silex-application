<?php

require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app->get('/', function(){
    return new Response('Welcome to my new Silex App!');
});

$app->error(function(\Exception $exc, $code){
    return new Response('Oops! Something went terribly wrong...: ' . $exc->getMessage());
});

return $app;
