<div class="tout">
<div class="filtre">
  <label for="">Chambre</label>
  <select class="form-control ml-4" name="etat" id="">
    <option value="valider">Une personne</option>
    <option value="en cour">Deux personnes</option>
  </select>
</div>
<div class="filtre">
  <label for="">Bourse</label>
  <select class="form-control ml-4" name="etat" id="">
    <option value="valider">Demie bourse</option>
    <option value="en cour">Bourse entiere</option>
  </select>
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




  

