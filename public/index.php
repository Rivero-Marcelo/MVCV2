<?php
require "../util/autoload.php";


$url = $_SERVER['REQUEST_URI'];
$metodo = $_SERVER['REQUEST_METHOD'];



var_dump($url);
var_dump($metodo);



switch($url){

    case "/login":

        if($metodo === "GET") VistaControlador::generarHTML("FormularioLogin");
        if($metodo === "POST") UsuarioControlador::Login();
        break;


    case "/app/usuarioAlta":

        if($metodo === "GET") VistaControlador::generarHTML("FormularioAltaUsuario");
        if($metodo === "POST") UsuarioControlador::Alta();
        break;

    default:

        echo "pero sos bobo";
        break;

}






