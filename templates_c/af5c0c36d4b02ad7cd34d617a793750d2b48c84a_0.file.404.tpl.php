<?php /* Smarty version 3.1.27, created on 1
         compiled from "C:\wamp\www\projet\PartageRecette\application\views\modules\404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6384565d6ccc2148e5_24021628%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5c0c36d4b02ad7cd34d617a793750d2b48c84a' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\modules\\404.tpl',
      1 => 1448438132,
      2 => 'file',
    ),
    '64244928b1211c2f015794b2b549c1e6ecd0fe83' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\layout.tpl',
      1 => 1448472923,
      2 => 'file',
    ),
    'aa8dc3df1e86565002977d33bc874f0332c3402c' => 
    array (
      0 => 'aa8dc3df1e86565002977d33bc874f0332c3402c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '6384565d6ccc2148e5_24021628',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565d6ccc283c09_21239481',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d6ccc283c09_21239481')) {
function content_565d6ccc283c09_21239481 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6384565d6ccc2148e5_24021628';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<title>Recette de BG</title>
</head>

<body>
	<header>
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php echo $_smarty_tpl->getSubTemplate ('../nav/nav.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</header>
	<main>
		<?php
$_smarty_tpl->properties['nocache_hash'] = '6384565d6ccc2148e5_24021628';
?>

<h2>ERREUR 404</h2>
<p>La page que vous essayez de charger n'existe pas.</p>

	</main>
	<footer>
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>
</body><?php }
}
?>