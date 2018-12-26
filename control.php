<?php 

require_once("./database/database.php");
require_once("./database/client.php");

ini_set("display_errors", true);
error_reporting(E_ALL);

if(empty($_SESSION['user'])){
    header("Location: ./index.php");
}

switch($_SESSION['user']->IdUsuario){

    case 4:
        require_once("./usuarios/administrador.php");
        break;
    
    case 5:
        require_once("./usuarios/editor.php");
        break;

    case 6:
        require_once("./usuarios/periodista.php");
        break;
    
    default:
        //GESTIÓN DE ERRORES
        break;

}

?>