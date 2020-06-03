<link rel="icon" href="images/23.png" type="image/gif" />
<?php include 'config.php' ?>
<?php include 'header.php' ?>
<?php include 'bucarDadosHome.php' ?>
<?php

?>
<script type="text/javascript" src="https://pt.eltiempo.es/widget/widget_loader/05ef92906b9b48212ff449886c9901b8"></script>
<div class="container">
    <br>
    <h1 class="text-center"><?php
                            $hr = date(" H ");
                            if ($hr >= 12 && $hr < 18) {
                                $resp = "Boa tarde!";
                            } else if ($hr >= 0 && $hr < 12) {
                                $resp = "Bom dia!";
                            } else {
                                $resp = "Boa noite!";
                            }

                            $_GET['user'] = isset($_GET['user']) ? $_GET['user'] : " André ";
                            echo "$resp " . $_GET['user'];
                            ?>
    </h1>
    <hr>

    <div class="row">
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
    <div class="content-wrapper">
    </div>
    </aside>

    <div id="c_11b892f67e5bd39fdde1aa26d29f8870" class="normal"></div>
    <script type="text/javascript" src="https://pt.eltiempo.es/widget/widget_loader/11b892f67e5bd39fdde1aa26d29f8870"></script>

</div>

</div>
<?php include 'footer.php' ?>