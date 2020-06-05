<?php
include '../config/config.php';

$query = "SELECT * FROM culturas WHERE inativo <> 1";

$consulta = mysqli_query($conexao, $query);
