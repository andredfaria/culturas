<?php require VIEWS_PATH . 'includes/header.phtml'; ?>
<?php 
  // var_dump($view->edit);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//Plataforma.jquery.com/jquery-1.11.1.min.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<form class="form-horizontal" action="salvarDados.php">
  <fieldset>
    <div class="panel">
      <div class="panel-heading">
        <h1 class="text-center">
          Cadastro de Culturas 
        </h1>  
    </div>
      <input id="id" name="id" value="<?= isset($view->edit[0]['id']) ? $view->edit[0]['id'] : "" ?>" type="hidden">


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
                   value="<?= isset($view->edit["nome"]) ? $view->edit["nome"] : "" ?>"
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
                   value="<?= isset($view->edit[0]['descricao']) ? $view->edit[0]['descricao'] : "" ?>"
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
                     value="<?= isset($view->edit[0]['valorMedio']) ? $view->edit[0]['valorMedio'] : "" ?>"
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
                     value="<?= isset($view->edit[0]['tempoDeColheitaEmDia']) ? $view->edit[0]['tempoDeColheitaEmDia'] : "" ?>"
                     pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" >
            </div>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="Cadastrar"></label>
          <div class="col-md-8">
            <input id="Cadastrar" class="btn btn-success" type="button" value="Salvar" />
            <button id="Cancelar"  class="btn btn-danger" type="Reset">Cancelar</button>
          </div>
        </div>

      </div>
    </div>


  </fieldset>
</form>

<script>
$("#Cadastrar").on( "click", function() {
    $.ajax({
      method: "POST",
      url: "/cadastrar/teste",
      data: { nome: "Pedro", email: "pedro@email.com" }
    }).done(function(msg){
        $("#resultado").html(msg);
    });
});

</script>

<?php require VIEWS_PATH . 'includes/footer.phtml'; ?>