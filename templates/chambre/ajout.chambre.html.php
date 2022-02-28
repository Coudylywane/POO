
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
<input type="hidden" name="id" value="<?=isset($chambre_by_id[0]->id_chambre) ? $chambre_by_id[0]->id_chambre:'';?>">
            <h2>AJOUT CHAMBRE</h2>
               <div class="row">
                 <div class="form-controle">
                    <label for="username">Numero Chambre</label>
                    <input type="text" id="username" name="num_chambre" placeholder="Enter le numero de la chambre" value="<?=isset($chambre_by_id[0]->num_chambre) ? $chambre_by_id[0]->num_chambre:'';?>">
                    <small class="erroor">
                    <?php echo isset($arrErrors['num_chambre']) ? $arrErrors['num_chambre']: '';?>  
                    </small>
                    </div>
                    <div class="form-controle">
                         <label for="">Numero Etage</label>
                         <input type="text" id="email" name="numero" placeholder="Enter le numero d'etage" value="<?=isset($chambre_by_id[0]->num_etage) ? $chambre_by_id[0]->num_etage:'';?>">
                         <small class="erroor">
                              <?php echo isset($arrErrors['numero']) ? $arrErrors['numero']: '';?> 
                         </small>
                    </div>
               </div>
               
               <div class="row">
                        <div class="form-controle">
                                <div>
                                <label for="">Type Chambre</label>
                                    <select name="type_chambre" id="" class="selecte-style">
                                        <option value="<?=isset($chambre_by_id[0]->id_chambre) ? $chambre_by_id[0]->id_type_chambre:''?>"><?=isset($chambre_by_id[0]->nom_type_chambre) ? $chambre_by_id[0]->nom_type_chambre:''?></option>
                                        <?php foreach ($type_chambres as $type_chambre):?>
                                        <option value="<?=$type_chambre->id_type_chambre?>" ><?=$type_chambre->nom_type_chambre?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                        </div>

                        <div class="form-controle">
                         <div>
                         <label for="">Pavillon</label>
                            <select name="pavillon" id="" class="selecte-style">
                                <option value="<?=isset($chambre_by_id[0]->id_chambre) ? $chambre_by_id[0]->id_pavillon:''?>"><?=isset($chambre_by_id[0]->nom_pavillon) ? $chambre_by_id[0]->nom_pavillon:''?></option>
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