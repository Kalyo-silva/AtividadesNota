<?php
  
function calculaMedia(array $nota_aluno){
    $sum = 0;

    foreach ($nota_aluno as $nota) {
        $sum += $nota;
    }

    return $sum / sizeof($nota_aluno);
}

function getStatus(float $media_final){
    if ($media_final > 7) {
        return 'Aprovado :)';
    }
    return 'Reprovado :(';
}

function getFrequencia(array $faltas_aluno){
    $qtd_faltas = 0;
    
    foreach ($faltas_aluno as $falta) {
        $qtd_faltas += $falta;
    }
    
    return 100 - ($qtd_faltas / sizeof($faltas_aluno) * 100);
}

function getStatusByFrequencia(float $percentual_frequencia){
    if ($percentual_frequencia > 70){
        return 'Aprovado :)';
    }
    return 'Reprovado pro falta :(';
}

define('notas', array(5,9,8,7,6,4,5,8,10,8,10));
define('faltas', array(1,0,0,1,0,0,0,0,0,0));

$media = round(calculaMedia(notas),2);
$sitNotas = getStatus($media);
$presenca = round(getFrequencia(faltas),2);
$sitPresenca = getStatusByFrequencia($presenca);

echo "<h1> Situação do Aluno </h1>
        <h3>Média: $media </h3>
        <h3>Presença: $presenca%</h3>
        <h3>Situação por notas: $sitNotas</h3>
        <h3>Situação por Presença: $sitPresenca</h3>";