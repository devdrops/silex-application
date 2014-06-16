<?php

/* @var $app \Silex\Application */
$app = require_once __DIR__ . '/../app/app.php';

use Symfony\Component\HttpFoundation\Response;

// Basic routing test.
$app->get('/shout/{name}', function($name){
    return new Response('HEY ' . strtoupper($name));
});

$app->run();
