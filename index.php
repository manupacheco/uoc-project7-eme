<?php

  require_once("./database/database.php");
  require_once("./database/client.php");

  ini_set("display_errors", true);
  error_reporting(E_ALL);

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

  <article class="container">
    <div class="row">
      <div class="col-sm welcome">
        <h2>Gratissimum</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In auctor enim in turpis congue, vitae pellentesque tellus sodales. Duis fringilla facilisis libero, nec vulputate lorem sagittis ut. Nulla ac dui eget dolor tincidunt blandit. Mauris vestibulum nunc eros, sed dictum risus commodo nec. Pellentesque at odio ligula.
        </p>
      </div>
    </div>

    <hr>


  <?php
    $db = new Client($conn);

    //CARGA DE PÁGINA DE INICIO
    $db->loadNews();

    for ($i = 0; $i < count($_SESSION['news']); $i++){

      $seccion = $db->loadSection($_SESSION['news'][$i]->IdSeccion);

      echo '<section class="new">';
      echo '<div class="row">';
        echo '<div class="col-sm-4">';
          echo '<img src="'.$_SESSION['news'][$i]->imagen.'" alt="imagen de noticias" class="img-fluid rounded">';
        echo '</div>';
        echo '<div class="col-sm-8">';
          echo '<a href="./detail.php?id='.$_SESSION['news'][$i]->IdNoticia.'" class="news-title"><h3>'.$_SESSION['news'][$i]->titulo.'</h3></a>';
          echo '<h5>'.$_SESSION['news'][$i]->subitituo.'</h5>';
          echo '<p>';
            echo $_SESSION['news'][$i]->texto;
          echo '</p>';
          echo '<div class="categories">';
            echo '<a href="#categoria" class="badge badge-danger">'.$seccion.'</a>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
      echo '</section>';

    }
  ?>

    <hr>

  </article>

  <?php 
    include_once("./partials/footer.php");
  ?>

</body>
</html>