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

    </tr>
    <?php foreach ($users as $user):?>
 
 <tr>
   <td><?=$user->nom?></td>
   <td><?=$user->prenom?></td>
   <td><?=$user->email?></td>
   <td><?=$user->date_naissance?></td>
   <td><?=$user->adresse?></td>

 </tr>
<?php endforeach ?>   
  </table>
</div>
</div>




  

