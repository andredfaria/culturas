<?php include 'header.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<<<<<<< HEAD
<form class="form-horizontal" action="salvarDados.php">
=======
<form action="editarDados.php" class="form-horizontal">
>>>>>>> cfc7a1e0dc3a5902edec80243d07c10e051d40fa
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
          <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>
          <div class="col-md-8">
<<<<<<< HEAD
            <input id="nome" name="nome" 
                   value="<?= isset($_GET['nome']) ? $_GET['nome'] : "" ?>" 
                   placeholder="Nome" 
=======
            <input id="nome" name="Nome" 
                   value="<?= $_GET['nome'] ?>" 
                   placeholder="nome" 
>>>>>>> cfc7a1e0dc3a5902edec80243d07c10e051d40fa
                   class="form-control input-md" 
                   required="" 
                   type="text">
          </div>
        </div>

        <div class="form-group">
<<<<<<< HEAD
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
=======
          <label class="col-md-2 control-label" for="descricao">Descrição</label>
          <div class="col-md-8">
            <input type="text" id="descricao" name="descricao" 
                   value="<?= $_GET['descricao'] ?>" 
                   placeholder="Descrição da cultura" 
                   class="form-control input-md" >
          </div>
>>>>>>> cfc7a1e0dc3a5902edec80243d07c10e051d40fa
        </div>

        
        <div class="form-group">
<<<<<<< HEAD
          <label class="col-md-2 control-label" for="prependedtext">Valor Medio <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
              <input id="valorMedio" name="valorMedio" class="form-control" placeholder="R$ XX,XX" 
                     required="" type="text" maxlength="10" 
                     value="<?= isset($_GET['valorMedio']) ? $_GET['valorMedio'] : "" ?>" 
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" >
=======
          <label class="col-md-2 control-label" for="valorMedio">Valor<h11>*</h11></label>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
              <input id="valorMedior" name="valorMedio" class="form-control" placeholder="Digite o valor" 
                     value="<?= $_GET['valorMedio'] ?>" 
                     required="" type="text" maxlength="13" 
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$">
>>>>>>> cfc7a1e0dc3a5902edec80243d07c10e051d40fa
            </div>
          </div>
        </div>

        <div class="form-group">
<<<<<<< HEAD
          <label class="col-md-2 control-label" for="prependedtext">Tempo De Colheita Em Dia <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input id="tempoDeColheitaEmDia" name="tempoDeColheitaEmDia" class="form-control" placeholder="R$ XX,XX" 
                     required="" type="text" maxlength="10" 
                     value="<?= isset($_GET['tempoDeColheitaEmDia']) ? $_GET['tempoDeColheitaEmDia'] : "" ?>" 
=======
          <label class="col-md-2 control-label" for="tempoDeColheitaEmDia">Tempo em dias</label>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input id="tempoDeColheitaEmDia" name="tempoDeColheitaEmDia" 
                     class="form-control" 
                     value="<?= $_GET['tempoDeColheitaEmDia'] ?>" 
                     placeholder="Quanto tempo para ficar top" 
                     type="number" maxlength="4" 
>>>>>>> cfc7a1e0dc3a5902edec80243d07c10e051d40fa
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" >
            </div>
          </div>
        </div>
<<<<<<< HEAD
=======
        
           <input  id="id" name="id" 
                   class="form-control" 
                   type="hidden"
                   value="<?= $_GET['id']?>">
        </div>
>>>>>>> cfc7a1e0dc3a5902edec80243d07c10e051d40fa
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="Cadastrar"></label>
          <div class="col-md-8">
<<<<<<< HEAD
            <button id="Cadastrar" class="btn btn-success" type="Submit">Salvar</button>
=======
            <button id="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
>>>>>>> cfc7a1e0dc3a5902edec80243d07c10e051d40fa
            <button id="Cancelar"  class="btn btn-danger" type="Reset">Cancelar</button>
          </div>
        </div>

      </div>
    </div>


  </fieldset>
</form>

<?php include 'footer.php' ?>