<?php

function validaNome(string $nome)
{
    if(empty($nome))
    {
        $_SESSION['mensagem-de-erro'] = 'Todos os campos devem ser preenchidos!';
        header('Location: index.php');
        return;
    }
}

function validaIdade(string $idade)
{
    if(empty($idade))
    {
        $_SESSION['mensagem-de-erro'] = 'Todos os campos devem ser preenchidos!';
        header('Location: index.php');
        return;
    }
}

?>