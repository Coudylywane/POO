<?php 

namespace App\Entity;

class Chambre {
    private int $id_chambre;
    private string $num_chambre;
    private string $num_etage;
    private int|null $id_pavillons;
    private int $id_type_chambre;
    private string $etat ;
    

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


   
   


    

    public static function fromArray(object $chambre): array
    {
        $array = array_values((array)$chambre);
        $array[]=$array[1];
        $array[]=$array[0];
        $array[]=$array[3];
        $array[]=$array[2];
        unset($array[0]);
        unset($array[1]);
        unset($array[2]);
        unset($array[3]);
        return array_values($array);
    }

    public static function fromArrayarchiver(object $chambre): array
    {
        $array = array_values((array)$chambre);
        $array[]=$array[1];
        $array[]=$array[2];
        $array[]=$array[4];
        $array[]=$array[3];
        $array[]=$array[5];
        $array[]=$array[0];
        unset($array[0]);
        unset($array[1]);
        unset($array[2]);
        unset($array[3]);
        unset($array[4]);
        unset($array[5]);  


        return array_values($array);
    }

    

    public static function fromArrayUpdate(object $chambre): array
    {
        $array = array_values((array)$chambre);
         $array[]=$array[1];
         $array[]=$array[2];
         $array[]=$array[4];
         $array[]=$array[3];
         $array[]=$array[5];
         $array[]=$array[0];

        unset($array[0]);
        unset($array[1]);
        unset($array[2]);
        unset($array[3]);
        unset($array[4]);
        unset($array[5]);

        return array_values($array);
    }
   

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
     * Get the value of num_chambre
     *
     * @return  string
     */
    public function getNumChambre()
    {
        return $this->num_chambre;
    }

    /**
     * Set the value of num_chambre
     *
     * @param  string  $num_chambre
     *
     * @return  self
     */
    public function setNumChambre(string $num_chambre)
    {
        $this->num_chambre = $num_chambre;

        return $this;
    }

    /**
     * Get the value of id_pavillons
     *
     * @return  int|null
     */
    public function getIdPavillons()
    {
        return $this->id_pavillons;
    }

    /**
     * Set the value of id_pavillons
     *
     * @param  int|null  $id_pavillons
     *
     * @return  self
     */
    public function setIdPavillons($id_pavillons)
    {
        $this->id_pavillons = $id_pavillons;

        return $this;
    }


    public static function fromArray1(object $chambre): array
    {
        $array = array_values((array)$chambre);
        $array[]=$array[1];
        $array[]=$array[0];
        unset($array[1]);
        unset($array[0]);
        return array_values($array);
    }

    /**
     * Get the value of etat
     *
     * @return  string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @param  string  $etat
     *
     * @return  self
     */
    public function setEtat(string $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of num_etage
     *
     * @return  string
     */
    public function getNumEtage()
    {
        return $this->num_etage;
    }

    /**
     * Set the value of num_etage
     *
     * @param  string  $num_etage
     *
     * @return  self
     */
    public function setNumEtage(string $num_etage)
    {
        $this->num_etage = $num_etage;

        return $this;
    }
}