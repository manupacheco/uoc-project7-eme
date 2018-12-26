<?php

  require_once("./database/database.php");
  require_once("./database/client.php");

  ini_set("display_errors", true);
  error_reporting(E_ALL);

  $id = $_GET['id'];

  $db = new Client($conn);

  $db->loadDetail($id);

  $author = $db->loadAuthor($_SESSION['details'][0]->autor);
  $seccion = $db->loadSection($_SESSION['details'][0]->IdSeccion);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>World News</title>
  </head>
  <body>
    <main>
      <?php include('partials/navbar.php'); ?>
      <article class="container">
        
        <div class="full-new">
          <div class="row">
            <div class="col-sm">

              <?php
                if(!empty($_SESSION['details'])){
              ?>
              <div class="image-new">
                <img class="rounded" src="<?php echo $_SESSION['details'][0]->imagen; ?>" alt="imagen de la noticia">
              </div>
              <?php
                } 
              ?>

              <div class="description-new">
                <h3><?php echo $_SESSION['details'][0]->titulo; ?></h3>
                <span class="author"><?php echo $author; ?> - <?php echo $_SESSION['details'][0]->fecha_publicacion; ?></span>
                <p>
                <?php echo $_SESSION['details'][0]->texto; ?>
                </p>
                <div class="categories">
                  <a href="#categoria" class="badge badge-danger"><?php echo $seccion; ?></a>
                </div>
              </div>

              
            </div>
          </div>

          <hr>

        </div>

      </article>
    </main>
    <?php include 'partials/footer.php'; ?>
  </body>
</html>