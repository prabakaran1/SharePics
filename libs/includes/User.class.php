<?php

class User
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $pass = md5(strrev(md5($pass))); // security through obscurity
        $conn = Database::getConnection();
        $sql = "INSERT INTO `signup` (`username`, `password`, `email`, `phone`, `active`, `blocked`, `time`)
        VALUES ('$user', '$pass', '$email', '$phone', '1', '0', now());";
        try {
            $result = $conn->query($sql);
            if($result) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Error: " . $conn->error;
            return false;
        } finally {
            $conn->close();
        }
    }

    public function __construct($username)
    {
        $this->conn = Database::getConnection();
        $this->conn->query();
    }

    public static function login($user, $pass)
    {
        $pass = md5(strrev(md5($pass)));
        $query = "SELECT * FROM `signup` WHERE `username` = '$user'";
        $conn = Database::getConnection();
        $result = $conn->query($query);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($row['password'] == $pass) {
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function authenticate()
    {
    }

    public function setBio()
    {
    }

    public function getBio()
    {
    }

    public function setAvatar()
    {
    }

    public function getAvatar()
    {
    }
}
