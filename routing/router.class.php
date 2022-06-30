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



public static function evaluarRuta($resultado){

    if($resultado['metodo'] === 'get') VistaControlador::mostrarPagina($resultado['vista'],null); 
    

    //var_dump($resultado);die();

}




public static function Run(){

    $resultado = self::BuscarRuta();

    if($resultado === NULL) VistaControlador::notFound();
    
    self::evaluarRuta($resultado);
    
    //return $resultado;
 

}




}