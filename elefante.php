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
                    <div class="form-group row">
                        <div class="col-12 col-sm-6">
                            <input type="number" class="form-control form-control-lg" name="elefante" id="elefante" placeholder="Quantidade de elefantes">
                        </div>
                        <div class="cols-12 col-sm-6">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Cantar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 alert alert-primary">
                <?php
                    if(isset($_POST['elefante'])){
                        for($i = 1; $i <= $_POST['elefante']; $i++){
                            if($i % 2 == 0){
                                echo $i. ' elefantes';
                                for($j = 0; $j < $i; $j++){
                                    echo " incomodam";
                                }
                                echo " muito mais... <br>";
                            } 
                            else if($i == 1){
                                echo $i. ' elefante incomoda muita gente... <br>';
                            } 
                            else{
                                echo $i. ' elefantes incomodam muita gente... <br>';
                            }
                        }
                    } else{
                        echo '<p class="text-dark">Um elefante incomoda muita gente...</p>';
                    }
                ?>
                <!--<p class="text-dark">Um elefante incomoda muita gente</p>-->
            </div>
        </div>
    </div>
    
</body>
</html>