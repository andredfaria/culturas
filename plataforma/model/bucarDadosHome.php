<?php

$host = "andrx.com.br";
$user = "andrxc15_dev";
$senha = "andrxc15_dev";
$bd = "andrxc15_tai";

$conexao = mysqli_connect($host, $user, $senha, $bd);

if(!$conexao){
     echo '<div class="alert alert-warning" role="alert">
            This is a warning alert—check it out!
            </div>';
}

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

