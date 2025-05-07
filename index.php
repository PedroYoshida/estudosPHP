<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="div container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Digite seu nome: </label> <br>
                        <input type="text" class="form-control" name="nome"> <br>
                        <input type="submit" class="btn btn-outline-primary" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-sm-8 col-md-6">
                <div class="alert alert-primary">
                    <h3>
                        <?php
                            if(isset($_POST['nome'])){
                                echo "Seja bem vindo! ". $_POST['nome']. "";
                            } else{
                                echo "Digite o seu nome...";
                            }
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>