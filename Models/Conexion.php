<?php
namespace Models;
class Conexion
{
    public $con;
    function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "venta";
        $this->con = mysqli_connect($host,$user,$pass,$db);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }
}