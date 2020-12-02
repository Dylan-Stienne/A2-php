<?php
namespace App\Model;

use Core\Database;

class ResultatModel extends Database{

    public function getResult($response){
        $datas = array(
            "rep" => $response
        );
        $req = $this->query("SELECT id, `text` FROM surveys_answers WHERE rep = :response", $datas, true);
        echo json_encode($req);
        return $req;
    }
}