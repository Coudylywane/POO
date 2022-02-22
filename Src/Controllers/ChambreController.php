<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Repository\ChambreRepository;


class ChambreController extends AbstractController{
    private  ChambreRepository $chambre ;


    public function __construct()
    {
        $this->repo= new ChambreRepository;
    }


    public function listeChambre(){
        $chambres=$this->repo->findAll();
        $this->render("chambre/liste.chambre.html.php",["chambres"=>$chambres]);
    
    }

    

}