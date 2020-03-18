<?php include 'header.php'?>
<?php include 'buscarDados.php' ?>

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
