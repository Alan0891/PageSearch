<?php 
namespace src\models;
use src\models\Repository;

class Journalist{

    private $id;
    private $name;
    private $matricula;

    public function __construct($name, $matricula){
        $this->name = $name;
        $this->matricula = $matricula;
    }
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    public function addJournalist(){
         $response = (new Repository())->select('tb_jornalista',[':matricula' => $this->getMatricula()]);
         if(count($response) > 0){
             foreach($response as $journ){
                $this->setId($journ['id']);
             }
              return $this->getId();
         }else{
              (new Repository())->add('tb_jornalista', [':nome'=>$this->getMatricula() , ':matricula' => $this->getName()]);
                return $this->getId();
            }  
    }
    public function deleteJournalist(){
         echo (new Repository())->delete('tb_jornalista',$this->getId()); 
    }
 }
