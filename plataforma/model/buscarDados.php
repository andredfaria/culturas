<?php
include '../config/config.php';


$host = "andrx.com.br";
$user = "andrxc15_dev";
$senha = "andrxc15_dev";
$bd = "andrxc15_tai";

$conexao = mysqli_connect($host, $user, $senha, $bd);

$query = "SELECT * FROM culturas WHERE inativo <> 1";


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

$consulta = mysqli_query($conexao, $query);
