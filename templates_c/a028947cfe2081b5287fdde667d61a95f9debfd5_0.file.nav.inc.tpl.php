<?php /* Smarty version 3.1.27, created on 1
         compiled from "C:\wamp\www\projet\PartageRecette\application\views\nav\nav.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1963856653197b2f0e5_02406964%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a028947cfe2081b5287fdde667d61a95f9debfd5' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\nav\\nav.inc.tpl',
      1 => 1449206764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1963856653197b2f0e5_02406964',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56653198130b63_25589763',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56653198130b63_25589763')) {
function content_56653198130b63_25589763 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1963856653197b2f0e5_02406964';
?>
<nav>
	<ul class="list-inline">
		<li><a href="index.php">Accueil</a></li>
		<li><a href="index.php?page=recette">Recettes</a></li>
	</ul>
</nav>

<ul class="nav nav-tabs">
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      ...
    </ul>
  </li>
  ...
</ul><?php }
}
?>