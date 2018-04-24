<?php 

namespace Config;
use Controllers;

class Router {
    private $routes, $actions;
   
    public function __construct(){
        $this->routes = array();
        $this->actions = array();
    }
    
    public function createNewRoute($url, $action){
        $this->routes[] = trim($url, '/');
        $this->actions[] = $action;
    }
    
    public function startRouter(){
        $url = rtrim($_GET['url'], '/');
        $key = array_search($url, $this->routes);
        
        if($key === false){
            $obj = new Controllers\NotFoundController();
            $obj->index();
        }else {
            $class = 'Controllers\\' . $this->actions[$key];
            $obj   = new $class;
            $obj->index();
        }
    }
}
?>