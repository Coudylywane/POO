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
        $this->render("chambre/ajout.chambre.html.php",["type_chambres"=>$type_chambres,"pavillons"=>$pavillons]);
    }
    

    public function addChambre(){
        if ($this->request->isPost()) {
                extract($this->request->request());
                $this->validator->isVide($chambre,"chambre");
                $this->validator->isVide($numero,"numero");
            if ($this->validator->valid()) {
                $insert = new ChambreManager;
                $type = new Type_Chambre;
                $pav = new Pavillon;
                $pav->setIdPavillon($pavillon);
                $type->setIdTypeChambre($type_chambre);
            $chambre->setNumChambre($chambre)
                    ->
            $test = Chambre::fromArray($chambre);
            $main = $insert->insert($test);
            var_dump($main);
            die;

            }else {
                Session::setSession("errors",$this->validator->getErreurs());
                $this->redirect("chambre/ajoutChambre");
            }
                $this->redirect("chambre/listeChambre");
            }
        }





    

}