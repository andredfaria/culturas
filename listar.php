<<<<<<< HEAD
<?php include 'header.php'?>
<?php include 'buscarDados.php' ?>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>culturas</title>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/listar.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/edit.css" rel="stylesheet" id="edit">
<script src="js/listar.jss"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="js/edit.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
>>>>>>> f19c0e4b0b50579637f87f489518d63f9a5d3ce1

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nome</th>
                    <th scope="col">descricao</th>
                    <th scope="col">valor</th>
                    <th scope="col">tempo</th>
                  </tr>
                </thead>
                <tbody>
                <?php while($linha = mysqli_fetch_array($consulta)){ ?>
                  <tr>
                    <td><?= $linha['id'] ?></td>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['descricao'] ?></td>
                    <td>R$ <?= $linha['valorMedio'] ?>,00</td>
                    <td><?= $linha['tempoDeColheitaEmDia']?> dias</td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
