<?php
  // require_once("./database/database.php");
  // require_once("./database/client.php");
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

  <?php
    // $db = new Client($conn);

    // //CARGA DE PÁGINA DE INICIO
    // $db->loadNews();

    // //FORMULARIO DE LOGIN
    // $username = htmlspecialchars($POST['username']);
    // $password = htmlspecialchars($POST['password']);

    // if(isset($POST['login'])){
    //   if(empty($username)){
    //     $err = "*";
    //   }
    //   if(empty($password)){
    //     $err = "*";
    //   }
    //   if(empty($err)){
    //     $db->logIn($username, $password);
    //     if(empty($_SESSION['user'])){
    //       echo "USUARIO NO ENCONTRADO";
    //     }
    //   }
    // }
    // if(isset($POST['signin'])){
    //   header("Location: ./signin.php");
    // }
  ?>
   
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

    <section class="new">
      <div class="row">
        <div class="col-sm-4">
          <img src="./assets/images/noticias.jpeg" alt="imagen de noticias" class="img-fluid rounded">
        </div>
        <div class="col-sm-8">
          <a href="./detail.php" class="news-title"><h3>Title nuntium</h3></a>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet blandit orci. Praesent vulputate leo velit, ac pulvinar augue sodales id. Integer gravida placerat ipsum et imperdiet. Proin at velit vitae ligula pharetra aliquet. Nulla facilisi. Mauris sollicitudin justo tortor, id hendrerit odio ultrices id. Ut eget risus laoreet, tempor libero vitae, accumsan felis. Praesent vulputate, risus in efficitur porttitor, neque magna porttitor ante, id scelerisque est nisi nec quam. Donec id ipsum odio. Fusce ut sem volutpat, elementum sapien ac, finibus nulla. Curabitur a accumsan elit.
          </p>
          <div class="categories">
            <a href="#categoria" class="badge badge-danger">Genus 1</a>
            <a href="#categoria" class="badge badge-danger">Genus 2</a>
            <a href="#categoria" class="badge badge-danger">Genus 3</a>
          </div>
        </div>
      </div>
    </section>

    <section class="new">
      <div class="row">
        <div class="col-sm-4">
          <img src="./assets/images/noticias.jpeg" alt="imagen de noticias" class="img-fluid rounded">
        </div>
        <div class="col-sm-8">
          <a href="./detail.php" class="news-title"><h3>Title nuntium</h3></a>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet blandit orci. Praesent vulputate leo velit, ac pulvinar augue sodales id. Integer gravida placerat ipsum et imperdiet. Proin at velit vitae ligula pharetra aliquet. Nulla facilisi. Mauris sollicitudin justo tortor, id hendrerit odio ultrices id. Ut eget risus laoreet, tempor libero vitae, accumsan felis. Praesent vulputate, risus in efficitur porttitor, neque magna porttitor ante, id scelerisque est nisi nec quam. Donec id ipsum odio. Fusce ut sem volutpat, elementum sapien ac, finibus nulla. Curabitur a accumsan elit.
          </p>
          <div class="categories">
            <a href="#categoria" class="badge badge-danger">Genus 1</a>
            <a href="#categoria" class="badge badge-danger">Genus 2</a>
            <a href="#categoria" class="badge badge-danger">Genus 3</a>
          </div>
        </div>
      </div>
    </section>

    <hr>

  </article>

  <?php 
    include_once("./partials/footer.php");
  ?>

</body>
</html>