<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>LOGIN</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Custom styles for this template -->
	<link href="../css/signin.css" rel="stylesheet">
</head>

<body>
	<?php include("header.php"); ?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-4 text">
			<h1><strong>ZZ_Agenda</strong> Login Form</h1>
		</div>
	</div>

	<div class="container">
		<form  method="post" class="form-signin"  action="../functions/connexion.php" >
			<label for="login" class="sr-only">Login</label>
			<input type="text" name="login"class="form-control" placeholder="Veuillez saisir votre login" required>
			<label for="password" class="sr-only">Password</label>
			<input type="text" name="password" class="form-control"  placeholder="Veuillez saisir votre mot de passe" required>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="remember-me"> Remember me
			  </label>
			</div> 
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Log in</button>
		</form>

	</div>
	
	<!-- /container -->
	<br><br><br>
	<?php include("footer.php"); ?>


	  





























	<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
