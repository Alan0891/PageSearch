<?php

namespace src\controllers;

use src\models\Blogger;
use src\models\journalist;
use src\core\render;

class JournController extends render{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index(){
        $data = [];
        $data = (new Blogger())->selectNotice('tb_jornalista',[]);
        $this->templateViewRender('templates/register', $data);
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function addJourn(){
        $input = filter_input_array(INPUT_POST,FILTER_DEFAULT);
        if(isset($input)){
        (new Journalist($input['matriculaJorn'],$input['nomeJorn']))->addJournalist();
        }
    }
}