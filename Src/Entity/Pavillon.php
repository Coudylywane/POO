<?php 

namespace App\Entity;

class Pavillon {
    
    private int $id_pavillon;
    private string $nom_pavillon;
    private string $num_pavillon;
    private int $nbr_etage;

    
    /**
     * Get the value of nom_pavillon
     *
     * @return  string
     */
    public function getNomPavillon()
    {
        return $this->nom_pavillon;
    }

    /**
     * Set the value of nom_pavillon
     *
     * @param  string  $nom_pavillon
     *
     * @return  self
     */
    public function setNomPavillon(string $nom_pavillon)
    {
        $this->nom_pavillon = $nom_pavillon;

        return $this;
    }

    

    /**
     * Get the value of num_pavillon
     *
     * @return  string
     */
    public function getNumPavillon()
    {
        return $this->num_pavillon;
    }

    /**
     * Set the value of num_pavillon
     *
     * @param  string  $num_pavillon
     *
     * @return  self
     */
    public function setNumPavillon(string $num_pavillon)
    {
        $this->num_pavillon = $num_pavillon;

        return $this;
    }

    /**
     * Get the value of nbr_etage
     *
     * @return  int
     */
    public function getNbrEtage()
    {
        return $this->nbr_etage;
    }

    /**
     * Set the value of nbr_etage
     *
     * @param  int  $nbr_etage
     *
     * @return  self
     */
    public function setNbrEtage(int $nbr_etage)
    {
        $this->nbr_etage = $nbr_etage;

        return $this;
    }

    /**
     * Get the value of id_pavillon
     *
     * @return  int
     */
    public function getIdPavillon()
    {
        return $this->id_pavillon;
    }

    /**
     * Set the value of id_pavillon
     *
     * @param  int  $id_pavillon
     *
     * @return  self
     */
    public function setIdPavillon(int $id_pavillon)
    {
        $this->id_pavillon = $id_pavillon;

        return $this;
    }

    public static function fromArray(object $pavillon): array
    {
        $array = array_values((array)$pavillon);
        return array_values($array);
    }

    public static function fromArrayUpdate(object $pavillon): array
    {
        $array = array_values((array)$pavillon);
        $array[]=$array[0];
        unset($array[0]);
        return array_values($array);
    }

    













}





