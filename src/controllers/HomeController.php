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
    public function add(){
        $input = filter_input_array(INPUT_POST,FILTER_DEFAULT);
        (new Blogger())->addNotice(new Journalist($input['nome'],$input['escritor']),['title' => $input['titulo'] ,'body' => $input['artigo']]);   
    }
    public function list($table,$params = null){
        (new Blogger())->selectNotice($table,[':id'=>$params]);
    }
    public function listPesq($table,$field){
        (new Blogger())->selectNoticePesq($table,$field);
    }
    public function update($table,$params){
        (new Blogger())->updateNotice($table,[':id'=>$params]);
    }
    public function delete($table,$params){
        (new Blogger())->deleteNotice($table,[':id'=>$params]);
    }
}