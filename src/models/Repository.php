<?php 

namespace src\models;
use src\models\DAO;

class Repository{

    public function insert($table , $params = []){ 
        //var_dump($table,$params);exit;
        return (New DAO())->sql("INSERT INTO ".$table."(".str_replace(':','',implode(',',array_keys($params))).") VALUES (".implode(',',array_keys($params)).")",$params);
    }
    public function select($table, $params= null){
        if($params != null){    
        return (new DAO())->sqlSelect("SELECT * FROM ".$table." WHERE ".str_replace(':','',implode('',array_keys($params)))." = ".implode(',', array_keys($params))." ",$params);
        }else{
            return (new DAO())->sqlSelect("SELECT * FROM ".$table,[]);
        }
    }
    public function selectOne($table, $title){
       return (new DAO())->sqlSelect("SELECT * FROM ".$table." WHERE title LIKE '".trim($title)."%' OR title LIKE '%".trim($title)."%'");
    }
    public function update(){}
    public function delete($table,$params){
        return (new DAO())->sql("DELETE FROM ".$table." WHERE ".str_replace(':','',implode('',array_keys($params)))." = ".implode(',', array_keys($params))." ",$params);
    }
}
