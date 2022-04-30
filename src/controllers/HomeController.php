<?php

namespace src\controllers;
use src\models\Journalist;
use src\models\Blogger;
use src\core\render;

class HomeController extends render{

    public function index(){
       $data = [];
       $this->templateViewRender('templates/home', $data); 
    }
    public function publick(){
        $input = filter_input_array(INPUT_POST,FILTER_DEFAULT);
        (new Blogger())->reading(new Journalist($input['nome'],$input['escritor']),['title' => $input['titulo'] ,'body' => $input['artigo']]);   
    }
    public function list($table,$params = null){
        (new Blogger())->publick($table,[':id'=>$params]);
    }
    public function listPesq($table,$field){
        (new Blogger())->publickPesq($table,$field);
    }
    public function delet($table,$params){
        (new Blogger())->deleteNotice($table,[':id'=>$params]);
    }
}