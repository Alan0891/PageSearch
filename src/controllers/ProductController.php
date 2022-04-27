<?php

namespace src\controllers;

use src\models\Blogger;
use src\models\Journalist;
use src\models\render;

class ProductController extends render{
  
    public function index(){
        $data = [];
        $data = (new Blogger())->publick('tb_jornalista',[]);
        $this->templateViewRender('templates/product', $data);
    }

    public function insertJourn(){
        $input = filter_input_array(INPUT_POST,FILTER_DEFAULT);
        (new Journalist($input['matriculaJorn'],$input['nomeJorn']))->insertJournalist();
    }
}
