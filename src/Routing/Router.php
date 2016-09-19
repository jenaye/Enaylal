<?php

namespace Enaylal\Routing;

/**
 * Class Router
 * @package Enaylal\Routing
 */
class Router
{

    /**
     * @var array $routes
     */
    private $routes;

    /**
     * @var RouteGroup $group
     */
    private $group;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $this->routes = [];
        $this->group = new RouteGroup();
    }

    public function get($path, $call)
    {
        return $this->addRoute('GET', $path, $call);
    }

    public function post($path, $call)
    {
        return $this->addRoute('POST', $path, $call);
    }

    public function run($url, $method)
    {
        $method = strtoupper($method);
        if (!isset($this->routes[$method])) {
            return false;
        }

        foreach ($this->routes[$method] as $route) {
            if ($route->match($url)) {
                return $route;
            }
        }

        return false;
    }
    // forcé une function ( like int )
    public function group($prefix, callable $call){
        $this->group->add($prefix);
        $call($this);
        $this->group->remove();
    }

    /**
     * @param string $method
     * @param string $path
     * @param callable|string $call 'HomeController@index'
     * @return Route
     */
    private function addRoute($method, $path, $call)
    {
        $path = Route::trimUrl($path);
        $prefix = Route::trimUrl($this->group->getPrefix());
        $path = Route::trimUrl($prefix.'/'.$path);
        $route = new Route($path, $call);
        $this->routes[$method][] = $route;
        return $route;
    }

}