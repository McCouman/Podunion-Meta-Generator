<div class="my_meta_control">
 
<?php
/*
*	Highlights von torsten
*	Podcast Magazin
*/
?>
	<label>Zeitangabe</label>
		<p>
			<?php $mb->the_field('highlights_torsten_time'); ?>
			<input placeholder="00:00.000" type="text" style="width:13%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>

<center>
	<p><a href="#" class="docopy-highlights_torsten button">Torsten Highlights Erstellen</a></p>
</center>
	
	<?php while($mb->have_fields_and_multi('highlights_torsten')): ?>
	<?php $mb->the_group_open(); ?>
	<div style="background: #eee; border-left: 2px solid #a0a; padding: 15px; margin-top: 12px;">
	
		<a href="#" class="dodelete button" style="float:right;">x</a>
		
		<label>Name zum Podcast</label>
		<p>
			<?php $mb->the_field('highlights_torsten_name'); ?>
			<input placeholder="Podcastname" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		
		<label>Bild zum Podcast</label>
		<p>
			<?php $mb->the_field('highlights_torsten_image'); ?>
			<input id="<?php $mb->the_value(); ?>" placeholder="http://podcastname.tld/image.jpg" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<img src="<?php $mb->the_value(); ?>" width="50" height="50" />
		<p>
				
		<label>Link zum Podcast</label>
		<p>
			<?php $mb->the_field('highlights_torsten_link'); ?>
			<input placeholder="http://podcastname.tld" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		
		<label>Zusammenfassung</label>
		<p>
			<?php $mb->the_field('highlights_torsten_zusammenfassung'); ?>			
			<button type="button" onclick="document.getElementById('<?php $mb->the_name(); ?>').value += 'Text hier \n<ul>\n<li><a href=&rdquo;   &rdquo;> text </a></li>\n<li><a href=&rdquo;   &rdquo;> text </a></li>\n<li><a href=&rdquo;   &rdquo;> text </a></li>\n</ul>'; return false;">Kleine Hilfe Erstellen</button>
			<textarea id="<?php $mb->the_name(); ?>" placeholder="Plaplapla zu Podcast" cols="50" rows="10" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
		</p>

<div style="clear:both;"></div>

		<label>Weitere Links</label>
<div style="width:100%; height: 80px;">
	<div style="width: 40%; float:left;">	
			<?php $mb->the_field('highlights_torsten_text_eins'); ?>
			<input placeholder="Linkname" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</div>	
	<div style="width: 60%; float:left;">
			<?php $mb->the_field('highlights_torsten_link_eins'); ?>
			<input placeholder="http://podcastname.tld" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</div>
<div style="clear:both;"></div>
	<div style="width: 40%; float:left;">	
			<?php $mb->the_field('highlights_torsten_text_zwei'); ?>
			<input placeholder="Linkname" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</div>	
	<div style="width: 60%; float:left;">
			<?php $mb->the_field('highlights_torsten_link_zwei'); ?>
			<input placeholder="http://podcastname.tld" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</div>
<div style="clear:both;"></div>
	<div style="width: 40%; float:left;">	
			<?php $mb->the_field('highlights_torsten_text_drei'); ?>
			<input placeholder="Linkname" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</div>	
	<div style="width: 60%; float:left;">
			<?php $mb->the_field('highlights_torsten_link_drei'); ?>
			<input placeholder="http://podcastname.tld" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</div>
</div>
		
	</div>
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>

<center>
	<p><a href="#" class="docopy-highlights_torsten button">Torsten Highlights Erstellen</a></p>
</center>

	<br>
	<input type="submit" class="button-primary" name="save" value="Zwischenspeichern">
	<br>
</div>