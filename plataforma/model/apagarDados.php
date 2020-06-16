
<?php
// include '../config/config.php';

$host = "localhost";
$user = "root";
$senha = "";
$bd = "tai";

$conexao = mysqli_connect($host, $user, $senha, $bd);

?>
<?php 
include 'bucarDadosHome.php';
?>
 
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Painel - AgroTech</title>

    <link href="../template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../assets/css/sb-admin.css" rel="stylesheet">
    <link rel="icon" href="images/23.png" type="../assets/image/gif" />

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="">Gerenciador - AgroTech</a>
      <button class="navbar-toggler navbar-toggler-right" 
              type="button" data-toggle="collapse" data-target="#navbarResponsive" 
              aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item active" title="Painel de Controle"
              data-toggle="tooltip" data-placement="right" >
            <a class="nav-link" href="../index.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Painel de Controle</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cadastrar">
            <a class="nav-link" href="../cadastrar.php">
              <i class="fa fa-fw fa-plus"></i>
              <span class="nav-link-text">
                Cadastrar um Culturas</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Listar">
            <a class="nav-link" href="../listar.php">
              <i class="fa fa-fw fa-list"></i>
              <span class="nav-link-text">
                Listas de Culturas</span>
            </a>
          </li>
		  
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vincular">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" 
               href="#collapseTable" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-leaf "></i>
              <span class="nav-link-text">
                Vincular</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseTable">
              <li>
                <a href="../plantio.php">Plantio</a>
              </li>
              <li>
                <a href="../colheita.php">Colheita</a>
              </li>
            </ul>
          </li>
				  
          <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" 
               href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-file"></i>
              <span class="nav-link-text">
                Carteira</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
              <li>
                <a href="../vendas.php">Vendas</a>
              </li>
              <li>
                <a href="compras.html">Compras</a>
              </li>
              <li>
                <a href="projecao.html">Projeção</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title=" Menu ">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" 
               href="#collapseMulti" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-sitemap"></i>
              <span class="nav-link-text">
                Rotas</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
              <li>
                <a href="rota_venda.html">Venda</a>
              </li>
              <li>
                <a href="rota_entrega.php">Entrega</a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
            <a class="nav-link" href="../">
              <i class="fa fa-fw fa-link"></i>
              <span class="nav-link-text">
                Sobre</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
		
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" 
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
              <span class="d-lg-none">Recebimentos
                <span class="badge badge-pill badge-primary">3 Novos</span>
              </span>
              <span class="new-indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">12</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">Entradas:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Cliente</strong>
                <span class="small float-right text-muted">02/06/2020</span>
                <div class="dropdown-message small">RS90,00</div> 
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#"> 
                Todos os recebimentos
              </a>
            </div>
          </li>
		  
		  <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" 
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
              <span class="d-lg-none">Pagamentos
                <span class="badge badge-pill badge-primary">12</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">12</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">Saídas:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Fornecedor</strong>
                <span class="small float-right text-muted">02/06/2020</span>
                <div class="dropdown-message small">R$90,00
				</div> 
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#"> 
                Todos os pagamentos
              </a>
            </div>
          </li>
		  
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Procurar...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                                   </button>
                </span>
              </div>
            </form>
          </li>
          </li>
			
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Sair</a>
          </li>
        </ul>
      </div>
    </nav>
<?php

$host = "localhost";
$user = "root";
$senha = "";
$bd = "tai";

$conexao = mysqli_connect($host, $user, $senha, $bd);

$sql = "UPDATE culturas SET inativo = 1 WHERE id = {$_GET['apagar']}";

if(mysqli_query($conexao, $sql)){ ?>
    <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="rol">
                <div class="alert alert-success" role="alert">
                    Sucesso
                    <a class="btn-primary btn" href="../listar.php">
                        voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}else{
    ?>
       <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="rol">
                    <div class="alert alert-danger" role="alert">
                        Algo de errrado aconteceu
                        <a class="btn-primary btn" href="../listar.php">
                            voltar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
 
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; André & Vinicius 2020</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Tem certeza que deseja sair?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="../">Sair</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../template/vendor/jquery/jquery.min.js"></script>
    <script src="../template/vendor/popper/popper.min.js"></script>
    <script src="../template/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->s
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../template/vendor/chart.js/Chart.min.js"></script>
    <script src="../template/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../template/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this ../template -->
    <script src="../assets/js/sb-admin.min.js"></script>

  </body>

</html>




