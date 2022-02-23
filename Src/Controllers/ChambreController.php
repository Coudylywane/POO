<?php

namespace App\Controllers;
use App\Core\Request;
use App\Core\Session;
use App\Entity\Chambre;
use App\Manager\ChambreManager;
use App\Core\AbstractController;
use App\Entity\Pavillon;
use App\Entity\Type_Chambre;
use App\Repository\ChambreRepository;
use App\Repository\PavillonRepository;
use App\Repository\TypeChambreRepository;

class ChambreController extends AbstractController{
    private  TypeChambreRepository $type;
    private  ChambreRepository $chambre ;
    private  PavillonRepository $pavillon;
    private Request $request;



    public function __construct()
    {
        parent::__construct();
        $this->repo= new ChambreRepository;
        $this->type= new TypeChambreRepository;
        $this->pavillon= new PavillonRepository;
        $this->request = new Request;
    }


    public function listeChambre(){
        $chambres=$this->repo->findAll();
        $this->render("chambre/liste.chambre.html.php",["chambres"=>$chambres]);
    
    }

    public function ajoutChambre(){
        $type_chambres=$this->type->findAll();
        $pavillons=$this->pavillon->findAll();
        $this->render("chambre/ajout.chambre.html.php",["type_chambres"=>$type_chambres,"pavillons"=>$pavillons ]);
    }
    

    public function addChambre(){
            if ($this->request->isPost()) {
                    extract($this->request->request());
                     $this->validator->isVide($num_chambre,"num_chambre");
                     $this->validator->isVide($numero,"numero");
                     $this->validator->isVide($type_chambre,"type_chambre");
                if ($this->validator->valid()) {
                    $insert = new ChambreManager;
                    $chambre= new Chambre;
                    $chambre->setNumChambre($num_chambre)
                            ->setNumEtage($numero)
                            ->setIdTypeChambre($type_chambre);
                            if ($pavillon!=null) {
                                $chambre->setIdPavillons($pavillon);
                            }else {
                                $chambre->setIdPavillons(null);
                            }
                    
                    $test = $chambre->fromArray($chambre);
                    
                    $insert->insert($test);
                    $this->redirect("chambre/listeChambre");
                }else {
                    Session::setSession("errors",$this->validator->getErreurs());
                    $this->redirect("chambre/ajoutChambre");
                }
            }
        }





    

}