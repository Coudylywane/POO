<div class="tout">
  <div class="etu">
  <h2 >
    Liste des Chambres
  </h2>
  </div>
  <form action="<?=WEBROOT."chambre/listeChambre"?>" method="post">
    <div class="filtres">
        <label class="labele-filtre" for="">Pavillon</label>
          <div class="select-style">
            <select name="pav">
            <?php foreach ($chambres as $chambre):?>
                <option value="<?=$chambre->id_pavillon?>"><?=ucfirst($chambre->nom_pavillon)?></option>
              <?php endforeach ?>   
            </select>
          </div>
          <button type="submit" class="ok">OK</button>
    </div>
  </form>
<div class="tables">
  <table>
  <tr>
      <th scope="col">Numero Chambre</th>
      <th scope="col">Numero Etage</th>
      <th scope="col">Type Chambre</th>
      <th scope="col">Pavillon</th>
      <th scope="col">Action</th>
    </tr>
    <?php foreach ($chambres as $chambre):?>
 
 <tr>
   <td><?=$chambre->num_chambre?></td>
   <td><?=$chambre->num_etage?></td>
   <td><?=$chambre->nom_type_chambre?></td>
   <td><?=ucfirst($chambre->nom_pavillon)?></td>
   <td>
        <a href="<?= WEBROOT.'chambre/updateChambre/'.$chambre->id_chambre?>" class="modifier"> Modifier</a>
        <a href="<?= WEBROOT.'chambre/archiverChambre/'.$chambre->id_chambre?>" class="archiver"> Archiver</a>
   </td>

 </tr>
<?php endforeach ?>   
  </table>
</div>
</div>




  

