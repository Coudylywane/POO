<?php
namespace App\Repository;
use \stdClass;

class EtudiantRepository extends PersonneRepository{
    protected string $role;

    public function __construct(){
        parent::__construct();
        $this->role="ROLE_ETUDIANT";
    }
   
     function findAll():array{
         $sql="select * from $this->tableName ";
          return $this->dataBase->executeSelect($sql);
    }


      public function findEtudiantByrole():object|bool|array{
        $sql="select * from $this->tableName where role like ?";
           return $this->findBy($sql,[$this->role ],false);

      }
      
}