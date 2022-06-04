<?php

class database
{
    public $conn;

    public function __construct()
    {
        // $this->conn = mysqli_connect('localhost', 'root', '', 'hostel');
        // if (!$this->conn) {
        //     echo 'failed';
        // }

        try {
            $this->conn = new PDO('mysql:host='.Config::get("DB_HOST").';dbname='.Config::get("DB_NAME").'', ''.Config::get("DB_USER").'', ''.Config::get("DB_PASS").'');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<h1 style="color:red;">ERROR: Failed to connect  Database</h1>';
            // var_dump($this->conn);
        }
    }
}
