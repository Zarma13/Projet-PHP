{extends file = '../layout.tpl'}
{block name=main_content}
	{if $idc}
		<ul>
			{foreach $data['recette'] as $elements}
				<li>
					{$elements['RCT_TITRE']}
				</li>
				<li>
					{$elements['RCT_DESCRIPTION']}
				</li>
				<li>
					<img src="./media/{$elements['UTI_ID'][0][0]}/{$elements['RCT_ILLUSTRATION']}" alt="{$elements['RCT_TITRE']}">
				</li>
				<li>
					<a href="index.php?page=detail&idr={$elements['RCT_ID']}">Lire la recette</a>
				</li>
				<br>
			{/foreach}
		</ul>
	{else}
		<ul>
			{foreach $data['categorie'] as $elements}
				<li>
					{$elements['CAT_LABEL']}
				</li>
				<li>
					{$elements['CAT_DESCRIPTION']}
				</li>
				<li>
					il y a actuellement {$elements['nb'][0][0]} recettes dans la categorie {$elements['CAT_LABEL']}.
				</li>
				<li>
					<img src="./media/categorie/{$elements['CAT_ILLUSTRATION']}" alt="{$elements['CAT_LABEL']}">
				</li>
				<li>
					<a href="index.php?page=recette&idc={$elements['CAT_ID']}">Voir les recettes</a>
					
				</li>
				<br>
			{/foreach}
			
		</ul>
	{/if}
	
{/block}