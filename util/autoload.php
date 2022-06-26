<?php

spl_autoload_register(function ($clase){        
        if(file_exists("../Modelos/$clase.class.php"))
            require "../Modelos/$clase.class.php";    


        if(file_exists("../Controladores/$clase.class.php"))
            require "../Controladores/$clase.class.php";        
    });

    //(require_once $_SERVER['DOCUMENT_ROOT'] . "/util/sesiones.php";
    require_once "../util/config.php";