<?php

namespace App\Controller;

use App\Repository\EmployeeRepository;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * LoginController
 */
class LoginController extends BaseController
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
     * User Login Form
     *
     * @param Request $request
     * @param Response $response
     *
     * @return ResponseInterface
     */
   public function index(Request $request, Response $response, $args) {
        $viewData = $this->getViewData();
        return $this->render($response, 'Login/login.twig', $viewData);
   }
 
    /**
     * User login form action
     *
     * @param Request $request
     * @param Response $response
     *
     * @return ResponseInterface
     */   
   public function login(Request $request, Response $response, $args) {
       
        $data = (array)$request->getParsedBody();
        $email = $data['email'];
        $password = $data['password'];

        $user = $this->auth->authenticate($email, $password);
       
        if (!empty($user)) {
        $url = $this->router->pathFor('home');
        } else {
        $url = $this->router->pathFor('login');
        }

        return $response->withRedirect($url);
   }

    /**
     * User logout
     *
     * @param Request $request
     * @param Response $response
     *
     * @return ResponseInterface
     */
   public function logout(Request $request, Response $response) {
        
        $this->auth->clearIdentity();

        return $response->withRedirect($this->router->pathFor('login'));
   }
   
     /**
     * User resetPassword
     *
     * @param Request $request
     * @param Response $response
     *
     * @return ResponseInterface
     */
   public function resetPassword(Request $request, Response $response) {
        
        $viewData = $this->getViewData(['newPassword' => '']);
        return $this->render($response, 'Login/forgot_password.twig', $viewData);
   }  
   
      /**
     * User changePassword
     *
     * @param Request $request
     * @param Response $response
     *
     * @return ResponseInterface
     */
   public function changePassword(Request $request, Response $response) {
        $message = "";  
        $data = (array)$request->getParsedBody();
        $referer = $request->getHeader('HTTP_REFERER');
        $previous_uri = substr(strrchr($referer[0], "/"), 1);
        
        if(!empty($data) && ($previous_uri == 'resetPassword') ) {
            $email = $data['email'];              
            $user = $this->employeeRepo->findUserByEmail($email);
            if(!empty($user) ){
                $newPassword = $this->employeeRepo->changePassword($email, $user);
                $message = "Your new password is " . $newPassword;
            } else {
                $message = "Account doesn't exist";
            }
        }

        $viewData = $this->getViewData(['newPassword' => $message]);
        return $this->render($response, 'Login/forgot_password.twig', $viewData);
   }     
   
}