<div class="tout">
  <div class="etu">
  <h2 >
    Liste des Etudiants
  </h2>
  </div>
  <form action="<?=WEBROOT."etudiant/liste"?>" method="post" >
    <div class="filtres">
        <label class="labele-filtre" for="">Chambre</label>
          <div class="select-style">
                <select name="chambre_type">
                <option value="null">Choisir</option>
                    <option value="loge">loge</option>
                    <option value="non_loge">Non loge</option>
                </select>
          </div>
        <label class="labele-filtre ml-2" for="">Bourse</label>
          <div class="select-style">
              <select name="bourse_type">
                  <option value="null">Choisir</option>
                  <option value="boursier">Boursier</option>
                  <option value="non_boursier">Non Boursier</option>
              </select>
          </div>
              <button type="submit" class="ok" name="filtre">OK</button>
    </div>
  </form>
      
   
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
        <td><?=ucfirst($user->nom_type_chambre)?></td>
        <!-- WEBROOT."etudiant/ajoutEtudiants" -->

      </tr>
    <?php endforeach ?>   
  </table>
</div>
</div>




  

