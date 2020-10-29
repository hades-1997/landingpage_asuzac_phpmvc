<?php

class Database
{
    public $con;
    public $servername = "localhost";
    public $database = "mvc";
    public $username = "root";
    public $password = "";

    function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username,$this->password);
        mysqli_select_db($this->con, $this->database);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }
}