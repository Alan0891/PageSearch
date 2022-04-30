<?php 

namespace src\models;
use src\models\Repository;
use src\models\Journalist;

class Blogger{
    /**
     * Undocumented function
     *
     * @param Journalist $journ
     * @param array $notice
     * @return void
     */  
    public function addNotice(Journalist $journ, $notice = []){
          (new Repository())->add('tb_notice',[':id_journ' => $journ->addJournalist(),':title' => $notice['title'],':body' => $notice['body']]);
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @param [type] $params
     * @return void
     */
    public function selectNotice($table,$params = null){
          return (new Repository())->select($table,$params);
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @param [type] $title
     * @return void
     */
    public function selectNoticePesq($table,$title){
          echo json_encode((new Repository())->selectOne($table,$title));
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @param [type] $params
     * @return void
     */
    public function updateNotice($table,$params){
          return (new Repository())->update($table,$params);
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @param [type] $params
     * @return void
     */
    public function deleteNotice($table,$params){
          return (new Repository())->delete($table,$params);
    }
}