<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'partials/css-imports.php'; ?>
    <title>World News</title>
  </head>
  <body>
    <main>
      <?php include 'partials/navbar.php'; ?>
      <content class="container product-detail">
        <div class="title-detail">
          <h1>Noticia</h1>
          <button class='btn btn-outline-dark'>...</button>
        </div>
        <div class="images-detail row">
          <div class="col-sm">
            <img class="col-sm" src='https://images.unsplash.com/photo-1527527753602-fb58e749276a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef70f382036e43544a8b3303363adb03&auto=format&fit=crop&w=3350&q=80' alt='foto'>
          </div>
          <div class="col-sm">
            <img class="col-sm" src='https://images.unsplash.com/photo-1527527753602-fb58e749276a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef70f382036e43544a8b3303363adb03&auto=format&fit=crop&w=3350&q=80' alt='foto'>
          </div>
          <div class="col-sm">
            <img class="col-sm" src='https://images.unsplash.com/photo-1527527753602-fb58e749276a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef70f382036e43544a8b3303363adb03&auto=format&fit=crop&w=3350&q=80' alt='foto'>
          </div>  
        </div>
        <div class="welcome-info">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit corrupti iusto expedita delectus illo obcaecati eaque error, veritatis aliquid et sed accusamus a temporibus, numquam aperiam, nostrum exercitationem facilis culpa.
        </div>
        <div class='stars'>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='far fa-star'></i>
        </div>
        <div class="comments">
          <?php 
            foreach (['Uno', 'Dos', 'Tres'] as $comment){
              echo "<div class='comment'>";
              echo  "<div></div>";
              echo  "<div class='comment-detail'></div>";
              echo "</div>";
            }
          ?>
        </div>
      </content>
    </main>
    <?php include 'partials/footer.php'; ?>
  </body>
</html>