<?php 

namespace App\Entity;

class Chambre {
    private int $id_chambre;
    private int $num_chambre;
    private int $num_etage;
    private Pavillon $id_pavillons;
    private Type_Chambre $id_type_chambre;
    

    /**
     * Get the value of id_chambre
     *
     * @return  int
     */
    public function getIdChambre()
    {
        return $this->id_chambre;
    }

    /**
     * Set the value of id_chambre
     *
     * @param  int  $id_chambre
     *
     * @return  self
     */
    public function setIdChambre(int $id_chambre)
    {
        $this->id_chambre = $id_chambre;

        return $this;
    }

    /**
     * Get the value of num_chambre
     *
     * @return  int
     */
    public function getNumChambre()
    {
        return $this->num_chambre;
    }

    /**
     * Set the value of num_chambre
     *
     * @param  int  $num_chambre
     *
     * @return  self
     */
    public function setNumChambre(int $num_chambre)
    {
        $this->num_chambre = $num_chambre;

        return $this;
    }

    /**
     * Get the value of id_pavillons
     *
     * @return  Pavillon
     */
    public function getIdPavillons()
    {
        return $this->id_pavillons;
    }

    /**
     * Set the value of id_pavillons
     *
     * @param  Pavillon  $id_pavillons
     *
     * @return  self
     */
    public function setIdPavillons(Pavillon $id_pavillons)
    {
        $this->id_pavillons = $id_pavillons;

        return $this;
    }

    /**
     * Get the value of num_etage
     *
     * @return  int
     */
    public function getNumEtage()
    {
        return $this->num_etage;
    }

    /**
     * Set the value of num_etage
     *
     * @param  int  $num_etage
     *
     * @return  self
     */
    public function setNumEtage(int $num_etage)
    {
        $this->num_etage = $num_etage;

        return $this;
    }

    

    /**
     * Get the value of id_type_chambre
     *
     * @return  Type_Chambre
     */
    public function getIdTypeChambre()
    {
        return $this->id_type_chambre;
    }

    /**
     * Set the value of id_type_chambre
     *
     * @param  Type_Chambre  $id_type_chambre
     *
     * @return  self
     */
    public function setIdTypeChambre(Type_Chambre $id_type_chambre)
    {
        $this->id_type_chambre = $id_type_chambre;

        return $this;
    }
}