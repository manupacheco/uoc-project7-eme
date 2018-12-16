<?php 

session_start();

if(empty($_SESSION['user'])){
    header("Location: ./index.php");
}

switch($_SESSION['user']->IdTipousuario){

    case 0:
        require_once("./usuarios/administrador.php");
        break;
    
    case 1:
        require_once("./usuarios/editor.php");
        break;

    case 2:
        require_once("./usuarios/periodista.php");
        break;
    
    default:
        //GESTIÓN DE ERRORES
        break;

}

?>