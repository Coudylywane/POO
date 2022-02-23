
<?php

use App\Core\Session;

$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>

<div class="container2">
<form method="post" action="<?=WEBROOT."chambre/addChambre"?>" enctype="multipart/form-data" class="forme">
<!-- <input type="hidden" name="controllers" value="etudiant"/>
<input type="hidden" name="action" value="inscription"/>
<input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id']:'';?>"> -->
            <h2>AJOUT CHAMBRE</h2>
               <div class="row">
                 <div class="form-controle">
                    <label for="username">Numero Chambre</label>
                    <input type="text" id="username" name="chambre" placeholder="Enter le numero de la chambre">
                    <small class="erroor">
                    <?php echo isset($arrErrors['chambre']) ? $arrErrors['chambre']: '';?> 
                    </small>
                    </div>
                    <div class="form-controle">
                         <label for="">Numero Etage</label>
                         <input type="text" id="email" name="numero" placeholder="Enter le numero d'etage">
                         <small class="erroor">
                              <?php echo isset($arrErrors['numero']) ? $arrErrors['numero']: '';?> 
                         </small>
                    </div>
               </div>
               
               <div class="row">
                    <div class="form-controle">
                         <div>
                         <?php foreach ($type_chambres as $type_chambre):?>
                            <label for=""><?=$type_chambre->nom_type_chambre?></label>
                            <input type="radio" name="type" style="margin-top: -15px;" value="<?=$type_chambre->id_type_chambre?>">
                            <?php endforeach ?>
                         </div>
                    </div>
                    <div class="form-controle">
                         <div>
                         <label for="">Pavillon</label>
                            <select name="" id="">
                                <option value="">choisir</option>
                                <?php foreach ($pavillons as $pavillon):?>
                                <option value="<?=$pavillon->id_pavillon?>"><?=$pavillon->nom_pavillon?></option>
                                <?php endforeach ?>
                            </select>
                         </div>
                    </div>
               </div>
            <button type="submit" class="btn">Ajouter</button>
        </form>
    </div>