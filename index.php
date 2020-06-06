<!DOCTYPE html>
<html>
<head>
	<title>Page d'accueil</title>
    <meta charset="UTF-8">
 	<meta  http-equiv="Content-type" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/connexion.css">
   <link rel="stylesheet" type="text/css" href="css/util.css">



	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
</head>
<body>
       <div id="cont">
			<div class="container ">
			  <div class="row ">
			    <div class=" col-xs-12 col-sm-12 col-md-4 ">
			      <div class="gauche"> <span class="ml-2">  le plaisir de jouer </span></div>
                       <div class="arc"> </div>
		               <img id="logosa" src="images/logo-QuizzSA.png">
	
			    </div>
			    <div class="col-xs-12 col-sm-12 col-md-8 ">
			      	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" id="connform" action="index.php">
					<span class="login100-form-title">
						Se  Connecter
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="login" placeholder="Login" id="log" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password" id="pwd" required>
						<span class="focus-input100"></span>

					</div>
					<div id="response"></div>
                         

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="button" name="connecter" id="login">
							Se connecter
						</button>
						
						<span class="txt1 p-t-5">
							Vous n'avez pas de compte ?
						</span><br>

						<a href="src/inscription.php" class="txt3">
							S'inscrire pour jouer
						</a>
					</div>

					
				</form>
				
			</div>
		</div>
		
	</div>

	
			    </div>
			  </div>
			  
			</div>
		</div>



<script
  src="https://code.jquery.com/jquery-3.5.1.min.js" 
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="js/script.js"> </script>


</body>
</html>