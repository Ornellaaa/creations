

<?php
// print_r($_POST);

session_start();


$tabMembre=array('username'=> 'toto','mdp'=>'toto','nom'=>'patate','prenom'=>'monsieur','role'=>'admin');




function formidable($nom){
	if(isset($_POST[$nom]) && $_POST[$nom]!= '') echo $_POST[$nom]; 
	}





	if (isset($_POST['mdp']) AND $_POST['username'])  {
		if (($tabMembre['username'] == $_POST['username']) && ($tabMembre['mdp'] == $_POST['mdp'])){
			
			$_SESSION = $tabMembre;

			header("location:pageSecu.php?");
		} else{
		
		echo '<strong>Erreur: vous n\'êtes pas enregistré !</strong>';
	}


		
	
echo '<br>';
// print_r($_SESSION);
		
		}
		

		// $_SESSION['log'] = $_POST['mdp'];
		// $_SESSION[0] = $_POST['username'];





?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercie espace membre</title>
	<style type="text/css">
	body{
		text-align: center;
		background-color: #c7dfe0;


	}
		form{
			width: 500px;
			height: 300px;
			background-color: #1b8591;
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			border-radius: 4px;
		}
		p{
			font-family: tahoma;
			font-size: 20px;
			font-weight: bold;
			color: white;
			padding-top: 30px;
    		padding-bottom: 10px;

		}
		input{
			font-family: tahoma;
			font-size: 14px;
			border-radius: 2px;
			margin-top: 17px;
			border-radius: 2px;
			border: none;
			padding: 4px;


		}
		.bouton{
			padding: 7px 26px; 
			border: none;
			background-color: white;
			border-radius: 4px;
			margin-top: 20px;
		}
		.bouton:hover{
			box-shadow: 2px 3px 3px #0f6468;
		}
		label{
			color: white;
			font-family: tahoma;
			font-size: 14px;
		}
		.zoom img{
			width: 200px;
		}
		.zoom img:hover{
				transform: scale(1.05);
	-ms-transform: scale(1.05);
	-webkit-transform: scale(1.05);
	-o-transform: scale(1.05);
	-moz-transform: scale(1.05);
		}

	</style>
</head>
<body>
<div class="zoom">
<img src="index.png">
</div>
<form action="" method="POST">
<p>Connectez vous à votre espace personnel</p>
<hr>
<label>Username</label>
	<input type="text" name="username" class="nom" placeholder=" Username" value="<?php formidable('nom');  ?>" >
	<br><br>
	<label>Password</label>
	<input  type="password" name="mdp" class="mdp" placeholder=" Password" value="<?php formidable('mdp');  ?>" >
	
	<br><br>
	<input class="bouton" type="submit" value="Log In">
</form>
</body>
</html>