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
                            <input type="number" class="form-control form-control-lg" name="km" id="km" placeholder="Km rodados">
                            <input type="submit" value="Cantar" class="btn btn-primary btn-lg btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 alert alert-primary">
                <?php
                    if(isset($_POST['km'])){
                        $km = $_POST['km'];

                        for(; $km > 0; $km--){
                            if($km == $_POST['km']){

                            } 
                            else if($km > 1){
                                echo ", {$km} quilômetros... <br> <br>"; 
                            }    
                            else{
                                echo ", {$km} quilômetro... <br> <br>";
                            }

                            if($km % 2 == 0){
                                for($i = 0; $i < 2; $i++){
                                    echo "{$km} quilômetros, ";
                                }
                            } 
                            else{
                                if($km > 1){
                                    echo "{$km} quilômetros, ";
                                } 
                                else{
                                    echo "{$km} quilômetro, ";
                                }
                            }

                            echo "pare um pouquinho, descanse um pouquinho";
                        }

                    } else{                   
                        echo "<p class='text-dark'>Digite o km...</p>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>