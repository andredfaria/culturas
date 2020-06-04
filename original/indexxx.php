<body style="background-color: white">
<link rel="icon" href="images/23.png" type="image/gif" />
<?php include 'config.php' ?>
<?php include 'header.php' ?>
<?php include 'bucarDadosHome.php' ?>
<?php

?>
<script type="text/javascript" src="https://pt.eltiempo.es/widget/widget_loader/05ef92906b9b48212ff449886c9901b8"></script>
<div class="container">
    <br>
    <h1 class="display-3"><?php
                            $hr = date(" H ");
                            if ($hr >= 12 && $hr < 18) {
                                $resp = "Boa Tarde!";
                            } else if ($hr >= 0 && $hr < 12) {
                                $resp = "Bom Dia!";
                            } else {
                                $resp = "Boa Noite!";
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
<<<<<<< HEAD:aa/indexxx.php
                            <a href="#" class="list-group-item list-group-item-primary">Milho <span class="float-right badge badge-light round">142 pés</span> </a>
                            <a href="#" class="list-group-item">Café <span class="float-right badge badge-light round">3
                                    pés</span> </a>
                            <a href="#" class="list-group-item">Algodão <span class="float-right badge badge-light round">32 pés</span> </a>
                            <a href="#" class="list-group-item">Cana <span class="float-right badge badge-light round">12 pés</span> </a>
=======
                        <?php while ($linha = mysqli_fetch_array($consultaPlantio)) { ?>
                            <a href="#" class="list-group-item">
                                <?= $linha['nome']  ?>
                                <span class="float-right badge badge-light round">
                                    <?= $linha['quantidade'] ?>
                                    <?= $linha['unidade'] ?>
                                </span> 
                                </a>
                        <?php }?>
>>>>>>> 3619aa2559b27d86299eb034c3a7301b3e27663c:original/indexxx.php
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
<?php //include 'footer.php' ?>
</body>