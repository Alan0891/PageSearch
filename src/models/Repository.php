<?php

namespace src\models;
use src\models\interfaceRepository;

use src\models\DAO;

class Repository implements interfaceRepository
{
    private $db;

    public function __construct()
    {
        $this->db = new DAO();
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @param array $params
     * @return void
     */
    public function add($table, $params = [])
    {
        return $this->db->sql("INSERT INTO " . $table . "(" . str_replace(':', '', implode(',', array_keys($params))) . ") VALUES (" . implode(',', array_keys($params)) . ")", $params);
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @param [type] $params
     * @return void
     */
    public function find($table, $params = [])
    {
        if ($params != null) {
            return $this->db->sqlSelect("SELECT * FROM " . $table . " WHERE " . str_replace(':', '', implode('', array_keys($params))) . " = " . implode(',', array_keys($params)) . " ", $params);
        } else {
            return $this->db->sqlSelect("SELECT * FROM " . $table, []);
        }
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @param [type] $title
     * @return void
     */
    public function findById($table, $title)
    {
        return $this->db->sqlSelect("SELECT * FROM " . $table . " WHERE title LIKE '" . trim($title) . "%' OR title LIKE '%" . trim($title) . "%'");
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @param array $params
     * @return void
     */
    public function put($table,$params = [])
    {   
        $response = $this->find($table,$params);
        if(count($response)>0){
          array_shift($response[0]); 
          foreach($response as $resp){ 
            foreach($resp as $key => $value){
               return $this->db->sql("UPDATE ".$table." SET " . $key . " = " .$value. " WHERE id = :id " ,$params);
            }
          }
        }
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @param array $params
     * @return void
     */
    public function delete($table, $params = [])
    {
        return $this->db->sql("DELETE FROM " . $table . " WHERE " . str_replace(':', '', implode('', array_keys($params))) . " = " . implode(',', array_keys($params)) . " ", $params);
    }
}
