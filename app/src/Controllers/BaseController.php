<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Slim\Container;
use Slim\Router;
use Slim\Views\Twig;
use Odan\Slim\Session\Session;
use App\Service\User\Auth;


/*
** Base Controller 
*/
abstract class BaseController
{
	/**
     * @var Router
     */
    protected $router;

    /**
     * @var LoggerInterface
     */
    protected $logger;
	
    /**
    * @var Twig
    */
    protected $view;
    
    /**
     * @var Auth
     */
    protected $auth;
    
    /**
    * @var Session
    */
    protected $session;
    
    const MANAGER = 4;
    const DIRECTOR = 3;
    const VICE_PRESIDENT = 2;
    const PRESIDENT = 1;
	
    /**
     * Constructor.
     *
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->logger = $container->get(LoggerInterface::class);
        $this->router = $container->get('router');
        $this->view = $container->get(Twig::class);
        $this->session = $container->get(Session::class);
        $this->auth = $container->get(Auth::class);
    }
	
   /**
     * Get view data.
     *
     * @param array $viewData
     *
     * @return array View data
     */
    protected function getViewData(array $viewData = []): array
    {
        $result = [
            'baseUrl' => $this->router->pathFor('home'),
            'text' => $this->getText(),
            'loggedInUser' => $this->session->get('user'),
            'isAuthorizedRole' => $this->getRoles()
        ];
        if (!empty($viewData)) {
            $result = array_replace_recursive($result, $viewData);
        }
        return $result;
    }

   /**
     * Returns default text.
     *
     * @return array Array with translated text
     */
    protected function getText(): array
    {
        $text = [];
        $text['Ok'] = "Ok";
        $text['Cancel'] = "Cancel";
        $text['Yes'] = "Yes";
        $text['No'] = "No";
        return $text;
    }
    
    /**
     * Render template.
     *
     * @param ResponseInterface $response
     * @param string $name Template file
     * @param array $viewData View data
     *
     * @return ResponseInterface
     */
    protected function render(ResponseInterface $response, $name, array $viewData = []): ResponseInterface
    {
        return $this->view->render($response, $name, $viewData);
    }
    
    /**
     * getRoles
     * 
     * @return roles []
     */
    public function getRoles()
    {
       $authorizedRoles = [
           'president' => static::PRESIDENT,
           'vice_president' => static::VICE_PRESIDENT,
           'director'  => static::DIRECTOR,
           'manager' => static::MANAGER
       ];
       
       return $authorizedRoles;
    }
}