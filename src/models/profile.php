<?php 

namespace src\models;

class profile{

    public function validar($params){
     $valid ="";   
    if(is_null($params || empty($params))){ 
     foreach($params as $key => $value){
         if(is_null($value) || $value == ""){
              $valid =  false;
         }
       }
    }else{
         $valid = true;
    }
       return $valid;
    }
}