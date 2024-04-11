<?php
    print("<h3>Programando em PHP <br></h3>");

    echo("Testando saída de uma string com echo:<br><br>");
    
    $nome = "Luisa"; //declarando variável e atribuindo valor tipo string
    $sobrenome = "Lima"; //declarando variável e atribuindo valor tipo string
    $idade = 16; //declarando variável e atribuindo valor tipo int
    $numero = 2024; //declarando variável e atribuindo valor tipo int
    $dia = 27; //declarando variável e atribuindo valor tipo int
    $valordia = 70.40; //declarando variável e atribuindo valor tipo float ou double
    $salario; //declarando variável
    $salario = $dia * $valordia; //declarando variável e acumulando operação com 2 variaveis

    echo("$nome" . ("<br>"));
    echo('$nome' . ("br"));
    echo("$sobrenome". ("<br>"));
    echo("$idade" . ("<br>"));
    echo("$numero" . ("<br><br>"));

    //comando  de saída echo e print; conetando strng com variáveis

    echo("nome: " . $nome . "<br>");
    echo("sobrenome: " . $sobrenome . "<br>");
    echo("nome completo: " . $nome . " " . $sobrenome . "<br>");
    echo("idade: " . $idade . "<br>");
    print("número: " . $numero . "<br>");
    print("dia: " . $dia . "<br>");
    print("valor dia: " . $valordia . "<br>");
    print("salário: R$: " . $salario . "<br>");
    print("salário: R$: " . ($dia * $valordia) . "<br>");

?>