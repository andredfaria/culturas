<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culturas</title>

    <link href="css/edit.css" rel="stylesheet" id="edit">

    <link 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" 
          rel="stylesheet" 
          id="bootstrap-css">
    <script
          src="https://code.jquery.com/jquery-3.4.1.js"
          integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
          crossorigin="anonymous">
    </script>
</head>
<body>

<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Culturas</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="indexx.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
          <li><a href="cadastrar.php">Cadastro<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a></li>
          <li><a href="listar.php">Listar<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-file"></span></a></li>
          <li><a href="login.php">Login<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-bell"></span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div>
  	<a class="btn btn-primary"
	   href="listar.php">
	    <i class="glyphicon glyphicon-arrow-left"></i>
	    voltar
	</a>
  </div>
<?php
include 'config.php';



$sql = "UPDATE culturas SET inativo = 1 WHERE id = {$_GET['apagar']}";

if(mysqli_query($conexao, $sql)){
    echo "<h1 class='text-center'>Apagado com sucesso</h1>";

}else{
    echo "<h1 class='text-center'>Deu erro</h1>";
}


// include 'footer.php' ?>
