<?php

# mysq_li Conexão com o banco de dados

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

# criar tabela que esta no script.sql
 $criarTabelas = mysqli_query($conexao, $query);
