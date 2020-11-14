<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../public/css/profilView.css">
</head>

<body>

    <div class="content">
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
    </div>

</body>

</html>