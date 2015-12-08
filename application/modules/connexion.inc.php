<?php
if (isset($_REQUEST['valid'])){
	if(!empty($_REQUEST['login']) AND !empty($_REQUEST['mdp'])){
		include('config.inc.php');
		
		$data['connexion'] = $dbh->query('SELECT COUNT(*) AS NB FROM t_utilisateur_uti WHERE UTI_LOGIN = "'.$_POST['login'].'" AND UTI_PASS="'.$_POST['mdp'].'"')->fetchAll();
		
		if($data['connexion'][0]['NB'] == 1){
			session_start(); 
			$_SESSION['login'] = $_POST['login'];
			header('Location:index.php?page=profil');
			exit;
		}
		elseif($data['connexion'][0]['NB'] == 0){
			echo"Il faut s'inscrire pour accéder à la page membre !<br>";
		}
			else{
				echo"Problème dans la base de données : contacter l'administrateur.<br>";
			}
	}
	else{
		echo"Remplir tous les champs<br>";
		//echo $_REQUEST['login'].' '.$_REQUEST['mdp'];
	}
	/*echo "<pre>";
	print_r($data['connexion']);
	echo "</pre>";*/
	
}
?>