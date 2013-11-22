<div class="my_meta_control">
 
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Cras orci lorem, bibendum in pharetra ac, luctus ut mauris.</p>


<div style="background: #eee; border-left: 3px solid #000; padding: 15px; margin-top: 12px;">
	<label>Zeitangabe</label>
	<p>
		<?php $mb->the_field('feedback_sendung_time'); ?>
		<input placeholder="00:00:00.000" type="text" style="width:15%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	<p>

<div style="width:100%; height: 90px;">
	<div style="width: 40%; float:left;">			
		<label>(Name) letzten Sendung</label>
		<p>
			<?php $mb->the_field('feedback_sendung_name'); ?>
			<input placeholder="00x - Sendungsname" type="text" style="width:98%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<p>
	</div>
	<div style="width: 60%; float:left;">		
		<label>(URL) letzten Sendung</label>
		<p>
			<?php $mb->the_field('feedback_sendung_url'); ?>
			<input placeholder="http://podunion.com/magazin..." type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<p>
	</div>
</div>
<div style="clear:both;"></div>
	<br>
	<input type="submit" class="button-primary" name="save" value="Zwischenspeichern">
	<br>
	<br>

</div>
	<hr />


<center>
	<p><a href="#" class="docopy-magazin_feedbacks button">Feedback Eintragen</a></p>
</center>

	
	<?php while($mb->have_fields_and_multi('magazin_feedbacks')): ?>
	<?php $mb->the_group_open(); ?>
	<div style="background: #eee; border-left: 3px solid #ee0; padding: 15px; margin-top: 12px;">

		<a href="#" class="dodelete button" style="float:right;">x</a>

<div style="clear:both;"></div>
<div style="width:100%; height: 90px;">
	<div style="width: 40%; float:left;">	
		<label>(Name) des Kommentators</label>
		<p>
			<?php $mb->the_field('magazin_feedbacks_comment'); ?>
			<input placeholder="Christian von der " type="text" style="width:98%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<p>
	</div>
	<div style="width: 60%; float:left;">
		<label>(Name) Website</label>
		<p>
			<?php $mb->the_field('magazin_feedbacks_webname'); ?>
			<input placeholder="Hörsuppe" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
	</div>
</div>	
		<label>(URL) Website</label>
		<p>
			<?php $mb->the_field('magazin_feedbacks_weblink'); ?>
			<input placeholder="http://podcastname.tld" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		
		<label>Zusammenfassung</label>
		<p>
			<?php $mb->the_field('magazin_feedbacks_zusammenfassung'); ?>
			<textarea placeholder="Plaplapla zu den Kommentaren" cols="50" rows="10" type="text" style="width:100%;" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
		</p>
		
	</div>
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
	
<center>
	<p><a href="#" class="docopy-magazin_feedbacks button">Feedback Eintragen</a></p>
</center>

	<input type="submit" class="button-primary" name="save" value="Zwischenspeichern">
	<br>
	<br>
</div>