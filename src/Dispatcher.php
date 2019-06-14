<?php
namespace BT;

use BT\Request;
use BT\Router;

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        
        Router::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $name = "BT\Controllers\\".$name;
        $controller = new $name();
        return $controller;
    }

}