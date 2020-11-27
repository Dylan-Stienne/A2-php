

<?php

use App\Controller\ProfilController;
use App\Controller\CreateSurveyController;
use App\Controller\Error404Controller;
use App\Controller\AccueilController;

if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'profil':
            $controller = new ProfilController();
            $controller->render();
            break;
        case 'new':
            $controller = new CreateSurveyController();
            $controller->render();
            break;
        case 'saveSurvey':
            $controller = new CreateSurveyController();
            $controller->saveSurvey($_POST);
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
