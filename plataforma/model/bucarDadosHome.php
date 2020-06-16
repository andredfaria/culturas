<?php

$host = "localhost";
$user = "root";
$senha = "";
$bd = "tai";

$conexao = mysqli_connect($host, $user, $senha, $bd);

if(!$conexao){
     echo '<div class="alert alert-warning" role="alert">
            This is a warning alert—check it out!
            </div>';
}

$queryConsultaPlantio = "SELECT * FROM culturas c INNER JOIN plantio p ON c.id = p.idCulturas";
$consultaPlantio = mysqli_query($conexao, $queryConsultaPlantio);

$queryConsultaColheita = "
            SELECT  *, 
                    DATE_ADD(p.`data`,INTERVAL c.tempoDeColheitaEmDia DAY) AS diaDaColheita,
                    DATEDIFF((SELECT DATE_ADD(p.`data`,INTERVAL c.tempoDeColheitaEmDia DAY)), CURDATE()) AS diasRestantes
            FROM culturas c 
                INNER JOIN plantio AS p ON c.id = p.idCulturas
            WHERE  DATE_ADD(p.`data`,INTERVAL c.tempoDeColheitaEmDia DAY) > CURDATE()
            ORDER BY id DESC
        ";
        
$consultaColheita = mysqli_query($conexao, $queryConsultaColheita);

