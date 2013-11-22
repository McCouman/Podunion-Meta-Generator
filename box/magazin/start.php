<div class="my_meta_control">
 
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Cras orci lorem, bibendum in pharetra ac, luctus ut mauris.</p>


<?php
/*
*	Standard Informationen
*	Podcast Magazin
*/
?>

<div style="background: #eee; border-left: 3px solid #000; padding: 15px; margin-top: 12px;">
		
		<p>
			<label>Zeitangabe</label>
			<?php $mb->the_field('podunion_magazin_start_time'); ?>
			<input placeholder="00:00.000" type="text" style="width:13%;" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		</p>
		
		<br>
		
		<p>	
			<label>Willkommens Text <i style="color: #0a0;">(HTML)</i>
			
			<button type="button" onclick="document.getElementById('ouuuuut').value += ' <a href=&rdquo;   &rdquo; title=&rdquo;   &rdquo;&gt;      </a> '; return false;">Link</button>
			
			</label>
			<?php $mb->the_field('podunion_magazin_start'); ?>
			<textarea id="ouuuuut" placeholder="&lt;a href=&rdquo;http://podunion.com/podcaster/martinrechsteiner/1965/martin-rechsteiner&rdquo; title=&rdquo;Martin @pokipsie Rechsteiner&rdquo;>Martin&lt;/a> und &lt;a href=&rdquo;http://podunion.com/podcaster/ricofluethi/1680/rico-f-luthi&rdquo; title=&rdquo;Rico F. Lüthi&rdquo;>Rico&lt;/a> begrüßen herzlichst die Hörer des Magazins. Unsere Deutschen Mitmoderatoren sind heute leider nicht dabei, da sie an die Wahl müssen. Wir hoffen, dass das auch wirklich eine Änderung in der Politik in Deutschland bringen wird." 
			type="text" style="width:100%;" cols="30" rows="10" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
			<span style="float:right; color:#00f;">Wird als Begrüssung auf der Website, neben dem Cover links verwendet!</span>
		</p>
		
		<br>
		
		<label>Einleitung <i style="color: #f00;">(Kein HTML!)</i>
		<button type="button" onclick="document.post.ouuuuut.value = document.post.testssssss.value;"> sende to welcometext</button>
		</label>
			<?php $mb->the_field('podunion_magazin_zusammenfassung'); ?>
			<textarea id="testssssss" placeholder="Endlich ist es so weit, die Season 2 des Magazins startet mit dem neuen Team. Noch nicht ganz eingespielt aber das kommt noch. In dieser Folge stellen wir Euch das neue Team vor und ein wichtiges Projekt, an dem du teilnehmen kannst." 
			cols="20" rows="5"  type="text" style="width:100%;" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
			<span style="float:right; color:#00f;">Wird in den Webplayer eingebunden + Auphonic: description!</span>
		</p>
		
		<br>
		
		<p>
			<label>Beschreibung <i style="color: #f00;">(Kein HTML!)</i></label>
			<?php $mb->the_field('podunion_magazin_beschreibung'); ?>
			<textarea placeholder="Heute geht es in der Magazin Sendung unter anderem um: Wordpess, das Podlove Treffen, das neue Design von Wordpress, die Podcast App und natürlich vieles weitere, rund um die Podcastszene. " 
			cols="20" rows="5"  type="text" style="width:100%;" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
			<span style="float:right; color:#00f;">Wird für Auphonic: summery verwendet.</span>
		</p>
	<br>
</div>
<br>	
	<input type="submit" class="button-primary" name="save" value="Speichern">

</div>