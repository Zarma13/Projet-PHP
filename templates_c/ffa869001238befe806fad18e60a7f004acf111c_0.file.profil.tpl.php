<?php /* Smarty version 3.1.27, created on 1
         compiled from "C:\wamp\www\projet\PartageRecette\application\views\modules\profil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:205305665323ddc7290_79085029%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffa869001238befe806fad18e60a7f004acf111c' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\modules\\profil.tpl',
      1 => 1448530602,
      2 => 'file',
    ),
    '64244928b1211c2f015794b2b549c1e6ecd0fe83' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\layout.tpl',
      1 => 1449206598,
      2 => 'file',
    ),
    'd16ced686b4f7ff2e038d0e152e3f2bbb56b77d2' => 
    array (
      0 => 'd16ced686b4f7ff2e038d0e152e3f2bbb56b77d2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '205305665323ddc7290_79085029',
  'variables' => 
  array (
    'SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665323de5fe73_49555473',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665323de5fe73_49555473')) {
function content_5665323de5fe73_49555473 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205305665323ddc7290_79085029';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css" media="all"/>
	<title>iRecipe</title>
</head>

<body class="container-fluid">
	<header class="row">
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php if (!empty($_smarty_tpl->tpl_vars['SESSION']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('../nav/nav_membre.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('../nav/nav.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php }?>
	</header>
	<main class="row">
		<?php
$_smarty_tpl->properties['nocache_hash'] = '205305665323ddc7290_79085029';
?>

<p>Bienvenue <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['nom'];?>
</p>

	</main>
	<footer class="row">
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>
</body><?php }
}
?>