<?php 

require_once 'functions.php';

$error = false;
$errorMes = '';

if(isset($_POST['username']) 
&& isset($_POST['email']) 
&& isset($_POST['password']) ) 
{
	$username	= nettoyage($_POST['username']);
	$email 		= nettoyage($_POST['email']);
	$password 	= nettoyage($_POST['password']);

	
	if (!empty($username) 
	&& !empty($email) 
	&& !empty($password)) 
	{
		if (strlen($username) < 3) {
			$error = true;
			$errorMes = "Username must have atleast 3 characters.";
		}else if (!preg_match("/^[a-zA-Z \s]+$/",$username)) {
			$error = true;
			$errorMes = "Username must contain alphabets and space.";
		}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$error = true;
			$errorMes = "Please enter valid email address.";
		}elseif (strlen($password) < 6) {
			$error = true;
			$errorMes = "Password must have at least 6 characters.";
		}else{

			if(isUserFree($username,$email)) 
			{
				$res = createUser($email, $username, $password);
				if($res != false)
				{
					$_SESSION['id'] = $res['id'];
					header("Location: accueil.php");
				}else{
					$error = true;
					$errorMes = "Sorry something went wrong...";
				}
			}else{
				$error = true;
				$errorMes = "Your username and/or your email is already taken !";
			}
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
				<?php echo $errorMes; ?>
			</section>
			<section class="row">

				<form class="form-horizontal formulaire" method="post">
					<fieldset>
						<!-- Form Name -->
						<legend>S'inscrire</legend>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="username">Pseudo</label>  
						  <div class="col-md-4">
						  <input id="username" name="username" type="text" placeholder="Entrez votre pseudo" class="form-control input-md" required="">
						    
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="email">Email</label>  
						  <div class="col-md-4">
						  <input id="email" name="email" type="text" placeholder="Entrez votre email" class="form-control input-md" required="">
						    
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
						  <label class="col-md-4 control-label" for="submit"></label>
						  <div class="col-md-4">
						    <button id="submit" name="submit" class="btn btn-success">S'inscrire</button>
						  </div>
						</div>

					</fieldset>
				</form>
			</section>
			<button class="button-4 center" id="button-login" style="width:auto; margin-bottom: 50px;" onclick="window.location.href='login.php'">Déjà inscrit ?</button>

		</section> <!-- fin de page-->
	</body>
</html>

