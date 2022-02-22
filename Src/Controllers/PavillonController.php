<?php

namespace App\Controllers;
use  App\Core\Session;
use App\Core\Request;
use App\Core\AbstractController;
use App\Entity\Pavillon;
use App\Manager\PavillonManager;
use App\Repository\PavillonRepository;

class PavillonController extends AbstractController{
    private Request $request;
    private PavillonRepository $pavillon ;


    public function __construct()
    {
        parent::__construct();
        $this->repo= new PavillonManager;
        $this->request = new Request;
    }

    public function listePavillon(){
        $pavillons=$this->repo->findAll();
        $this->render("pavillon/liste.pavillon.html.php",["pavillons"=>$pavillons]);
    }

    public function ajoutPavillon(){
        $this->render("pavillon/ajout.pavillon.html.php");
    }

    public function addPavillon(){
        // tester si action == post
        // extract validation champs
        // instancier personnemanager 
        // instancier objet de type  etudiant
        // 
        if ($this->request->isPost()) {
                extract($this->request->request());
                $this->validator->isVide($nom,"nom");
                $this->validator->isVide($nombre,"nombre");
                $this->validator->isVide($numero,"numero");
            if ($this->validator->valid()) {
                $insert = new PavillonManager;
            $pavillon = new Pavillon;
            $pavillon->setNomPavillon($nom)
                        ->setNbrEtage($nombre)
                        ->setNumPavillon($numero);
            $test = Pavillon::fromArray($pavillon);
            $main = $insert->insert($test);
                var_dump($main);
                die;
            }else {
                Session::setSession("errors",$this->validator->getErreurs());
                $this->redirect("pavillon/ajoutPavillon");
            }
                $this->redirect("pavillon/listePavillon");
            }
        }



}