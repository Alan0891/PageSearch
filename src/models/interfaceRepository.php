<?php 

namespace src\models;

interface interfaceRepository{
   public function add($table, $params = []);
   public function select($table, $params = []);
   public function update($table, $params = []);
   public function delete($table, $params = []);
}