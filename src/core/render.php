<?php

namespace src\core;

class render{

    public function templateView($view, $data =[]){
        extract($data);
          include "../public/views/".$view.".php";
    }

    public function templateViewRender($view, $data = []){
        extract($data);
          include "../public/views/tmp.php";
    }
    public function rendering($view, $data = []){
        extract($data);
          include "../public/views/".$view.".php";
    }
}