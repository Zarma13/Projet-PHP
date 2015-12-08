<?php

if(isset($_SESSION['login'])){
	 
	$user = array('nom' => 'Michel', 'prenom' => 'Adrien');
	$data['user'] = $user;
}
else{
	header('Location:index.php?page=connexion');
}
?>