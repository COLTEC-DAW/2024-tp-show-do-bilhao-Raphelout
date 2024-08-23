<?php
    $perguntas = array( "\nQual o nome do personagem de Jojo mais poderoso da Obra até a parte 7? (na opinião do lout, claro)\n", 
                        "\nQual o nome do irmão dele? se tiver\n",
                        "\neeeee... emhhh.. quanto que vale 10 centavos de real na cidade de Morioh da parte 4 de Jojo?\n",
                        "\nTá mas... eee... quanto q vale um loutilhão? pra ter certeza q vc sabe\n");
    $alternativas =  array( array("Johnny Joestar", "Giorno Geovanna", "Funny Valentine", "Nem o lout sabe"), 
                            array("Nicholas Joestar", "Iojeph Joestar", "Josuke higashikata", "ele num tem irmão não dog"),
                            array("10 reais", "25 ienes", "9 centavos", "sla 10 centavos...?"),
                            array("um Loutilhão equivale a 1 bilhão elevado a 100000000 seguido de 99 zeros", "o mesmo que -um loutilhão vezes -1", "quase meio bilhão", "um bilhão")); 
    $respostas = array( $alternativas[0][3], 
                            $alternativas[1][3],
                            $alternativas[2][0],
                            $alternativas[3][1]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show do Loutilhão</title>
</head>
<body>
    <h1>Show do Loutilhão</h1>
    <p>Disclaimer: um Loutilhão equivale a 1 bilhão elevado a 100000000 seguido de 99 zeros<p>
    <?php
        for ($i=0; $i < count($perguntas) ; $i++) { 
            echo nl2br("\n Pergunta número " . $i+1);
            echo nl2br($perguntas[$i]);
            for($j=0; $j < count($alternativas[$i]);$j++){
                echo "OPÇÃO " . $j+1 . ": "; 
                echo nl2br($alternativas[$i][$j]);
                echo ", ";
            }
            echo nl2br("\n Resposta: ");
            echo nl2br($respostas[$i]);
            echo nl2br("\n ");
        }
    ?>

</body>
</html>