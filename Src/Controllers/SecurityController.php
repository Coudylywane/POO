<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Core\AbstractController;
use App\Core\Role;
use App\Core\Session;
use App\Repository\EtudiantRepository;
use App\Repository\PersonneRepository;

class SecurityController extends AbstractController{

    private PersonneRepository $persRepo;
    public function __construct()
    {
          parent::__construct();
          $this->persRepo=new PersonneRepository;
    }
    public function login(){
          $this->layout="layout.connexion";
          $this->render("security/login.html.php");
    }

    public function seConnecter(Request $request){
       $arrErr=[];
        if($request->isPost()){
          extract($request->request());
          $this->validator->isVide($login,"login");
          $this->validator->isVide($password,"password");
          if($this->validator->valid()){
            $user= $this->persRepo->findPersonneByLoginAndPassword($login,$password);
            if($user==false){
                $arrErr["connexion"]="Login ou Mot de Passe Incorrect";
                Session::setSession("errors",$arrErr);
                $this->redirect("security");
            }else{
                Session::setSession(Role::KEY_SESSION_USER, $user);
                $this->redirect("etudiant/liste");
            } 
        }else{
                Session::setSession("errors",$this->validator->getErreurs() );
                $this->redirect("security");
        }
        
       }
        $this->render("security/login.html.php");
    }




    public function logout(){
        Session::destroySession();
        $this->redirect("security");
    }

   /*  public function showUsers(){
        $users=$this->persRepo->findAll();
        $this->render("security/lister.etudiant.html.php",["users"=>$users]);
    }
    public function showEtudiants(){
        $users=$this->etuRepo->findAll();
        $this->render("security/users.html.php",["users"=>$users]);
    } */

}