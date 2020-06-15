<?php
include '../config/config.php';

$host = "andrx.com.br";
$user = "andrxc15_dev";
$senha = "andrxc15_dev";
$bd = "andrxc15_tai";

$conexao = mysqli_connect($host, $user, $senha, $bd);

$id = $_GET['id']; 
$nome = $_GET['nome']; 
$descricao = $_GET['descricao']; 
$valorMedio = (int) $_GET['valorMedio']; 
$tempoDeColheitaEmDia = (int) $_GET['tempoDeColheitaEmDia'];

if(isset($id) && $id > 0){
    $query = " UPDATE `culturas` SET `nome` = '$nome' , `descricao` = '$descricao', 
                                    `valorMedio` = $valorMedio, `tempoDeColheitaEmDia` = $tempoDeColheitaEmDia
                                WHERE id = $id "; 
}else{
    $query = " INSERT INTO `culturas` (`nome`, `descricao`, `valorMedio`, `tempoDeColheitaEmDia`) 
                VALUES ('$nome', '$descricao', $valorMedio, $tempoDeColheitaEmDia)";
}


var_dump($query);

if(mysqli_query($conexao, $query)){
    echo "apagado";

}else{
    echo 'Deu erro';
}
?>
<?php include 'template/header.php' ?>
<a class="btn-primary btn"
   href="listar.php">
    voltar
</a>

