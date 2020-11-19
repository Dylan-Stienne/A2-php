<?php

namespace App\Controller;

use App\Model\ProfilModel;

class ProfilController
{

    public function __construct()
    {
        $this->model = new ProfilModel();
    }

    public function render()
    {
        #$product = $this->model->query("SELECT * FROM products WHERE productCode = 'S10_1678'", true);
        require ROOT . "/App/View/profilView.php";
    }
}
