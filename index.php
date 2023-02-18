<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteios</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="box">
        <form method="POST" action="sorteio.php">
        <fieldset>
                    <legend><b>Sorteios:</b></legend>
                    <div class="inputBox">
                        <input type="number" name="inicio" id="fim" class="inputUser" required>
                        <label for="nome" class="labelInput"> Inicio </label>
                    </div>
                    <br>
                    <br>
                    <div class="inputBox">
                        <input type="number" name="fim" id="fim" class="inputUser" required>
                        <label for="nome" class="labelInput">Fim</label>
                    </div>
                    <br>
                    <br>
                    <div class="inputBox">
                        <input type="number" name="vezes" id="vezes" class="inputUser" required>
                        <label for="nome" class="labelInput">Escolha quantos números: </label>
                    </div>
                    <br>
                    <br> 
                    <button name="enviado" type="submit" id="submit">Enviar</button>
        </form>    
    </div>
</body>
</html>