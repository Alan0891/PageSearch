<?php
namespace src\models;
use src\models\Connect;
use \PDO;

class DAO{

    public function sqlSelect($query, $params = []){
      $stmt = Connect::Connection()->prepare($query);
       $this->sqlParams($stmt, $params);
         $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function sqlBind($stmt, $key, $value){
        return $stmt->bindValue($key, $value);
    }
    public function sqlParams($stmt,$params = []){
        foreach($params as $key => $value){
            $this->sqlBind($stmt, $key, $value);
        }
    }
    public function sql($query, $params = []){
        $stmt = Connect::Connection()->prepare($query);
             $this->sqlParams($stmt, $params);
                $stmt->execute();
    }
}