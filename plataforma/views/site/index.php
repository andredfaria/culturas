<link rel="icon" href="images/23.png" type="image/gif" />
<?php // include 'config.php' ?>
<?php require VIEWS_PATH . 'includes/header.phtml'; ?>
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
                            <a href="#" class="list-group-item">Milho <span class="float-right badge badge-light round">142 pés</span> </a>
                            <a href="#" class="list-group-item">Café <span class="float-right badge badge-light round">3
                                    pés</span> </a>
                            <a href="#" class="list-group-item">Algodão <span class="float-right badge badge-light round">32 pés</span> </a>
                            <a href="#" class="list-group-item">Cana <span class="float-right badge badge-light round">12 pés</span> </a>
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
                            <a href="#" class="list-group-item">Milho <span class="float-right badge badge-light round">em 35 dias </span></a>
                            <a href="#" class="list-group-item">Café <span class="float-right badge badge-light round">em 309 dias</span> </a>
                            <a href="#" class="list-group-item">Algodão <span class="float-right badge badge-light round">em 52 dias</span> </a>
                            <a href="#" class="list-group-item">Cana <span class="float-right badge badge-light round">em 8 dias</span> </a>
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
<?php require VIEWS_PATH . 'includes/footer.phtml'; ?>