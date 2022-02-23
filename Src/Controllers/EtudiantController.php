<?php

namespace App\Controllers;


use App\Repository\PersonneRepository;
use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Core\Validator;
use App\Entity\EtudiantNBoursier;
use App\Manager\PersonneManager;
use App\Repository\EtudiantRepository;


class EtudiantController extends AbstractController{
    private Request $request;
    private EtudiantRepository $repo ;

    function __construct()
    {
        parent::__construct();
        $this->repo= new EtudiantRepository;
        $this->request = new Request;
    }

public function liste(){
    $users=$this->repo->findEtudiantByrole();
    $this->render("etudiant/liste.etudiant.html.php",["users"=>$users]);

}
public function ajoutEtudiants(){
    $this->render("etudiant/ajout.etudiant.html.php");
} 


public function addEtudiant(){
    // tester si action == post
    // extract validation champs
    // instancier personnemanager 
    // instancier objet de type  etudiant
    // 
    if ($this->request->isPost()) {
            extract($this->request->request());
            $this->validator->isVide($login,"login");
            $this->validator->isVide($nom,"nom");
            $this->validator->isVide($prenom,"prenom");
            $this->validator->isVide($date,"date");
            $this->validator->isVide($adresse,"adresse");
            $this->validator->isVide($telephone,"telephone");

        if ($this->validator->valid()) {
            $insert = new PersonneManager;
            $etuNboursier = new EtudiantNBoursier;
            $etuNboursier->setNom($nom)
                        ->setPrenom($prenom)
                        ->setLogin($login);
            $etuNboursier->setDateNaiss($date)
                        ->setTelephone($telephone)
                        ->setMatricule(uniqid());
            $etuNboursier->setAdresse($adresse);
            $test = EtudiantNBoursier::fromArray($etuNboursier);
            $main = $insert->insert($test);

        }else {
            Session::setSession("errors",$this->validator->getErreurs());
            $this->redirect("etudiant/ajoutEtudiants");
        }
            $this->redirect("etudiant/liste");
        }
    }

















    
}


































