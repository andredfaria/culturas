<?php include 'header.php'  ?>
<?php include 'buscarDados.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/edit.css" rel="stylesheet" id="edit">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//Plataforma.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/edit.js"></script>
  <div class="main">
      <div class="row">
        <div class="form-group">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-default">Savar</button>
            <button type="close" class="btn btn-default">Sair</button>
            <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
          </div>  
        </div>

      </div>
      <div class="row">
        <div class="col-xs-12 col-lg-7">
          <div class="panel panel-primary">
            <div class="row">
              <div class="col-xs-12">
                <h4>Minhas Informacoes</h4>
              </div>
            </div>
            <div class="panel-body">
              <form action="salvarDados.php" method="POST" class="form-horizontal">
                <div class="row">
                  <div class=" col-xs-12 col-sm-3 col-lg-2 text-center pull-right">
                    <img src="http://placehold.it/100x100" alt="..." class="img-rounded">
                    <div class="clearfix"></div>
                    <div class="fileUpload btn">
                      Add Foto
                      <input type="file" class="upload" />
                    </div>
                  </div>
                  <div class="col-sm-9 col-lg-10">
                    <div class="form-group">
                      <label for="inputtext1" class="col-sm-4  col-md-4 col-lg-3 control-label">Nome</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext1" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4  col-md-4 col-lg-3 control-label">Sobrenome</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext3" class="col-sm-4   col-md-4 col-lg-3 control-label">Apelido</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4  col-md-4 col-lg-3 control-label">E-mail</label>
                      <div class="col-sm-8 col-md-8  col-lg-9">
                        <input type="email" class="form-control" id="inputtext2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4   col-md-4 col-lg-3 control-label">Telefone</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4 col-lg-3 control-label">Extensao</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4 col-lg-3 control-label">Ceculalr</label>
                      <div class="col-sm-8  col-lg-9">
                        <input type="text" class="form-control" id="inputtext2" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row text-center">
                  <input type="submit" class="btn btn-success" value="Salvar">
                  <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-lg-5">
               <div class="panel panel-primary">
            <div class="row">
              <div class="col-xs-12">
                <h4>Minhas Informacoes</h4>
              </div>
            </div>
              <div class="panel-body">
              <form class="form-horizontal">
                <div class="row">
                    <div class="checkbox">
    <label>
      <input type="checkbox"> Include all outbound notifications
    </label>
  </div>
  <p>Customize your zipFormPlus signature here</p>
                </div>
                </form>

                </div>
            </div>
        </div>
      </div>


    </div>
    <?php include 'footer.php'?>
