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

		<div>
			<img id="affiche" src="images/affiche.jpeg" alt="Affiche d'Evergreen" />
			<div id="fiche">
				<ul>
					<li>Titre : Evergreen</li>
					<li>Année de sortie: 2012</li>
					<li>Pays d'origine : Grèce</li>
					<li>Durée : 14 minutes</li>
					<li>Couleur : couleurs</li>
					<li>Genres : fantastique, science-fiction</li>
					<li>Réalisation : Ifigeneia Kotsoni</li>
					<li>Scénario : Ifigeneia Kotsoni</li>
				</ul>
				<p>Une femme étrange arrive du Nord dans un village préhistorique apportant de mauvaises nouvelles...</p>
			</div>
		</div>
		

<?php

require_once 'footer.php';

?>
