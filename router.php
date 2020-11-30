

<?php

use App\Controller\ProfilController;
use App\Controller\CreateSurveyController;
use App\Controller\Error404Controller;
use App\Controller\AccueilController;
use App\Controller\RegisterController;
use App\Controller\ConnexionController;


if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'profil':
            $controller = new ProfilController();
            $controller->render();
            break;
        case 'new':
            $controller = new CreateSurveyController();
            $controller->saveSurvey($_POST);
            $controller->render();
            break;
        case 'register':
            $controller = new RegisterController();
            $controller->createUser($_POST);
            $controller->render();
            break;
        case 'connexion':
            $controller = new ConnexionController();
            $controller->login($_POST);
            $controller->render();
            break;
        default:
            $controller = new Error404Controller();
            $controller->render();
            break;
    }
} else {
    $controller = new AccueilController();
    $controller->render();
}
