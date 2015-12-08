<?php /* Smarty version 3.1.27, created on 1
         compiled from "C:\wamp\www\projet\PartageRecette\application\views\nav\nav_membre.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:82465661246c9fce08_67889673%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '506cd21d2d50cee111584d99ec1fb27f10439d6a' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\nav\\nav_membre.inc.tpl',
      1 => 1449206887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82465661246c9fce08_67889673',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661246ca25d91_55283948',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661246ca25d91_55283948')) {
function content_5661246ca25d91_55283948 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '82465661246c9fce08_67889673';
?>


<ul class="nav nav-tabs">
  <li role="presentation">
    <a href="index.php">Accueil</a>
  </li>
  <li>
	<a href="index.php?page=recette">Recettes</a>
  </li>
  <li>
	<form action="index.php?page=deconnexion" method="post">
		<input class="btn btn-default" type="submit" name="deco" value="Deconnexion">
	</form>
  </li>
</ul><?php }
}
?>