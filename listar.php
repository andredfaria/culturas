<?php include 'header.php' ?>
<?php include 'buscarDados.php' ?>

<script src="js/listar.js"></script>

<div class="container">
  <form action="apagarDados.php">
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
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php while ($linha = mysqli_fetch_array($consulta)) { ?>
                <tr>
                  <td><?= $linha['id'] ?></td>
                  <td><?= $linha['nome'] ?></td>
                  <td><?= $linha['descricao'] ?></td>
                  <td>R$ <?= $linha['valorMedio'] ?>,00</td>
                  <td><?= $linha['tempoDeColheitaEmDia'] ?> dias</td>
                  <td>
                    <a class="btn btn-primary" 
                       href="cadastrar.php?
                                  nome=<?= $linha['nome'] ?>&
                                  descricao=<?= $linha['descricao'] ?>&&
                                  valorMedio=<?= $linha['valorMedio'] ?>&&
                                  tempoDeColheitaEmDia=<?= $linha['tempoDeColheitaEmDia'] ?>" 
                       value="<?= $linha['nome'] ?>"
                       id="nome" 
                       name="nome">
                            editar
                    </button>
                  </td>
                  <td>
                    <button class="btn btn-danger" 
                            onClick="apagar(<?= $linha['id'] ?>)" 
                            value="<?= $linha['id'] ?>" 
                            name="apagar">
                      apagar
                    </button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
</div>
<script>
</script>

<?php include 'footer.php' ?>