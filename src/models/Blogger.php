<?php 

namespace src\models;
use src\models\Repository;
use src\models\Journalist;

class Blogger{

    public function reading(Journalist $journ, $notice = []){
          (new Repository())->insert('tb_notice',[':id_journ' => $journ->insertJournalist(),':title' => $notice['title'],':body' => $notice['body']]);
    }
    public function publick($table,$params = null){
          return (new Repository())->select($table,$params);
    }
    public function publickPesq($table,$title){
          echo json_encode((new Repository())->selectOne($table,$title));
    }
    public function deleteNotice($table,$params){
          return (new Repository())->delete($table,$params);
    }
}