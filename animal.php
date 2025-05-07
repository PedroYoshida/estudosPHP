<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <select name="animal" id="animal" class="form-control form-control-lg">
                            <option value="">Selecione o animal que mais te agrada ... </option>
                            <option value="1">Cachorro</option>
                            <option value="2">Gato</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5 rounded justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 border">
                <?php
                    if(isset($_POST['animal'])){
                        if($_POST['animal'] == '1'){
                            echo "<img src='img/cachorro.jpg' class='img-fluid p-2 rounded'>"
                        } else{ 
                            echo "<img src='img/gato.jpg' class='img-fluid p-2 rounded'> "
                          }
                    } else{
                        echo "Escolha seu animal de preferência...";
                    }
                ?>
        </div>
    </div>
    
</body>
</html>