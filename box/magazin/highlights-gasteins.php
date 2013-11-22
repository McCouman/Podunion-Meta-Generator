<div class="my_meta_control">
 
<?php
/*
*	Highlights von Gast (1)
*	Podcast Magazin
*/
?>
	<label>Zeitangabe</label>
		<p>
			<?php $mb->the_field('highlights_gasteins_time'); ?>
			<input placeholder="00:00.000" type="text" style="width:13%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
	<label>Name des Gastes (1)</label>	
		<p>
			<?php $mb->the_field('highlights_gasteins_username'); ?>
			<input placeholder="Hubert" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
	<label>Name des Gastes (1)</label>	
		<p>
			<?php $mb->the_field('highlights_gasteins_avatar'); ?>
			<input id="gasteins" placeholder="http://podcast.tld/avatar.png" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<span>Cover max.: 300x300px</span>			
			
<img src="<?php $mb->the_value(); ?>" width="50" height="50" />
		
<script type="text/javascript">
(function($) {
	$("#gasteins").on( 'keyup', function() {
		url = $(this).val();
		$(this).parent().find("img").attr("src", url);
	});
})(jQuery);
</script>
		</p>		
		
		
	<label>Link zur Website (1)</label>	
		<p>
			<?php $mb->the_field('highlights_gasteins_userurl'); ?>
			<input placeholder="http://meinpodcast.tld" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
	<label>Über den Gast (1)</label>	
		<p>
			<?php $mb->the_field('highlights_gasteins_about'); ?>
			<textarea placeholder="Über den Podcaster" cols="50" rows="10" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
		</p>
		
	<br>
	<input type="submit" class="button-primary" name="save" value="Speichern Gast (1)">
	<br>
<center>
	<p><a href="#" class="docopy-highlights_gasteins button">Gast (1) Highlights Erstellen</a></p>
</center>
	
	<?php while($mb->have_fields_and_multi('highlights_gasteins')): ?>
	<?php $mb->the_group_open(); ?>
	<div style="background: #eee; border-left: 2px solid #cb0; padding: 15px; margin-top: 12px;">
	
		<a href="#" class="dodelete button" style="float:right;">x</a>
		
		<label>Name zum Podcast</label>
		<p>
			<?php $mb->the_field('highlights_gasteins_name'); ?>
			<input placeholder="Podcastname" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		
		<label>Bild zum Podcast</label>
		<p>
			<?php $mb->the_field('highlights_gasteins_image'); ?>
			<input id="<?php $mb->the_value(); ?>" placeholder="http://podcastname.tld/image.jpg" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<span>Cover max.: 300x300px</span>			
			
<img src="<?php $mb->the_value(); ?>" width="50" height="50" />
		
<script type="text/javascript">
(function($) {
	$("#<?php $mb->the_name(); ?>").on( 'keyup', function() {
		url = $(this).val();
		$(this).parent().find("img").attr("src", url);
	});
})(jQuery);
</script>		
		
		
		<p>
				
		<label>Link zum Podcast</label>
		<p>
			<?php $mb->the_field('highlights_gasteins_link'); ?>
			<input placeholder="http://podcastname.tld" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		
		<label>Zusammenfassung</label>
		<p>
			<?php $mb->the_field('highlights_gasteins_zusammenfassung'); ?>			
			<button type="button" onclick="document.getElementById('<?php $mb->the_name(); ?>').value += 'Text hier \n<ul>\n<li><a href=&rdquo;   &rdquo;> text </a></li>\n<li><a href=&rdquo;   &rdquo;> text </a></li>\n<li><a href=&rdquo;   &rdquo;> text </a></li>\n</ul>'; return false;">Kleine Hilfe Erstellen</button>
			<textarea id="<?php $mb->the_name(); ?>" placeholder="Plaplapla zu Podcast" cols="50" rows="10" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
		</p>
		
	</div>
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>

<center>
	<p><a href="#" class="docopy-highlights_gasteins button">Gast (1) Highlights Erstellen</a></p>
</center>

	<br>
	<input type="submit" class="button-primary" name="save" value="Zwischenspeichern">
	<br>
</div>