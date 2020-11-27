<?php

namespace App\Model;

use Core\Database;

class CreateSurveyModel extends Database
{
    /**
     * Insert survey in the database
     */
    public function createSurvey($title, $endDate, $answers)
    {
        // get author id if user is connected
        $userId = 0;
        if (array_key_exists('id', $_SESSION)) {
            $userId = $_SESSION['id'];
        }

        // insert survey infos
        $datas = array(
            "title" => $title,
            "authorPid" => $userId,
            "endDate" => $endDate
        );
        $this->prepare("INSERT INTO `surveys` (`title`, `author_pid`, `end_date`) VALUES (:title, :authorPid, :endDate)", $datas);
        
        // insert survey answers
        $surveyId = $this->getLastInsertId();
        foreach ($answers as $answer) {
            $datas = array(
                'surveyId' => $surveyId,
                'content' => $answer
            );
            $this->prepare("INSERT INTO `surveys_answers` (`survey_id`, `text`) VALUES (:surveyId, :content)", $datas);
        }
    }
}
