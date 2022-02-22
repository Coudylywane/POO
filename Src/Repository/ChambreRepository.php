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
        $sql="select * from $this->tableName ";
         return $this->dataBase->executeSelect($sql);
   }
      
}