<?php

namespace App\Manager;
use App\Core\Orm\AbstractManager;

class PavillonManager extends AbstractManager {

    public function __construct()
    {
        parent::__construct();
        $this->tableName="pavillon";
        $this->primaryKey="id_pavillon";
    }

   
    public function insert(array $model):int{
      $sql="INSERT INTO $this->tableName (`nom_pavillon`, `num_pavillon`, `nbr_etage`) VALUES (?,?,?)";
      return $this->dataBase->executeUpdate($sql,$model);
    }
      public  function update(array $model):int{
        $sql="update  $this->tableName set nom_complet=?,,login=?,,password=?,,role=?,,tuteur=?,,matricule=?,,grade=?, where $this->primaryKey=?,";
        return $this->dataBase->executeUpdate($sql,$model);
      }

}