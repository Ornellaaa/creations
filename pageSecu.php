<?php
session_start();

print_r($_POST);
echo '<br>';
print_r($_SESSION);

$tabMembre=array('username'=> 'toto','mdp'=>'toto','nom'=>'patate','prenom'=>'monsieur','role'=>'admin');


		if (($_SESSION['username'] == $tabMembre['username']) && ($_SESSION['mdp'] == $tabMembre['mdp'])){
			
		} else{
		
		header("location:testUtilisateur.php?");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		p{
			font-size: 30px;
			font-weight: bold;	
			color: #1b8591;	
		}
		body{
		text-align: center;
		background-color: #c7dfe0;
		box-sizing: border-box;
		font-size: 0;
		}
		nav{
			width: 350px;
		}
		ul{
			text-align: left;
			list-style: none;
			background-color: #1b8591;
			
		}
		li{
			display: inline-block;
			padding: 15px;

		}
		a{
			text-decoration: none;
			float: right;
			color: white;
			font-family: tahoma;
			font-size: 14px;
			font-weight: bold;
		}
		#blabla .deconect{
			color: #1b8591;
			font-size: 15px;
			margin-right: 50px;
			float: right;
			clear: both;
		}
		#blabla .deconect:hover{
			font-size: 16px;
		}
		img{    
			margin-top: 70px;
		}
		
		.bonjour p{
			width: 200px;
			font-size: 16px;
			float: right;
			clear: both;
			color: #1b8591;
			
		}
	</style>
</head>
<body>
<div class="bonjour">
<p>Bonjour
	<?php
	echo $_SESSION['username'].' !';
	?>

	</p>
</div>

<div id="blabla"><a  class="deconect" href="deconnexion.php">Deconnexion</a></div>

<nav class="menuUtilisateur">
	<ul>
		<li><a href="#"> Menu 1</a></li>
		<li><a href="#"> Menu 2</a></li>
		<li><a href="#"> Menu 3</a></li>
	</ul>
</nav>

<p>Hi there!</p>

<img src="bird.png">
<br>


</body>
</html>