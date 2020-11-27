<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau sondage</title>
    <link rel="stylesheet" href="../public/css/createSurveyView.css">
</head>

<body>
    <div class="content">
        <form action="?page=saveSurvey" method="POST">
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

            <button type="submit">Créer le sondage</button>
        </form>
    </div>

</body>

</html>