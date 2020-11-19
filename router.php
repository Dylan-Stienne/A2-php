

<?php

use App\Controller\ProfilController;
use App\Controller\CreateSurveyController;
use App\Controller\Error404Controller;

if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'profil':
            $controller = new ProfilController();
            break;
        case 'new':
            $controller = new CreateSurveyController();
            break;
        default:
            $controller = new Error404Controller();
            break;
    }
} else {
    $controller = new Error404Controller();
}
$controller->render();
