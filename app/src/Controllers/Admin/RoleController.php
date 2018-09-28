<?php

namespace App\Controller\Admin;

use App\Repository\RoleRepository;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/*
** Role Controller 
*/
class RoleController extends BaseController 
{
    
        /**
         * Constructor.
         *
         * @param Container $container
         */
        public function __construct(Container $container)
        {
            parent::__construct($container);
            $this->roleRepo = $container->get(RoleRepository::class);
        }
    
        /**
        * getRolesList action
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
        */
        public function getRolesList(Request $request, Response $response, $args) {
                $roles = $this->roleRepo->all();

                $viewData = $this->getViewData([
                            'roles' => $roles,
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);
                
                return $this->render($response, 'Admin/Role/role-list.twig', $viewData); //// Render template - error log: $this->logger
        }
        
        /**
         * addRoleForm
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function addRoleForm(Request $request, Response $response, $args) {

                $viewData = $this->getViewData([
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No'
                ]);

                return $this->render($response, 'Admin/Role/role-add-form.twig', $viewData); //// Render template - error log: $this->logger            
        }
        
        /**
         * addRoleAction
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function addRoleAction(Request $request, Response $response, $args) {
            
                $data = (array)$request->getParsedBody();
              
                if(!empty($data) ) {
                        $role = $this->roleRepo->addRole($data);
                        
                        if($role) {
                            $this->flash->addMessage('success', 'Changes saved');  
                        } else {
                            $this->flash->addMessage('danger', 'Error while saving data');  
                        }
                }
                
               return $response->withRedirect($this->router->pathFor('createRole'));           
        }        
        
        /**
         * editRoleForm
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function editRoleForm(Request $request, Response $response, $args) {
                $id = $args['id'];
                $role = $this->roleRepo->findRoleById($id);
                $viewData = $this->getViewData([
                    'role' => $role,
                    'url' => $request->getUri(),
                    'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);

                return $this->render($response, 'Admin/Role/role-edit-form.twig', $viewData); //// Render template - error log: $this->logger            
        }
        
        /**
         * editRoleAction
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function editRoleAction(Request $request, Response $response, $args) {
                
                $data = (array)$request->getParsedBody();
                $data['id'] = $args['id'];
                
                if(!empty($data) ) {
                        $role = $this->roleRepo->updateRole($data);
                        
                        if($role) {
                            $this->flash->addMessage('success', 'Changes saved');  
                        } else {
                            $this->flash->addMessage('danger', 'Error while saving data');  
                        }
                }
                
               return $response->withRedirect($this->router->pathFor('createRole', ['id' => $data['id']]));           
        }               
        
        
        /**
         * delete Role
         * @param Request $request
         * @param Response $response
         * @param type $args
         */
        public function deleteRole(Request $request, Response $response, $args) {
           $id = $args['id'];
           $role = $this->roleRepo->delete($id);  
            if($role) {
                $this->flash->addMessage('success', 'Role removed');  
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