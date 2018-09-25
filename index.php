<?php

require('model.php');

$req = identification();

$rep = $req->fetchAll();


foreach ($rep as $val) {

if (isset($_POST['identifiant']) AND isset($_POST['password-check']))
{	

	$checkedPassword = password_verify($_POST['password-check'], $val['pass']);

	if ($rep['pseudo'] = $_POST['identifiant'])
	{
		if ($checkedPassword)
		{
			session_start();
			$_SESSION['id'] = $val['id'];
			$_SESSION['pseudo'] = $val['pseudo'];
			$_SESSION['isConnect'] = true;
			header('indexView.php');
			if ($_POST['auto_connection'] = true)
			{
			setcookie('pseudo', '$_POST["pseudo"]', time() + 365*24*3600, null, null, false, true);
			setcookie('password', '$rep["pass"]', time() + 365*24*3600, null, null, false, true);
			}
		}
		else 
		{
			echo "Mauvais identifiant ou mot de passe.";
		}
	}
	else 
	{
		echo "Mauvais identifiant ou mot de passe.";
	}

	$req->closeCursor();
}
else if ($_COOKIE['pseudo'] = $val['pseudo'] AND $_COOKIE['password'] = $val['pass'])
{
	// session_start();
	$_SESSION['id'] = $val['id'];
	$_SESSION['pseudo'] = $val['pseudo'];
	$_SESSION['isConnect'] = true;
	header('indexView.php');
}
}

require('indexView.php');