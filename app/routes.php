<?php

/**
 * Application's routes.
 */

$app->get('/', 'SilexSkel\Controller\IndexController::indexAction')->bind('home');
