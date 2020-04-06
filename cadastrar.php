<?php include 'header.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="salvarDados.php">
  <fieldset>
    <div class="panel panel-primary">
      <div class="panel-heading">Cadastro de Cliente</div>
      <input id="id" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : "" ?>" type="hidden">


      <div class="panel-body">
        <div class="form-group">
          <div class="col-md-11 control-label">
            <p class="help-block">
              <h11>*</h11> Campo Obrigatório
            </p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>
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

          <!-- <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>
          <div class="col-md-2">
            <input id="dtnasc" name="dtnasc" 
                   placeholder="DD/MM/AAAA" class="form-control input-md" required="" 
                  type="text" maxlength="10" 
                  OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
          </div>

          <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
          <div class="col-md-4">
            <label required="" class="radio-inline" for="radios-0">
              <input name="sexo" id="sexo" value="feminino" type="radio" required>
              Feminino
            </label>
            <label class="radio-inline" for="radios-1">
              <input name="sexo" id="sexo" value="masculino" type="radio">
              Masculino
            </label>
          </div> -->
        </div>

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Valor Medio <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input id="valorMedio" name="valorMedio" class="form-control" placeholder="R$ XX,XX" 
                     required="" type="text" maxlength="10" 
                     value="<?= isset($_GET['valorMedio']) ? $_GET['valorMedio'] : "" ?>" 
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" >
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Tempo De Colheita Em Dia <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input id="tempoDeColheitaEmDia" name="tempoDeColheitaEmDia" class="form-control" placeholder="R$ XX,XX" 
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

<?php include 'footer.php' ?>