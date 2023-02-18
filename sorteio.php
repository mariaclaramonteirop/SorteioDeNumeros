<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Sorteio:</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="boxsorteio">
        <h1 class="titulo">Número Sorteado</h1> 
    <?php
                    if(isset($_POST['enviado']))
                    {
                            
                            // validação de preenchimento correto dos campos nome, e-mail e Url
                            if ( empty($_POST['inicio']) || strlen($_POST['inicio'] < 1) || $_POST['inicio'] < 1 ) {
                                echo '<p class="error">Preencha o Campo inicio Corretamente. </p>';
                                die();
                            }
                            if ( empty($_POST['fim']) || strlen($_POST['fim'] <= $_POST['inicio'] )) {
                                echo '<p class="error">Preencha o Campo Fim Corretamente. </p>';
                                die();
                            }
                        
                            if ( empty($_POST['vezes']) || strlen($_POST['vezes'] < 1 )) {
                                echo '<p class="error">Preencha o Campo Corretamente. </p>';
                                die();
                            }

                            
                            for($i = $_POST['vezes']; $i <= $_POST['vezes'] && $i >= 1 ; $i--){

                                $valorSorteado = rand($min = $_POST['inicio'] , $max = $_POST['fim']); 
                                // EXIBE NA TELA OOS ITENS PÓS VALIDAÇÕES
                                    echo '<h1 class="tituloresult"><b>' . $valorSorteado . '</b></h1>';

                            }
                                
                    }
                ?>
                </div>
</body>
</html>
