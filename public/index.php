<?php

use App\Kernel;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

#require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
require dirname(__DIR__).'/vendor/autoload.php';
// Comment the following line when deploying to production
// (see https://symfony.com/doc/current/deployment.html#using-the-dev-environment)
Debug::enable();

return function (array $context) {
   return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
   $request = Request::createFromGlobals();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);
};

#$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);

