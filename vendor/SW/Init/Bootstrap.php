<?php


namespace SW\Init;

//Classes that can only be inherited, can't be instantiated
abstract class Bootstrap
{
    private $routes = array(),
            $route = array();

    abstract protected function Router();

    public function __construct()
    {
        $this->Router();
        $this->getRoute($this->getUrl(), $this->getMethod());
        $this->run();
    }

    /**
     * @return mixed
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * @param mixed $routes
     */
    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * @return string
     */
    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @param string $url
     * @param string $method
     * @return array
     */
    protected function getRoute($url, $method) {
        //Create a loop with every Route
        foreach ($this->getRoutes() as $key => $value) {
            //Identify the Route and return its array
            if($value['route'] === $url && $value['method'] === $method)
                return $this->route = $value;
        }
        return [];
    }

    protected function run()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        if($this->route != [])
        {
            $class = "App\\Controllers\\" . $this->route['controller'];
            $action = $this->route['action'];
            $controller = new $class;
            $controller->$action();
        } else {
            echo "Page not Found";
        }
    }
}