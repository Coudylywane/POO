<?php
namespace App\Repository;
use App\Core\Orm\AbstractRepository;


class BourseRepository extends AbstractRepository{
    
    public function __construct()
    {
        parent::__construct();
        $this->tableName="bourse";
        $this->primaryKey="id_bourse";
    }


    function findAll():array{
        $sql="select * from $this->tableName";
        return $this->dataBase->executeSelect($sql);
   }
      
}