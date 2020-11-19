<?php
namespace App\Controller;

use App\Model\RechercheModel;

class RechercheController{

    public function __construct()
    {
        $this->model = new RechercheModel();
    }
    public function render(){
//        $orders = $this->model->query("SELECT * FROM orders");
        require ROOT."/App/View/rechercheView.php";
    }
}