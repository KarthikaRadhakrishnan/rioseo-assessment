<?php

namespace App\Controller\Admin;

use App\Repository\EmployeeRepository;
use App\Repository\RoleRepository;
use App\Repository\LocationRepository;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/*
** Employee Controller 
*/
class EmployeeController extends BaseController 
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
            $this->roleRepo = $container->get(RoleRepository::class);
            $this->locationRepo = $container->get(LocationRepository::class);
        }
    
        /**
        * getEmployeesList action
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
        */
        public function getEmployeesList(Request $request, Response $response, $args) {
           
                $employees = $this->employeeRepo->all();

                $viewData = $this->getViewData([
                            'employees' => $employees,
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);
                
                return $this->render($response, 'Admin/Employee/employee-list.twig', $viewData); //// Render template - error log: $this->logger
        }
        
        /**
         * addEmployeeForm
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function addEmployeeForm(Request $request, Response $response, $args) {
            
                $rolesList =  $this->roleRepo->all();
                $locationList = $this->locationRepo->all();
                
                $viewData = $this->getViewData([
                            'roles' => $rolesList,
                            'locations' => $locationList,
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);
                
                return $this->render($response, 'Admin/Employee/employee-add-form.twig', $viewData); //// Render template - error log: $this->logger            
        }
        
        /**
         * addEmployeeAction
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function addEmployeeAction(Request $request, Response $response, $args) {
            
                $data = (array)$request->getParsedBody();
                $user = $this->session->get('user');
                $data['user_id'] = $user['id'];
                
                if(!empty($data) ) {
                        $employee = $this->employeeRepo->addEmployee($data);
                        
                        //assign location to employees
                        if(!empty($data['location_id']) && (count($data['location_id']) > 0) ) {
                            $data['id'] = $employee->id;
                            $employeeLocation = $this->employeeRepo->addEmployeeLocation($data);
                        }
                        
                        if($employee) {
                            $this->flash->addMessage('success', 'Changes saved');  
                        } else {
                            $this->flash->addMessage('danger', 'Error while saving data');  
                        }
                }
                
               return $response->withRedirect($this->router->pathFor('createEmployee'));           
        }   
        
        /**
         * editEmployeeForm
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function editEmployeeForm(Request $request, Response $response, $args) {
                $id = $args['id'];
                $employee = $this->employeeRepo->findUserById($id);
                $locationList = $this->locationRepo->all();

                $locationArray = [];
                if(count($employee->employee_locations) > 0) {
                    foreach($employee->employee_locations as $locationKey => $locationVal) {
                        $locationArray[] = $locationVal['id'];
                    }
                }
                
                $locationIds = implode(',', $locationArray);
                
                $rolesList =  $this->roleRepo->all();
	$viewData = $this->getViewData([
                            'employee' => $employee,
                            'roles' => $rolesList,
                            'locations' => $locationList,
                            'assignedLocations' => $locationIds,
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);
                
                return $this->render($response, 'Admin/Employee/employee-edit-form.twig', $viewData); //// Render template - error log: $this->logger            
        }
        
        /**
         * editEmployeeAction
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function editEmployeeAction(Request $request, Response $response, $args) {
                
                $data = (array)$request->getParsedBody();
                $data['id'] = $args['id'];
                $user = $this->session->get('user');
                $data['user_id'] = $user['id'];
                
                if(!empty($data) ) {
                        $employee = $this->employeeRepo->updateEmployee($data);
                        
                        //assign location to employees
                        if(!empty($data['location_id']) && (count($data['location_id']) > 0) ) {
                            $data['id'] = $employee->id;
                            $employeeLocation = $this->employeeRepo->addOrEditEmployeeLocation($data);
                        } else {
                            $employeeLocation = $this->employeeRepo->detachAllEmployeeLocation($data);
                        }
                        
                        if($employee) {
                            $this->flash->addMessage('success', 'Changes saved');  
                        } else {
                            $this->flash->addMessage('danger', 'Error while saving data');  
                        }
                }
                
               return $response->withRedirect($this->router->pathFor('editEmployee', ['id' => $data['id']]));           
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
           
            if($employee) {
                $this->flash->addMessage('success', 'Employee removed');  
            } else {
                $this->flash->addMessage('danger', 'Error while removing data');  
            }  
        }
        
        /**
        * Returns default text.
        *
        * @return array Array with translated text
        */
        protected function getText(): array {
            $text = parent::getText();
            $text['Current user'] = "Current user";
            $text['User-ID'] = "User-ID";
            $text['Username'] = "Username";
            $text['Its'] = "It's";
            
            return $text;
        }

}