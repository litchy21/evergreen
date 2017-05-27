<?php

require_once 'header.php';
require_once 'menu.php';

?>

<div class="container-fluid">  
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="">
	  <!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		  <!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/film.png" alt="le film">
                <a href="film.php">
				<div class="carousel-caption">
					<h3>Le Film</h3>
					<p>Venez découvrir le film Evergreen !</p>
                </div>
                </a>
            </div>

            <div class="item">
                <img src="images/scenario.png" alt="le sénario">
                <a href="article_senario.php">
				<div class="carousel-caption">
					<h3>Le Sénario</h3>
					<p>Plongez dans la conception d'Evergreen</p>
				</div>
                </a>
            </div>

            <div class="item">
                <img src="images/tournage.png" alt="le tournage">
                <a href="article_tournage.php">
				<div class="carousel-caption">
					<h3>Le Tournage</h3>
					<p>Venez rencontrer l'équipe de tournage et les acteurs !</p>
				</div>
                </a>
            </div>
		</div>

		  <!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<!-- Section articles -->



<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="article_senario.php">
                <div class="thumbnail">
                    <img src="images/article_senario.png" alt="">
                    <div class="caption">
                        <h4 class="text-center">Le Scénario</h4>
                        <p>
    						Plongez dans la conception d'Evergreen ! Le scénario authentique du court-métrage à votre disposition pour décrouvrir Evergreen dans son aspect originel...
                        </p>
                        <p class="text-center">
                            <i class="fa fa-thumbs-o-up votes"></i><i class="fa fa-thumbs-o-down votes"></i>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="article_interview.php">
                <div class="thumbnail">
                    <img src="images/article_interview.png" alt="">
                    <div class="caption">
                        <h4 class="text-center">Interview exclusive</h4>
                        <p>
                        	Venez à la rencontre de la scénariste et réalisatrice Ifigeneia Kotsoni qui a accepté de répondre à nos questions sur Evergreen
                        </p>
                        <p class="text-center">
                            <i class="fa fa-thumbs-o-up votes"></i><i class="fa fa-thumbs-o-down votes"></i>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="article_tournage.php">
                <div class="thumbnail">
                    <img src="images/article_tournage.png" alt="">
                    <div class="caption">
                        <h4 class="text-center">Le Tournage</h4>
                        <p>
                            Des photos exclusives du tournage d'Evergreen dans les montagnes grecques...
                        </p>
                        <p class="text-center">
                            <i class="fa fa-thumbs-o-up votes"></i><i class="fa fa-thumbs-o-down votes"></i>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="article_seed.php">
                <div class="thumbnail">
                    <img src="images/article_seed.png" alt="">
                    <div class="caption">
                        <h4 class="text-center">The Seed</h4>
                        <p>
                            À la découverte du dernier court-métrage d'Ifigeneia, The Seed, paru en 2015.
                        </p>
                        <p class="text-center">
                            <i class="fa fa-thumbs-o-up votes"></i><i class="fa fa-thumbs-o-down votes"></i>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- End container -->


<?php

require_once 'footer.php';

?>
