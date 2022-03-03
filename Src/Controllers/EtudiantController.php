<?php

namespace App\Controllers;


use App\Core\Role;
use App\Core\Request;
use App\Core\Session;
use App\Core\Validator;
use App\Core\AbstractController;
use App\Manager\PersonneManager;
use App\Entity\Etudiant;
use App\Repository\BourseRepository;
use App\Repository\EtudiantRepository;
use App\Repository\PersonneRepository;


class EtudiantController extends AbstractController{
    private Request $request;
    private EtudiantRepository $repo ;
    private BourseRepository $bourse ;

    function __construct()
    {
        parent::__construct();
        $this->repo= new EtudiantRepository;
        $this->request = new Request;
        $this->bourse = new BourseRepository;
    }

public function liste(){
$users=$this->repo->findEtudiantByrole();
$chan=$this->repo->findEtuChambre();
$nonchan=$this->repo->findEtuNonChambre();
$etunb=$this->repo->findEtuNonBoursier();
$etub=$this->repo->findEtuBoursier();

    if ($this->request->isPost()) {
       extract($this->request->request());
       if ($bourse_type=='boursier') {
        $users=$etub;
       }elseif ($bourse_type=='non_boursier') {
        $users=$etunb;
       }
    }

    if ($this->request->isPost()) {
        extract($this->request->request());
        if ($chambre_type=='loge') {
            $users=$chan;
           }elseif ($chambre_type=='non_loge') {
            $users=$nonchan;
           }
    }
    $this->render("etudiant/liste.etudiant.html.php",["users"=>$users]);

}


public function ajoutEtudiants(){
    $bourses=$this->bourse->findAll();
    $this->render("etudiant/ajout.etudiant.html.php",["bourses"=>$bourses]);
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
            $this->validator->valide_telephone($telephone,"telephone");
        if ($this->validator->valid()) {
            $insert = new PersonneManager;
            $etu = new Etudiant;
            $etu->setNom($nom)
                ->setPrenom($prenom)
                ->setLogin($login);
            $etu->setDateNaiss($date)
                ->setTelephone($telephone)
                ->setMatricule(uniqid());
            $post = $this->request->request();
            if ($post['bourse']== 'boursier') {
                $etu->setIdBourse($post["type_bourse"]);
                $etu->setAdresse(null);
            }elseif ($post['bourse']== 'non_boursier') {
                $etu->setAdresse($post["adresse"]);
                $etu->setIdBourse(null);
            }
            if (isset($id_personne)) {
                die('ok');
               $update->update($test);
            }
            $test = Etudiant::fromArray($etu);
            $main= $insert->insert($test);
            $this->redirect("etudiant/liste");

        }else {
            Session::setSession("errors",$this->validator->getErreurs());
            $this->redirect("etudiant/ajoutEtudiants");
        }
        }
    }

















    
}


































