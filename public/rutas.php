<?php

require "../util/autoload.php";



Router::Add("/login", "get", null, "FormularioLogin");
Router::Add("/login", "post", "UsuarioControlador::Login", null);

Router::Add("/logout", 'get', "logout", null);

Router::Add("/app/principal", "get", null, "Principal");

