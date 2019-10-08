<?php
namespace App\Core;


class Route
{

    private $request;
    private $methods = ['GET', 'POST', 'PUT', 'UPDATE', 'DELETE'];

    public function __construct()
    {
        $this->request = new Request();
    }

    public function __call($name, $arguments)
    {
        list($route, $method) = $arguments;
        if (!in_array(strtoupper($name), $this->methods)) {
            $this->invalidMethodHandler();
        }
        $this->{strtolower($name)}[$this->formatRoute($route)] = $method;
    }

    private function formatRoute($route)
    {
        $arr = explode('/', $route);


        $result = rtrim($route, '/');
        if ($result === '')
        {
            return '/';
        }
        return $result;
    }

    private function invalidMethodHandler()
    {
        header("{$this->request->serverProtocol} 405 Method Not Allowed");
    }
    private function defaultRequestHandler()
    {
        header("{$this->request->serverProtocol} 404 Not Found");
    }

    private function formatArr($method)
    {
        $arr = explode('@', $method);
        $nameSpace = "\\App\\Controllers\\".$arr[0];
        require_once 'app/Controllers/'.$arr[0].'.php';
        $controller = new $nameSpace;
        echo call_user_func_array([$controller, $arr[1]], array($this->request));
    }

    public function callAction()
    {
        $methodDictionary = $this->{strtolower($this->request->requestMethod)};
        $formatedRoute = $this->formatRoute($this->request->requestUri);
        $method = $methodDictionary[$formatedRoute];
        if(is_null($method))
        {
            $this->defaultRequestHandler();
            return;
        }
        $this->formatArr($method);
    }

    public function __destruct()
    {
        $this->callAction();
    }

}