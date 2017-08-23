<?php
$nav = '
<li><a href="annonceurs.php">Annonceurs </a></li>
<li class="active"><a href="rubriques.php">Rubriques</a></li>
<li><a href="annonces.php">Annonces</a></li>
' ;
$header = '
    Les annonceurs
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
select * from  categories;
');
$section ="
<span>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>Réference de la rubrique</th>
                <th>Nom de la rubrique</th>
            </tr>
        </thead>
        <tbody>";
                while ($donnees = $annonce->fetch())
            {
                $section .="
                <tr>
                <td>" . $donnees['id_categories'] . "</td>
                    <td class='text-uppercase'>" . $donnees['title'] . "</td>
                </tr>";
            };
            $section .="
        </tbody>
    </table>
</span>";
include("layout.php");

?>