<?php
include '../config/config.php';
// var_dump($_GET);
// exit;
$id = $_GET['id']; 
$idCulturas = $_GET['selectCultutas']; 
$data = $_GET['data']; 
$quantidade = $_GET['quantidade']; 
$unidade = $_GET['unidade']; 
$custo = $_GET['custo']; 

if(isset($id) && $id > 0){
    $query = "  UPDATE `plantio` 
                SET `data` = '$data', 
                    `quantidade` = $quantidade, 
                    `custo` = $custo
                WHERE idCulturas = $id "; 
}else{
    $query = " INSERT INTO `plantio` (`idCulturas`, `data`, `quantidade`, `unidade`, `custo`) 
                            VALUES ('$idCulturas', '$data', '$quantidade','$unidade', '$custo')";
}


if(mysqli_query($conexao, $query)){
    // fazer uma tela aqui
    echo "Deu certo";

}else{
    echo 'Deu erro';
}
?>
<?php include 'template/header.php' ?>
<a class="btn-primary btn"
   href="vincular.php">
    voltar
</a>

