<?php

namespace App\Controller;

use App\Model\CreateSurveyModel;

class CreateSurveyController
{

    public function __construct()
    {
        $this->model = new CreateSurveyModel();
    }

    public function render()
    {
        #$product = $this->model->query("SELECT * FROM products WHERE productCode = 'S10_1678'", true);
        require ROOT . "/App/View/createSurveyView.php";
    }
}
