 <?php
   include __DIR__ . '/database.php';
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


      <?php
       foreach ($people as $key) {
            // code...
          echo  json_encode ($key["poster"]);
          echo  json_encode ($key["title"]);
          echo  json_encode ($key["author"]);
          echo  json_encode ($key["genre"]);

          } ?>

  </body>
</html>
