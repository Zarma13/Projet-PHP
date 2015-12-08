<?php /* Smarty version 3.1.27, created on 1
         compiled from "C:\wamp\www\projet\PartageRecette\application\views\modules\connexion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1989556653231892c95_51320112%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60391395c21b64da699fa88a5d555d8659094557' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\modules\\connexion.tpl',
      1 => 1448530773,
      2 => 'file',
    ),
    '64244928b1211c2f015794b2b549c1e6ecd0fe83' => 
    array (
      0 => 'C:\\wamp\\www\\projet\\PartageRecette\\application\\views\\layout.tpl',
      1 => 1449206598,
      2 => 'file',
    ),
    'e0aa9083f26deffc9e9a5bb46474c81e44a8820f' => 
    array (
      0 => 'e0aa9083f26deffc9e9a5bb46474c81e44a8820f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1989556653231892c95_51320112',
  'variables' => 
  array (
    'SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56653231934e16_20502308',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56653231934e16_20502308')) {
function content_56653231934e16_20502308 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1989556653231892c95_51320112';
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
$_smarty_tpl->properties['nocache_hash'] = '1989556653231892c95_51320112';
?>


<form class="form-inline" action="index.php?page=connexion" method="post">
  <div class="form-group">
    <label class="sr-only" for="login">Login</label>
    <input type="text" class="form-control" name="login" id="login" placeholder="Login">
  </div>
  <div class="form-group">
    <label class="sr-only" for="mdp">Mot de passe</label>
    <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de Passe">
  </div>
  <button type="submit" name="valid" id="valid" class="btn btn-default">Connexion</button>
</form>


	</main>
	<footer class="row">
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>
</body><?php }
}
?>