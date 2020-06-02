<?php require VIEWS_PATH . 'includes/header.phtml'; ?>

<script src="js/listar.js"></script>

<div class="container">
  <h1 class="text-center">Lista de Culturas</h1>
  <form action="apagarDados.php">
    <div class="row">
      <div class="col-md-10">
        <div class="panel panel-info">
          <table class="table table-striped">
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
              <?php foreach ($this->culturas as $i => $cultura) { ?>
                <tr>
                  <td><?= $cultura['id'] ?></td>
                  <td><?= $cultura['nome'] ?></td>
                  <td><?= $cultura['descricao'] ?></td>
                  <td>R$ <?= $cultura['valorMedio'] ?>,00</td>
                  <td><?= $cultura['tempoDeColheitaEmDia'] ?> dias</td>
                  <td>
                    <a class="btn btn-primary"
                       href="cadastrar.php?nome=<?= $cultura['nome'] ?>&descricao=<?= $cultura['descricao'] ?>&valorMedio=<?=$cultura['valorMedio'] ?>&tempoDeColheitaEmDia=<?= $cultura['tempoDeColheitaEmDia'] ?>&id= <?= $cultura['id']?>"
                       value="<?= $cultura['nome'] ?>"
                       id="nome"
                       name="nome">
                            editar
                    </button>
                  </td>
                  <td>
                    <button class="btn btn-danger"
                            onClick="apagar(<?= $cultura['id'] ?>)"
                            value="<?= $cultura['id'] ?>"
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

<?php require VIEWS_PATH . 'includes/footer.phtml'; ?>

