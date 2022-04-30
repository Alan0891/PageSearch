<?php

namespace src\models;
use src\models\interfaceRepository;

use src\models\DAO;

class Repository implements interfaceRepository
{

    public function add($table, $params = [])
    {
        return (new DAO())->sql("INSERT INTO " . $table . "(" . str_replace(':', '', implode(',', array_keys($params))) . ") VALUES (" . implode(',', array_keys($params)) . ")", $params);
    }
    public function select($table, $params = null)
    {
        if ($params != null) {
            return (new DAO())->sqlSelect("SELECT * FROM " . $table . " WHERE " . str_replace(':', '', implode('', array_keys($params))) . " = " . implode(',', array_keys($params)) . " ", $params);
        } else {
            return (new DAO())->sqlSelect("SELECT * FROM " . $table, []);
        }
    }
    public function selectOne($table, $title)
    {
        return (new DAO())->sqlSelect("SELECT * FROM " . $table . " WHERE title LIKE '" . trim($title) . "%' OR title LIKE '%" . trim($title) . "%'");
    }
    public function update($table,$params = [])
    {
        return (new DAO())->sql('UPDATE'.$table.' SET' .str_replace(':', '', implode('', array_keys($params))) . " = " . implode(',', array_keys($params)). ' WHERE ' . str_replace(':', '', implode('', array_keys($params))) . " = " . implode(',', array_keys($params)) . ' ',$params);
    }
    public function delete($table, $params = [])
    {
        return (new DAO())->sql("DELETE FROM " . $table . " WHERE " . str_replace(':', '', implode('', array_keys($params))) . " = " . implode(',', array_keys($params)) . " ", $params);
    }
}
