<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../public/css/profilView.css">
</head>

<body>
    <header>
        <h1 style="color: blue;">Profil</h1>
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

    <main class="content">
        <form action="">
            <div class="field">
                <label for="userName">Pseudo: </label>
                <input type="text" id="userName" name="userName">
            </div>
            <div class="field">
                <label for="firstName">Prénom: </label>
                <input type="text" id="firstName" name="firstName">
            </div>
            <div class="field">
                <label for="lastName">Nom: </label>
                <input type="text" id="lastName" name="lastName">
            </div>
            <div class="field">
                <label for="birthDate">Date de naissance: </label>
                <input type="date" id="birthDate" name="birthDate">
            </div>
            <div class="field">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email">
            </div>
            <label for="password">Changer mon mot de passe: </label>
            <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">
            <input type="password" name="confirm-password" placeholder="Comfirmer le nouveau mot de passe">

            <button type="submit">Enregistrer</button>
        </form>
    </main>

</body>

</html>