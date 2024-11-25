<?php
$pastas = array("bsn" => 
                array("3a Fase" => 
                        array("desenvWeb", "bancoDados 1", "engSoft 1"),
                        "4a Fase" => 
                        array("Intro Web","bancoDados 2", "engSoft 2")));


function navegaPastas(array $estrutura, int $nivel = 0){
    foreach ($estrutura as $titulo => $conteudo) {
        if (is_array($conteudo)) {
            echo str_repeat('......',$nivel).'└─'." $titulo </br>";

            $nivel++;
            navegaPastas($conteudo, $nivel);
            $nivel--;
        }
        else{
            echo str_repeat('......',$nivel).'└─'." $conteudo </br>";
        }
    }
}

navegaPastas($pastas);