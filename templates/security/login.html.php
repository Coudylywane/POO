<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}


?>
  <div class="container mx-auto">
      <div class="row" >
        <div class="bleu col-md-4">
        <img class="logo" src="img/logo.png" alt="">
        </div>

          <div class="blanc col-md-8">
           <form method="post" action="<?=WEBROOT."security/seConnecter"?>">
            <?php if(isset($arrErrors['connexion'])): ?>
            <div class="alert alert-danger" role="alert">
            <strong> <?=$arrErrors['connexion']?></strong>
          </div>
          <?php endif ?> 
          
              <div class="connect">
                  <h4 id="connect">Connectez-vous</h4>
                  <h6 id="titre">Connectez-vous pour acceder a vos fonctionnalites</h6>
              </div>
              <div>
                <input type="text" class="inpute" placeholder="Adresse Email" name="login">
                <small class="form-text text-danger form">
                  <?php echo isset($arrErrors['password']) ? $arrErrors['password']: '';?> 
                </small>
              </div> 
              <div>
                <input type="password" class="inpute" placeholder="Mot de passe" name="password">
                <small class="form-text text-danger form">
                  <?php echo isset($arrErrors['password']) ? $arrErrors['password']: '';?> 
                </small>
              </div>
              <button type="submit" class="ajouter">Se connecter</button>
              <div class="trait"></div>
              <div>
                <a href=""class="compte">Vous n'avez pas de compte? Creer en un !</a>
              </div>
              <div>
              </div>
            </form>
            </div>
          </div>

      </div>

  </div>





  <style>









  </style>
  

 