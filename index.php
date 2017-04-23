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
        include_once './includes/classes/Stats.php';
        echo "This is it <br>";
        $x = 4646;
        $y = 465;
        echo 'Add(23, 34): ' . Math::add(23.05, 34.05);
        echo "<br>";
        echo 'Add(23, 34): ' . Math::div($x, $y);
        echo "<br>";
        
        $d = [10,20,30,40,50,60,50];
        echo 'mean(x): ' . Stats::mean($d); 
        ?>
    </body>
</html>
