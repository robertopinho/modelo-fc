<?php

namespace App;

class Connection
{

    public static function getDb()
    {
        try {
            $conn = new \PDO(
                "mysql:host=localhost;dbname=facilconsulta;charset=utf8",
                "root",
                ""
            );
            return $conn;
        } catch (\PDOException $err) {
            echo '<p>' . $err->getMessage() . '</p>';
        }
    }
}
