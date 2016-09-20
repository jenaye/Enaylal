<?php


namespace Enaylal\Routing;


use InvalidArgumentException;
use ReflectionClass;

class Route
{

    /**
     * @var string $url
     */
    private $url;

    /**
     * @var callable|string $call
     */
    private $call;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var array $params
     */
    private $params;

    /**
     * @var array $matches
     */
    private $matches;

    /**
     * Route constructor.
     * @param $url
     * @param $call
     */
    public function __construct($url, $call)

    {
        $this->setUrl($url);
        $this->call = $call;

        if (is_string($call)) { // Admin\NewsController@index => Admin:NewsController@index
            $name = str_replace('\\', ':', $call);
            $this->setName($name);
        }
    }

    /**
     * @return callable|string
     */
    public function getCall()
    {
        return $this->call;
    }

    /**
     * @param callable|string $call
     */
    public function setCall($call)
    {
        $this->call = $call;
    }

    public function setUrl($url)
    {
        $this->url = self::trimUrl($url);
        return $this;
    }
    public function getUrl()
    {
        return $this->url;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function match($url)
    {
        $url = self::trimUrl($url);

        $path = preg_replace_callback('#{([\w]+)(?:\:([^}/]+))?}#', [$this, 'paramMatch'], $this->url);
        $regex = "#^($path)$#i";

        if (!preg_match($regex, $url, $matches)) {
            return false;
        }

        array_shift($matches);
        foreach ($matches as $name => $value) {
            if (is_int($name)) {
                unset($matches[$name]);
            } else {
                $_GET[$name] = $value;
            }
        }

        $this->matches = $matches;

        return true;
    }

    /**
     * Lance le controller
     */
    public function run()
    {
        $result = null;
        if (is_string($this->call)) {
            $calls = explode('@', $this->call, 2);

            if (count($calls) != 2) {
                throw new InvalidArgumentException('Call string use not a valid format');
            }

            $controllerName = $calls[0];
            $controllerName = str_replace(':', '\\', $controllerName);
            $controllerName = "App\\Controllers\\{$controllerName}";

            $refClass = new ReflectionClass($controllerName);
            if ($refClass->isInstantiable()) {
                $instance = $refClass->newInstance();

                $refMethod = $refClass->getMethod($calls[1]);
                if ($refMethod) {
                    $parameters = $refMethod->getParameters();
                    $callParameters = $this->getCallParameters($parameters);

                    if (empty($callParameters)) {
                        $result = $refMethod->invoke($instance);
                    } else {
                        $result = $refMethod->invokeArgs($instance, $callParameters);
                    }
                }
            }
        }

        return $result;
    }

    public function with($name, $regex)
    {
        $this->params[$name] = str_replace('(', '(?:', $regex);
        return $this;
    }

    private function paramMatch($matches)
    {
        if (isset($matches[2])) {
            $this->with($matches[1], $matches[2]);
        }
        if (!isset($this->params[$matches[1]])) {
            $this->params[$matches[1]] = '[^/]+';
        }

        return '(?P<'.$matches[1].'>'.$this->params[$matches[1]].')';
    }

    private function getCallParameters($parameters)
    {
        $result = [];

        foreach ($parameters as $parameter) {
            if (isset($this->matches[$parameter->getName()])) {
                $result[] = $this->matches[$parameter->getName()];
            } elseif ($parameter->isDefaultValueAvailable()) {
                $result[] = $parameter->getDefaultValue();
            } elseif (!$parameter->isOptional()) {
                $result[] = null;
            }
        }

        return $result;
    }

    public static function trimUrl($url)
    {
        $url = trim($url, '/');
        if (empty($url)) {
            $url = '/';
        }
        return $url;
    }

}