<?php
$nav = '
<li><a href="?p=annonceurs">Annonceurs </a></li>
<li><a href="?p=rubriques">Rubriques</a></li>
<li class="active"><a href="?p=annonces">Annonces</a></li>
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
    INNER JOIN users ON ads.id_user = users.id_users
    ORDER BY id_ads;
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
?>