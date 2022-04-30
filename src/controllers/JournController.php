<?php

namespace src\controllers;

use src\models\Blogger;
use src\models\journalist;
use src\core\render;

class JournController extends render{
  
    public function index(){
        $data = [];
        $data = (new Blogger())->publick('tb_jornalista',[]);
        $this->templateViewRender('templates/register', $data);
    }

    public function insertJourn(){
        $input = filter_input_array(INPUT_POST,FILTER_DEFAULT);
        if(isset($input)){
        (new Journalist($input['matriculaJorn'],$input['nomeJorn']))->addJournalist();
        }
    }
}