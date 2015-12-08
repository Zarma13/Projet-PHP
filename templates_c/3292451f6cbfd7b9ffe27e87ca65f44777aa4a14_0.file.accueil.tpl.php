<?php /* Smarty version 3.1.27, created on 1
         compiled from "C:\wamp\www\projet\PartageRecette\application\views\modules\accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10720566123f94a0cd7_59174541%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3292451f6cbfd7b9ffe27e87ca65f44777aa4a14' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\modules\\accueil.tpl',
      1 => 1448486223,
      2 => 'file',
    ),
    '64244928b1211c2f015794b2b549c1e6ecd0fe83' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\layout.tpl',
      1 => 1449206598,
      2 => 'file',
    ),
    '870c0fe9eeb508754b971f27021486679cf50a12' => 
    array (
      0 => '870c0fe9eeb508754b971f27021486679cf50a12',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '10720566123f94a0cd7_59174541',
  'variables' => 
  array (
    'SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566123f953e112_01945750',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566123f953e112_01945750')) {
function content_566123f953e112_01945750 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10720566123f94a0cd7_59174541';
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
$_smarty_tpl->properties['nocache_hash'] = '10720566123f94a0cd7_59174541';
?>

<article>
	<h2>Edito</h2>
	<p>Ceci est l'édito</p>
</article>



<article>
<p><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</p>
	
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['alea'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['elements'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['elements']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elements']->value) {
$_smarty_tpl->tpl_vars['elements']->_loop = true;
$foreach_elements_Sav = $_smarty_tpl->tpl_vars['elements'];
?>
			<p><?php echo $_smarty_tpl->tpl_vars['elements']->value;?>
</p><p>-------</p>
		<?php
$_smarty_tpl->tpl_vars['elements'] = $foreach_elements_Sav;
}
?>

</article>

	</main>
	<footer class="row">
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>
</body><?php }
}
?>