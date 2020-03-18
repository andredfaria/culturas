<?php
include 'config.php';
// $_POST
// $_GET

$query = "SELECT * FROM culturas";

$consulta = mysqli_query($conexao, $query);
