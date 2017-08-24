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
    $bdd->query("
    DELETE FROM annonces_immo.ads WHERE id_ads='" . $_GET["val"]  . "';
        ");
        header('Location: http://localhost/private/annonce-immo/index.php?p=annonces');
        exit();
?>