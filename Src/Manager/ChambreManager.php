<?php

namespace App\Manager;
use App\Core\Orm\AbstractManager;

class ChambreManager extends AbstractManager {

    public function __construct()
    {
        parent::__construct();
        $this->tableName="chambre";
        $this->primaryKey="id_chambre";
    }

   
    public function insert(array $model):int{
        $sql="INSERT INTO  $this->tableName (`num_chambre`, `num_etage`, `id_type_chambre`, `id_pavillon`) VALUES (?,?,?,?)";
        return $this->dataBase->executeUpdate($sql,$model);
    }
      public  function update(array $model):int{
        $sql="update  $this->tableName set nom_complet=?,,login=?,,password=?,,role=?,,tuteur=?,,matricule=?,,grade=?, where $this->primaryKey=?,";
        return $this->dataBase->executeUpdate($sql,$model);
      }

}