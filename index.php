<?php
require 'accueil/index.php';
use accueil\index as ladate;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo ladate::afficheDate();
        ?>
    </body>
</html>
