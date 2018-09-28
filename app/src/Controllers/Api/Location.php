<?php

namespace App\Controller\Api;

use App\Repository\LocationRepository;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/*
** Location Api 
*/
class Location
{
    
        /**
         * Constructor.
         *
         * @param Container $container
         */
        public function __construct(Container $container)
        {
            $this->locationRepo = $container->get(LocationRepository::class);
        }
    
        /**
        * getLocations action
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
        */
        public function getLocations(Request $request, Response $response, $args) {
           
                $locations = $this->locationRepo->all();
                
                return $response->withJson($locations);
         }
        
        /**
         * addLocation
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function addLocation(Request $request, Response $response, $args) {
            
                $data = (array)$request->getParsedBody();
              
                if(!empty($data) ) {
                        $location = $this->locationRepo->addLocation($data);
                }
                
               return $response->withJson($location);           
        }          
        
        /**
         * updateLocation
         * @param Request $request
         * @param Response $response
         * @param type $args
         * @return type
         */
        public function updateLocation(Request $request, Response $response, $args) {
                
                $data = (array)$request->getParsedBody();
                $data['id'] = $args['id'];
                
                if(!empty($data) ) {
                        $location = $this->locationRepo->updateLocation($data);
                }
                
               return $response->withJson($location);              
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
            
            return $response->withJson($location);    
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