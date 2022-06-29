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








}