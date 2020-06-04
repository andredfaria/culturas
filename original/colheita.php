<?php include 'template/header.php' ?>
<?php include 'model/buscarDados.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//Plataforma.jquery.com/jquery-1.11.1.min.js"></script>

<form class="form-horizontal" action="model/salvarPlantio.php">
  <fieldset>
    <div class="panel">
      <div class="panel-heading">
        <h1 class="text-center">
          Registro de Colheita
        </h1>  
    </div>
      <input id="id" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : "" ?>" type="hidden">
      <div class="panel-body">
       
        <div class="form-group">
          <label class="col-md-2 control-label" for="nome">Cultura Colhida<h11>*</h11></label>
          <div class="col-md-8">
            <select name="selectCultutas" id="selectCultutas">
              <?php while ($linha = mysqli_fetch_array($consulta)) { ?>
                <option name="<?= $linha['nome'] ?>" 
                        value="<?= $linha['id'] ?>" >
                          <?= $linha['nome'] ?>
                      </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="data">Data da Colheita<h11>*</h11></label>
          <div class="col-md-8">
            <input id="data" name="data"
                   value="<?= isset($_GET['data']) ? $_GET['data'] : "" ?>"
                   placeholder="data"
                   class="form-control input-md"
                   required=""
                   type="date">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Lucro <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input id="custo" name="custo" class="form-control" placeholder="x dias"
                     required="" type="text" maxlength="10"
                     value="<?= isset($_GET['custo']) ? $_GET['custo'] : "" ?>"
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" >
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Observações <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
                <textarea class="input-group" name="observacao" id="observacao" cols="30" rows="10"></textarea>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="Cadastrar"></label>
          <div class="col-md-8">
            <button id="Cadastrar" class="btn btn-success" type="Submit">Salvar</button>
            <button id="Cancelar"  class="btn btn-danger" type="Reset">Cancelar</button>
          </div>
        </div>

      </div>
    </div>


  </fieldset>
</form>

<?php include 'template/footer.php' ?>
