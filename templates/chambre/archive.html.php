<div class="tout">
  <div class="etu">
  <h2 >
    Liste des Chambres archiver
  </h2>
  </div>
  <div class="filtres">
  <label class="labele-filtre" for="">Pavillon</label>
  <div class="select-style">
      <select>
      <?php foreach ($chambres as $chambre):?>
          <option value="<?=$chambre->id_pavillon?>"><?=ucfirst($chambre->nom_pavillon)?></option>
        <?php endforeach ?>   
      </select>
    </div>
    <button type="button" class="ok">OK</button>
  </div>
<div class="tables">
  <table>
  <tr>
      <th scope="col">Numero Chambre</th>
      <th scope="col">Numero Etage</th>
      <th scope="col">Type Chambre</th>
      <th scope="col">Pavillon</th>
      <th scope="col">Etat</th>
      <th scope="col">Action</th>
    </tr>
    <?php foreach ($chambres as $chambre):?>
 
 <tr>
   <td><?=$chambre->num_chambre?></td>
   <td><?=$chambre->num_etage?></td>
   <td><?=$chambre->nom_type_chambre?></td>
   <td><?=ucfirst($chambre->nom_pavillon)?></td>
   <td><?=ucfirst($chambre->etat)?></td>
  
 </tr>
<?php endforeach ?>   
  </table>
</div>
</div>