<?php

namespace App\Controller\Admin;

use App\Repository\EmployeeRepository;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/*
** Admin Controller 
*/
class AdminController extends BaseController 
{
        /**
         * Constructor.
         *
         * @param Container $container
         */
        public function __construct(Container $container)
        {
            parent::__construct($container);
            
            $this->employeeRepo = $container->get(EmployeeRepository::class);
        }
        /**
        * index action
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
        */
        public function index(Request $request, Response $response, $args) {
                $employees = $this->employeeRepo->all();

                $viewData = $this->getViewData([
                            'employees' => $employees,
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);
                
                return $this->render($response, 'Admin/Employee/employee-list.twig', $viewData); //// Render template - error log: $this->logger
        }
        
        
}