
<?php
include '../template/header.php';

$host = "andrx.com.br";
$user = "andrxc15_dev";
$senha = "andrxc15_dev";
$bd = "andrxc15_tai";

$conexao = mysqli_connect($host, $user, $senha, $bd);

$sql = "UPDATE culturas SET inativo = 1 WHERE id = {$_GET['apagar']}";

if(mysqli_query($conexao, $sql)){
    echo "<h1 class='text-center'>Apagado com sucesso</h1>";

}else{
    echo "<h1 class='text-center'>Deu erro</h1>";
}


include 'template/footer.php' ?>
