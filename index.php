<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur la page d'accueil de votre site d'annonces</h1>
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
            <li><a href="annonceurs.php">Annonceurs </a></li>
            <li><a href="rubriques.php">Rubriques</a></li>
            <li><a href="annonces.php">Annonces</a></li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <section>

    <form action="ajout.php" method="post">
        <ul>
            <li>
                <label for="titre">Votre titre</label>
                <input type="text" name="titre" id="titre"  />
            </li><li>
                <label for="prix">Votre prix</label>
                <input type="number" name="prix" id="prix" />
            </li><li>
                <label for="description">Votre description</label>
                <input type="text" name="description" id="description" />
            </li><li>
            <label for="utilisateur">Choix de l'utilisateur</label>
                <input type="number" name="utilisateur" id="utilisateur" />
            </li><li>
            <input type="submit" value="OK">
            </li>
        </ul>
    </form>



    </section>
</body>
</html>