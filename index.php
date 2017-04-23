<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mel Stats</title>
    </head>
    <body>
        <?php
        include_once './includes/classes/Math.php';
        echo "This is it <br>";
        $x = 4646;
        $y = 465;
        echo 'Add(23, 34): ' . Math::add(23.05, 34.05);
        echo 'Add(23, 34): ' . Math::div($x, $y); 
        ?>
    </body>
</html>
