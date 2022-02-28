
<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>

<div class="container2">
<form method="post" action="<?=WEBROOT."etudiant/addEtudiant"?>" enctype="multipart/form-data" class="forme">
<input type="hidden" name="controllers" value="etudiant"/>
<input type="hidden" name="action" value="addEtudiant"/>
<!-- <input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id']:'';?>"> -->
            <h2>AJOUT ETUDIANT</h2>
               <div class="row">
                 <div class="form-controle">
                    <label for="username">Nom</label>
                    <input type="text" id="username" name="nom" placeholder="Enter votre nom">
                    <small class="erroor">
                    <?php echo isset($arrErrors['nom']) ? $arrErrors['nom']: '';?> 
                    </small>
                    </div>
                    <div class="form-controle">
                         <label for="">Prenom</label>
                         <input type="text" id="email" name="prenom" placeholder="Enter votre prenom">
                         <small class="erroor">
                              <?php echo isset($arrErrors['prenom']) ? $arrErrors['prenom']: '';?> 
                         </small>
                    </div>
               </div>
               
               <div class="row">
                    <div class="form-controle">
                         <label for="">Login</label>
                         <input type="text" name="login" placeholder="Enter votre login">
                         <small class="erroor">
                              <?php echo isset($arrErrors['login']) ? $arrErrors['login']: '';?> 
                         </small>
                    </div>
                    <div class="form-controle">
                         <label for="password2">Date de naissane</label>
                         <input type="date" id="password2" name="date" placeholder="Entrer votre date de naissance">
                         <small class="erroor">
                              <?php echo isset($arrErrors['date']) ? $arrErrors['date']: '';?> 
                         </small>
                    </div>
               </div>
                    <div class="form-controles">
                         <label for="password2">Telephone</label>
                         <input type="text" id="password2" name="telephone" placeholder="Entrer votre telephone">
                         <small class="erroor">
                              <?php echo isset($arrErrors['telephone']) ? $arrErrors['telephone']: '';?> 
                         </small>
                    </div>
                    <div class="form-controles">
                         <label for="password2">Type Etudiant</label>
                         <select name="bourse" id="bourse"  class="selecte-style" onclick="addAdresse()">
                              <option value="">Saisir le type d'Etudiant</option>
                              <option value="non_boursier"> Non Boursier</option>
                              <option value="boursier"> Boursier</option>
                         </select>
                         <!-- <small class="erroor">
                              <?php echo isset($arrErrors['telephone']) ? $arrErrors['telephone']: '';?> 
                         </small> -->
                    </div>
                    <div class="form-controles" id="adresse" style="display: none;">
                         <label for="password2">Adresse</label>
                         <input type="text"  name="adresse" placeholder="Entrer votre adresse">
                         <small class="erroor">
                              <?php echo isset($arrErrors['adresse']) ? $arrErrors['adresse']: '';?> 
                         </small>
                    </div>
                    <div class="form-controles" id="boursier" style="display: none;">
                         <label for="">Type de Bourse</label>
                         <select name="type_bourse"class="selecte-style" >
                              <?php foreach ($bourses as $bourse):?>
                                   <option value="<?=$bourse->id_bourse?>"><?=$bourse->type_bourse?></option>
                              <?php endforeach ?>
                         </select>
                    </div>
                    
            <button type="submit" class="btn">Ajouter</button>
        </form>
    </div>

   