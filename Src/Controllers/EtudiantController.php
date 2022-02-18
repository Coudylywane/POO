<?php

namespace App\Controllers;


use App\Repository\PersonneRepository;
use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Repository\EtudiantRepository;


class EtudiantController extends AbstractController{
    private EtudiantRepository $repo ;

    function __construct()
    {
        $this->repo= new EtudiantRepository;
    }

public function liste(){
    $users=$this->repo->findEtudiantByrole();
    $this->render("etudiant/liste.etudiant.html.php",["users"=>$users]);

}

}