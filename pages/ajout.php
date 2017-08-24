
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

$section = '
        <div class="container">
            <div class="col-sm-offset-3 col-sm-6">
                <form  action="ajout.php" method="post">
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
                                $section .= "<option value='" .  $donnees['id_users'].  "'>".  $donnees['firstname']  . "</option>";
                            
                            };
                            
                            $section .= '</select>
                    </div> 
                    <input type="submit" class="btn btn-primary" value="Ajouter un annonce">
                </form>
            </div>
        </div>';



$sql = '
INSERT INTO ads (title, price, description, id_user)VALUES
("' . $_POST["titre"] . '",' . (float)$_POST["prix"] . ',"' . $_POST["description"] . '",' . (int)$_POST["utilisateur" ]. ');
';
$bdd->exec($sql);
header('Location: http://localhost/private/annonce-immo/index.php?p=annonces');
exit();
?>