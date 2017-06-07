<!DOCTYPE html>

<?php require('config.php'); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Local</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

    <div class="nr">
           <h1>Local Home Page</h1>
    <?php
          foreach ($a as $d) {
            if (in_array($d,$without)) {
            }
            else {
              if (is_dir($d)==true) {
                echo "<label><img src='img/folder-3.png' width='16px' height='16px'/>"." - "."<a href='".$root.$d."'>".$d."</a></label>";
              }
              else {
                echo "<label><img src='img/text-2.png' width='16px' height='16px'/>"." - "."<a href='".$root.$d."'>".$d."</a></label>";
              }

            }
          }
          ?>
        </div>
    </body>
</html>
