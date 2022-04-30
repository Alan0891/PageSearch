<?php
namespace src\core;

class core{
     
    public $controller;
    public $method;
    public $params = [];
    /**
     * Undocumented function
     *
     * @return void
     */
    public function Run(){
        $uri = explode('index.php', $_SERVER['PHP_SELF']);
        $uri = end($uri);
        if(isset($uri)){
            $uri = explode("/", $uri);
            array_shift($uri);
            $this->controller = "src\\controllers\\".ucfirst($uri[0])."Controller";
            array_shift($uri);
            if(isset($uri[0])){
                $this->method = $uri[0];
                array_shift($uri);
            }else{
                $this->method = "index";
            }
        if(count($uri) > 0){
            $this->params = $uri;
        }    
    }else{
           $this->controller = "src\\controllers\\HomeController";
           $this->method = "index";
    }
         $c = new $this->controller();

         return call_user_func_array([$c,$this->method],$this->params);
    }
}