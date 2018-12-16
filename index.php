<?php

  require_once("./database/database.php");
  require_once("./database/client.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>World News</title>
</head>
<body>

  <?php 
  
    $db = new Client($conn);

    //CARGA DE PÁGINA DE INICIO
    $db->loadNews();

    //FORMULARIO DE LOGIN
    $username = htmlspecialchars($POST['username']);
    $password = htmlspecialchars($POST['password']);

    if(isset($POST['login'])){
    
      if(empty($username)){
        $err = "*";
      }

      if(empty($password)){
        $err = "*";
      }

      if(empty($err)){

        $db->logIn($username, $password);

        if(empty($_SESSION['user'])){

          echo "USUARIO NO ENCONTRADO";

        }

      }

    }

    if(isset($POST['signin'])){

      header("Location: ./signin.php");

    }
  
  ?>

</body>
</html>