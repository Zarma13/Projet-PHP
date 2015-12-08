<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="asset/css/style.css" media="all"/>
		<title>iRecipe</title>
	</head>

<<<<<<< HEAD:application/views/layout.tpl.html
	<body class="container-fluid">
		<header class="row">
			{include '../layout/layout_entete.inc.tpl'}
			{if !empty($SESSION)}
				{include '../nav/nav_membre.inc.tpl'}
			{else}
				{include '../nav/nav.inc.tpl'}
			{/if}
		</header>
		<main class="row">
			{block name=main_content}{/block}
		</main>
		<footer class="row">
			{include '../layout/layout_pied.inc.tpl'}
		</footer>
	</body>
</html>
=======
<body class="container-fluid">
	<header class="row">
		{include '../layout/layout_entete.inc.tpl'}
		{if !empty($SESSION)}
			{include '../nav/nav_membre.inc.tpl'}
		{else}
			{include '../nav/nav.inc.tpl'}
		{/if}
	</header>
	<main class="row">
		{block name=main_content}{/block}
	</main>
	<footer class="row">
		{include '../layout/layout_pied.inc.tpl'}
	</footer>
</body>
>>>>>>> origin/master:application/views/layout.tpl
