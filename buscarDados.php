<?php
include 'config.php';
// $_POST
// $_GET

$query = "SELECT * FROM culturas WHERE inativo <> 1";

$consulta = mysqli_query($conexao, $query);
