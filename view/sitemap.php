<?php
	header('Content-Type: text/xml'); 
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<?php foreach ($platos as $plato) { ?>
		<url>
			<loc>http://www.cocinandome.es/<?php vlink('receta', array('id_receta' => $plato->id_plato)); ?></loc>
		</url>
	<?php } ?>
</urlset>