<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once '../config.php';
$query = $pdo -> prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query -> execute();

$blogPosts = $query -> fetchAll(PDO::FETCH_ASSOC);

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
              <h2>Articulos</h2>
              <a href="insertpost.php" class="btn btn-primary">Nuevos articulos</a>

              <table class="table">
                <tr>
                  <th>Titulo</th>
                  <th>Editar</th>
                  <th>Borrar</th>
                </tr>
                <?php

                foreach ($blogPosts as $blogPost) {
                  echo '
                    <tr>
                      <td>'.$blogPost['title'].'</td>
                      <td>'.$blogPost['id'].'</td>
                      <td>'.$blogPost['id'].'</td>
                    </tr>
                    ';
                }



                 ?>
              </table>
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
