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
    private  PavillonRepository $pavillon;
    private Request $request;
    private ChambreRepository $repo ;



    public function __construct()
    {
        parent::__construct();
        $this->repo= new ChambreRepository;
        $this->type= new TypeChambreRepository;
        $this->pavillon= new PavillonRepository;
        $this->request = new Request;
    }


    public function listeChambre(){
        $chambres=$this->repo->findChambreByEtat('non_archivee');
        $pavil=$this->repo->findByPavillon2($chambres);
        if ($this->request->isPost()) {
            extract($this->request->request());
            if ($pav==$chambre->id_pavillon) {
                $users=$pavil;
            }
         }
        $this->render("chambre/liste.chambre.html.php",["chambres"=>$chambres]);
    
    }


    public function voirArchiver(){
        $chambres=$this->repo->findChambreByEtat('archivee');
        $this->render("chambre/archive.html.php",["chambres"=>$chambres]);
    
    }





    public function ajoutChambre(){
        $type_chambres=$this->type->findAll();
        $pavillons=$this->pavillon->findAll();
        $this->render("chambre/ajout.chambre.html.php",["type_chambres"=>$type_chambres,"pavillons"=>$pavillons]);
    }

    public function updateChambre(){
        $id = $this->request->query();
        $chambre_by_id=$this->repo->findById($id[0]);
        $type_chambres=$this->type->findAll();
        $pavillons=$this->pavillon->findAll();
        $this->render("chambre/ajout.chambre.html.php",["type_chambres"=>$type_chambres,"pavillons"=>$pavillons,"chambre_by_id"=>$chambre_by_id]);
    }



    public function archiverChambre(Request $request){
        $id=$request->query();
        $id = $id[0];
        $restor = $this->repo->findById((int)$id);
        $restor[0]->etat=='non_archivee' ? $etat = 'archivee' : $etat = 'non_archivee' ;
        $insert = new ChambreManager;
        $chambre= new Chambre;
        $chambre->setIdChambre($id);
        $chambre->setNumChambre($restor[0]->num_chambre);
        $chambre->setNumEtage((int)$restor[0]->num_etage);
        $chambre->setIdPavillons($restor[0]->id_pavillon);
        $chambre->setIdTypeChambre($restor[0]->id_type_chambre);
        $chambre->setEtat($etat);

        $test = Chambre::fromArrayarchiver($chambre);  
        $insert->update($test);
        $this->redirect("chambre/voirArchiver");

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
                    if($id==null){
                        $test = $chambre->fromArray($chambre);
                        $insert->insert($test);
                    }else{
                        $chambre->setIdChambre($id);
                        $test = $chambre->fromArrayUpdate($chambre);
                        $insert->update($test);                        
                    }
                    
                    $this->redirect("chambre/listeChambre");
                }else {
                    Session::setSession("errors",$this->validator->getErreurs());
                    $this->redirect("chambre/ajoutChambre");
                }
            }
        }





    

}