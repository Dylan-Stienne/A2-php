<?php
namespace App\Controller;

use App\Model\ConnexionModel;

class ConnexionController{

    public function __construct()
    {
        $this->model = new ConnexionModel();
    }

    public function render(){
        $orders = $this->model->query("SELECT * FROM orders");
        require ROOT."/App/View/connexionView.php";
    }
}