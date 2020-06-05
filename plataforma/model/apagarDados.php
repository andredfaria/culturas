
<?php
include '../template/header.php';
include '../config/config.php';



$sql = "UPDATE culturas SET inativo = 1 WHERE id = {$_GET['apagar']}";

if(mysqli_query($conexao, $sql)){
    echo "<h1 class='text-center'>Apagado com sucesso</h1>";

}else{
    echo "<h1 class='text-center'>Deu erro</h1>";
}


include 'template/footer.php' ?>
