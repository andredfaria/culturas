<?php

# mysq_li Conexão com o banco de dados

$host = "localhost";
$user = "root";
$senha = "";
$bd = "tai";

$conexao = mysqli_connect($host, $user, $senha, $bd);

if($conexao){
     echo "conectado";
}

# criar tabela que esta no script.sql
 $query = "CREATE TABLE ...";	

 $criarTabelas = mysqli_query($conexao, $query);