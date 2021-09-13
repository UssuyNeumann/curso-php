<?php

//utilizando sessao para erros de usuario.
session_start(); 

//variavel/array  
$categorias = array(); 

//$categorias
$categorias[] = "Infantil";
$categorias[] = "Juvenil";
$categorias[] = "Adulto";
$categorias[] = "Sênior";

//metodos de recebimento de dados
$nome = $_POST['nome'];
$idade = $_POST['idade'];

//validações
// valida campos vazios
if(empty($nome) || empty($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Todos os campos devem ser preenchidos!';
    header('Location: index.php');
    return;
}
// valida tipo de dado $idade
if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'O campo Idade aceita apenas números!';
    header('Location: index.php');
    return;
}


// condições e laços de repetição 
if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias)-1; $i++)
    {
        if($categorias[$i] == "Infantil")
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i]."."; 
    } 
}
else if($idade >= 13 && $idade <= 17)
{
    for($i = 0; $i <= count($categorias)-1; $i++)
    {
        if($categorias[$i] == "Juvenil")
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i]."."; 
    } 
}
else if($idade >= 18 && $idade <= 60)
{
    for($i = 0; $i <= count($categorias)-1; $i++)
    {
        if($categorias[$i] == "Adulto")
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i]."."; 
    } 
}
else 
{
    for($i = 0; $i <= count($categorias)-1; $i++)
    {
        if($categorias[$i] == "Sênior")
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i]."."; 
    } 
}
// O -1 no count($categorias) evitou erro "Undefined offset".
?>