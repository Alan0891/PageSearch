<?php 

namespace src\models;
use src\models\Repository;
use src\models\Journalist;

class Blogger{

    public function addNotice(Journalist $journ, $notice = []){
          (new Repository())->add('tb_notice',[':id_journ' => $journ->addJournalist(),':title' => $notice['title'],':body' => $notice['body']]);
    }
    public function selectNotice($table,$params = null){
          return (new Repository())->select($table,$params);
    }
    public function selectNoticePesq($table,$title){
          echo json_encode((new Repository())->selectOne($table,$title));
    }
    public function updateNotice($table,$params){
          return (new Repository())->update($table,$params);
    }
    public function deleteNotice($table,$params){
          return (new Repository())->delete($table,$params);
    }
}