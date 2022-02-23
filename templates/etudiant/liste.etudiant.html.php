<div class="tout">
  <div class="etu">
  <h2 >
    Liste des Etudiants
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
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Login</th>
      <th scope="col">Date de Naissance</th>
      <th scope="col">Adresse</th>
      <th scope="col">Type Bourse</th>
      <th scope="col">Type Chambre</th>

    </tr>
    <?php foreach ($users as $user):?>
 
 <tr>
    <td><?=ucfirst($user->prenom)?></td>
    <td><?=ucfirst($user->nom)?></td>
    <td><?=ucfirst($user->email)?></td>
    <td><?=ucfirst($user->date_naissance)?></td>
    <td><?=ucfirst($user->adresse)?></td>
    <td><?=ucfirst($user->type_bourse)?></td>
    <td><?=ucfirst($user->num_chambre)?></td>

 </tr>
<?php endforeach ?>   
  </table>
</div>
</div>




  

