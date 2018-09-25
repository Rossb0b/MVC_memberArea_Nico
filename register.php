<?php

require('model.php');
require('registerView.php');

if (isset($_POST['pseudo']))
{
	$req = checkRegistration();
}

if (isset($_POST['pseudo']) AND isset($_POST['password']) AND isset($_POST['email']) AND isset($_POST['password_verification']))
{
	$_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
	$_POST['password'] = htmlspecialchars($_POST['password']);
	$_POST['email'] = htmlspecialchars($_POST['email']);
	$_POST['password_verification'] = htmlspecialchars($_POST['password_verification']);


	// We check if pseudo isn't use, and if every inputs correspond to requested enter.

		if ($req < 1 AND preg_match("#^[a-zA-Z0-9._-]{3,10}$#", $_POST['pseudo']) AND preg_match("#[a-zA-Z0-9@._-]{5,}#", $_POST['password']) AND preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']) AND $_POST['password'] = $_POST['password_verification']) 
		{
			echo "Bienvenu " . $_POST['pseudo'] . " votre enregistration a bien été prise en compte.";

			$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$req = registration();
				?>

			<a href="index.php"><p>Retourner à l'écran de connection.</p></a>
		
		<?php	
		}	
		else 
		{
			echo "Bonjour, vous n'avez apparemment pas répondu aux critères dégagés par notre site afin de vous enregistrer, voici la liste des erreurs : <br />"; 
			
			if (!preg_match("#^[a-zA-Z0-9._-]{3,10}$#", $_POST['pseudo']))
			{
				echo "Votre pseudo ne correspond pas aux critères, veillez à bien les respecter.<br />";
			}
			else if (!preg_match("#[a-zA-Z0-9@._-]{5,}#", $_POST['password']))
			{
				echo "Votre mot de passe ne correspond pas aux critères, veillez à bien les respecter. <br />";
			}
			else if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
			{
				echo "Votre e-mail n'est pas valide.<br />";
			}
			else if (!$_POST['password'] = $_POST['password_verification'])
			{
				echo "Les mots de passes choisie ne match pas.<br />";
			}
			else if ($rep['pseudo'] = $_POST['pseudo'])
			{
				echo "Votre pseudonyme est déjà utilisé<br />";
			}	
		}		
}