<?php

namespace src\core;

class render{
    /**
     * Undocumented function
     *
     * @param [type] $view
     * @param array $data
     * @return void
     */
    public function templateView($view, $data =[]){
        extract($data);
          include "./public/views/".$view.".php";
    }
    /**
     * Undocumented function
     *
     * @param [type] $view
     * @param array $data
     * @return void
     */
    public function templateViewRender($view, $data = []){
        extract($data);
          include "./public/views/tmp.php";
    }
    /**
     * Undocumented function
     *
     * @param [type] $view
     * @param array $data
     * @return void
     */
    public function rendering($view, $data = []){
        extract($data);
          include "./public/views/".$view.".php";
    }
}