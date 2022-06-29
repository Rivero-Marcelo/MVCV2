<?php


Router::Add("/login", "get", "FormularioLogin");
Router::Add("/login", "post", UsuarioControlador::Login());

