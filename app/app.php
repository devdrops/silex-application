<?php

/**
 * Application's settings.
 */

use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Response;


$app->register(new SessionServiceProvider());

$app->register(new DoctrineServiceProvider());

$app->register(
    new TwigServiceProvider(),
    [
        'twig.options' => [
            'cache' => isset($app['twig.options.cache']) ? $app['twig.options.cache'] : false,
            'strict_variables' => true,
        ]
    ]
);

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new Response($message, $code);
});

return $app;
