<?php
  require __DIR__  . "/./database.php";
  $listGerne = [];
  // $database = [
  //   [
  //       'title' => 'New Jersey',
  //       'author' => 'Bon Jovi',
  //       'year' => 1988,
  //       'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
  //       'genre' => 'Rock'
  //   ],
?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Ajax Dischi</title>
  </head>
  <body>
    <header>
      <img src="./img/logo-spotify.png" alt="Logo Spotify">
      <div>
        <?php
          echo "<select name='genre' id='genreMusic'>";
          echo "<option value='All'>All</option>";
          foreach($database as $album){
            if(!in_array($album["genre"], $listGerne)){
              $listGerne[]= $album["genre"];
              echo "<option>" . $album["genre"] . "</option>";
            }
          }
          echo "</select>";
        ?>
      </div>
    </header>
    <main>
      <div class="container">
        <?php
          foreach($database as $album){
            echo "<div class='card'>";
            echo "<img src='" . $album["poster"] . "'". "alt='" . $album["title"] . "'".">";
            echo "<h3>" . $album["title"] . "</h3>";
            echo "<h5>" . $album["author"] . "</h5>";
            echo "<span>" . $album["year"] . "</span>";
            echo "</div>";
          }
        ?>
      </div>
    </main>
  </body>
</html>