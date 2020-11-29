<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/connexion.css" />
    <title>Inscription</title>
</head>

<body>
    <header>
        <h1 style="color: blue;">Inscription</h1>
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
                <label for="username">Pseudo</label>
                <input class="reponseconnexion" type="text" name="username" placeholder="Pseudo" required>
            </div>
            <div class="infoconnexion">
                <label for="email">Adresse Mail</label>
                <input class="reponseconnexion" type="text" name="email" placeholder="Adresse Mail" required>
            </div>
            <div class="infoconnexion">
                <label for="password">Mot de passe</label>
                <input class="reponseconnexion" type="password" name="password" placeholder="Mot de passe" required>
            </div>
            <div class="connexion">
                <button name="actionSaveUser">S'inscrire</button>
            </div>
        </form>
    </main>

</body>

</html>