<?php

/* namespace App\Controllers;

use App\Core\AbstractController;
use App\Repository\TypeChambreRepository;

class TypeChambreController extends AbstractController {

    private TypeChambreRepository $type_chambre ;

    public function __construct()
    {
        $this->repo= new TypeChambreRepository;
    }

    public function listeTypeChambre(){
        $type_chambres=$this->repo->findAll();
        $this->render("chambre/ajout.chambre.html.php",["type_chambres"=>$type_chambres]);
    }


} */