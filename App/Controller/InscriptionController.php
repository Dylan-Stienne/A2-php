<?php
namespace App\Controller;

use App\Model\InscriptionModel;

class InscriptionController{

    public function __construct()
    {
        $this->model = new InscriptionModel();
    }

    public function render(){
        $orders = $this->model->query("SELECT * FROM orders");
        require ROOT."/App/View/inscriptionView.php";
    }
}