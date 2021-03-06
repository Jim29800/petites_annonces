<?php 
try    
{
    $bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');;
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$annonce = $bdd->query('
select * from  users;
');

$monform = '
                <form  action="pages/ajout.php" method="post">
                    <h2>Déposer une nouvelle annonce</h2>
                    <div class="form-group">
                        <label for="titre">Votre titre</label>
                        <input class="form-control" type="text" name="titre" id="titre"  />
                    </div>
                    <div class="form-group">
                        <label for="prix">Votre prix</label>
                        <input class="form-control" type="number" name="prix" id="prix" />
                    </div>
                    <div class="form-group">
                        <label for="description">Votre description</label>
                        <input class="form-control" type="text" name="description" id="description" />
                    </div>
                    <div class="form-group">
                        <label for="utilisateur">Select list:</label>
                        <select class="form-control" id="utilisateur"   name="utilisateur">';
                            
                            while ($donnees = $annonce->fetch()) {
                                $monform .= "<option value='" .  $donnees['id_users'].  "'>".  $donnees['firstname']  . "</option>";
                            
                            };
                            
                            $monform .= '</select>
                    </div> 
                    <input type="submit" class="btn btn-primary" value="Ajouter un annonce">
                </form>';

                ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Ajouter un annonce
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Definir votre annonce</h4>
      </div>
      <div class="modal-body">
      <?= $monform ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
