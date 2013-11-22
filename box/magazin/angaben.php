<div class="my_meta_control">
 
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Cras orci lorem, bibendum in pharetra ac, luctus ut mauris.</p>


<?php
/*
*	Standard Informationen
*	Podcast Magazin
*/
?>

<div style="background: #eee; border-left: 3px solid #000; padding: 15px; margin-top: 12px; height: 90px;">
	<div style="width:20%; float:left;">	
		<label>(Nr) Episode</label>
		<p>	
			<?php $mb->the_field('podunion_magazin_nummer'); ?>
			<input placeholder="00x" type="text" style="width:80%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<span>Beispiel: 005</span>
		</p>
	</div>
	<div style="width:80%; float:left;">	
		<label>(Titel) Episode</label>
		<p>	
			<?php $mb->the_field('podunion_magazin_title'); ?>
			<input placeholder="Die neue Null" type="text" style="width:99%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<span>Sendungstitel</span>
		</p>
	</div>
</div>	


<div style="height: 250px; background: #eee; border-left: 3px solid #000; padding: 15px; margin-top: 12px;">

		<label>(URL) Cover</label>
		<p>
			<?php $mb->the_field('podunion_magazin_cover'); ?>
			<input id="coverlink" placeholder="http://podunion.com/image.jpg" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<span>Cover max.: 300x300px</span>
			<img src="<?php $mb->the_value(); ?>" width="50" height="50" />
		
<script type="text/javascript">
(function($) {
	$("#coverlink").on( 'keyup', function() {
		url = $(this).val();
		$(this).parent().find("img").attr("src", url);
	});
})(jQuery);
</script>
		</p>
<div style="width:39%;float:left;">		
		<label>(Name) Cover Lizenz </label>
		<p>	
			<?php $mb->the_field('podunion_magazin_lizname'); ?>
			<input placeholder="candyman / 123RF Stock Photo" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<span>Name / Verlag</span>
		</p>
</div>
<div style="width:60%;float:left;">	
		<label>(URL) Cover Lizenz </label>
		<p>	
			<?php $mb->the_field('podunion_magazin_lizurl'); ?>
			<input placeholder="http://www.123rf.com/photo_3011629_3d-golden-framed-number-0-isolated-in-white.html" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<span>Link zur Bildlizenz</span>
		</p>
</div>
</div>


