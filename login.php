<?php 

require_once 'functions.php';

$error = false;
$errorLog = '';

if(isset($_POST['username']) 
&& isset($_POST['password']) ) 
{
	$username = nettoyage($_POST['username']);
	$password = nettoyage($_POST['password']);

	if (!empty($username)  
	&& !empty($password)) 
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		if(strlen(trim($username))>1 && strlen(trim($password))>1 )
		{
			$res = userLogin($username,$password);
			
			if($res != false)
			{
				header("Location: accueil.php");
			}else{
				$error = true;
			}
		}else{
			$error = true;
		}
	}else{
		$error = true;
	}
}else{
	$error = true;
}

require_once 'header.php';

?>

	<body id="register" class="background-image">
		<div class="evergreenform"><a href="index.php">EVERGREEN</a></div>
		<section id="page" class="container">
		
			<section class="row error">
				<?php echo $errorLog; ?>
			</section>
			<section class="row">
				<form class="form-horizontal formulaire" method="post" name="login">
					<fieldset>

					<!-- Form Name -->
					<legend>Se connecter</legend>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="username">Pseudo</label>  
						<div class="col-md-4">
							<input id="username" name="username" type="text" placeholder="Entrez votre pseudo" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Password input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="password">Mot de passe</label>
						<div class="col-md-4">
							<input id="password" name="password" type="password" placeholder="Entrez votre mot de passe" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="Login"></label>
						<div class="col-md-4">
							<button id="Login" name="Login" class="btn btn-success">Se connecter</button>
						</div>
					</div>

					</fieldset>
				</form>

			</section>
			<button class="btn btn-default btn-lg button-4 center" id="button-signup" style="width:auto;" onclick="window.location.href='register.php'">Pas encore inscrit ?</button>

		</section> <!-- fin de page-->
	</body>
</html>

