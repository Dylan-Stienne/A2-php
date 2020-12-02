<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/accueilView.css">

    <title>Document</title>
</head>

<body>
    <header>
        <h1 style="color: blue;">Accueil</h1>
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

    <main class="centre">
        <button id="button-logout">Me déconnecter</button>
        <h2 class="titre">Sondages en cours des amis</h2>
        <section class="sondages">
            <ul id="friends-surveys"></ul>
        </section>

        <h2 class="titre">Sondages de l'utilisateur</h2>
        <section class="sondages">
            <ul id="my-surveys"></ul>
        </section>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/accueilView.js"></script>
</body>

</html>