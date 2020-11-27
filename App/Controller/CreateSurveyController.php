<?php

namespace App\Controller;

use App\Model\CreateSurveyModel;

class CreateSurveyController
{

    public function __construct()
    {
        $this->model = new CreateSurveyModel();
    }

    public function saveSurvey($datas)
    {
        if (array_key_exists("actionCreateSurvey", $datas)) {
            $answers = $this->model->formatAnswers($datas);
            $this->model->createSurvey($datas["title"], $datas["date"], $answers);
        }
    }

    public function render()
    {
        require ROOT . "/App/View/createSurveyView.php";
    }
}
