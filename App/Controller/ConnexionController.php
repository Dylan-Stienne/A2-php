<?php
namespace App\Controller;

use App\Model\ConnexionModel;

class ConnexionController{

    public function __construct()
    {
        $this->model = new ConnexionModel();
    }

    public function login($datas){
        if (array_key_exists("actionConnexion", $datas)) {
            $this->model->connexion($datas["email"], $datas["password"]);
        }
    }

    public function render(){
        require ROOT."/App/View/connexionView.php";
    }
}