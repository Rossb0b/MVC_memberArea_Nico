<?php

function identification()
{	
	try 
	{
		$bdd = new PDO('mysql:host=localhost;dbname=member_area', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (exception $e)
	{
	    die('erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT id, pseudo, pass FROM member');
	
	return $req;
};

function registration()
{
	try 
	{
		$bdd = new PDO('mysql:host=localhost;dbname=member_area', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (exception $e)
	{
    	die('erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO member(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
	$req->execute(array(
		'pseudo' => $_POST['pseudo'],
		'pass' => $_POST['password'],
		'email' => $_POST['email']
				));

	return $req;
};

function checkRegistration()
{
	try 
	{
		$bdd = new PDO('mysql:host=localhost;dbname=member_area', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (exception $e)
	{
    	die('erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT pseudo FROM member WHERE pseudo = "'.$_POST['pseudo'].'"');
	$countpseudo = $req->rowCount();

	return $countpseudo;
}
