<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=eas;charset=utf8', 'eas', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
