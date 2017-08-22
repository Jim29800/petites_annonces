<?php

try    
{
    $bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');;
}
catch (Exception $e)
{        
    die('Erreur : ' . $e->getMessage());        
}

$sql = '
INSERT INTO ads (title, price, description, id_user)VALUES
("' . $_POST["titre"] . '",' . (float)$_POST["prix"] . ',"' . $_POST["description"] . '",' . (int)$_POST["utilisateur"]. ');
';
$bdd->exec($sql);
header('Location: http://localhost/private/annonce-immo/annonces.php');
exit();
?>