<?php
require_once('config.inc.php');

$categoryORlist = isset($_REQUEST['idc']);
$smarty->assign("idc",$categoryORlist);
if($categoryORlist){
	$data['recette'] = $dbh->query('SELECT * FROM t_recette_rct INNER JOIN tj_cat_rct USING(RCT_ID) WHERE CAT_ID = '.$_GET['idc'])->fetchALL();
	$NombreRecettesParCat = sizeof($data['recette']);
	for($i=0; $i<$NombreRecettesParCat; $i++)
		$data['recette']["$i"]['UTI_ID'] = $dbh->query('SELECT UTI_LOGIN FROM t_utilisateur_uti INNER JOIN t_recette_rct USING(UTI_ID) WHERE RCT_ID = '.$data['recette']["$i"]['RCT_ID'])->fetchALL();
}
else{
	$data['categorie'] = $dbh->query('SELECT CAT_LABEL,CAT_DESCRIPTION,CAT_ILLUSTRATION, CAT_ID FROM t_categorie_cat')->fetchAll();
	for($i=0; $i<3; $i++)
		$data['categorie']["$i"]['nb']= $dbh->query("SELECT COUNT(RCT_ID) FROM tj_cat_rct WHERE CAT_ID = ($i+1)")->fetchAll();
}


/*
echo "<pre>";
	print_r($data['recette']);
echo "</pre>";
*/
?>