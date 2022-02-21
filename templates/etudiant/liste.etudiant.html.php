 

  <div class="container mt-5 ">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Login</th>
      <th scope="col">Date de Naissance</th>
      <th scope="col">Adresse</th>

    </tr>
  </thead>
  <tbody>
<?php foreach ($users as $user):?>
 
    <tr>
      <td><?=$user->nom?></td>
      <td><?=$user->prenom?></td>
      <td><?=$user->email?></td>
      <td><?=$user->date_naissance?></td>
      <td><?=$user->adresse?></td>

    </tr>
<?php endforeach ?>   
    
  </tbody>
</table>
  </div>

  

