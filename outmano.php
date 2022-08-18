<?php
//cia mano komentaras

/*
keliu eiluciu komentasas
*/

/** 
 * virs funkciju ir algoritmu
*/

$x=5;
$y="Labas $x ";
$z='Viso $x ';

$a=5;
$b=2;
$c=$a/$b;

$cm=$_GET['cm'];
$col=$cm/2.54;
// $_GET['2']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mano puslapis</title>
</head>
<body>
    <?php echo $y; ?> <br>
    <?php echo $z; ?> <br>
    <?php echo $c; ?> <br>    
    <?php echo $cm; ?> centimetru yra <?php echo $col; ?> <br> coliu.   <br>
    
    <a href="new.php">Atgal</a>
    
</body>
</html>