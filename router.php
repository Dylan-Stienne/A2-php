

<?php

//use App\Controller\OrderController;
//use App\Controller\ProductController;
//use App\Controller\AccueilController;
use App\Controller\RechercheController;


if (array_key_exists("page", $_GET)) {

    /* switch ($_GET["page"]) {
        case 'orders':
            $controller = new OrderController();
            break;
        case 'product':
            $controller = new ProductController();
            break;

        default:
            $controller = new OrderController();
            break;
    } */
} else {
    $controller = new RechercheController();
}
$controller->render();
