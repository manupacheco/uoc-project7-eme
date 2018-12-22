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

              <div class="image-new">
                <img class="rounded" src="./assets/images/noticias.jpeg" alt="imagen de la noticia">
              </div>

              <div class="description-new">
                <h3>Title nuntium</h3>
                <span class="author">Auctor - 16/11/2018</span>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dui non massa fringilla, in dignissim lectus interdum. Maecenas vitae dui sit amet risus ullamcorper volutpat non et augue. Aliquam erat volutpat. Integer lectus mauris, scelerisque sed turpis in, pharetra tincidunt arcu. Integer facilisis orci vitae turpis fringilla, in tempor dui tincidunt. Etiam vehicula ante felis, vitae molestie est molestie sit amet. Etiam ornare volutpat tempus. Duis tincidunt a sem sed hendrerit. In vitae molestie dui. Nam sollicitudin feugiat posuere. Quisque nulla enim, tincidunt non turpis vitae, tincidunt mollis lectus. Nunc orci nisi, volutpat sed tellus eget, consequat malesuada lacus. Nam ac iaculis felis, nec maximus felis.
                </p>
                <p>
                  Vivamus fermentum, augue eget posuere faucibus, dolor mi ultricies tellus, eget viverra velit lacus ut dui. Nunc varius lectus eget dui ullamcorper finibus. Duis volutpat pulvinar urna nec luctus. Pellentesque et suscipit quam. Aenean sollicitudin enim et lobortis dapibus. Duis ac consectetur purus, vitae ornare ex. Phasellus ullamcorper arcu justo, quis vehicula purus malesuada id. Praesent urna ante, egestas quis risus non, pulvinar porttitor eros. Cras ut augue sollicitudin, viverra eros fermentum, elementum mi. Proin mattis, tortor ut congue aliquet, risus lectus fringilla dui, sed finibus nibh risus vel quam. Morbi ac suscipit ex. Vivamus pharetra vestibulum nunc at posuere.
                </p>
                <img src="./images/new-image-example.jpg" alt="imagen ejemplo de la noticia">
                <p>
                  Fusce molestie ante interdum, viverra ante ac, tempus purus. Curabitur eget nisl a turpis pulvinar aliquam vitae ut metus. Etiam turpis lectus, blandit tempor velit quis, elementum ornare lacus. Nam dictum, metus eu convallis dapibus, urna nulla gravida metus, at molestie orci erat vitae ex. Praesent eu interdum elit, interdum tincidunt quam. Sed ac finibus purus. In sed nisi sed arcu hendrerit congue. Mauris pretium ipsum non posuere aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec nec orci non ipsum ornare efficitur.
                </p>
                <blockquote>
                  "Donec sollicitudin, sem a vulputate lobortis, nibh sapien convallis lorem, quis."
                </blockquote>
                <p>
                  In blandit semper diam et ornare. Ut at mi arcu. Curabitur in sodales nibh. Cras imperdiet, felis quis malesuada lobortis, odio sapien maximus turpis, luctus congue tortor odio ut turpis. Nullam et magna tincidunt elit volutpat tristique eu in turpis. Donec imperdiet vitae enim et volutpat. Pellentesque eu mauris nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <div class="categories">
                  <a href="#categoria" class="badge badge-danger">Genus 1</a>
                  <a href="#categoria" class="badge badge-danger">Genus 2</a>
                  <a href="#categoria" class="badge badge-danger">Genus 3</a>
                </div>
              </div>

              
            </div>
          </div>

          <hr>

          <div class="related">
            <div class="row">
              <div class="col-sm">
                <h3>Related</h3>
                <img src="./assets/images/new-image-example.jpg" alt="imagen de noticia relacionada" class="img-thumbnail" data-toggle="tooltip" data-placement="bottom" title="Title nuntium 1">
                <img src="./assets/images/new-image-example.jpg" alt="imagen de noticia relacionada" class="img-thumbnail" data-toggle="tooltip" data-placement="bottom" title="Title nuntium 2">
                <img src="./assets/images/new-image-example.jpg" alt="imagen de noticia relacionada" class="img-thumbnail" data-toggle="tooltip" data-placement="bottom" title="Title nuntium 3">
              </div>
            </div>
          </div>

        </div>

      </article>
    </main>
    <?php include 'partials/footer.php'; ?>
  </body>
</html>