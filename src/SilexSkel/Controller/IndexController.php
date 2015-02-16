<?php

namespace SilexSkel\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Davi Marcondes Moreira (@devdrops) <davi.marcondes.moreira@gmail.com>
 */
class IndexController
{
    public function indexAction(Request $request, Application $app)
    {
        return new Response("DONE");
    }
}
