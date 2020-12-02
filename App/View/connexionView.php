<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/connexionView.css"/>
    <title>Connexion</title>
</head>

<body>
    <header>
        <h1 style="color: blue;">Connexion</h1>
        <!-- header dupliqué partout juste pour la démo, on sait que c'est pas propre -->
        <nav>
            <ul>
                <li><a href="./">page accueil</a></li>
                <li><a href="?page=friends">page friends</a></li>
                <li><a href="?page=new">page créer un sondage</a></li>
                <li><a href="?page=profil">page profil</a></li>
                <li><a href="?page=register">page inscription</a></li>
                <li><a href="?page=login">page connexion</a></li>
            </ul>
        </nav>
        <hr>
    </header>

    <main>
        <form action="" method="POST">
            <div class="infoconnexion">
                <label for="name">Adresse Mail</label>
                <input class="reponseconnexion" type="text" name="email" placeholder="Adresse Mail">
            </div>
            <div class="infoconnexion">
                <label for="name">Mot de passe</label>
                <input class="reponseconnexion" type="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="connexion">
                <!-- <input type="button" name="actionConnexion" class="boutonconnexion" value="Connexion"> -->
                <button name="actionConnexion">Se connecter</button>
            </div>
            <a href="inscriptionView.php" class="pasinscrit">
                <p>Pas encore inscrit?</p>
            </a>
        </form>
    </main>
</body>

</html>