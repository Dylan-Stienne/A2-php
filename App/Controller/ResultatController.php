<?php
namespace App\Controller;

use App\Model\ResultatModel;

class ResultatController{

    public function __construct()
    {
        $this->model = new ResultatModel();
    }

    public function render(){
        $orders = $this->model->query("SELECT * FROM orders");
        require ROOT."/App/View/resultatView.php";
    }
}