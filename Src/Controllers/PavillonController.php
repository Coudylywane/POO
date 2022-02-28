<?php

namespace App\Controllers;
use App\Core\Request;
use  App\Core\Session;
use App\Entity\Pavillon;
use App\Core\AbstractController;
use App\Entity\Chambre;
use App\Manager\ChambreManager;
use App\Manager\PavillonManager;
use App\Repository\ChambreRepository;
use App\Repository\PavillonRepository;

class PavillonController extends AbstractController{
    private Request $request;
    private PavillonRepository $pavillon ;
    private ChambreManager $chambreMan;
    private Chambre $chambreEn;



    public function __construct()
    {
        parent::__construct();
        $this->repo= new PavillonRepository;
        $this->chambre= new ChambreRepository;
        $this->chambreMan= new ChambreManager;
        $this->chambreEn= new Chambre;
        $this->request = new Request;
    }

    public function listePavillon(){
        $pavillons=$this->repo->findAll();
        $this->render("pavillon/liste.pavillon.html.php",["pavillons"=>$pavillons]);
    }

    public function ajoutPavillon(){
        $chambres=$this->chambre->findByPavillon();
        $this->render("pavillon/ajout.pavillon.html.php",["chambres"=>$chambres]);
    }

    public function updatePavillon(){
        $id = $this->request->query();
        $chambres=$this->chambre->findByPavillon();
        $pavillon_by_id=$this->repo->findById($id[0]);
        $this->render("pavillon/ajout.pavillon.html.php",["chambres"=>$chambres,"pavillon_by_id"=>$pavillon_by_id]);
    }



    public function addPavillon(){
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
            foreach ($disponible as  $value) {
                $this->chambre->findById($value);
                $this->chambreEn->setIdPavillons($main)
                                ->setIdChambre($value);
                $insert= Chambre::fromArray1($this->chambreEn);
                $this->chambreMan->update($insert);
                
            }
            if ($id == null) {
                $test = Pavillon::fromArray($pavillon);
                $main = $insert->insert($test);
            }else {
                $pavillon->setIdPavillon($id);
                $test = Pavillon::fromArrayUpdate($pavillon);
               /*  var_dump($test);
                die; */
                $insert->update($test);
            }

            $this->redirect("pavillon/listePavillon");
            }else {
                Session::setSession("errors",$this->validator->getErreurs());
                $this->redirect("pavillon/ajoutPavillon");
            }
            }
        }
    }