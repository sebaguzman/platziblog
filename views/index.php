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
