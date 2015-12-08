<?php
//session_start();
if(isset($_REQUEST['deco'])){
	session_destroy();
	header('Location:index.php');
	echo 'COUCOU';
}
?>