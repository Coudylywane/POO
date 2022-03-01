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
        where 
          e.id_chambre=c.id_chambre
          and
          e.id_bourse=b.id_bourse
          and
          c.id_type_chambre=t.id_type_chambre 
         and role like ?";
           return $this->findBy($sql,[$this->role ],false);

      }

      /* e , chambre c , bourse b , type_chambre t
       and
         e.id_chambre=c.id_chambre
         and
         e.id_bourse=b.id_bourse
         and
         c.id_type_chambre=t.id_type_chambre  */

         public function findEtuBoursier(){
          $sql = "select * from $this->tableName p
                      INNER JOIN bourse b 
                          ON p.id_bourse=b.id_bourse ";
           return $this->dataBase->executeSelect( $sql);
      }


      public function findEtuNonBoursier(){
        $sql="select * from $this->tableName where adresse IS NOT NULL";
        return $this->dataBase->executeSelect( $sql);

    }

    public function findEtuNonChambre(){
      $sql="select * from $this->tableName e , bourse b 
      where 
        e.id_bourse=b.id_bourse
        and
        e.id_chambre IS  NULL";
      return $this->dataBase->executeSelect( $sql);

  }
  public function findEtuChambre(){
    $sql="select * from $this->tableName e , chambre c , bourse b , type_chambre t
    where 
      e.id_chambre=c.id_chambre
      and
      e.id_bourse=b.id_bourse
      and
      c.id_type_chambre=t.id_type_chambre 
     and  e.id_chambre IS NOT NULL";
    return $this->dataBase->executeSelect( $sql);

}

      
}


