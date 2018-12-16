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
  <?php include 'partials/css-imports.php'; ?>
  <title>World News</title>
</head>
<body>

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

  <main>
    <?php include 'partials/navbar.php'; ?>
    <content class="container">
      <div class="welcome-info">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit corrupti iusto expedita delectus illo obcaecati eaque error, veritatis aliquid et sed accusamus a temporibus, numquam aperiam, nostrum exercitationem facilis culpa.
      </div>
        <ul>
        <?php 
          foreach (['Uno', 'Dos', 'Tres'] as $news){
            echo "<li class='row news'>";
            echo  "<div class='news-image col-sm'>";
            echo   "<img src='https://images.unsplash.com/photo-1527527753602-fb58e749276a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef70f382036e43544a8b3303363adb03&auto=format&fit=crop&w=3350&q=80' alt='foto'>";
            echo  "</div>";
            echo  "<div class='news-info col-sm'>";
            echo    "<h3><a href='detail.php'>Noticia " . $news ."</a></h3>";
            echo    "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, itaque. Officiis similique consequuntur quibusdam libero. Enim numquam iure maiores, deleniti ut, aliquid ea ducimus consequuntur consectetur amet magni voluptate deserunt?</p>";
            echo    "<div class='rate'>";
            echo      "<div class='stars'>";
            echo        "<i class='fas fa-star'></i>";
            echo        "<i class='fas fa-star'></i>";
            echo        "<i class='fas fa-star'></i>";
            echo        "<i class='fas fa-star'></i>";
            echo        "<i class='far fa-star'></i>";
            echo      "</div>";
            echo      "<button class='btn btn-outline-dark'>...</button>";
            echo    "</div>";
            echo  "</div>";
            echo "</li>";
          }
        ?>
      </ul>
    </content>
  </main>
  <?php include 'partials/footer.php'; ?>
</body>
</html>