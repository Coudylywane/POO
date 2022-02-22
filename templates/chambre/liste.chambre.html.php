<div class="tout">
  <div class="etu">
  <h2 >
    Liste des Chambres
  </h2>
  </div>
  <div class="filtres">
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
  </div>
<div class="tables">
  <table>
  <tr>
      <th scope="col">Numero Chambre</th>
      <th scope="col">Numero Etage</th>
    </tr>
    <?php foreach ($chambres as $chambre):?>
 
 <tr>
   <td><?=$chambre->num_chambre?></td>
   <td><?=$chambre->num_etage?></td>

 </tr>
<?php endforeach ?>   
  </table>
</div>
</div>




  

