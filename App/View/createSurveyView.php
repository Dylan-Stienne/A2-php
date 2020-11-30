<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau sondage</title>
    <link rel="stylesheet" href="../public/css/createSurveyView.css">
</head>

<body>
    <header>
        <h1 style="color: blue;">Créer un sondage</h1>
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
        <form action="?action=create-survey" method="POST">
            <div class="field">
                <label for="title">Title: </label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="field">
                <label for="date">Date: </label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="field">
                <label for="answer_1">Réponse 1: </label>
                <input type="text" id="answer_1" name="answer_1">
            </div>
            <div class="field">
                <label for="answer_2">Réponse 2: </label>
                <input type="text" id="answer_2" name="answer_2">
            </div>
            <div class="field">
                <label for="answer_3">Réponse 3: </label>
                <input type="text" id="answer_3" name="answer_3">
            </div>
            <div class="field">
                <label for="answer_4">Réponse 4: </label>
                <input type="text" id="answer_4" name="answer_4">
            </div>

            <button name="actionCreateSurvey">Créer le sondage</button>
        </form>
    </main>

</body>

</html>