<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/edit.css" rel="stylesheet" id="edit">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/edit.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">My Profile</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">About Me<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
          <li><a href="#">Libraries<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-file"></span></a></li>
          <li><a href="#">Settings<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a></li>
          <li><a href="#">Notifications<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-bell"></span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main">


      <div class="row">
        <div class="form-group">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-default">Save</button>
            <button type="close" class="btn btn-default">Close</button>
            <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
          </div>

        </div>

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
              <form class="form-horizontal">
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
              </form>
              <div class="row text-center">
                <button type="button" class="btn btn-default">Reset Password</button>
                <button type="button" class="btn btn-default">Manage Services</button>
              </div>
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