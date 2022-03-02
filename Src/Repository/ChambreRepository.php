<?php
namespace App\Repository;
use App\Core\Orm\AbstractRepository;


class ChambreRepository extends AbstractRepository{
    
    public function __construct()
    {
        parent::__construct();
        $this->tableName="chambre";
        $this->primaryKey="id_chambre";
    }

    function findAll():array{
        $sql="select * from $this->tableName c , type_chambre t , pavillon p
        where 
        c.id_type_chambre= t.id_type_chambre 
        and
        c.id_pavillon=p.id_pavillon
         ";
         return $this->dataBase->executeSelect($sql);
   }

   function findById(int $id):array{
    $sql="select * from $this->tableName c , type_chambre t  , pavillon p
    where 
    c.id_type_chambre = t.id_type_chambre
    and
    c.id_pavillon = p.id_pavillon
    and
    $this->primaryKey=?";
     return $this->dataBase->executeSelect($sql,[$id]);
  }

  function findChambreByEtat($etat):array{
    $sql="select * from $this->tableName c , type_chambre t , pavillon p
    where 
    c.id_type_chambre= t.id_type_chambre 
    and
    c.id_pavillon=p.id_pavillon and etat like ?";
     return $this->dataBase->executeSelect($sql,[$etat]);
  }





  function findByPavillon():array{
    $sql="select * from $this->tableName  where id_pavillon is null";
    return $this->dataBase->executeSelect($sql);
}



function findByPavillon2($nom_pav):array{
    $sql="select * from $this->tableName c , pavillon p  
    where 
    c.id_pavillon=p.id_pavillon
    and
    nom_pavillon like ?";
    return $this->dataBase->executeSelect($sql,[$nom_pav]);
}
 


      
}