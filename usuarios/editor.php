<?php

session_start();

if(empty($_SESSION['user'])){
    header("Location: ./index.php");
}else if($_SESSION['user']->IdTipousuario != 1){
    header("Location: ./index.php");
}

?>