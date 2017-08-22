<?php
$nav = '
<li class="active"><a href="annonceurs.php">Annonceurs </a></li>
<li><a href="rubriques.php">Rubriques</a></li>
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
select * from  users;
');
$section ="
<span>
    <table class='table'>
        <thead>
            <tr>
                <th>Réference de l'utilisateur</th>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
        </thead>
        <tbody>";
        while ($donnees = $annonce->fetch())
    {
        $section .="
        <tr>
        <td>" . $donnees['id_users'] . "</td>
            <td class='text-uppercase'>" . $donnees['lastname'] . "</td>
            <td class='text-capitalize'>" . $donnees['firstname'] . "</td>
        </tr>";
    };  
    $section .="
        </tbody>
    </table>
</span>";
include("layout.php");

?>