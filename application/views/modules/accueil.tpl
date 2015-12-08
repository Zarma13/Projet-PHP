{extends file = '../layout.tpl'}
{block name=main_content}
<article>
	<h2>Edito</h2>
	<p>Ceci est l'édito</p>
</article>



<article>
<p>{$current_page}</p>
	
		{foreach $data['alea'] as $elements}
			<p>{$elements}</p><p>-------</p>
		{/foreach}

</article>
{/block}