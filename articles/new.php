<?php

require_once("./../database/database.php");
require_once("./../database/client.php");

if(empty($_SESSION['user'])){
    header("Location: ./../index.php");
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
<?php include './../partials/navbar.php'; 

    $imgTmp = $_FILES['file']['tmp_name'];
    $img = $_FILES['file']['name'];

    if(isset($_POST['submit'])){
        
        
        move_uploaded_file($imgTmp, "./../assets/images/".$img);


    }
?>

<section class="container">
    <div class="row">
      <div class="col-sm welcome">
        <h2>Artículo nuevo</h2>
      </div>
    </div>

    <hr>

    <div class="container">
        <div class="row">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="title" id="title" class="form-control" placeholder="<?php if(empty($titleErr)){ echo "Título";} else { echo "Introduzca un título";} ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="subtitle" id="subtitile" class="form-control" placeholder="<?php if(empty($subtitleErr)){ echo "Subtítulo";} else { echo "Introduzca un subtítulo";} ?>">
                </div>
                <div class="form-group">
                    <textarea name="text" id="text" class="form-control"><?php if(empty($textErr)){ echo "Text";} else { echo "Introduzca un título";} ?></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="file">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Subir</button>
            </form>
        </div>
    </div>
</section>

<?php include_once("./../partials/footer.php"); ?>

</body>
</html>