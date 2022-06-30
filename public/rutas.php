<?php

require "../util/autoload.php";



Router::Add("/login", "get", NULL, "FormularioLogin");
Router::Add("/login", "post", "UsuarioControlador::Login", NULL);

Router::Add("/app/principal", "get", NULL, "Principal");

