<?php
namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;

class Etudiant extends Personne implements EntityInterface{
    
    protected string $matricule;
    protected int $telephone;
    protected string $dateNaiss;
   //Propriete Navigationnelle OneToMany
   //Collection



   public function __construct()
   {
       parent::__construct();
       $this->role="ROLE_ETUDIANT";
   }

public static function  fromArray(object $personne):array{
    $arr=  array_values((array)$personne);
    $arr[]=$arr[0];
    $arr[]=$arr[1];
    $arr[]="";
     unset($arr[0]);
     unset($arr[1]);
     unset($arr[2]);
     return  array_values($arr);
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
}