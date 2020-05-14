<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/login.css" rel="stylesheet">

<body>
    <div class="container" id="telalogin">

        <div class="well">
            <form>
                <div class="panel-group">
                    <div class="col-6">
                        <label for="exampleInputEmail1">Endereco de E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrar com o email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Manter Conectado
                            </label>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-block" href="index.php">Login</a>
            </form>
        </div>
    </div>
    </div>
</body>
<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Cadastre-se</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Entrar</a></div>
        </div>
        <div class="panel-body">
            <form id="signupform" class="form-horizontal" role="form">

                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>



                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" placeholder="Endereco de Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">Nome</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="firstname" placeholder="Nome">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Sobrenome</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="lastname" placeholder="Sobrenome">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Senha</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="passwd" placeholder="Senha">
                    </div>
                </div>

                <div class="form-group">
                    <label for="icode" class="col-md-3 control-label">Comfirmar Senha</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="icode" placeholder="Senha">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>Cadastrar Conta</button>
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i>Entrar</button>
                        <span style="margin-left:8px;">ou</span>
                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>Entre com o Facebook</button>

                    </div>
                </div>




            </form>
        </div>
    </div>




</div>
</div>