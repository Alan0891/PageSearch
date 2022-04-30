<?php
 
namespace src\models;
use PDO;
use PDOException;

class Connect{

  private static $conn;
  /**
   * Undocumented function
   *
   * @return void
   */
  public static function Connection(){
      try{
        self::$conn = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME.";",DBUSER,DBPASS);
          return self::$conn;
      }catch(PDOException $excp){
          echo $excp->getMessage();
      }
  }
}