{extends file = '../layout.tpl'}
{block name=main_content}
<p>Bienvenue {$data['user']['prenom']} {$data['user']['nom']}</p>
<form method="post" action="index.php?page=profil">
	<input type="text" class="form-control" placeholder="Titre de la recette">
	<textarea class="form-control" rows="5" placeholder="Description"></textarea>
	<input type="time" class="form-control" placeholder="Temps de préparation">
	<input type="time" class="form-control" placeholder="Temps de cuisson">
	<input type="number" class="form-control" placeholder="Coût">
	<select class="form-control">
	  <option>Facile</option>
	  <option>Moyen</option>
	  <option>Difficile</option>
	</select>
</form>
{/block}