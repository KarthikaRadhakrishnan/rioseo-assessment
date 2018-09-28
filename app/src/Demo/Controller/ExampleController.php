<?php

namespace Demo\Controller;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class ExampleController
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }


    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function getDefault(Request $request, Response $response, array $args = null)
    {
        $response->getBody()->write("Get test successful!");
        return $response;
    }



}
