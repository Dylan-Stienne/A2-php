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
        // init answers list
        $answers = [];

        // generate list from datas
        $nb = 1;
        while (array_key_exists("answer_" . $nb, $datas)) {
            array_push($answers, $datas["answer_" . $nb]);
            $nb++;
        }

        // insert
        if (array_key_exists("title", $datas) && array_key_exists("date", $datas)) {
            $this->model->createSurvey($datas["title"], $datas["date"], $answers);
        }
    }

    public function render()
    {
        require ROOT . "/App/View/createSurveyView.php";
    }
}
