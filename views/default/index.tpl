{foreach $rsPictures as $item name=pictures}
	<div id="indexBlock">
		<a href="/pictures/{$item['ID']}/">
			<img src="www/images/pictures/{$item['image_name']}" width="200" height="200" alt="{$item['name']}" />
			<input type="hidden" name="openPictureId" value="{$item['ID']}">
		</a><br />
		<a href="/pictures/{$item['ID']}/">{$item['name']}</a>
	</div>

	{if $smarty.foreach.pictures.iteration mod 5 == 0}
		<div style="clear: both;"></div>
	{/if}
{/foreach}



	
