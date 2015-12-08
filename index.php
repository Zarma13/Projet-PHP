<?php 
session_start();
require_once('application/libraries/Smarty-3.1.27/libs/Smarty.class.php');
require_once('config.inc.php');
$smarty = new Smarty;
$smarty->getVariable('catching') -> true;
$smarty->cache_lifetime = 120;


header('Content-Type: text/html; charset=utf-8'); 
$data = array();

if(isset($_GET['page'])){
	if(empty($_PAGES[$_GET['page']]))
		$current_page = '404';
	else
		$current_page = $_PAGES[$_GET['page']];
}
else{
	$current_page = 'accueil';
}
include "application/modules/$current_page.inc.php";

if(isset($_SESSION['login']))
	$smarty->assign('SESSION',$_SESSION['login']);
$smarty->assign("current_page",$current_page);
$smarty->assign("data",$data);
$smarty->display('application/views/modules/'.$current_page.'.tpl',"data");

?>