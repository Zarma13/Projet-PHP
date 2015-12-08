<?php

require_once('config.inc.php');
if(isset($_SESSION['login'])){
	echo"SESSION ACTIVE";
	echo 'SESSION:'.$_SESSION['login'];
}




$data['recette_detail'] = $dbh->query('SELECT * FROM t_recette_rct   WHERE RCT_ID = '.$_GET['idr'])->fetchALL();

$data['recette_detail'][0]['UTI_LOGIN'] =$dbh->query('SELECT UTI_LOGIN FROM t_utilisateur_uti INNER JOIN t_recette_rct USING(UTI_ID) WHERE RCT_ID = '.$_GET['idr'])->fetchALL();

if(isset($_SESSION['login'])){
	$data['recette_detail'][0]['UTI_ID'] = $dbh->query('SELECT UTI_ID FROM t_utilisateur_uti WHERE UTI_LOGIN = "'.$_SESSION['login'].'"')->fetchALL();
}

$data['recette_detail'][0]['INGREDIENT'] =$dbh->query('SELECT * FROM tj_igd_rct_uni WHERE RCT_ID = '.$_GET['idr'])->fetchALL();

$data['recette_detail'][0]['COMMENTAIRE'] = $dbh->query('SELECT * FROM t_commentaire_com INNER JOIN t_utilisateur_uti USING(UTI_ID) WHERE RCT_ID = '.$_GET['idr'].' ORDER BY COM_DATE')->fetchALL();

if(isset($_REQUEST['envoyer'])){
	try{
		$dbh->exec('INSERT INTO t_commentaire_com (COM_TEXTE, UTI_ID, RCT_ID) VALUES ("'.$_REQUEST['commentaire'].'", '.$data['recette_detail'][0]['UTI_ID'][0]['UTI_ID'].', '.$_REQUEST['idr'].')');
	}
	catch(Exception $e){
		die('Erreur '.$e->getMessage().'<br>');
	}
	
}

if(isset($_REQUEST['supprimer'])){
	try{
		$dbh->exec('DELETE FROM t_commentaire_com WHERE COM_ID = '.$_REQUEST['idcom'].'');
	}
	catch(Exception $e){
		die('Erreur '.$e->getMessage().'<br>');
	}
}

/*echo "<pre>";
	print_r($data['recette_detail']);
echo "</pre>";
*/

?>