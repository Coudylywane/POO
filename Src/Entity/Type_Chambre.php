<?php 

namespace App\Entity;

class Type_Chambre {
    private int $id_type_chambre;
    private string $nom_type_chambre;

    /**
     * Get the value of id_type_chambre
     *
     * @return  int
     */
    public function getIdTypeChambre()
    {
        return $this->id_type_chambre;
    }

    /**
     * Set the value of id_type_chambre
     *
     * @param  int  $id_type_chambre
     *
     * @return  self
     */
    public function setIdTypeChambre(int $id_type_chambre)
    {
        $this->id_type_chambre = $id_type_chambre;

        return $this;
    }

    /**
     * Get the value of nom_type_chambre
     *
     * @return  string
     */
    public function getNomTypeChambre()
    {
        return $this->nom_type_chambre;
    }

    /**
     * Set the value of nom_type_chambre
     *
     * @param  string  $nom_type_chambre
     *
     * @return  self
     */
    public function setNomTypeChambre(string $nom_type_chambre)
    {
        $this->nom_type_chambre = $nom_type_chambre;

        return $this;
    }
}