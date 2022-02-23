<?php
namespace App\Repository;
use App\Core\Orm\AbstractRepository;


class TypeChambreRepository extends AbstractRepository{
    
    public function __construct()
    {
        parent::__construct();
        $this->tableName="type_chambre";
        $this->primaryKey="id_type_chambre";
    }


    function findAll():array{
        $sql="select * from $this->tableName";
        return $this->dataBase->executeSelect($sql);
   }
      
}