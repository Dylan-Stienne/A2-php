<?php

namespace App\Model;

use Core\Database;

class ConnexionModel extends Database
{

    public function connexion($email, $password)
    {
        $datas = array(
            "email" => $email,
            "_password" => hash("sha256", $password)
        );
        $info = $this->query("SELECT id FROM users WHERE email = :email AND `password` = :_password", $datas, true);
        if (array_key_exists("id", $info)) {
            $_SESSION["id"] = $info->id;
            $datas = array("id" => $info->id);
            $this->prepare("UPDATE users SET is_connected = 1 WHERE id = :id", $datas);
            header('Location: ./');
        }
    }
}
