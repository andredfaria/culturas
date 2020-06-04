<?php
include 'config.php';

$query = "SELECT * FROM culturas c INNER JOIN plantio p ON c.id = p.idCulturas";
$consultaPlantio = mysqli_query($conexao, $query);

$query = "
            SELECT  *, 
                    DATE_ADD(p.`data`,INTERVAL c.tempoDeColheitaEmDia DAY) AS diaDaColheita,
                    DATEDIFF((SELECT DATE_ADD(p.`data`,INTERVAL c.tempoDeColheitaEmDia DAY)), CURDATE()) AS diasRestantes
            FROM culturas c 
                INNER JOIN plantio AS p ON c.id = p.idCulturas
            WHERE  DATE_ADD(p.`data`,INTERVAL c.tempoDeColheitaEmDia DAY) > CURDATE()
            ORDER BY id DESC
        ";
$consultaColheita = mysqli_query($conexao, $query);

