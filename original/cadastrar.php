<?php include 'template/header.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//Plataforma.jquery.com/jquery-1.11.1.min.js"></script>

<form class="form-horizontal" action="salvarDados.php">
  <fieldset>
    <div class="panel">
      <div class="panel-heading">
        <h1 class="text-center">
          Cadastro de Cultura
        </h1>  
    </div>
      <input id="id" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : "" ?>" type="hidden">


      <div class="panel-body">
        <div class="form-group">
          <div class="col-md-11 control-label">
            <p class="help-block">
              <!-- <h11>*</h11> Campo Obrigatório -->
            </p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>
          <div class="col-md-8">
            <input id="nome" name="nome"
                   value="<?= isset($_GET['nome']) ? $_GET['nome'] : "" ?>"
                   placeholder="Nome"
                   class="form-control input-md"
                   required=""
                   type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="Descricao">Descricao <h11>*</h11></label>
          <div class="col-md-8">
            <input id="descricao" name="descricao"
                   value="<?= isset($_GET['descricao']) ? $_GET['descricao'] : "" ?>"
                   placeholder="Descrição" class="form-control input-md"
                   required="" type="text">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Valor Medio <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
              <input id="valorMedio" name="valorMedio" class="form-control" placeholder="R$ XX,XX"
                     required="" type="text" maxlength="10"
                     value="<?= isset($_GET['valorMedio']) ? $_GET['valorMedio'] : "" ?>"
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" >
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Tempo De Colheita Em Dias <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input id="tempoDeColheitaEmDia" name="tempoDeColheitaEmDia" class="form-control" placeholder="x dias"
                     required="" type="text" maxlength="10"
                     value="<?= isset($_GET['tempoDeColheitaEmDia']) ? $_GET['tempoDeColheitaEmDia'] : "" ?>"
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" >
            </div>
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

<<<<<<< HEAD
<?php // include 'footer.php' ?>
=======
<?php include 'template/footer.php' ?>
>>>>>>> 6a8f8c19072be7a7a3c5ccc2f60ab5ea101f690b
