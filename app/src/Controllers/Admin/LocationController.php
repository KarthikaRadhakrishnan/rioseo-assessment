<?php

namespace App\Controller\Admin;

use App\Repository\LocationRepository;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/*
** Location Controller 
*/
class LocationController extends BaseController 
{
    
        /**
         * Constructor.
         *
         * @param Container $container
         */
        public function __construct(Container $container)
        {
            parent::__construct($container);
            $this->locationRepo = $container->get(LocationRepository::class);
        }
    
        /**
        * getLocationList action
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
        */
        public function getLocationList(Request $request, Response $response, $args) {
           
                $locations = $this->locationRepo->all();

                $viewData = $this->getViewData([
                            'locations' => $locations,
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);
                
                return $this->render($response, 'Admin/Location/location-list.twig', $viewData); //// Render template - error log: $this->logger
        }
        
        /**
         * addLocationForm
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function addLocationForm(Request $request, Response $response, $args) {
                $viewData = $this->getViewData([
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);
                
                return $this->render($response, 'Admin/Location/location-add-form.twig', $viewData); //// Render template - error log: $this->logger            
        }
        
        /**
         * addLocationAction
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function addLocationAction(Request $request, Response $response, $args) {
            
                $data = (array)$request->getParsedBody();
              
                if(!empty($data) ) {
                        $role = $this->locationRepo->addLocation($data);
                        
                        if($role) {
                            $this->flash->addMessage('success', 'Changes saved');  
                        } else {
                            $this->flash->addMessage('danger', 'Error while saving data');  
                        }
                }
                
               return $response->withRedirect($this->router->pathFor('createLocation'));           
        }          
        
        /**
         * editLocationForm
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function editLocationForm(Request $request, Response $response, $args) {
                            $id = $args['id'];
                            $location = $this->locationRepo->findLocationById($id);
	            $viewData = $this->getViewData([
                            'location' => $location,
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);
                
                return $this->render($response, 'Admin/Location/location-edit-form.twig', $viewData); //// Render template - error log: $this->logger            
        }
        
        /**
         * editLocationAction
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function editLocationAction(Request $request, Response $response, $args) {
                
                $data = (array)$request->getParsedBody();
                $data['id'] = $args['id'];
                
                if(!empty($data) ) {
                        $location = $this->locationRepo->updateLocation($data);
                        
                        if($location) {
                            $this->flash->addMessage('success', 'Changes saved');  
                        } else {
                            $this->flash->addMessage('danger', 'Error while saving data');  
                        }
                }
                
               return $response->withRedirect($this->router->pathFor('editLocation', ['id' => $data['id']]));           
        }            
        
        /**
         * delete Location
         * @param Request $request
         * @param Response $response
         * @param type $args
         */
        public function deleteLocation(Request $request, Response $response, $args) {
           $id = $args['id'];
           $location = $this->locationRepo->delete($id);  
            if($location) {
                $this->flash->addMessage('success', 'Location removed');  
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