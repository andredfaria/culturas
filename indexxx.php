<?php include 'config.php'?>
<?php include 'header.php'?>
<?php 

?>
<script type="text/javascript" src="https://pt.eltiempo.es/widget/widget_loader/05ef92906b9b48212ff449886c9901b8"></script>

<div class="container">
    <br>
    <h1 class="text-center"><?php
		$hr = date(" H ");
		if($hr >= 12 && $hr<18) {
			$resp = "Boa tarde!";
		}
		else if ($hr >= 0 && $hr <12 ){
			$resp = "Bom dia!";}
		else {
			$resp = "Boa noite!";
		}
		echo "$resp" . " André";
		?>
	</h1>
    <hr>

    <div class="row">
        <aside class="col-sm-4">
            <p>Seu Plantio</p>


            <div class="card">
                <article class="card-group-item">
                    <div class="filter-content">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item">Milho <span
                                    class="float-right badge badge-light round">142 pés</span> </a>
                            <a href="#" class="list-group-item">Café <span class="float-right badge badge-light round">3
                                    pés</span> </a>
                            <a href="#" class="list-group-item">Algodão <span
                                    class="float-right badge badge-light round">32 pés</span> </a>
                            <a href="#" class="list-group-item">Cana <span
                                    class="float-right badge badge-light round">12 pés</span> </a>
                        </div>
                    </div>
                </article>
            </div>
        </aside>

        <aside class="col-sm-4">
            <p>Quando Colher</p>
            <div class="card">
                <article class="card-group-item">
                    <div class="filter-content">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item">Milho <span
                                    class="float-right badge badge-light round">em 35 dias </span></a>
                            <a href="#" class="list-group-item">Café <span
                                    class="float-right badge badge-light round">em 309 dias</span> </a>
                            <a href="#" class="list-group-item">Algodão <span
                                    class="float-right badge badge-light round">em 52 dias</span> </a>
                            <a href="#" class="list-group-item">Cana <span
                                    class="float-right badge badge-light round">em 8 dias</span> </a>
                        </div>
                    </div>
                </article>
            </div>
        </aside>
    </div>
	</aside>
	
	<div id="c_11b892f67e5bd39fdde1aa26d29f8870" class="normal"></div>
	<script type="text/javascript" src="https://pt.eltiempo.es/widget/widget_loader/11b892f67e5bd39fdde1aa26d29f8870"></script>

</div>

</div>
<?php include 'footer.php'?>