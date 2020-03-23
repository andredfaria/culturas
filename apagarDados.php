<?php
include 'config.php';

$sql = "UPDATE culturas SET inativo = 1 WHERE id = {$_GET['apagar']}";

if(mysqli_query($conexao, $sql)){
    echo "apagado";

}else{
    echo 'Deu erro';
}

?>
<a class="btn-primary"
   href="listar.php">
    voltar
</a>