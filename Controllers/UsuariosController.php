<?php
use Models\Usuario;

include "Models/Conexion.php";
include "Models/Usuario.php";

class UsuariosController
{
    
    function __construct(){
        
    }

    public function buscarId(){
        $id = $_GET['id'];
        $usuario = Usuario::buscar($id);
        echo json_encode($usuario);
    }

    public function insertar(){

        $usuario = new Usuario();
        $usuario->nombre = "Armando";
        $usuario->edad = 21;
        $usuario->guardar();
        echo "Se realizo exitosamente la insercion";   
    }

    public function saludar(){
        echo "Hola tu nombre es " .$_GET["nombre"]. " y tu correo es " .$_GET["correo"]. ", tu edad es " .$_GET["edad"]. " años, tu telefono es " .$_GET["telefono"]. ", tu contraseña es " .$_GET["password"]. " por ultimo tu sexo es " .$_GET["sexo"];    
    }


    

    
}