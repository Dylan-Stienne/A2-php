<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/connexion.css"/>
    <title>Inscription</title>
</head>

<body>
    <h1>Inscription</h1>
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
</body>

</html>