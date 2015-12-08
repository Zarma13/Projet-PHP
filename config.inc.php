<?php
$config['bdd'] = [
	'dsn' => 'mysql:host=localhost; dbname=recette;charset=utf8',
	'user' => 'u_recette',
	'pwd' => 'SJzEeqLb2HHeNYVV'
];

try{
	$dbh = new PDO($config['bdd']['dsn'], $config['bdd']['user'], $config['bdd']['pwd']);
	$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$dbh -> exec("SET NAMES 'utf8' ");
}
catch(Exception $e){
	echo 'Erreur : '.$e->getMessage().'<br>';
	echo 'N° : '.$e -> getCode();
	exit();
}

$_PAGES = array('' => 'accueil',
			'connexion' => 'connexion', 
			'profil' => 'profil', 
			'detail' => 'recette_detail', 
			'liste' => 'recette_liste',
			'recette' => 'recette',
			'deconnexion' => 'deconnexion');
			
			
//define('HOME_PAGE', 'accueil');
//define('ERROR_404', '404');
?>
