<?php include 'header.php'  ?>
<?php include 'buscarDados.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/edit.css" rel="stylesheet" id="edit">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/edit.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <div class="main">
    </div>
      <div class="row">
        <div class="col-xs-12 col-lg-7">
          <div class="panel panel-primary">
            <div class="row">
              <div class="col-xs-12">
                <h4>My Information</h4>
              </div>
            </div>
            <div class="panel-body">
              <form action="salvarDados.php" method="POST" class="form-horizontal">
                <div class="row">
                  <div class=" col-xs-12 col-sm-3 col-lg-2 text-center pull-right">
                    <img src="http://placehold.it/100x100" alt="..." class="img-rounded">
                    <div class="clearfix"></div>
                    <div class="fileUpload btn">
                      Add Photo
                      <input type="file" class="upload" />
                    </div>
                  </div>
                  <div class="col-sm-9 col-lg-10">
                    <div class="form-group">
                      <label for="inputtext1" class="col-sm-4  col-md-4 col-lg-3 control-label">First Name</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext1" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4  col-md-4 col-lg-3 control-label">Last Name</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext3" class="col-sm-4   col-md-4 col-lg-3 control-label">UserName</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext3" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4  col-md-4 col-lg-3 control-label">Email</label>
                      <div class="col-sm-8 col-md-8  col-lg-9">
                        <input type="email" class="form-control" id="inputtext2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4   col-md-4 col-lg-3 control-label">Phone</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4 col-lg-3 control-label">Extention</label>
                      <div class="col-sm-8 col-lg-9">
                        <input type="text" class="form-control" id="inputtext2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputtext2" class="col-sm-4 col-lg-3 control-label">Fax</label>
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
                <h4>My Information</h4>
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
