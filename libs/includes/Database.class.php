<?php

class Database
{
    public static $conn = null;
    public static function getConnection()
    {
        if (Database::$conn == null) {
            $servername = "mariadb.selfmade.ninja";
            $username = "PrabaKaran";
            $password = "Praba@lb2";
            $dbname = "PrabaKaran_SharePics";

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            } else {
                Database::$conn = $connection;
                return Database::$conn;
            }
        } else {
            return Database::$conn;
        }
    }
}
