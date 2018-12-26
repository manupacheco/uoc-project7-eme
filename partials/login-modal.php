<?php

  if(isset($_POST['post'])){

    $nombre = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    $db = new Client($conn);

    $value = $db->logIn($nombre, $password);

    if($value == TRUE){
      echo "<script>window.location = './control.php'</script>";
    }else{
      $loginErr = "Usuario no encontrado";
    }
  }

?>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" name="name" id="inputText" aria-describedby="emailHelp" placeholder="Introduce nombre">
          </div>
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Contraseña">
          </div>
          <button name="post" type="submit" class="btn btn-danger">Login</button>
          <?php if(!empty($loginErr)){
            echo "<div class='form-group'>
              <label style='color: red'>".$loginErr."</label>
            </div>";
          } ?>
        </form>
      </div>
    </div>
  </div>
</div>