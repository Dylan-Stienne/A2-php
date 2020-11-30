<?php
namespace App\Model;

use Core\Database;

class ConnexionModel extends Database{

    public function connexion($email, $password)
    {
        $datas = array(
            "email" => $email,
            "password" => password_hash($password, PASSWORD_BCRYPT)
        );
        try {
            echo("0");
            $info = $this->query("SELECT email, password FROM users WHERE email = :email", $datas);
            echo("1");
            $result = $info->fetch();
            echo("2");
            var_dump($result);
            echo("3");
        } catch (\PDOException $e){
            echo("erreur");
        }
    }
}