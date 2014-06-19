<?php

require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

/*
 * Home action.
 */
$app->get('/', function(){
    return new Response('Welcome to my new Silex App!');
});

/*
 * Error handler
 */
$app->error(function(\Exception $exc, $code){
    switch ($code){
        case 404:
            $message = 'Oops! Something went terribly wrong...';
            break;
        default:
            $message = 'Oops! Something went wrong, but no worries :)';
    }
    return new Response($message . ': ' . $exc->getMessage());
});

return $app;
