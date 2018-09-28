<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/*
** Home Controller 
*/
class HomeController extends BaseController 
{
        /**
        * index action
        * @param Request $request
        * @param Response $response
        * @return ResponseInterface
        */
        public function index(Request $request, Response $response, $args) {
                $viewData = $this->getViewData([
                            //'text' => $text,
                            'url' => $request->getUri(),
                            'secure' => $request->getAttribute('secure') ? 'Yes' : 'No',
                ]);
                
                return $this->render($response, 'Home/home-index.twig', $viewData); //// Render template - error log: $this->logger
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