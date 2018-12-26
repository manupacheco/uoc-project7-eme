<?php

if(empty($_SESSION['user'])){
    header("Location: ./index.php");
}else if($_SESSION['user']->IdUsuario != 5){
    header("Location: ./index.php");
}

?>