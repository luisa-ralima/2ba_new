<?php
    $a = 10;
    $b = 20;
    $z = 30.5;
    $soma;
    $subtracao;
    $multiplicacao;
    $divisao;

    $soma = $a + $b;
    $subtracao =  $a - $b;
    $multiplicacao =  $a * $b;
    $divisao =  $a / $b;

    echo("soma: " . $soma . "<br>");
    echo("subtração: " . $subtracao . "<br>");
    echo ("multiplicação: " .  $multiplicacao . "<br>");
    echo ("divisão: " . $divisao  . "<br>");

    print("<br> <br>" );

    var_dump(5);
    var_dump("Luisa");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);

    print("<br> <br>" );

    var_dump(5);
    var_dump("Luisa");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56.0]);
    var_dump(NULL);

    print("<br> <br>" );

    var_dump("Luísa Rodrigues");

    print("<br> <br>" );

    var_dump($z);

    print("<br> <br>" );

    var_dump("Texto Jornalístico Simples:
    O texto jornalístico é um gênero textual amplamente utilizado em jornais, revistas, rádio e televisão. 
    Seu objetivo principal é comunicar e informar sobre acontecimentos atuais de maneira clara e objetiva. Vamos explorar suas características e estrutura:
    Estrutura do Texto Jornalístico:
    Pauta: Escolha do tema ou assunto.
    Apuração: Coleta de informações, dados e verificação da veracidade dos fatos.
    Redação: Transformação das informações em um texto.
    Edição: Correção e revisão dos textos.
    Linguagem Jornalística:
    A linguagem deve ser clara, simples, imparcial e estar alinhada à norma-padrão da língua.
    Os textos jornalísticos utilizam frases curtas e ideias sucintas, geralmente construídas na ordem direta (sujeito + verbo + complementos e adjuntos adverbiais).
    A linguagem é denotativa, ou seja, isenta de ambiguidades e com um único sentido.
    Recursos Jornalísticos:
    Lide: A primeira parte do texto que apresenta as principais informações da matéria, essenciais para destacar o acesso à informação.
    Pirâmide Invertida: Hierarquiza as informações no espaço do jornal, com a ordem decrescente de importância.
    Lembrando que o texto jornalístico é uma ferramenta essencial para disseminar notícias e manter o público informado de maneira eficaz.");

    print("<br> <br>" );

    echo str_word_count("Linguagem Jornalística: A linguagem deve ser clara, simples, 
    imparcial e estar alinhada à norma-padrão da língua."); 

    echo "<br>";

    echo strlen("Bom dia!");

    print("<br> <br>" );

    
?>