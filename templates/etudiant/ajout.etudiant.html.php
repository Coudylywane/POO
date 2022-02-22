
<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>

<div class="container2">
<form method="post" action="<?=WEBROOT."etudiant/addEtudiant"?>" enctype="multipart/form-data">
<!-- <input type="hidden" name="controllers" value="etudiant"/>
<input type="hidden" name="action" value="inscription"/>
<input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id']:'';?>"> -->
            <h2>Join ODC Club</h2>
            <div class="form-controle">
                <label for="username">Nom</label>
                <input type="text" id="username" name="nom" placeholder="Enter username">
                <small class="form-text text-danger form">
                  <?php echo isset($arrErrors['nom']) ? $arrErrors['nom']: '';?> 
                </small>
            </div>
            <div class="form-controle">
                <label for="">Prenom</label>
                <input type="text" id="email" name="prenom" placeholder="Enter email">
            </div>
            <div class="form-controle">
                <label for="">login</label>
                <input type="text" name="login" placeholder="Enter password">
            </div>
            <div class="form-controle">
                <label for="password2">date de naissane</label>
                <input type="date" id="password2" name="date" placeholder="Confirm your password">
            </div>
            <div class="form-controle">
                <label for="password2">Telephone</label>
                <input type="text" id="password2" name="telephone" placeholder="Confirm your password">
            </div>
            <div class="form-controle">
                <label for="password2">Adresse</label>
                <input type="text" id="password2" name="adresse" placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn">inscrire</button>
        </form>
    </div>