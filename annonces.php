<?php
$nav = '
<li><a href="annonceurs.php">Annonceurs </a></li>
<li><a href="rubriques.php">Rubriques</a></li>
<li class="active"><a href="annonces.php">Annonces</a></li>
' ;
$header = '
Liste des annonces
' ;
    try    
        {
            $bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');;
        }
    catch (Exception $e)
        {        
            die('Erreur : ' . $e->getMessage());        
        }
    $annonce = $bdd->query('
    select id_ads, firstname, title, description,price 
    from ads
    INNER JOIN users ON ads.id_user = users.id_users;
        ');
    $section ="
        <span>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Réference de l'annonce</th>
                        <th>titre</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Vendeur</th>
                    </tr>
                </thead>
                <tbody>";
                while ($donnees = $annonce->fetch())
            {
            $section .="
                <tr>
                <td>" .  $donnees['id_ads'] . "</td>
                    <td>" .  $donnees['title'] . "</td>
                    <td>" .  $donnees['price'] . "€</td>
                    <td>" .  $donnees['description'] ."</td>
                    <td class='text-uppercase'>" . $donnees['firstname'] ."</td>
                </tr>";
            };
            $section .="
                </tbody>
            </table>
        </span>";
include("layout.php");
        ?>