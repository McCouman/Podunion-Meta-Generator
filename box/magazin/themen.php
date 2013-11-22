<div class="my_meta_control">
 
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Cras orci lorem, bibendum in pharetra ac, luctus ut mauris.</p>

<?php
/*
*	Standard Informationen
*	Podcast Magazin
*/
?>
	<label>Zeitangabe</label>
	<p>
		<?php $mb->the_field('podunion_magazin_themenliste_time'); ?>
		<input placeholder="00:00.000" type="text" style="width:13%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>
<center>
	<p><a href="#" class="docopy-magazin_thema button">Neues Thema Erstellen</a></p>
</center>

	<?php while($mb->have_fields_and_multi('magazin_thema')): ?>
	<?php $mb->the_group_open(); ?>
	<div style="background: #eee; border-left: 3px solid #000; padding: 15px; margin-top: 12px;">
		
		<a href="#" class="dodelete button" style="float:right;">x</a>
		
		<label>Zeitangabe</label>
		<p>
			<?php $mb->the_field('magazin_thema_time'); ?>
			<input placeholder="00:00.000" type="text" style="width:13%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		
		<label>Überschrift <span><i>(Titel des Themas)</i></span></label>
		<p>		
			<?php $mb->the_field('magazin_thema_header'); ?>
			<input placeholder="Neuste Wordpressversion" type="text" style="width:60%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		
		<label>Image</label>
		<p>		
			<?php $mb->the_field('magazin_thema_image'); ?>
			<input placeholder="http://meinbild.tld/image.png" type="text" style="width:88%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<input type="submit" class="button" name="save" value="Speichern">
			<img width="50" height="50" src="<?php $mb->the_value(); ?>">
		</p>

		
		<label>Angaben zum Thema</label>
		<p>	
			<?php $mb->the_field('magazin_thema_content'); ?>			
			<!--
			<button class="button" type="button" onclick="document.getElementById('<?php $mb->the_name(); ?>').value += '[raw][one_third]<img src=&quot;<?php $mb->the_value('magazin_thema_image'); ?>&quot; alt=&quot; &quot; width=&quot;300&quot; height=&quot;300&quot; class=&quot;aligncenter size-medium&quot; />[/one_third][two_third last]\n Text hier \n<ul>\n<li><a href=&quot;   &quot;> text </a></li>\n<li><a href=&quot;   &quot;> text </a></li>\n<li><a href=&quot;   &quot;> text </a></li>\n</ul> \n[/two_third][clear][/raw]'; return false;">ROW Einfügen</button>
			-->
			<textarea id="<?php $mb->the_name(); ?>" type="text" style="width:100%;" cols="30" rows="10" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
		</p>
		
		<label>Zusätzliche Link</label>
		<p>	
			<?php $mb->the_field('magazin_thema_content_text_eins'); ?>	
			<input style="width:38%; float:left;" placeholder="Linkname" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<?php $mb->the_field('magazin_thema_content_link_eins'); ?>	
			<input style="width:60%;" placeholder="http://website.tld/page/123.html" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>

			<?php $mb->the_field('magazin_thema_content_text_zwei'); ?>	
			<input style="width:38%; float:left;" placeholder="Linkname" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			<?php $mb->the_field('magazin_thema_content_link_zwei'); ?>	
			<input style="width:60%;" placeholder="http://website.tld/page/123.html" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>

			<?php $mb->the_field('magazin_thema_content_text_drei'); ?>	
			<input style="width:38%; float:left;" placeholder="Linkname" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>	
			<?php $mb->the_field('magazin_thema_content_link_drei'); ?>	
			<input style="width:60%;" placeholder="http://website.tld/page/123.html" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>

			<?php $mb->the_field('magazin_thema_content_text_vier'); ?>	
			<input style="width:38%; float:left;" placeholder="Linkname" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>	
			<?php $mb->the_field('magazin_thema_content_link_vier'); ?>	
			<input style="width:60%;" placeholder="http://website.tld/page/123.html" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		

<center>
	<p><a href="#" class="docopy-magazin_thema button">Neues Thema Erstellen</a></p>
</center>
	</div>
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>

	<br>
	<input type="submit" class="button-primary" name="save" value="Zwischenspeichern">
	<br>
</div>