<?php

//const constante = "Isso é uma constante";

$nome = "Guilherme";
$idade = 18;


$anoNascimento = date("Y") - $idade; 
/*
    Exibir na página o nome do usuário
    e o seu ano de nascimento

    exemplo: "Olá fulano de tal, você nasceu em ...."
 */

 //echo date ("d/m/Y");

echo "Olá, $nome, você nasceu em $anoNascimento";

