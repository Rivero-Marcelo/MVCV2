<?php 

require_once "../util/autoload.php";

class UsuarioControlador {


public static function Alta(){
    
    $u = new UsuarioModelo();
    $u -> username = $_POST['username'];
    $u -> password = $_POST['password']; 
    $u -> fechaHoraDeRegistro = date("Y-m-d H:i:s");
    $u -> Guardar();
}

public function Baja(){
    
    $u = new UsuarioModelo($_GET['id']);
    $u -> Eliminar();

}

public function Modificacion(){

    $u = new UsuarioModelo($_POST['id']);
    $u -> username = $_POST['username'];
    $u -> password = $_POST['password'];
    $u -> Actualizar();

}


public static function Login(){

    $u = new UsuarioModelo();
    $u -> username = $_POST['username'];
    $u -> password = $_POST['password'];

    
    
    if($acceso = $u -> VerificarCredenciales()){

        //gitCrearSesion($u);
        $u -> setFechaHoraDeLogin();
        VistaControlador::generarHTML("Principal");
        
    
    }else 
            header("Location: /index.php?aut=0");

}





}



