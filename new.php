<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI skaiciuokle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body {
            background-image: url(https://source.unsplash.com/1600x900/?landscape);
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-item-center">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card mt-5 text-bg-dark text-center bg-opacity-75">
                    <div class="card-header">KMI skaiciuokle</div>
                    <div class="card-body">
                    <form action="out.php" method="post">
                        <div class="mb-3">
                        <label for="" class="form-label">Ugis:</label>    
                        <input type="number" name="m" value="" class="form-control text-center"> 
                        </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Svoris:</label>    
                        <input type="number" name="kg" value="" class="form-control text-center"> 
                        </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-success">Skaičiuoti</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
        
        

  
</body>
</html>