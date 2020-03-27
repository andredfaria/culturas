<?php include 'header.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<form action="editarDados.php" class="form-horizontal">
  <fieldset>
    <div class="panel panel-primary">
      <div class="panel-heading">Cadastro de Cliente</div>

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
            <input id="nome" name="Nome" 
                   value="<?= $_GET['nome'] ?>" 
                   placeholder="nome" 
                   class="form-control input-md" 
                   required="" 
                   type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="descricao">Descrição</label>
          <div class="col-md-8">
            <input type="text" id="descricao" name="descricao" 
                   value="<?= $_GET['descricao'] ?>" 
                   placeholder="Descrição da cultura" 
                   class="form-control input-md" >
          </div>
        </div>

        
        <div class="form-group">
          <label class="col-md-2 control-label" for="valorMedio">Valor<h11>*</h11></label>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
              <input id="valorMedior" name="valorMedio" class="form-control" placeholder="Digite o valor" 
                     value="<?= $_GET['valorMedio'] ?>" 
                     required="" type="text" maxlength="13" 
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="tempoDeColheitaEmDia">Tempo em dias</label>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input id="tempoDeColheitaEmDia" name="tempoDeColheitaEmDia" 
                     class="form-control" 
                     value="<?= $_GET['tempoDeColheitaEmDia'] ?>" 
                     placeholder="Quanto tempo para ficar top" 
                     type="number" maxlength="4" 
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" >
            </div>
          </div>
        </div>
        
           <input  id="id" name="id" 
                   class="form-control" 
                   type="hidden"
                   value="<?= $_GET['id']?>">
        </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="Cadastrar"></label>
          <div class="col-md-8">
            <button id="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
            <button id="Cancelar"  class="btn btn-danger" type="Reset">Cancelar</button>
          </div>
        </div>

      </div>
    </div>


  </fieldset>
</form>

<?php include 'footer.php' ?>