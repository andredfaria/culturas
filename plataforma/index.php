<?php include 'template/header.php' ?>

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
                  6 Novas Tarefas 
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
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">
                  6 Novos Pedidos 
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
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
              </a>
            </div>
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
                            <?php while ($linha = mysqli_fetch_array($consultaPlantio)) { ?>
                                <a href="#" class="list-group-item">
                                    <?= $linha['nome']  ?>
                                    <span class="float-right badge badge-light round">
                                        <?= $linha['quantidade'] ?>
                                        <?= $linha['unidade'] ?>
                                    </span> 
                                    </a>
                            <?php }?>
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
                            <?php while ($linha = mysqli_fetch_array($consultaColheita)) { ?>
                                <a href="#" class="list-group-item">
                                    <?= $linha['nome']?> 
                                    <span class="float-right badge badge-light round">
                                        <?= 'Em '. $linha['diasRestantes'] . ' dias' ?>
                                    </span>
                                </a>
                            <?php }?>
                            
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
            Vendas x Compras
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
                    <div class="h4 mb-0 text-primary">R$10,00</div>
                    <div class="small text-muted">Venda Anual</div>
                    <hr>
                    <div class="h4 mb-0 text-warning">R$18,474</div>
                    <div class="small text-muted">Gasto Anual</div>
                    <hr>
                    <div class="h4 mb-0 text-success">R$16,219</div>
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
                Representatividade dos vendedores
              </div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">
                Mes x
              </div>
            </div>

          </div>
        </div>

       

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <?php include 'template/footer.php' ?>

