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
                    Trabalhando com array associativo
                </h4>
                <h4 class="text-dark">
                    Construindo um array associativo
                </h4>
                <p class="text-dark">
                    $dados = array( 
                        'Nome' => 'Thiago Ribeiro', 
                        'Idade' => 15, 
                        'Escola' => 'ETEC', 
                    );
                </p>
                <p class="text-dark">
                    $dados = [
                            'Nome' => 'Thiago Ribeiro', 
                            'Idade' => 15, 
                            'Escola' => 'ETEC',
                        ];
                </p>
                <h4 class="text-dark">
                    Imprimindo o array na tela com o comando var_dump()
                </h4>
                <?php
                    $dados = [
                        'Nome' => 'Thiago Ribeiro',
                        'Idade' => 15,
                        'Escola' => 'ETEC',
                    ];
                    
                    echo '<p class="text-dark">'. var_dump($dados). '</p>';
                ?>
                <h4 class="text-dark">
                    Imprimindo o array na tela de forma organizada com o json.encode()
                </h4>
                <?php
                    echo '<p class="text-dark">'. json_encode($dados). '</p>';
                ?>
                <h4 class="text-dark">
                    Imprimindo somente o nome do aluno
                </h4>
                <?php
                    echo '<p class="text-dark">'. $dados['Nome']. '</p>';
                ?>
            </div>
        </div>
    </div>

</body>
</html>