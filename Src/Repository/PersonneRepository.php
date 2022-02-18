<?php
namespace App\Repository;
use App\Core\Orm\AbstractRepository;
use \stdClass;

class PersonneRepository extends AbstractRepository{
    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->tableName="personne";
        $this->primaryKey="id_personne";
    }
   
     function findAll():array{
         $sql="select * from $this->tableName ";
          return $this->dataBase->executeSelect($sql);
    }

      public function findPersonneByLoginAndPassword(string $login,string $password):object|bool{
        $sql="select * from $this->tableName where email=? and password=?";
           return $this->findBy($sql,[$login,$password],true);

      }

      
}