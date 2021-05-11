<?php
/**
 * Show Errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Controller\HomePage;
use Controller\LoginPage;
use Controller\UserLogin;
use Controller\SignupPage;
use Controller\DashboardPage;
use Controller\NotFoundPage;

class Base {

    const PUBLIC_PATH = 'public/static';

    public function renderRoute($controller)
    {
        $controller->render();
    }
    public function router()
    {
        $request = $_SERVER['REQUEST_URI']; //to get current url
        $basePath = explode('/index.php', $_SERVER['SCRIPT_NAME'])[0]|'';
        switch ($request) {
            case $basePath . '/' : # to check route is /
                $this->renderRoute(new HomePage()); # Class HomePage with Namespace Controller 
                break;
        
            case $basePath . '/login' : 
                $this->renderRoute(new LoginPage());
                break; 
	    case $basePath . '/user-login' : 
                $this->renderRoute(new UserLogin());
                break; 
            case $basePath . '/signup' : 
                $this->renderRoute(new SignupPage());
                break; 
            case $basePath . '/dashboard' : //to check route is dashboard
                $this->renderRoute(new DashboardPage());
                break; 
            default:
                if(strpos($request, self::PUBLIC_PATH) !== false){ #public data rendering
                    return require_once( 'view/web/' . explode(self::PUBLIC_PATH,  $request)[1]);
                } else{
                    $this->renderRoute(new NotFoundPage()); 
                }
                break;
        }
    }
    public function autoloader()
    {
        /**
         * Autoload the Classes with Namespace
         */
        spl_autoload_register(function ($className) {

            # DIRECTORY SEPARATORS varies in various platforms
            $ds = DIRECTORY_SEPARATOR;

            # Current Working Directory
            $dir = __DIR__;

            # replace namespace separator with directory separator (prolly not required)
            $className = str_replace('\\', $ds, $className);

            # get full name of file containing the required class
            $file = "{$dir}{$ds}{$className}.php";

            # get file if it is readable
            if (is_readable($file)) {
                require_once $file;
            }
        });
    }
    public function getUrl(){
        return sprintf(
          "%s://%s%s",
          isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
          $_SERVER['SERVER_NAME'],
          explode('/index.php',$_SERVER['SCRIPT_NAME'])[0]
        );
      }
    public function init()
    {
        $baseUrl = $this->getUrl();
        $this->autoloader();
        $this->router();      
        echo "<script>window.baseUrl = '$baseUrl';</script>";
    }  
}
function getUrl(){
        return sprintf(
          "%s://%s%s",
          isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
          $_SERVER['SERVER_NAME'],
          explode('/index.php',$_SERVER['SCRIPT_NAME'])[0]
        );
}
$base = new Base();
$base->init();
