<?php

if(empty($_SESSION['user'])){
    header("Location: ./index.php");
}else if($_SESSION['user']->IdUsuario != 6){
    header("Location: ./index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/main.css">
  <title>World News</title>
</head>
<body>
<?php include 'partials/navbar.php'; ?>

  <section class="container">
    <div class="row">
      <div class="col-sm welcome">
        <h2>Gestión de artículos</h2>
      </div>
    </div>

    <hr>

    <button class="btn btn-dark" href="./../articles/new.php">Nuevo Artículo</button>

  <?php
    $db = new Client($conn);

    $db->loadPeriodista($_SESSION['user']->IdUsuario);

    for ($i = 0; $i < count($_SESSION['periodista']); $i++){

      $seccion = $db->loadSection($_SESSION['periodista'][$i]->IdSeccion);

      echo '<section class="new">';
      echo '<div class="row">';
        echo '<div class="col-sm-4">';
          echo '<img src="'.$_SESSION['periodista'][$i]->imagen.'" alt="imagen de noticias" class="img-fluid rounded">';
        echo '</div>';
        echo '<div class="col-sm-8">';
          echo '<a href="./detail.php" class="news-title"><h3>'.$_SESSION['periodista'][$i]->titulo.'</h3></a>';
          echo '<h5>'.$_SESSION['periodista'][$i]->subitituo.'</h5>';
          echo '<p>';
            echo $_SESSION['periodista'][$i]->texto;
          echo '</p>';
          echo '<div class="categories">';
            echo '<a href="#categoria" class="badge badge-danger">'.$seccion.'</a><br>';
            echo '<button class="btn btn-dark" style="margin-top: 10px">Modificar</button>';
            echo '<button class="btn btn-dark" style="margin-top: 10px; margin-left: 10px;">Eliminar</button>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
      echo '</section>';

    }


  ?>

    <hr>

  </section>

  <?php 
    include_once("./partials/footer.php");
  ?>

</body>
</html>