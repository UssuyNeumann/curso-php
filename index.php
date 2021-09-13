<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Competição</title>
</head>
<body>
<p>Formulário para Inscrição de Competidores</p>
<form action="script.php" method="POST">
    <?php
        $errorMsg = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
        if(!empty(error_msg))
        {
            echo $errorMsg;
        }
    ?>
    <label for="nome">Nome: </label> <br> 
    <input type="text" name="nome" > <br><br> 
    <label for="idade">Idade: </label> <br> 
    <input type="text" name="idade" > <br><br> 
    <input type="submit" value="ENVIAR">
</form>
</body>
</html>