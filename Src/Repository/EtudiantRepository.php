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
        $sql="select * from $this->tableName e , chambre c , bourse b , type_chambre t
         where role like ?
         and
         e.id_chambre=c.id_chambre
         and
         e.id_bourse=b.id_bourse
         and
         c.id_type_chambre=t.id_type_chambre
         ";
           return $this->findBy($sql,[$this->role ],false);

      }
      
}