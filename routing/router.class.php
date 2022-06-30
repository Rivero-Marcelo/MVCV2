<?php

class Router {

    
    public static $rutas = array();
    private static $urlActual;
    private static $metodoActual;
    

public static function Add($url, $metodo, $funcion, $vista){

    array_push(self::$rutas, [  
        'url' => $url,
        'metodo' => $metodo,
        'funcion' => $funcion,
        'vista' => $vista
    ]);
   
}


public static function BuscarRuta(){

    self::$urlActual = $_SERVER['REQUEST_URI'];
    self::$metodoActual = strtolower($_SERVER['REQUEST_METHOD']);

    foreach(self::$rutas as $ruta){

        if(in_array(self::$urlActual, $ruta) && self::$metodoActual === $ruta['metodo']){ 
            
            return $ruta;       
        }
    
    }
    
    return NULL;
}



public static function evaluarMetodo($resultado){

    if($resultado['metodo'] === 'get') return true;
    return false;
    

}


public static function Run(){

    $resultado = self::BuscarRuta();

    if($resultado === NULL) VistaControlador::notFound();

    self::evaluarMetodo($resultado) ? self::cargarVista($resultado['vista']) : 
    self::cargarControlador($resultado['funcion']);

}


private static function cargarVista($vista){

    VistaControlador::mostrarPagina($vista,null);

}


private static function cargarControlador($funcion){

    $contexto = [
        'get' => $_GET,
        'post' => $_POST,
        'server' => $_SERVER,
        'session' => $_SESSION
    ];

    call_user_func($funcion,$contexto);

}



}