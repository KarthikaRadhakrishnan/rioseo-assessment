<?php

namespace App\Controller\Api;

use App\Repository\EmployeeRepository;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;
use Odan\Slim\Session\Session;
use App\Service\User\Auth;
use Exception;

/*
** Employee 
*/
class Employee
{
 
    /**
     * @var Auth
     */
    protected $auth;
    
    /**
    * @var Session
    */
    protected $session;
    
        /**
         * Constructor.
         *
         * @param Container $container
         */
        public function __construct(Container $container)
        {
            $this->session = $container->get(Session::class);
            $this->auth = $container->get(Auth::class);
            $this->employeeRepo = $container->get(EmployeeRepository::class);

        }
    
        /**
        * getEmployees
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
        */
        public function getEmployees(Request $request, Response $response, $args)
        {
                $employees = $this->employeeRepo->all();
                
                return $response->withJson($employees);
        }
        
         /**
        * getEmployees
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
        */
        public function getEmployeeById(Request $request, Response $response, $args)
        {
                $data = (array)$request->getParsedBody();
                $id = $args['id'];
                $employee = $this->employeeRepo->findUserById($id);

                return $response->withJson($employee);
        }  
        
        /**
         * addEmployee
         * create employee records
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
         */
        public function addEmployee(Request $request, Response $response, $args)
        {        
                $data = $request->getParsedBody();
                $user = $this->session->get('user');
                $data['user_id'] = $user['id'];
                $data['location_id'] = explode(",", $data['location_id']);
                
                if(!empty($data) ) {
                $user = $this->employeeRepo->findUserByEmail($data['email']); // check user exist with same email
                if(empty($user) ){
                    $employee = $this->employeeRepo->addEmployee($data);
                    
                     //assign location to employees
                    if(!empty($data['location_id']) && (count($data['location_id']) > 0) ) {
                        $data['id'] = $employee->id;
                        $employeeLocation = $this->employeeRepo->addEmployeeLocation($data);
                        }
                    } 
                }
                
                return $response->withJson($employee);
        }
        
        /**
         * updateEmployee
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function updateEmployee(Request $request, Response $response, $args) {
                
                $data = (array)$request->getParsedBody();
                $data['id'] = $args['id'];
                $user = $this->session->get('user');
                $data['user_id'] = $user['id'];
                $data['location_id'] = explode(",", $data['location_id']);
                
                if(!empty($data) ) {
                        $employee = $this->employeeRepo->updateEmployee($data);
                        
                        //assign location to employees
                        if(!empty($data['location_id']) && (count($data['location_id']) > 0) ) {
                            $data['id'] = $employee->id;
                            $employeeLocation = $this->employeeRepo->addOrEditEmployeeLocation($data);
                        } else {
                            $employeeLocation = $this->employeeRepo->detachAllEmployeeLocation($data);
                        }
                }
                
               return $response->withJson($employee);         
        } 
        
        /**
         * delete Employee
         * @param Request $request
         * @param Response $response
         * @param type $args
         */
        public function deleteEmployee(Request $request, Response $response, $args) {
           $id = $args['id'];
           $employee = $this->employeeRepo->delete($id);  
           
            return $response->withJson($employee);  
        }

        /**
        * searchEmployeeWithLocation
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
        */
        public function getEmployeeWithLocation(Request $request, Response $response, $args) {
                $data = (array)$request->getParsedBody();
                $employees = $this->employeeRepo->searchEmployeeWithLocation($data, $args);
                
                return $response->withJson($employees);            
        }
}