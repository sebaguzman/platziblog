<?php

$result = false;

if (!empty($_POST)) {
  $sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
  $query = $pdo->prepare($sql);
  $result = $query->execute([
    'title' => $_POST['title'],
    'content' => $_POST['content']
  ]);
  # code...
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrar Posts</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blog Title</h1>
          <div class="row">
            <div class="col-md-8">
              <h2> Nuevo Articulo</h2>
              <p>
                <a href="posts.php" class="btn btn-default">Volver a la lista de articulos</a>
              </p>
                <?php
                if ($result) {
                  echo '<div class="alert alert-success">Articulo Guardado</div>';
                }

                 ?>
              <form class="" action="insertpost.php" method="post">
                <div class="form-group">
                  <label for="inputTitle">Titulo</label>
                  <input type="text"  class="form-control" name="title" value="inputTitle">
                </div>
                <textarea class="form-control" name="content" id="inputContent" rows="5"></textarea>
                <br>
                <input type="submit" name="Guardar" class="btn btn-primary" value="Guardar Post">

              </form>


            </div>
            <div class="col-md-4">
              sidebar
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <footer>
                EL Footer<br>
                <a href="admin/index.php">Admin Panel</a>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
