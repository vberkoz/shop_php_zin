<?php

/**
 * Class Router
 */
class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Returns request string
     *
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }

        return '';
    }

    /**
     * Calls action in controller
     */
    public function run()
    {
        // Get request string
        $uri = $this->getURI();

        // Check request string availability in routes.php
        foreach ($this->routes as $uriPattern => $path) {

            // Compare $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Get internal route from an outer according to a rule
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Determine which controller and method are processing the request
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                // Include controller class file
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once $controllerFile;
                }

                // Create object, call method
                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null) {
                    break;
                }

            }

        }
    }

}