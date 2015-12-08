{extends file = '../layout.tpl'}
{block name=main_content}


		<h2>{$data['recette_detail'][0]['RCT_TITRE']}</h2>
		<ul>
				<li>
					Temps de préparation : {$data['recette_detail'][0]['RCT_TEMPS_PREPARATION']}
				</li>
				<li>
					Temps de cuisson : {$data['recette_detail'][0]['RCT_TEMPS_CUISSON']}
				</li>
				<li>
					Coût : {$data['recette_detail'][0]['RCT_COUT']}
				</li>
				<li>
					Difficulté : {$data['recette_detail'][0]['RCT_DIFFICULTE']}
				</li>
				<li>
					Nombre de personnes : {$data['recette_detail'][0]['RCT_NBPERSONNE']}
				</li>
		</ul>
		<p>{$data['recette_detail'][0]['RCT_TITRE']}</p>
		<p>Recette proposé par {$data['recette_detail'][0]['UTI_LOGIN'][0]['UTI_LOGIN']}</p>
		<p>Ingrédients : <br>
			{$data['recette_detail'][0]['RCT_TITRE']}<br>
			<ul>
				{foreach $data['recette_detail'][0]['INGREDIENT'] as $elements}
					<li>
						{$elements['IGD_LABEL']} : {$elements['IGD_RCT_UNI_QUANTITE']} {$elements['UNI_LABEL']}
					</li>
				{/foreach}
			</ul>
		</p>
		<p>
			Préparation:<br>
			{$data['recette_detail'][0]['RCT_DESCRIPTION']}
		</p>
		
		<h3>Commentaires</h3>
		{foreach $data['recette_detail'][0]['COMMENTAIRE'] as $elements}
			<p>Posté par {$elements['UTI_LOGIN']} - {$elements['COM_DATE']}</p>
			<p>{$elements['COM_TEXTE']}</p>
			
			{if !empty($SESSION) && $SESSION == $elements['UTI_LOGIN']}
				<form method="post" action="index.php?page=detail&idr={$data['recette_detail'][0]['RCT_ID']}">
				     <input  type="hidden"  name="idcom" value="{$elements['COM_ID']}">
					<input class="btn btn-default" type="submit" id="supprimer" name="supprimer" value="Supprimer">
				</form>
			{/if}
			

		{/foreach}
		
		{if !empty($SESSION) && $SESSION != $data['recette_detail'][0]['UTI_LOGIN'][0]['UTI_LOGIN']}
			<form method="post" action="index.php?page=detail&idr={$data['recette_detail'][0]['RCT_ID']}">
				<textarea class="form-control" rows="4" id="commentaire" name="commentaire"></textarea>
				<input class="btn btn-default" type="submit" id="envoyer" name="envoyer" value="Envoyer">
			</form>
		{/if}
		
		
{/block}