
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
    <?php echo $cm; ?> centimetru yra <?php echo $col; ?> <br> coliu.    
    <form action="new.php" method="get">
        <input type="text" name="cm" value=""> <br>
        <button type="submit">Skaiciuoti</button>
    </form>
</body>
</html>