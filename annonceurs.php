<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annonceurs</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
    <header>
        <h1>Les annonceurs</h1>
    </header>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Accueil</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="annonceurs.php">Annonceurs <span class="sr-only">(current)</span></a></li>
            <li><a href="rubriques.php">Rubriques</a></li>
            <li><a href="annonces.php">Annonces</a></li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>

    <section>
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
        ?>
        <span>
            <table class="table">
                <thead>
                    <tr>
                        <th>Réference de l'utilisateur</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($donnees = $annonce->fetch())
            {
                ?>
                <tr>
                <td><?=  $donnees['id_users'] ?></td>
                    <td class="text-uppercase"><?=  $donnees['lastname'] ?></td>
                    <td class="text-capitalize"><?=  $donnees['firstname'] ?></td>
                </tr>
                <?php
            }
            ?>
                </tbody>
            </table>
        </span>
    </section>
    <footer>Merci de ne pas regarder mon code.</footer>
</body>
</html>