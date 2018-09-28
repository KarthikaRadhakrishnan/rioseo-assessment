<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * HomeLoadController
 */
class HomeLoadController
{

    /**
     * Constructor.
     *
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        parent::__construct($container);
        //$this->userRepository = $container->get(UserRepository::class);
    }

    /**
     * Action (Json).
     *
     * @param Request $request
     * @param Response $response
     *
     * @return ResponseInterface Json response
     */
    public function __invoke(Request $request, Response $response): ResponseInterface
    {
        //$userId = $this->auth->getId();
        //$user = $this->userRepository->getById($userId);
echo "dsfds";
exit;
        $result = [
            'message' => __('Loaded successfully!'),
            'now' => now(),
            'user' => [
                'id' => 1,//$user->id,
                'username' => 'test'//$user->username,
            ],
        ];

        return $response->withJson($result);
    }
}