<?php

//variavel/array 
$categorias[];

$categorias[] = "Infantil";
$categorias[] = "Juvenil";
$categorias[] = "Adulto";
$categorias[] = "Sênior";

//metodos de recebimento de dados
$nome = $_POST['nome'];
$idade = $_POST['idade'];

// condições e laços de repetição 
if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "Infantil")
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i]"."; 
    } 
}
else if($idade >= 13 && $idade <= 17)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "Juvenil")
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i]"."; 
    } 
}
else if($idade >= 18 && $idade <= 60)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "Adulto")
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i]"."; 
    } 
}
else 
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "Sênior")
            echo "O nadador ".$nome. " compete na categoria ".$categorias[$i]"."; 
    } 
}
