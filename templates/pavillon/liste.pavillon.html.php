<div class="tout">
  <div class="etu">
  <h2 >
    Liste des Pavillons
  </h2>
  </div>
  <!-- <div class="filtres">
  <label class="labele-filtre" for="">Chambre</label>
  <div class="select-style">
      <select>
          <option value="perso">Perso</option>
          <option value="double">Double</option>
      </select>
    </div>
    <label class="labele-filtre" for="">Bourse</label>
    <div class="select-style">
      <select>
          <option value="demi-bourse">Demi-Bourse</option>
          <option value="bourse-entier">Bourse-Entier</option>
      </select>
    </div>
    <button type="button" class="ok">OK</button>
  </div> -->
<div class="tables">
  <table>
  <tr>
      <th scope="col">Nom Pavillon</th>
      <th scope="col">Numero Pavillon</th>
      <th scope="col">Nombre d'etages</th>
      <th scope="col">Action</th>
    </tr>
    <?php foreach ($pavillons as $pavillon):?>
 
 <tr>
   <td><?=ucfirst($pavillon->nom_pavillon)?></td>
   <td><?=ucfirst($pavillon->num_pavillon)?></td>
   <td><?=ucfirst($pavillon->nbr_etage)?></td>
   <td>
        <a href="<?= WEBROOT.'pavillon/updatePavillon/'.$pavillon->id_pavillon?>" class="modifier" style="color:white;"> Modifier</a>
   </td>
 </tr>
<?php endforeach ?>   
  </table>
</div>
</div>




  

