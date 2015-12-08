<?php /* Smarty version 3.1.27, created on 1
         compiled from "C:\wamp\www\projet\PartageRecette\application\views\modules\recette.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13274566531c6c161f7_27887287%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac8cf9daf696fae49d351e535e188fa1b96e25b' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\modules\\recette.tpl',
      1 => 1448438140,
      2 => 'file',
    ),
    '64244928b1211c2f015794b2b549c1e6ecd0fe83' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\layout.tpl',
      1 => 1449206598,
      2 => 'file',
    ),
    '8fa582fd5e15ee6995f85e730aef5f159113257b' => 
    array (
      0 => '8fa582fd5e15ee6995f85e730aef5f159113257b',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '13274566531c6c161f7_27887287',
  'variables' => 
  array (
    'SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566531c7262395_05284985',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566531c7262395_05284985')) {
function content_566531c7262395_05284985 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13274566531c6c161f7_27887287';
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
$_smarty_tpl->properties['nocache_hash'] = '13274566531c6c161f7_27887287';
?>

	<?php if ($_smarty_tpl->tpl_vars['idc']->value) {?>
		<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['recette'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['elements'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['elements']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elements']->value) {
$_smarty_tpl->tpl_vars['elements']->_loop = true;
$foreach_elements_Sav = $_smarty_tpl->tpl_vars['elements'];
?>
				<li>
					<?php echo $_smarty_tpl->tpl_vars['elements']->value['RCT_TITRE'];?>

				</li>
				<li>
					<?php echo $_smarty_tpl->tpl_vars['elements']->value['RCT_DESCRIPTION'];?>

				</li>
				<li>
					<img src="./media/<?php echo $_smarty_tpl->tpl_vars['elements']->value['UTI_ID'][0][0];?>
/<?php echo $_smarty_tpl->tpl_vars['elements']->value['RCT_ILLUSTRATION'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['elements']->value['RCT_TITRE'];?>
">
				</li>
				<li>
					<a href="index.php?page=detail&idr=<?php echo $_smarty_tpl->tpl_vars['elements']->value['RCT_ID'];?>
">Lire la recette</a>
				</li>
				<br>
			<?php
$_smarty_tpl->tpl_vars['elements'] = $foreach_elements_Sav;
}
?>
		</ul>
	<?php } else { ?>
		<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['categorie'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['elements'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['elements']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elements']->value) {
$_smarty_tpl->tpl_vars['elements']->_loop = true;
$foreach_elements_Sav = $_smarty_tpl->tpl_vars['elements'];
?>
				<li>
					<?php echo $_smarty_tpl->tpl_vars['elements']->value['CAT_LABEL'];?>

				</li>
				<li>
					<?php echo $_smarty_tpl->tpl_vars['elements']->value['CAT_DESCRIPTION'];?>

				</li>
				<li>
					il y a actuellement <?php echo $_smarty_tpl->tpl_vars['elements']->value['nb'][0][0];?>
 recettes dans la categorie <?php echo $_smarty_tpl->tpl_vars['elements']->value['CAT_LABEL'];?>
.
				</li>
				<li>
					<img src="./media/categorie/<?php echo $_smarty_tpl->tpl_vars['elements']->value['CAT_ILLUSTRATION'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['elements']->value['CAT_LABEL'];?>
">
				</li>
				<li>
					<a href="index.php?page=recette&idc=<?php echo $_smarty_tpl->tpl_vars['elements']->value['CAT_ID'];?>
">Voir les recettes</a>
					
				</li>
				<br>
			<?php
$_smarty_tpl->tpl_vars['elements'] = $foreach_elements_Sav;
}
?>
			
		</ul>
	<?php }?>
	

	</main>
	<footer class="row">
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>
</body><?php }
}
?>