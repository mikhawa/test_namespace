<?php
require 'accueil/index.php';
require 'accueil/p2.php';

use accueil\index as ladate;
use accueil\p2;

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
        <hr>
        <?php
        echo p2::afficheHeures();
        ?>
    </body>
</html>
