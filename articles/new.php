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
        <h2>Artículo nuevo</h2>
      </div>
    </div>

    <hr>

    <form method="post">

        <input type="text" name="title" >

    </form>

<?php include_once("./partials/footer.php"); ?>

</body>
</html>