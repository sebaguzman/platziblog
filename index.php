<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once 'config.php';
$query = $pdo -> prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query -> execute();

$blogPosts = $query -> fetchAll(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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
              <?php
              foreach ($blogPosts as $blogPost) {
                echo '<div class="blog-post">';
                echo '<h2>'.$blogPost['title'].'</h2>';
                echo '<p>Marzo 2, 2018, <a href="#">Sebas</a></p>';
                echo '<div class="blog-post-image">';
                echo '<img src="img/artikel7.jpg" width="700" height="300"alt="">';
                echo '</div>';
                echo '<div class="blog-post-content">'.$blogPost['content'].'</div>';
                echo '</div>';

              }

               ?>
              <div class="blog-post">
                <h2>Titulo del Post</h2>
                <p>Marzo 2, 2018, <a href="#">Sebas</a></p>
                <div class="blog-post-image">
                  <img src="img/artikel7.jpg" width="700" height="300"alt="">
                </div>
                <div class="blog-post-content">
                  Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                </div>
              </div>
            </div>
            <div class="col-md-4">
              sidebar
            </div>
          </div>
          <div class="row">
            <footer>
              EL Footer
            </footer>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
