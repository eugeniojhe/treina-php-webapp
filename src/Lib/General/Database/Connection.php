<?php

namespace General\Database;
use PDO;
class Connection
{

    private function __construct(){}
    public static function open()
    {
        $host = getenv('DB_HOST');
        $user = getenv('DB_USER');
        $password = getenv('DB_PASSWORD');
        $db = getenv('DB_NAME');
        $conn = new PDO("mysql:host=$host;dbname=$db", $user,
            $password);
//        $conn->setAttribute(PDO::ATTR_ERRMODE,
//            PDO::ERRMODE_EXCEPTION);
//        echo '<h2>Conectado com sucesso.<h2>';

        $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        return $conn;


    }


}