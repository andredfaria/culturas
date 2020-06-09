<?php 
include 'template/header.php'
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="containter">
    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
                Seu formulario foi enviado com sucesso, Obrigado  <?= $_GET["Name"]?>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href="index.html" role="button">voltar para a Pagina</a>
</div>