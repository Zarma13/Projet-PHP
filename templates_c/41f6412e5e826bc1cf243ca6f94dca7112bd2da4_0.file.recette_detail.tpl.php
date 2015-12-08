<?php /* Smarty version 3.1.27, created on 1
         compiled from "C:\wamp\www\projet\PartageRecette\application\views\modules\recette_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71055665419520c896_80235461%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41f6412e5e826bc1cf243ca6f94dca7112bd2da4' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\modules\\recette_detail.tpl',
      1 => 1449476462,
      2 => 'file',
    ),
    '64244928b1211c2f015794b2b549c1e6ecd0fe83' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\layout.tpl',
      1 => 1449206598,
      2 => 'file',
    ),
    '90bd85e8aee95465848a72b4522e3b242aa9c1d5' => 
    array (
      0 => '90bd85e8aee95465848a72b4522e3b242aa9c1d5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '71055665419520c896_80235461',
  'variables' => 
  array (
    'SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566541953d06d9_60763649',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566541953d06d9_60763649')) {
function content_566541953d06d9_60763649 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71055665419520c896_80235461';
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
$_smarty_tpl->properties['nocache_hash'] = '71055665419520c896_80235461';
?>



		<h2><?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_TITRE'];?>
</h2>
		<ul>
				<li>
					Temps de préparation : <?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_TEMPS_PREPARATION'];?>

				</li>
				<li>
					Temps de cuisson : <?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_TEMPS_CUISSON'];?>

				</li>
				<li>
					Coût : <?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_COUT'];?>

				</li>
				<li>
					Difficulté : <?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_DIFFICULTE'];?>

				</li>
				<li>
					Nombre de personnes : <?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_NBPERSONNE'];?>

				</li>
		</ul>
		<p><?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_TITRE'];?>
</p>
		<p>Recette proposé par <?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['UTI_LOGIN'][0]['UTI_LOGIN'];?>
</p>
		<p>Ingrédients : <br>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_TITRE'];?>
<br>
			<ul>
				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['INGREDIENT'];
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
						<?php echo $_smarty_tpl->tpl_vars['elements']->value['IGD_LABEL'];?>
 : <?php echo $_smarty_tpl->tpl_vars['elements']->value['IGD_RCT_UNI_QUANTITE'];?>
 <?php echo $_smarty_tpl->tpl_vars['elements']->value['UNI_LABEL'];?>

					</li>
				<?php
$_smarty_tpl->tpl_vars['elements'] = $foreach_elements_Sav;
}
?>
			</ul>
		</p>
		<p>
			Préparation:<br>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_DESCRIPTION'];?>

		</p>
		
		<h3>Commentaires</h3>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['COMMENTAIRE'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['elements'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['elements']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elements']->value) {
$_smarty_tpl->tpl_vars['elements']->_loop = true;
$foreach_elements_Sav = $_smarty_tpl->tpl_vars['elements'];
?>
			<p>Posté par <?php echo $_smarty_tpl->tpl_vars['elements']->value['UTI_LOGIN'];?>
 - <?php echo $_smarty_tpl->tpl_vars['elements']->value['COM_DATE'];?>
</p>
			<p><?php echo $_smarty_tpl->tpl_vars['elements']->value['COM_TEXTE'];?>
</p>
			
			<?php if (!empty($_smarty_tpl->tpl_vars['SESSION']->value) && $_smarty_tpl->tpl_vars['SESSION']->value == $_smarty_tpl->tpl_vars['elements']->value['UTI_LOGIN']) {?>
				<form method="post" action="index.php?page=detail&idr=<?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_ID'];?>
">
				     <input  type="hidden"  name="idcom" value="<?php echo $_smarty_tpl->tpl_vars['elements']->value['COM_ID'];?>
">
					<input class="btn btn-default" type="submit" id="supprimer" name="supprimer" value="Supprimer">
				</form>
			<?php }?>
			

		<?php
$_smarty_tpl->tpl_vars['elements'] = $foreach_elements_Sav;
}
?>
		
		<?php if (!empty($_smarty_tpl->tpl_vars['SESSION']->value) && $_smarty_tpl->tpl_vars['SESSION']->value != $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['UTI_LOGIN'][0]['UTI_LOGIN']) {?>
			<form method="post" action="index.php?page=detail&idr=<?php echo $_smarty_tpl->tpl_vars['data']->value['recette_detail'][0]['RCT_ID'];?>
">
				<textarea class="form-control" rows="4" id="commentaire" name="commentaire"></textarea>
				<input class="btn btn-default" type="submit" id="envoyer" name="envoyer" value="Envoyer">
			</form>
		<?php }?>
		
		

	</main>
	<footer class="row">
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>
</body><?php }
}
?>