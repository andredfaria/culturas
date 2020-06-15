<?php

# mysq_li Conexão com o banco de dados

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

# criar tabela que esta no script.sql
 $query = "CREATE TABLE ...";

 $criarTabelas = mysqli_query($conexao, $query);
