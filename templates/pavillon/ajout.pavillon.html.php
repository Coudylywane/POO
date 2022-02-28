
<?php

use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
}
?>

<div class="container2">
<form method="post" action="<?=WEBROOT."pavillon/addPavillon"?>" enctype="multipart/form-data" class="forme">
<input type="hidden" name="id" value="<?=isset($pavillon_by_id[0]->id_pavillon) ? $pavillon_by_id[0]->id_pavillon:'';?>">
            <h2>AJOUT PAVILLON</h2>
               <div class="row">
                 <div class="form-controle">
                    <label for="username">Nom pavillon</label>
                    <input type="text" id="username" name="nom" placeholder="Enter le nom de pavillon" value="<?=isset($pavillon_by_id[0]->id_pavillon) ? $pavillon_by_id[0]->nom_pavillon:'';?>">
                    <small class="erroor">
                    <?php echo isset($arrErrors['nom']) ? $arrErrors['nom']: '';?> 
                    </small>
                    </div>
                    <div class="form-controle">
                         <label for="">Numero pavillon</label>
                         <input type="text" id="email" name="numero" placeholder="Enter le numero de pavillon"value="<?=isset($pavillon_by_id[0]->id_pavillon) ? $pavillon_by_id[0]->num_pavillon:'';?>">
                         <small class="erroor">
                              <?php echo isset($arrErrors['numero']) ? $arrErrors['numero']: '';?> 
                         </small>
                    </div>
               </div>
               
               <div class="row">
                    <div class="form-controle">
                         <label for="">Nombre etages</label>
                         <input type="text" name="nombre" placeholder="Enter le nombre d'etage" value="<?=isset($pavillon_by_id[0]->id_pavillon) ? $pavillon_by_id[0]->nbr_etage:'';?>">
                         <small class="erroor">
                              <?php echo isset($arrErrors['nombre']) ? $arrErrors['nombre']: '';?> 
                         </small>
                    </div>
                    <div class="form-controle">
                         <label for="">Chambre disponible</label>
                         <?php foreach ($chambres as $chambre):?>
                        <label for=""><?=$chambre->num_chambre?></label>
                         <input type="checkbox" name="disponible[]" placeholder="Enter le nombre d'etage" value="<?=$chambre->id_chambre?>">
                         <?php endforeach ?>
                         <small class="erroor">
                              <?php echo isset($arrErrors['nombre']) ? $arrErrors['nombre']: '';?> 
                         </small>
                    </div>
               </div>
            <button type="submit" class="btn">Ajouter</button>
        </form>
    </div>