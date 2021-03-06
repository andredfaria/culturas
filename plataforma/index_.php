<?php 

$host = "localhost";
$user = "root";
$senha = "";
$bd = "tai";

$conexao = mysqli_connect($host, $user, $senha, $bd);

if(!$conexao){
     echo '<div class="alert alert-warning" role="alert">
            This is a warning alert—check it out!
            </div>';
}

$queryConsultaPlantio = "SELECT * FROM culturas c INNER JOIN plantio p ON c.id = p.idCulturas";
$consultaPlantio = mysqli_query($conexao, $queryConsultaPlantio);

$queryConsultaColheita = "
            SELECT  *, 
                    DATE_ADD(p.`data`,INTERVAL c.tempoDeColheitaEmDia DAY) AS diaDaColheita,
                    DATEDIFF((SELECT DATE_ADD(p.`data`,INTERVAL c.tempoDeColheitaEmDia DAY)), CURDATE()) AS diasRestantes
            FROM culturas c 
                INNER JOIN plantio AS p ON c.id = p.idCulturas
            WHERE  DATE_ADD(p.`data`,INTERVAL c.tempoDeColheitaEmDia DAY) > CURDATE()
            ORDER BY id DESC
        ";
        
$consultaColheita = mysqli_query($conexao, $queryConsultaColheita);
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

    <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="icon" href="images/23.png" type="image/gif" />

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
            <a class="nav-link" href="index.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Painel de Controle</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cadastrar">
            <a class="nav-link" href="cadastrar.php">
              <i class="fa fa-fw fa-plus"></i>
              <span class="nav-link-text">
                Cadastrar um Culturas</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Listar">
            <a class="nav-link" href="listar.php">
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
                <a href="plantio.php">Plantio</a>
              </li>
              <li>
                <a href="colheita.php">Colheita</a>
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
                <a href="vendas.php">Vendas</a>
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


    <div class="content-wrapper">

      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Bem - Vindo</li>
        </ol>
		
		<!-- retirar se não resolver usar -->
        <!-- Icon Cards -->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">
                  5 Novas Mensagens
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  10 culturas cadastradas 
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
              <!-- <div class="leaf-body">
                <div class="plant-body-icon">
                  <i class="fa fa-fw fa-leaf"></i>
                </div>
                <div class="mr-5">
                  10 Culturas 
                </div>
              </div> -->
              <!-- <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-support"></i>
                </div>
                <div class="mr-5">
                  13 New Tickets!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
            <!-- </div> -->
          </div>
        </div>
    <!-- fim da parte a ser retirada se não encontrar utilidade -->
    
        <div class="row mb-5">
        <aside class="col-sm-4">
            <p>Seu Plantio <i class="fa fa-leaf" aria-hidden="true"></i></p>


            <div class="card">
                <article class="card-group-item">
                    <div class="filter-content">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item ">Arroz <span class="float-right badge badge-light round">142 pés</span> </a>
                            <a href="#" class="list-group-item">Café <span class="float-right badge badge-light round">3
                                    pés</span> </a>
                            <a href="#" class="list-group-item">Feijao <span class="float-right badge badge-light round">32 alqueire</span> </a>
                            <a href="#" class="list-group-item">Milho <span class="float-right badge badge-light round">12 pés</span> </a>
                        </div>
                    </div>
                </article>
            </div>
        </aside>


            <aside class="col-sm-4">
                <p>Quando Colher <i class="fa fa-pagelines" aria-hidden="true"></i></p>
                <div class="card">
                    <article class="card-group-item">
                        <div class="filter-content">
                            <div class="list-group list-group-flush">
                              <a href="#" class="list-group-item ">Arroz <span class="float-right badge badge-light round">142 dias</span> </a>
                              <a href="#" class="list-group-item">Café <span class="float-right badge badge-light round">	60 dias</span> </a>
                              <a href="#" class="list-group-item">Feijao <span class="float-right badge badge-light round">10 dias</span> </a>
                              <a href="#" class="list-group-item">Milho <span class="float-right badge badge-light round">50 dias</span> </a>
                            </div>
                        </div>
                    </article>
                </div>
            </aside>
        </div>

        <!-- Area Chart Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-area-chart"></i>
            Vendas Culturas Agricolas
          </div>
		  <!-- descobrir como inserir o gráfico à partir de um banco -->
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">
            Relativo ao ano corrente
          </div>
        </div>

        <div class="row">

          <div class="col-lg-8">

            <!-- Example Bar Chart Card -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-bar-chart"></i> <!-- descobrir como escolher o ano a ser exibido -->
                Gráfico de lucros anual
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8 my-auto">
                    <canvas id="myBarChart" width="100" height="50"></canvas>
                  </div>
                  <div class="col-sm-4 text-center my-auto"><!-- descobrir como pegar o valor do banco -->
                    <div class="h4 mb-0 text-primary">R$500,00</div>
                    <div class="small text-muted">Venda Anual</div>
                    <hr>
                    <div class="h4 mb-0 text-warning">R$700,00</div>
                    <div class="small text-muted">Gasto Anual</div>
                    <hr>
                    <div class="h4 mb-0 text-success">R$1.000,00</div>
                    <div class="small text-muted">Lucro Anual</div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted"> <!--descobrir como setar o ano de acordo com o banco, substituir o x -->
                Ano x
              </div>
            </div>
		
          </div>


          <div class="col-lg-4">
            <!-- Example Pie Chart Card -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-pie-chart"></i>
                Produtos
              </div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">
                Mes
              </div>
            </div>

          </div>
        </div>

       

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

 
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
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/popper/popper.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="template/vendor/chart.js/Chart.min.js"></script>
    <script src="template/vendor/datatables/jquery.dataTables.js"></script>
    <script src="template/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/sb-admin.min.js"></script>

  </body>

</html>


