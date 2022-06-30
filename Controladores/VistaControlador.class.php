<?php


require "../util/autoload.php";

class VistaControlador {



    //public  static function generarHTML($pagina){

      //  self::mostrarPagina($pagina);


    //}


    public static function mostrarPagina($pagina, $parametros){

        return require "../Vistas/$pagina.php" ; 

       // header("Location: /$pagina.php");


    }



    public static function notFound(){

      header("HTTP/1.0 404 Not Found");
        echo "404";
        die();

    }








}