<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/resultat.css" />
    <title>Résultat</title>
</head>

<body>
    <header>
        <h1 style="color: blue;">Résultat d'un sondage</h1>
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

    <main class="sondage">
        <h2>Titre du sondage</h2>
        <div class="radio">
            <input type="radio" id="volley" name="sport" value="volley">
            <label for="volley">Volley</label>
            <p>60%</p>
        </div>
        <div class="radio">
            <input type="radio" id="basket" name="sport" value="basket">
            <label for="basket">Basket</label>
            <p>30%</p>
        </div>
        <div class="radio">
            <input type="radio" id="baseball" name="sport" value="baseball">
            <label for="baseball">Baseball</label>
            <p>10%</p>
        </div>
    </main>
</body>

</html>