<div style="background: #eee; border-left: 3px solid #000; padding: 15px; margin-top: 12px; height: 120px;">
	
	<div style="width:20%; float:left;">
		<label>Jörg</label>		
		<?php $selected = ' checked="checked"'; ?>		
			<?php $mb->the_field('jorgs_sprecher'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Sprecher" <?php if ($mb->get_the_value() == 'Sprecher') echo $selected; ?>/> Sprecher<br/>
			
			<?php $mb->the_field('jorgs_schnitt'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Schnitt" <?php if ($mb->get_the_value() == 'Schnitt') echo $selected; ?>/> Schnitt<br/>
			
			<?php $mb->the_field('jorgs_master'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Mastering" <?php if ($mb->get_the_value() == 'Mastering') echo $selected; ?>/> Mastering<br/>
			
			<?php $mb->the_field('jorgs_shownotes'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Shownotes" <?php if ($mb->get_the_value() == 'Shownotes') echo $selected; ?>/> Shownotes<br/>
			
			<?php $mb->the_field('jorgs_bilder'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Bild" <?php if ($mb->get_the_value() == 'Bild') echo $selected; ?>/> Bild<br/>
	</div>	
	<div style="width:20%; float:left;">	
		<label>Martin</label>
			<?php $mb->the_field('martin_sprecher'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Sprecher" <?php if ($mb->get_the_value() == 'Sprecher') echo $selected; ?>/> Sprecher<br/>
			
			<?php $mb->the_field('martin_schnitt'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Schnitt" <?php if ($mb->get_the_value() == 'Schnitt') echo $selected; ?>/> Schnitt<br/>
			
			<?php $mb->the_field('martin_master'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Mastering" <?php if ($mb->get_the_value() == 'Mastering') echo $selected; ?>/> Mastering<br/>
			
			<?php $mb->the_field('martin_shownotes'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Shownotes" <?php if ($mb->get_the_value() == 'Shownotes') echo $selected; ?>/> Shownotes<br/>
			
			<?php $mb->the_field('martin_bilder'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Bild" <?php if ($mb->get_the_value() == 'Bild') echo $selected; ?>/> Bild<br/>
	</div>
	<div style="width:20%; float:left;">	
		<label>Michael</label>
			<?php $mb->the_field('michael_sprecher'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Sprecher" <?php if ($mb->get_the_value() == 'Sprecher') echo $selected; ?>/> Sprecher<br/>
			
			<?php $mb->the_field('michael_schnitt'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Schnitt" <?php if ($mb->get_the_value() == 'Schnitt') echo $selected; ?>/> Schnitt<br/>
			
			<?php $mb->the_field('michael_master'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Mastering" <?php if ($mb->get_the_value() == 'Mastering') echo $selected; ?>/> Mastering<br/>
			
			<?php $mb->the_field('michael_shownotes'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Shownotes" <?php if ($mb->get_the_value() == 'Shownotes') echo $selected; ?>/> Shownotes<br/>
			
			<?php $mb->the_field('michael_bilder'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Bild" <?php if ($mb->get_the_value() == 'Bild') echo $selected; ?>/> Bild<br/>
	</div>	
	<div style="width:20%; float:left;">	
		<label>Torsten</label>
			<?php $mb->the_field('torsten_sprecher'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Sprecher" <?php if ($mb->get_the_value() == 'Sprecher') echo $selected; ?>/> Sprecher<br/>
			
			<?php $mb->the_field('torsten_schnitt'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Schnitt" <?php if ($mb->get_the_value() == 'Schnitt') echo $selected; ?>/> Schnitt<br/>
			
			<?php $mb->the_field('torsten_master'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Mastering" <?php if ($mb->get_the_value() == 'Mastering') echo $selected; ?>/> Mastering<br/>
			
			<?php $mb->the_field('torsten_shownotes'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Shownotes" <?php if ($mb->get_the_value() == 'Shownotes') echo $selected; ?>/> Shownotes<br/>
			
			<?php $mb->the_field('torsten_bilder'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Bild" <?php if ($mb->get_the_value() == 'Bild') echo $selected; ?>/> Bild<br/>
	</div>	
	<div style="width:20%; float:left;">
		<label>Rico</label>
			<?php $mb->the_field('rico_sprecher'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Sprecher" <?php if ($mb->get_the_value() == 'Sprecher') echo $selected; ?>/> Sprecher<br/>
			
			<?php $mb->the_field('rico_schnitt'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Schnitt" <?php if ($mb->get_the_value() == 'Schnitt') echo $selected; ?>/> Schnitt<br/>
			
			<?php $mb->the_field('rico_master'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Mastering" <?php if ($mb->get_the_value() == 'Mastering') echo $selected; ?>/> Mastering<br/>
			
			<?php $mb->the_field('rico_shownotes'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Shownotes" <?php if ($mb->get_the_value() == 'Shownotes') echo $selected; ?>/> Shownotes<br/>
			
			<?php $mb->the_field('rico_bilder'); ?>
			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="Bild" <?php if ($mb->get_the_value() == 'Bild') echo $selected; ?>/> Bild<br/>
	</div>	
</div>


<div style="background: #eee; border-left: 3px solid #000; padding: 15px; margin-top: 12px;">

	<div style="width:25%; float:left;">		
		<label>Gesamtlänge der Datei</label>
		<p>	
			<?php $mb->the_field('podunion_magazin_audiolenge'); ?>
			<input placeholder="00:00:00" type="text" style="width:60%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
	</div>
	<div style="width:25%; float:left;">	
		<label>Größe der MP3 Audiodatei</label>
		<p>	
			<?php $mb->the_field('podunion_magazin_mp3gross'); ?>
			<input placeholder="38.8" type="text" style="width:60%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
	</div>
	<div style="width:25%; float:left;">	
		<label>Größe der M4A Audiodatei</label>
		<p>	
			<?php $mb->the_field('podunion_magazin_m4agross'); ?>
			<input placeholder="51.7" type="text" style="width:60%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
	</div>
	<div style="width:25%; float:left;">	
		<label>PostID in PodUnion</label>
		<p>
			<?php $mb->the_field('podunion_magazin_postid'); ?>
			<input placeholder="1170" type="text" style="width:60%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<span>Daraus wird ein Link generiert: http://podunion.com/?p=11169</span>
		</p>
	</div>		
	<br>
	<input type="submit" class="button-primary" name="save" value="Zwischenspeichern">
	<br>
	<br>	
</div>

<br>


</div>