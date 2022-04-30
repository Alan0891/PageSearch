<?php
namespace src\models;
use src\models\Connect;
use \PDO;

class DAO{
    /**
     * Undocumented function
     *
     * @param [type] $query
     * @param array $params
     * @return void
     */
    public function sqlSelect($query, $params = []){
        return $this->sql($query,$params)->fetchAll(PDO::FETCH_ASSOC);
    }
    /**
     * Undocumented function
     *
     * @param [type] $stmt
     * @param [type] $key
     * @param [type] $value
     * @return void
     */
    public function sqlBind($stmt, $key, $value){
        return $stmt->bindValue($key, $value);
    }
    /**
     * Undocumented function
     *
     * @param [type] $stmt
     * @param array $params
     * @return void
     */
    public function sqlParams($stmt,$params = []){
        foreach($params as $key => $value){
            $this->sqlBind($stmt, $key, $value);
        }
    }
    /**
     * Undocumented function
     *
     * @param [type] $query
     * @param array $params
     * @return void
     */
    public function sql($query, $params = []){
        $stmt = Connect::Connection()->prepare($query);
             $this->sqlParams($stmt, $params);
                $stmt->execute();
                 return $stmt;
    }
}