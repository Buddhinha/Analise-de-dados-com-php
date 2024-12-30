<?php

$caminhoAlaParqueDosAnjos = "membrosComChamado/ParqueDosAnjos.txt"; // Substitua pelo caminho do arquivo

// Abre o arquivo
$membrosParqueDosAnjos = fopen($caminhoAlaParqueDosAnjos, "r");

if ($membrosParqueDosAnjos) {
    $lines = []; // Array vazio para armazenar as linhas

    // Lê linha por linha
    while (($arrayParqueDosAnjos = fgets($membrosParqueDosAnjos)) !== false) {
        $arrayMembrosParqueDosAnjos[] = trim($arrayParqueDosAnjos); // Adiciona cada linha ao array e remove espaços extras
    }

    fclose($membrosParqueDosAnjos);

    // Exibe o array
    print_r($arrayMembrosParqueDosAnjos);
} else {
    echo "Erro ao abrir o arquivo.";
}

// pegando as proximas metricas

$CaminhoParaMembrosDizimistas = "Dizimista/dizimistas.txt"; // Substitua pelo caminho do arquivo

// Abre o arquivo
$membrosDizimistas = fopen($CaminhoParaMembrosDizimistas, "r");

if ($membrosDizimistas) {
    $listaMembrosDizimistas = []; // Array vazio para armazenar as linhas

    // Lê linha por linha
    while (($linha = fgets($membrosDizimistas)) !== false) {
        $listaMembrosDizimistas[] = trim($linha); // Adiciona cada linha ao array e remove espaços extras
    }

    fclose($membrosDizimistas); // Fecha o arquivo corretamente

    // Exibe o array
    print_r($listaMembrosDizimistas);
} else {
    echo "Erro ao abrir o arquivo.";
}


//membros com recomendações

$CaminhoPararecomendados = "RecomendaçãoParaTemplo/recomendados.txt"; // Substitua pelo caminho do arquivo

// Abre o arquivo
$recomendados = fopen($CaminhoPararecomendados, "r");

if ($recomendados) {
    $listaRecomendados = []; // Array vazio para armazenar as linhas

    // Lê linha por linha
    while (($linha = fgets($recomendados)) !== false) {
        $listaMembrosRecomendados[] = trim($linha); // Adiciona cada linha ao array e remove espaços extras
    }

    fclose($recomendados); // Fecha o arquivo corretamente

    // Exibe o array
    print_r($listaMembrosRecomendados);
} else {
    echo "Erro ao abrir o arquivo.";
}

$CaminhoParaChamadosEstaca = "chamadosEstaca/chamadosEstaca.txt"; // Substitua pelo caminho do arquivo

// Abre o arquivo
$chamadosEstaca = fopen($CaminhoParaChamadosEstaca, "r");

if ($chamadosEstaca) {
    $listaChamadosEstaca = []; // Array vazio para armazenar as linhas

    // Lê linha por linha
    while (($linha = fgets($chamadosEstaca)) !== false) {
        $listaChamadosEstaca[] = trim($linha); // Adiciona cada linha ao array e remove espaços extras
    }

    fclose($chamadosEstaca); // Fecha o arquivo corretamente

    // Exibe o array
    print_r($listaChamadosEstaca);
} else {
    echo "Erro ao abrir o arquivo.";
}

//lista final
$adultosParticipantes = array_unique(array_merge($listaMembrosDizimistas, $listaMembrosRecomendados, $arrayMembrosParqueDosAnjos,$listaChamadosEstaca));
echo"</br>";
print_r($adultosParticipantes);

$numeroDeAdultosParticipantes = 0;

foreach($adultosParticipantes as $adultoParticipante){
    $numeroDeAdultosParticipantes += 1;
}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adultos participantes</title>
</head>
<body>
    <h1>Adultos participantes</h1>
    <h2>Estaca Gravatai-rs</h2>
    <br>
    <?=$numeroDeAdultosParticipantes?>
</body>
</html>
