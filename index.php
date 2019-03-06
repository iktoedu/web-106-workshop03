<?php

use ProjectTest\ServiceContainer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/vendor/autoload.php';

$request = Request::createFromGlobals();
$container = new ServiceContainer();

switch ($request->getPathInfo()) {
    case '/test1':
        $controller = $container->getTestController1();
        $response = $controller->testAction($request);
        break;
    case '/test2':
        $controller = $container->getTestController2();
        $response = $controller->testAction($request);
        break;
    case '/test3':
        require_once __DIR__ . '/inc/test3.php';
        break;
    default:
        $response = (new Response())->setStatusCode(404);
}

if (!$response instanceof Response) {
    $response = new Response($container->getViewRenderer()->render($response[0], $response[1]));
}

$response->send();
