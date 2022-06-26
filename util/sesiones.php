<?php


function  VerificarSesion(){

    if(session_status() == PHP_SESSION_NONE ){
        echo "NOoooo HAY SESION"; 
        
    }
}

function CrearSesion($u){
    
    $_SESSION["usuario"] = $u->username;
    $_SESSION['autenticado'] = TRUE;
    
}