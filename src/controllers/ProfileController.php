<?php

namespace src\controllers;
use src\models\render;
use src\models\profile;

class ProfileController extends render{

    public function index(){
        $data = [];
        $this->templateViewRender('templates/profile');
    }
   public function validando(...$params){
       (new profile())->validar($params);
    }
}