<?php
namespace App\Controller;

use App\Model\AccueilModel;

class AccueilController{

    public function __construct()
    {
        $this->model = new AccueilModel();
    }
    public function render(){
//        $orders = $this->model->query("SELECT * FROM orders");
        require ROOT."/App/View/accueilView.php";
    }
}