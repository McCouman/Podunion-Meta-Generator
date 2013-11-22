<div class="my_meta_control">
 
<?php
/*
*	Highlights von rico
*	Podcast Magazin
*/
?>

<div style="background: #eee; border-left: 3px solid #000; padding: 15px; margin-top: 12px;">
		<label>Zeitangabe</label>
		<p>
			<?php $mb->the_field('podunion_magazin_ende_time'); ?>
			<input placeholder="00:00.000" type="text" style="width:13%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		
		<label>Letzte Ansage</label>
		<p>		
			<?php $mb->the_field('podunion_magazin_ende'); ?>
			<textarea type="text" style="width:100%;" cols="30" rows="5" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
		</p>
	<br>
</div>

<br>	
	<input type="submit" class="button-primary" name="save" value="Speichern">

</div>