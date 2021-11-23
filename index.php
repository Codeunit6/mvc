<?php
if(isset($_GET["controller"]) && isset($_GET["action"])){
    $controller = $_GET["controller"];
    $action = $_GET["action"];
    $clase = $controller . "Controller";
    // UsuariosController
    require_once("Controllers/" .$clase . ".php");    
    $instance = new $clase();
    $instance->{$action}();
}else{
    echo "Error en la petición";
}
// PerroController.php
// AnimalController.php