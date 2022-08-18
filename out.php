<?php  
$m=$_POST['m']/100;
$kg=$_POST['kg'];

$kmi=$kg/($m*$m);

if ($kmi < 18.5) {
$msg1 = 'mažiau kaip 18.5';
$msg2 = 'nepakankamas svoris';
  } elseif ($kmi >= 18.5 && $kmi < 25) {
$msg1 = '18.5 ir daugiau, mažiau kaip 25';
$msg2 = 'normalus svoris';
    } elseif ($kmi >= 25 && $kmi < 30 ) {
$msg1 = '25 ir daugiau, mažiau kaip 30';
$msg2 = 'antsvoris';  
  } else {  
$msg1 = '30 ir daugiau';
$msg2 = 'nutukimas';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI rezultatas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      body {
            background-image: url(https://source.unsplash.com/1600x900/?landscape);
        }
    </style>
</head>
<body>
    <div class="container d-flex vh-100 align-items-center justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5 text-bg-dark text-center bg-opacity-75">
                    <div class="card-header">KMI skaiciuokle</div>
                    <div class="card-body">
                    <form action="out.php" method="post">
                        <div class="mb-3">
                        <label for="" class="form-label">Rezultatas:</label>   
                        <input type="number" name="kmi" value="<?php echo(round($kmi,1)); ?>" class="form-control text-center"> 
                        </div>
                        <div class="mb-3">
                        <a href="new.php" class="btn btn-success"> Atgal </a>
                        </div>
                        <div class="table-holder">
                          <table class="table table-dark table-striped text-center">
                            <thead>
                              <tr>
                                <th>KMI</th>
                                <th>Reiksme</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><?php echo $msg1?></td>
                                <td><?php echo $msg2?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>  
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>