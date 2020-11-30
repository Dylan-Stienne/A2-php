<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/connexion.css" />
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion</h1>
    <form method="POST">
        <div class="infoconnexion">
            <label for="name">Adresse Mail</label>
            <input class="reponseconnexion" type="text" name="mail" placeholder="Adresse Mail">
        </div>
        <div class="infoconnexion">
            <label for="name">Mot de passe</label>
            <input class="reponseconnexion" type="password" name="password" placeholder="Mot de passe">
        </div>
        <div class="connexion">
            <input type="button" class="boutonconnexion"  name="actionConnexion" value="Connexion">
        </div>
        <a href="inscriptionView.php" class="pasinscrit">
            <p>Pas encore inscrit?</p>
        </a>
        </div>
    </form>
</body>

</html>