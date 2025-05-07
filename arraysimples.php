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
            <div class="col-12 col-sm-8 alert alert-info">
                <h4 class="text-center text-dark">
                    Trabalhando com array
                </h4>
                <h4 class="text-dark">
                    Construindo um array
                </h4>
                <p class="text-dark">
                    $dados = array('Banana', 'Maçã', 'Goiaba');
                </p>
                <p class="text-dark">
                    $dados = ['Banana', 'Maçã', 'Goiaba'];
                </p>
                <h4 class="text-dark">
                    Imprimindo o array na tela com o comando var_dump()
                </h4>
                <?php
                    $dados = ['Banana', 'Maça', 'Goiaba'];
                    var_dump($dados);
                ?>
                <h4 class="text-dark">
                    Imprimindo o array na tela de forma organizada com o json.encode()
                </h4>
                <?php
                    echo json_encode($dados);
                ?>
            </div>
        </div>
    </div>

</body>
</html>