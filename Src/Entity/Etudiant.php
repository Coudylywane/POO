<?php
namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;

class Etudiant extends Personne implements EntityInterface{
    
    private string $matricule;
    private int $telephone;
    private string $dateNaiss;
    private string|null $adresse;
    private int|null $id_bourse;

   //Propriete Navigationnelle OneToMany
   //Collection



   public function __construct()
   {
       parent::__construct();
       $this->role="ROLE_ETUDIANT";
   }


  public static function fromArray(object $personne): array
    {
        $array = array_values((array)$personne);
        $array[]= $array[0];//non
        $array[]= $array[1];//prenom
        $array[]= $array[2];//email
        $array[]= $array[3];//role
        $array[]= $array[4];//mat
        $array[]= $array[6];//date
        $array[]= $array[8];
        $array[]= $array[7];
        $array[]= null; 
        $array[]= $array[5];
        $array[]= null; 
     
        unset($array[0]);
        unset($array[1]);
        unset($array[2]);
        unset($array[3]);
        unset($array[4]);
        unset($array[5]);
        unset($array[6]);
        unset($array[7]);
        unset($array[8]);
        return array_values($array);
    }


    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of telephone
     *
     * @return  int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param  int  $telephone
     *
     * @return  self
     */
    public function setTelephone(int $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of dateNaiss
     *
     * @return  string
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set the value of dateNaiss
     *
     * @param  string  $dateNaiss
     *
     * @return  self
     */
    public function setDateNaiss(string $dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

   

    /**
     * Get the value of id_bourse
     *
     * @return  int|null
     */
    public function getIdBourse()
    {
        return $this->id_bourse;
    }

    /**
     * Set the value of id_bourse
     *
     * @param  int|null  $id_bourse
     *
     * @return  self
     */
    public function setIdBourse($id_bourse)
    {
        $this->id_bourse = $id_bourse;

        return $this;
    }

    /**
     * Get the value of adresse
     *
     * @return  string|null
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @param  string|null  $adresse
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
}