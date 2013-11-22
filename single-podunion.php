<?php
/**
 * @package WordPress
 * @subpackage Twenty_Fourteen
 */

get_header();

#if ( !current_user_can( 'edit_plugins' ) ) {
/*
echo '<article>	
	<header class="entry-header">
		<div class="entry-meta">
		<h1>Keinen Zugang!</h1>
		</div>
	</header>
</article>';
*/
#} else {
?>


	<div id="primary" class="site-content">
		<div id="content" role="main">
<div class="entry-content">

			<?php while ( have_posts() ) : the_post(); ?>





<?php
	//my vars
	#global $podunion_magazin;	
	global $podunion_magazin_angaben;
	global $podunion_magazin_start;
	global $podunion_magazin_feedbacks;
	global $podunion_magazin_themen;
		global $podunion_magazin_hl_jorg;
		global $podunion_magazin_hl_martin;
		global $podunion_magazin_hl_mc;
		global $podunion_magazin_hl_rico;
		global $podunion_magazin_hl_torsten;		
		global $podunion_magazin_hl_gasteins;
		
	global $podunion_magazin_ende;
	
//Variable
$test1 =	$angaben = $podunion_magazin_angaben->the_meta();	
$test2 =	$start = $podunion_magazin_start->the_meta();
$test3 =	$feedbacks = $podunion_magazin_feedbacks->the_meta();
$test4 =	$themenwahl = $podunion_magazin_themen->the_meta();
$test5 =	$j_hls = $podunion_magazin_hl_jorg->the_meta();
$test6 =	$martin_hls = $podunion_magazin_hl_martin->the_meta();
$test7 =	$michael_hls = $podunion_magazin_hl_mc->the_meta();
$test8 =	$rico_hls = $podunion_magazin_hl_rico->the_meta();
$test9 =	$torsten_hls = $podunion_magazin_hl_torsten->the_meta(); 
$test10 =	$gasteins_hls = $podunion_magazin_hl_gasteins->the_meta(); 
$test11 =	$magend = $podunion_magazin_ende->the_meta();
	

	//test
 	#echo '<pre>';
		#print_r($test1); //Angaben
		#print_r($test2); //Start
		#print_r($test3); //Feedbacks
		#print_r($test4); //Themen
		#print_r($test5); //HG Jörg
		#print_r($test6); //HG Martin
		#print_r($test7); //HG Michael
		#print_r($test8); //HG Rico
		#print_r($test9); //HG Torsten
		#print_r($test10); //HG (Gast)
		#print_r($test11); //HG END--
	#echo '</pre>';


	
#############################################

///----------------------------Auphonic--------------------------------------------            

echo '<h2>Angaben für Auphonic</h2>';
echo '<p style="color: #aaa;">Mit Strg + A: markieren / Strg + C: kopieren des Codes.<br>Mit Strg + V - ausgeben des Codes in Auphonic.</p>';
##Title:
echo '<h5>Title & Track: (Basic Metadata)</h5>
<input style="width:100%;" type="text" value="PMB'.$angaben['podunion_magazin_nummer'] . ' - ' . $angaben['podunion_magazin_title'] . '" disabled>';
echo '<br>';
echo '<br>';

##Untertitel:
echo '<h5>Subtitle: (Extended Metadata)</h5>';
echo '<textarea cols="50" rows="5" style="width: 100%;" disabled>'
	. $start['podunion_magazin_zusammenfassung'];
echo '</textarea>';
echo '<br>';
echo '<br>';

##Zusammenfassung:
echo '<h5>Summary: (Description)</h5>';
echo '<textarea cols="50" rows="5" style="width: 100%;" disabled>'
	. $start['podunion_magazin_beschreibung'];
echo '</textarea>';
echo '<br>';
echo '<br>';

##MP3 Name:
echo '<h5>Dateiname: (Output Filename)</h5>
<input style="width:100%;" type="text" value="pmb'.$angaben['podunion_magazin_nummer'] . '-' . preg_replace('/ +/', '-',  strtolower($angaben['podunion_magazin_title'])) . '" disabled>';
echo '<br>';
echo '<br>';

##Chapters:
echo '<h5>Chapters</h5>';
echo '<form action="" method="post">
<a href="#" class="blueButton" id="download">Download (txt)</a>';

echo '<textarea name="text" id="chapters" cols="50" rows="8" style="width: 100%;">';
echo $start['podunion_magazin_start_time'].' Begrüssung <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";
echo $feedbacks['feedback_sendung_time'].' Feedbacks zu den letzten Sendungen <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";
//Themen
foreach ($themenwahl['magazin_thema'] as $tliste){
echo $tliste['magazin_thema_time'].' '. $tliste['magazin_thema_header'].' <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";
}
//HT Jorg
if ($j_hls){ 
echo $j_hls['highlights_jorg_time'].' Die Highlights von Jörg <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";
}
//HT Martin
if ($martin_hls){
echo $martin_hls['highlights_martin_time'].' Die Highlights von Martin <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";
}
//HT Michael
if ($michael_hls){
echo $michael_hls['highlights_michael_time'].' Die Highlights von M.C. <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";
}
//HT Rico
if ($rico_hls){
echo $rico_hls['highlights_rico_time'].' Die Highlights von Rico <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";
}
//HT Torsten
if ($torsten_hls){
echo $torsten_hls['highlights_torsten_time'].' Die Highlights von Torsten <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";
}
/*
//HT Gast (1)
if ($gasteins_hls['highlights_gasteins_username']){
echo $gasteins_hls['highlights_gasteins_time'].' Die Highlights von '. $gasteins_hls['highlights_gasteins_username']. ' <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";
}
*/
echo $magend['podunion_magazin_ende_time'].' Verabschiedung <http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'>' . "\n";

echo '</textarea>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="http://cm.wikibyte.org/wp-content/themes/podunion-magazin/box/magazin/js/jquery.generateFile.js"></script>
<script src="http://cm.wikibyte.org/wp-content/themes/podunion-magazin/box/magazin/js/script.js"></script>      
</form><br><br>';


/*
##Ausgabe Bilder:
echo '<h2>Bilder Downloads</h2>';

echo '<h5>Titelbild:</h5><br>
<img style="width:120px;" src="'.$angaben['podunion_magazin_cover'].'">  
<a href="'.$angaben['podunion_magazin_cover'].'">Download</a>
<br>';

echo '<h5>Titelbild:</h5><br>
<img style="width:120px;" src="'.$angaben['podunion_magazin_cover'].'">  
<a href="'.$angaben['podunion_magazin_cover'].'">Download</a>
<br>';
*/




///----------------------------/Auphonic--------------------------------------------            








///#################################### HTML DATEI der PODUNION ####################################           

echo '<br><hr /><br>
	<h2>Ausgaben für Wordpress</h2>
	<p style="color: #aaa;">Mit Strg + A: markieren / Strg + C: kopieren des Codes.<br>Mit Strg + V - ausgeben des Codes in Wordpress.</p>';

#echo '<textarea name="textarea-1" cols="50" rows="10" disabled>';
echo '<a href="#" class="blueButton" id="downloads">Download (html)</a> | <a href="#" class="blueButton" id="downloadst">Download (txt)</a>';
echo '<textarea id="magazin" cols="50" rows="30" style="width: 100%;">';

///----------------------------Start--------------------------------------------            
echo '<a href="http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'" title="Magazin: PMB'.$angaben['podunion_magazin_nummer'].' - '.$angaben['podunion_magazin_title'].'"><img src="'.$angaben['podunion_magazin_cover'].'" alt="'.$angaben['podunion_magazin_title'].'" width="300" height="300" class="alignleft size-medium wp-image-8990" /></a><strong>'. $start['podunion_magazin_start'] .'</strong>' . "\n\n";

echo '[podloveaudio mp3="http://media.blubrry.com/podunion/podunion.com/podcast/magazin/pmb'.$angaben['podunion_magazin_nummer'] . '-' . preg_replace('/ +/', '-',  strtolower($angaben['podunion_magazin_title'])) . '.mp3" m4a="http://media.blubrry.com/podunion/podunion.com/podcast/magazin/pmb'.$angaben['podunion_magazin_nummer'].'-'. preg_replace('/ +/', '-',  strtolower($angaben['podunion_magazin_title'])) . '.m4a" chapters="my-chapter-field" title="' . $angaben['podunion_magazin_title'] . '" subtitle="' . $start['podunion_magazin_zusammenfassung'] . '" poster="' . $angaben['podunion_magazin_cover'].'"]' . "\n\n";

echo '&amp;nbsp;'. "\n\n";

echo '<h2><a href="http://podunion.com/?p='.$angaben['podunion_magazin_postid'].'" title="Show Notes">Show Notes</a></h2>' . "\n\n";
///----------------------------/Start--------------------------------------------            



///----------------------------Begrüssung--------------------------------------------            
if($start['podunion_magazin_start']){
	echo '&amp;nbsp;'. "\n\n";

	echo '<a name="begruessung"></a><a href="#t=' . $start['podunion_magazin_start_time'].'">' . substr($start['podunion_magazin_start_time'], 0, -7) . '</a>'. "\n\n"; 

	echo '<h3>Begrüssung</h3>'. "\n";
	echo $start['podunion_magazin_start']. "\n\n"; 

	echo '&amp;nbsp;'. "\n\n";
}
///----------------------------/Begrüssung--------------------------------------------            



///----------------------------Themenliste--------------------------------------------
echo '<a name="themen"></a><a href="#t='.$themenwahl['podunion_magazin_themenliste_time'].'">' . substr($themenwahl['podunion_magazin_themenliste_time'], 0, -7) .'</a>'. "\n\n";

echo '<h3>Die Themen dieser Folge</h3>'. "\n";
echo '<ul>'. "\n";
echo '	<li><a href="#begruessung">Begrüssung</a></li>'. "\n";
echo '	<li><a href="#feedback">Feedbacks zu den letzten Sendungen</a></li>'. "\n";
/*
//Unsere Gäste
if ($gasteins_hls){

	//Einzahl/Mehrzahl
	if ($gasteins_hls){
		echo '	<li><a href="#zugast">Unser Gast</a>'. "\n";
	} else {
		echo '	<li><a href="#zugast">Unsere Gäste</a>'. "\n";
	}

echo '		<ul>'. "\n";

	//Gast (1)
	echo '			<li><a href="#'.preg_replace('/ +/', '',  strtolower($gasteins_hls['highlights_gasteins_username'])).'">'.$gasteins_hls['highlights_gasteins_username'].'</a></li>'. "\n";

echo '		</ul>'. "\n";
echo '	</li>'. "\n";
}*/
echo '	<li><a href="#'. preg_replace('/ +/', '',  strtolower($themenwahl['magazin_thema'][0]['magazin_thema_header'])). '">Unser Themen</a>'. "\n";
echo '		<ul>'. "\n";

//UnsereThemen
foreach ($themenwahl['magazin_thema'] as $tliste){
echo '			<li><a href="#'.preg_replace('/ +/', '',  strtolower($tliste['magazin_thema_header'])).'">'. $tliste['magazin_thema_header'].'</a></li>'. "\n";
}

echo '		</ul>'. "\n";
echo '	</li>'. "\n";
echo '	<li><a href="#highlights">Unserer Podcast Highlights</a>'. "\n";
echo '		<ul>'. "\n";
/*
//HT Gast(1)
if ($gasteins_hls){
	echo '			<li><a href="#'. preg_replace('/ +/', '',  strtolower($gasteins_hls['highlights_gasteins_username'])) .'">Die Highlights von '. $gasteins_hls['highlights_gasteins_username'] .'</a></li>'. "\n";
}
*/
//HT Jorg
if ($j_hls){ 
	echo '			<li><a href="#joerg">Die Highlights von Jörg</a></li>'. "\n";
}
//HT Martin
if ($martin_hls){
	echo '			<li><a href="#martin">Die Highlights von Martin</a></li>'. "\n";
}
//HT Michael
if ($michael_hls){
	echo '			<li><a href="#michael">Die Highlights von M.C.</a></li>'. "\n";
}
//HT Rico
if ($rico_hls){
	echo '			<li><a href="#rico">Die Highlights von Rico</a></li>'. "\n";
}
//HT Torsten
if ($torsten_hls){
	echo '			<li><a href="#torsten">Die Highlights von Torsten</a></li>'. "\n";
}
echo '		</ul>'. "\n";
echo '	</li>'. "\n";
echo '	<li><a href="#verabschiedung">Verabschiedung</a></li>'. "\n";
echo '	<li><a href="#comments">Kommentare</a></li>'. "\n";
echo '</ul>'. "\n";

echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>'. "\n\n";

echo '&amp;nbsp;'. "\n\n"; 
///----------------------------/Themenliste-------------------------------------------           



///----------------------------Feedbacks--------------------------------------------            
echo '<a name="feedback"></a><a href="#t=' . $feedbacks['feedback_sendung_time']  .'">' . substr($feedbacks['feedback_sendung_time'], 0, -7) .'</a>'. "\n\n";

echo '<h3>Feedbacks zu den letzten Sendungen</h3>'. "\n";
echo '<h4><a href="' . $feedbacks['feedback_sendung_url'].'#comments" title="'. $feedbacks['feedback_sendung_name'] .'">'. $feedbacks['feedback_sendung_name'] . '</a></h4>'. "\n";
foreach ($feedbacks['magazin_feedbacks'] as $mag_feedbacks) {    
    echo '<strong>' . $mag_feedbacks['magazin_feedbacks_comment'] . ' <a href="'.$mag_feedbacks['magazin_feedbacks_weblink'] . '" title="' . $mag_feedbacks['magazin_feedbacks_webname'] . '" target="_blank">' . $mag_feedbacks['magazin_feedbacks_webname'] . '</a></strong>' . "\n";
	echo $mag_feedbacks['magazin_feedbacks_zusammenfassung'] . "\n\n";
}

echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>' . "\n\n";

echo '&amp;nbsp;' . "\n\n"; 
///----------------------------/Feedbacks--------------------------------------------





///--- Zu Gast in der PudUnion --------------
/*
//Gast (1)
if ($gasteins_hls['highlights_gasteins'][0]['highlights_gasteins_name']){
	
	echo '<h3><a name="zugast"></a>Unser Gast</h3>'. "\n\n";
		
	echo '<a href="'.preg_replace('/ +/', '',  strtolower($gasteins_hls['highlights_gasteins_username'])).'"></a>'. "\n\n";

	echo '[raw][one_third]<a href="' . $gasteins_hls['highlights_gasteins_userurl'] . '" title="Zu Gast im Podunion Magazin: ' . $gasteins_hls['highlights_gasteins_username'].'" target="_blank"><img src="'.$gasteins_hls['highlights_gasteins_avatar'].'" alt="'.$gasteins_hls['highlights_gasteins_username'].'" width="300" height="300" class="aligncenter size-medium wp-image-6353" /></a>[/one_third][two_third last]'. $gasteins_hls['highlights_gasteins_about']. "\n";
	echo '<ul>'."\n";
	echo '  	<li><a href'.$gasteins_hls['highlights_gasteins_userurl'].'>Webpage</a></li>'. "\n";
	echo '</ul>'. "\n";
	echo '[/two_third][clear][/raw]'. "\n";	
	echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>' . "\n\n";

	echo '&amp;nbsp;' . "\n\n"; 
}*/
///-------------------------------------------









///----------------------------Themen der Episode-----------------------------------
if ($themenwahl['magazin_thema'][0]['magazin_thema_header']){

	echo '<a name="thema"></a>';		

	foreach ($themenwahl['magazin_thema'] as $themas){
 		
		echo '<a name="' . preg_replace('/ +/', '',  strtolower($themas['magazin_thema_header'])) . '"></a><a href="#t=' . $themas['magazin_thema_time'].'">' . substr($themas['magazin_thema_time'], 0, -7) . '</a>' . "\n\n";
		
		//Header
		echo '<h3>';
		
		if ($themas['magazin_thema_linker']) {		
			echo '<a href="'.$themas['magazin_thema_linker'].'" title="Thema: '.$themas['magazin_thema_header'].'">'.$themas['magazin_thema_header'].'</a>';
		} else {
			 echo $themas['magazin_thema_header'];
		}
		 
		 echo '</h3>' . "\n";
		
		//content
		if($themas['magazin_thema_image']){		
			echo '[raw][one_third]<a href="' . $themas['magazin_thema_content_link_eins'] . '" title="Thema: ' . $themas['magazin_thema_header'] . '" target="_blank"><img src="' . $themas['magazin_thema_image'] . '" alt="Themenbild: ' . $themas['magazin_thema_header'] . '" width="300" height="300" class="aligncenter size-medium" /></a>[/one_third][two_third last]'. "\n"; 
			echo $themas['magazin_thema_content'] . "\n";
				  
		} else {
			echo $themas['magazin_thema_content'] . "\n";
		}
		
		if($themas['magazin_thema_content_link_eins']){
			echo '<br>'. "\n".
				'<ul>'. "\n"; 
		}
		
		//links (1)
		if($themas['magazin_thema_content_link_eins']){
			echo '<li><a href="'.$themas['magazin_thema_content_link_eins'].'" title="Link zu Thema: '.$themas['magazin_thema_header'].' über '.$themas['magazin_thema_content_text_eins'].'">'.$themas['magazin_thema_content_text_eins'].'</a><li>'. "\n";
		}

		//links (2)
		if($themas['magazin_thema_content_link_zwei']){	
			echo '<li><a href="'.$themas['magazin_thema_content_link_zwei'].'" title="Link zu Thema: '.$themas['magazin_thema_header'].' über '.$themas['magazin_thema_content_text_zwei'].'">'.$themas['magazin_thema_content_text_zwei'].'</a><li>'. "\n";
		}

		//links (3)
		if($themas['magazin_thema_content_link_drei']){	
			echo '<li><a href="'.$themas['magazin_thema_content_link_drei'].'" title="Link zu Thema: '.$themas['magazin_thema_header'].' über '.$themas['magazin_thema_content_text_drei'].'">'.$themas['magazin_thema_content_text_drei'].'</a><li>'. "\n";
		}
		
		//links (4)
		if($themas['magazin_thema_content_link_vier']){	
			echo '<li><a href="'.$themas['magazin_thema_content_link_vier'].'" title="Link zu Thema: '.$themas['magazin_thema_header'].' über '.$themas['magazin_thema_content_text_vier'].'">'.$themas['magazin_thema_content_text_vier'].'</a><li>'. "\n";
		}
		
		if($themas['magazin_thema_content_link_eins']){ echo '<ul>'. "\n"; }
		
		if($themas['magazin_thema_image']){	echo '[/two_third][clear][/raw]' . "\n"; }
		
		echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>' . "\n\n";

		echo '&amp;nbsp;' . "\n\n"; 
	
	}
}
///----------------------------/Themen der Episode-----------------------------------




///----------------------------Hightlights--------------------------------------------

echo '<h2>Unsers Highlights <a name="highlights"></a></h2>' . "\n\n"; 

################ Gast (1) HTs #####################################
/*
if ($gasteins_hls){
echo '&amp;nbsp;' . "\n\n";

echo '<a name="'.preg_replace('/ +/', '',  strtolower($gasteins_hls['highlights_gasteins_username'])).'"></a><a href="#t=' . $gasteins_hls['highlights_gasteins_time'] .'">' . substr($j_hls['highlights_gasteins_time'], 0, -7) . '</a>' . "\n\n";

echo '<h3>Die Highlights von '; 

	if($gasteins_hls['highlights_gasteins_userurl']){
		echo '<a href="'.$gasteins_hls['highlights_gasteins_userurl'].'" title="'.$gasteins_hls['highlights_gasteins_username'].'">'.$gasteins_hls['highlights_gasteins_username'].'</a></h3>'. "\n";
	} else {
		echo $gasteins_hls['highlights_gasteins_username']. '</h3>'. "\n";
	}

	foreach ($gasteins_hls['highlights_gasteins'] as $geins_hts){
                
    	echo '<strong><a href="' . $geins_hts['highlights_gasteins_link'] . '" title="'.$geins_hts['highlights_gasteins_name'].'" target="_blank">' . $geins_hts['highlights_gasteins_name'] . '</a></strong>'. "\n";
    	echo '[raw][one_third]<a href="' . $geins_hts['highlights_gasteins_link'] . '" title="'.$geins_hts['highlights_gasteins_name'].'" target="_blank"><img src="'.$geins_hts['highlights_gasteins_image'].'" alt="'. $geins_hts['highlights_gasteins_name'] . '" width="300" height="300" class="aligncenter size-medium wp-image-6353" /></a>[/one_third][two_third last]'. $geins_hts['highlights_gasteins_zusammenfassung'] . '[/two_third][clear][/raw]' . "\n";		  
		echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>'. "\n\n";
	}
}
*/
################ Jörg B. HTs #####################################
if ($j_hls){
echo '&amp;nbsp;' . "\n\n";

echo '<a name="joerg"></a><a href="#t=' . $j_hls['highlights_jorg_time'] .'">' . substr($j_hls['highlights_jorg_time'], 0, -7) . '</a>' . "\n\n";

echo '<h3>Die Highlights von Jörg</h3>'. "\n";
	foreach ($j_hls['highlights_jorg'] as $jorg_hts){
                
    	echo '<strong><a href="' . $jorg_hts['highlights_jorg_link'] . '" title="'.$jorg_hts['highlights_jorg_name'].'" target="_blank">' . $jorg_hts['highlights_jorg_name'] . '</a></strong>'. "\n";
    	echo '[raw][one_third]<a href="' . $jorg_hts['highlights_jorg_link'] . '" title="'.$jorg_hts['highlights_jorg_name'].'" target="_blank"><img src="'.$jorg_hts['highlights_jorg_image'].'" alt="'.$jorg_hts['highlights_jorg_name'].'" width="300" height="300" class="aligncenter size-medium wp-image-6353" /></a>[/one_third][two_third last]'. $jorg_hts['highlights_jorg_zusammenfassung'];
    	
    	if($jorg_hts['highlights_jorg_link']){	echo "\n".
    	'<br>'."\n".
    	'<ul>'. "\n"; }
    	
   		//jorgs link (0)
		if($jorg_hts['highlights_jorg_text_eins']){	
			echo '<li><a href="' . $jorg_hts['highlights_jorg_link'] . '" title="Link zu Jörgs Highlight: '. $jorg_hts['highlights_jorg_name']. '">'.$jorg_hts['highlights_jorg_name'].'</a></li>'. "\n";
		}			
    	//jorgs zusatzlink (1)
		if($jorg_hts['highlights_jorg_text_eins']){	
			echo '<li><a href="' . $jorg_hts['highlights_jorg_link_eins'] . '" title="Link zu Jörgs Highlights: '. $jorg_hts['highlights_jorg_name']. '">'.$jorg_hts['highlights_jorg_text_eins'].'</a></li>'. "\n";
		}
		//jorgs zusatzlink (2)
		if($jorg_hts['highlights_jorg_text_zwei']){	
			echo '<li><a href="' . $jorg_hts['highlights_jorg_link_zwei'] . '" title="Link zu Jörgs Highlights: '. $jorg_hts['highlights_jorg_name']. '">'.$jorg_hts['highlights_jorg_text_zwei'].'</a></li>'. "\n";
		} 	
		//jorgs zusatzlink (3)
		if($jorg_hts['highlights_jorg_text_drei']){	
			echo '<li><a href="' . $jorg_hts['highlights_jorg_link_drei'] . '" title="Link zu Jörgs Highlights: '. $jorg_hts['highlights_jorg_name']. '">'.$jorg_hts['highlights_jorg_text_drei'].'</a></li>'. "\n";
		}
    	
    	if($jorg_hts['highlights_jorg_link']){	echo '</ul>'. "\n"; }
    	
    	echo '[/two_third][clear][/raw]' . "\n";
		echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>'. "\n\n";
	}
}
################ Martins HTs #####################################
if ($martin_hls){
echo '&amp;nbsp;' . "\n\n";

echo '<a name="joerg"></a><a href="#t=' . $martin_hls['highlights_martin_time'] .'">' . substr($martin_hls['highlights_martin_time'], 0, -7) . '</a>' . "\n\n";

echo '<h3>Die Highlights von Martin</h3>'. "\n";
	foreach ($martin_hls['highlights_martin'] as $martin_hts){
                
    	echo '<strong><a href="' . $martin_hts['highlights_martin_link'] . '" title="'.$martin_hts['highlights_martin_name'].'" target="_blank">' . $martin_hts['highlights_martin_name'] . '</a></strong>'. "\n";
    	echo '[raw][one_third]<a href="' . $martin_hts['highlights_martin_link'] . '" title="'.$martin_hts['highlights_martin_name'].'" target="_blank"><img src="'.$martin_hts['highlights_martin_image'].'" alt="'.$martin_hts['highlights_martin_name'].'" width="300" height="300" class="aligncenter size-medium wp-image-6353" /></a>[/one_third][two_third last]'. $martin_hts['highlights_martin_zusammenfassung'];
    	
    	if($martin_hts['highlights_martin_link']){	echo "\n".
    	'<br>'."\n".
    	'<ul>'. "\n"; }
    	
   		//martins link (0)
		if($martin_hts['highlights_martin_text_eins']){	
			echo '<li><a href="' . $martin_hts['highlights_martin_link'] . '" title="Link zu Martins Highlight: '. $martin_hts['highlights_martin_name']. '">'.$martin_hts['highlights_martin_name'].'</a></li>'. "\n";
		}			
    	//martins zusatzlink (1)
		if($martin_hts['highlights_martin_text_eins']){	
			echo '<li><a href="' . $martin_hts['highlights_martin_link_eins'] . '" title="Link zu Martins Highlight: '. $martin_hts['highlights_martin_name']. '">'.$martin_hts['highlights_martin_text_eins'].'</a></li>'. "\n";
		}
		//martins zusatzlink (2)
		if($martin_hts['highlights_martin_text_zwei']){	
			echo '<li><a href="' . $martin_hts['highlights_martin_link_zwei'] . '" title="Link zu Martins Highlight: '. $martin_hts['highlights_martin_name']. '">'.$martin_hts['highlights_martin_text_zwei'].'</a></li>'. "\n";
		} 	
		//martins zusatzlink (3)
		if($martin_hts['highlights_martin_text_drei']){	
			echo '<li><a href="' . $martin_hts['highlights_martin_link_drei'] . '" title="Link zu Martins Highlight: '. $martin_hts['highlights_martin_name']. '">'.$martin_hts['highlights_martin_text_drei'].'</a></li>'. "\n";
		}
    	
    	if($martin_hts['highlights_martin_link']){	echo '</ul>'. "\n"; }
    	
    	echo '[/two_third][clear][/raw]' . "\n";		  
		echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>'. "\n\n";
	}
}
################ michaels HTs #####################################
if ($michael_hls){
echo '&amp;nbsp;' . "\n\n";

echo '<a name="joerg"></a><a href="#t=' . $michael_hls['highlights_michael_time'] .'">' . substr($michael_hls['highlights_michael_time'], 0, -7) . '</a>' . "\n\n";

echo '<h3>Die Highlights von michael</h3>'. "\n";
	foreach ($michael_hls['highlights_michael'] as $michael_hts){
                
    	echo '<strong><a href="' . $michael_hts['highlights_michael_link'] . '" title="'.$michael_hts['highlights_michael_name'].'" target="_blank">' . $michael_hts['highlights_michael_name'] . '</a></strong>'. "\n";
    	echo '[raw][one_third]<a href="' . $michael_hts['highlights_michael_link'] . '" title="'.$michael_hts['highlights_michael_name'].'" target="_blank"><img src="'.$michael_hts['highlights_michael_image'].'" alt="'.$michael_hts['highlights_michael_name'].'" width="300" height="300" class="aligncenter size-medium wp-image-6353" /></a>[/one_third][two_third last]'. $michael_hts['highlights_michael_zusammenfassung'];
    	
    	if($michael_hts['highlights_michael_link']){	echo "\n".
    	'<br>'."\n".
    	'<ul>'. "\n"; }
    	
   		//michaels link (0)
		if($michael_hts['highlights_michael_text_eins']){	
			echo '<li><a href="' . $michael_hts['highlights_michael_link'] . '" title="Link zu Michaels Highlight: '. $michael_hts['highlights_michael_name']. '">'.$michael_hts['highlights_michael_name'].'</a></li>'. "\n";
		}			
    	//michaels zusatzlink (1)
		if($michael_hts['highlights_michael_text_eins']){	
			echo '<li><a href="' . $michael_hts['highlights_michael_link_eins'] . '" title="Link zu Michaels Highlight: '. $michael_hts['highlights_michael_name']. '">'.$michael_hts['highlights_michael_text_eins'].'</a></li>'. "\n";
		}
		//michaels zusatzlink (2)
		if($michael_hts['highlights_michael_text_zwei']){	
			echo '<li><a href="' . $michael_hts['highlights_michael_link_zwei'] . '" title="Link zu Michaels Highlight: '. $michael_hts['highlights_michael_name']. '">'.$michael_hts['highlights_michael_text_zwei'].'</a></li>'. "\n";
		} 	
		//michaels zusatzlink (3)
		if($michael_hts['highlights_michael_text_drei']){	
			echo '<li><a href="' . $michael_hts['highlights_michael_link_drei'] . '" title="Link zu Michaels Highlight: '. $michael_hts['highlights_michael_name']. '">'.$michael_hts['highlights_michael_text_drei'].'</a></li>'. "\n";
		}
    	
    	if($michael_hts['highlights_michael_link']){	echo '</ul>'. "\n"; }
    	
    	echo '[/two_third][clear][/raw]' . "\n";		  
		echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>'. "\n\n";
	}
}
################ Rico HTs #####################################
if ($rico_hls){
echo '&amp;nbsp;' . "\n\n";

echo '<a name="joerg"></a><a href="#t=' . $rico_hls['highlights_rico_time'] .'">' . substr($rico_hls['highlights_rico_time'], 0, -7) . '</a>' . "\n\n";

echo '<h3>Die Highlights von Rico</h3>'. "\n";
	foreach ($rico_hls['highlights_rico'] as $rico_hts){
                
    	echo '<strong><a href="' . $rico_hts['highlights_rico_link'] . '" title="'.$rico_hts['highlights_rico_name'].'" target="_blank">' . $rico_hts['highlights_rico_name'] . '</a></strong>'. "\n";
    	echo '[raw][one_third]<a href="' . $rico_hts['highlights_rico_link'] . '" title="'.$rico_hts['highlights_rico_name'].'" target="_blank"><img src="'.$rico_hts['highlights_rico_image'].'" alt="'.$rico_hts['highlights_rico_name'].'" width="300" height="300" class="aligncenter size-medium wp-image-6353" /></a>[/one_third][two_third last]'. $rico_hts['highlights_rico_zusammenfassung'];
    	
    	if($rico_hts['highlights_rico_link']){	echo "\n".
    	'<br>'."\n".
    	'<ul>'. "\n"; }
    	
   		//ricos link (0)
		if($rico_hts['highlights_rico_text_eins']){	
			echo '<li><a href="' . $rico_hts['highlights_rico_link'] . '" title="Link zu Ricos Highlight: '. $rico_hts['highlights_rico_name']. '">'.$rico_hts['highlights_rico_name'].'</a></li>'. "\n";
		}			
    	//ricos zusatzlink (1)
		if($rico_hts['highlights_rico_text_eins']){	
			echo '<li><a href="' . $rico_hts['highlights_rico_link_eins'] . '" title="Link zu Ricos Highlight: '. $rico_hts['highlights_rico_name']. '">'.$rico_hts['highlights_rico_text_eins'].'</a></li>'. "\n";
		}
		//ricos zusatzlink (2)
		if($rico_hts['highlights_rico_text_zwei']){	
			echo '<li><a href="' . $rico_hts['highlights_rico_link_zwei'] . '" title="Link zu Ricos Highlight: '. $rico_hts['highlights_rico_name']. '">'.$rico_hts['highlights_rico_text_zwei'].'</a></li>'. "\n";
		} 	
		//ricos zusatzlink (3)
		if($rico_hts['highlights_rico_text_drei']){	
			echo '<li><a href="' . $rico_hts['highlights_rico_link_drei'] . '" title="Link zu Ricos Highlight: '. $rico_hts['highlights_rico_name']. '">'.$rico_hts['highlights_rico_text_drei'].'</a></li>'. "\n";
		}
    	
    	if($rico_hts['highlights_rico_link']){	echo '</ul>'. "\n"; }
    	
    	echo '[/two_third][clear][/raw]' . "\n";		  
		echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>'. "\n\n";
	}
}
################ Torsten HTs #####################################
if ($torsten_hls){
echo '&amp;nbsp;' . "\n\n";

echo '<a name="joerg"></a><a href="#t=' . $torsten_hls['highlights_torsten_time'] .'">' . substr($torsten_hls['highlights_torsten_time'], 0, -7) . '</a>' . "\n\n";

echo '<h3>Die Highlights von Torsten</h3>'. "\n";
	foreach ($torsten_hls['highlights_torsten'] as $torsten_hts){
                
    	echo '<strong><a href="' . $torsten_hts['highlights_torsten_link'] . '" title="'.$torsten_hts['highlights_torsten_name'].'" target="_blank">' . $torsten_hts['highlights_torsten_name'] . '</a></strong>'. "\n";
    	echo '[raw][one_third]<a href="' . $torsten_hts['highlights_torsten_link'] . '" title="'.$torsten_hts['highlights_torsten_name'].'" target="_blank"><img src="'.$torsten_hts['highlights_torsten_image'].'" alt="'.$torsten_hts['highlights_torsten_name'].'" width="300" height="300" class="aligncenter size-medium wp-image-6353" /></a>[/one_third][two_third last]'. $torsten_hts['highlights_torsten_zusammenfassung'];
    	
    	if($torsten_hts['highlights_torsten_link']){	echo "\n".
    	'<br>'."\n".
    	'<ul>'. "\n"; }
    	
   		//torstens link (0)
		if($torsten_hts['highlights_torsten_text_eins']){	
			echo '<li><a href="' . $torsten_hts['highlights_torsten_link'] . '" title="Link zu Torstens Highlight: '. $torsten_hts['highlights_torsten_name']. '">'.$torsten_hts['highlights_torsten_name'].'</a></li>'. "\n";
		}			
    	//torstens zusatzlink (1)
		if($torsten_hts['highlights_torsten_text_eins']){	
			echo '<li><a href="' . $torsten_hts['highlights_torsten_link_eins'] . '" title="Link zu Torstens Highlight: '. $torsten_hts['highlights_torsten_name']. '">'.$torsten_hts['highlights_torsten_text_eins'].'</a></li>'. "\n";
		}
		//torstens zusatzlink (2)
		if($torsten_hts['highlights_torsten_text_zwei']){	
			echo '<li><a href="' . $torsten_hts['highlights_torsten_link_zwei'] . '" title="Link zu Torstens Highlight: '. $torsten_hts['highlights_torsten_name']. '">'.$torsten_hts['highlights_torsten_text_zwei'].'</a></li>'. "\n";
		} 	
		//torstens zusatzlink (3)
		if($torsten_hts['highlights_torsten_text_drei']){	
			echo '<li><a href="' . $torsten_hts['highlights_torsten_link_drei'] . '" title="Link zu Torstens Highlight: '. $torsten_hts['highlights_torsten_name']. '">'.$torsten_hts['highlights_torsten_text_drei'].'</a></li>'. "\n";
		}
    	
    	if($torsten_hts['highlights_torsten_link']){	echo '</ul>'. "\n"; }
    	
    	echo '[/two_third][clear][/raw]' . "\n";		  
		echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>'. "\n\n";
	}
}
///----------------------------/Hightlights--------------------------------------------



///----------------------------Verabsiedung--------------------------------------------
echo '&amp;nbsp;'. "\n\n";

echo '<a name="verabschiedung"></a><a href="#t='.$magend['podunion_magazin_ende_time'].'">'. substr($magend['podunion_magazin_ende_time'], 0, -7) .'</a>'. "\n\n";

echo '<h3>Verabschiedung</h3>'. "\n";
	  if($magend['podunion_magazin_ende']) { echo $magend['podunion_magazin_ende']. "\n"; } else { echo 'Das Team vom Magazin verabschiedet sich von den Hörern und wünscht weiterhin viel Spaß beim Podcast hören.'. "\n"; }
echo '<div style="text-align: right;"><a href="#themen">&amp;nbsp;&amp;uarr;&amp;nbsp;</a></div>'. "\n\n";

echo '<hr />'. "\n\n";

echo '&amp;nbsp;'. "\n\n";
///----------------------------/Verabsiedung--------------------------------------------



///----------------------------/Downloads--------------------------------------------
echo '<strong>Download</strong>'. "\n\n";

echo '<div class="podunion_downloadlinks"><a href="http://media.blubrry.com/podunion/podunion.com/podcast/magazin/pmb' . $angaben['podunion_magazin_nummer'] . '-' . preg_replace('/ +/', '-',  strtolower($angaben['podunion_magazin_title'])) . '.mp3">MP3 Audio [ ' . $angaben['podunion_magazin_audiolenge'] . ' | ' . $angaben['podunion_magazin_mp3gross'] . ' MB ]</a></div>' . "\n";
echo '<div class="podunion_downloadlinks"><a href="http://media.blubrry.com/podunion/podunion.com/podcast/magazin/pmb' . $angaben['podunion_magazin_nummer'] . '-' . preg_replace('/ +/', '-',  strtolower($angaben['podunion_magazin_title'])) . '.m4a">M4A Audio [ ' . $angaben['podunion_magazin_audiolenge'] . ' | ' . $angaben['podunion_magazin_m4agross'] . ' MB ]</a></div>' . "\n";
echo '<div class="podunion_downloadlinks"><a href="http://bitlove.org/podunion/podcast-magazin-mp3/pmb' . $angaben['podunion_magazin_nummer'] . '-' . preg_replace('/ +/', '-',  strtolower($angaben['podunion_magazin_title'])) . '.mp3.torrent">Bitlove MP3 Audio [ ' . $angaben['podunion_magazin_audiolenge'] . ' | ' . $angaben['podunion_magazin_mp3gross'] . ' MB ]</a></div>' . "\n";
echo '<div class="podunion_downloadlinks"><a href="http://bitlove.org/podunion/podcast-magazin-m4a/pmb' . $angaben['podunion_magazin_nummer'] . '-' . preg_replace('/ +/', '-',  strtolower($angaben['podunion_magazin_title'])) . '.m4a.torrent">Bitlove M4A Audio [ ' . $angaben['podunion_magazin_audiolenge'] . ' | ' . $angaben['podunion_magazin_m4agross'] . ' MB ]</a></div>' . "\n";
echo '[powerpress url="http://media.blubrry.com/podunion/podunion.com/podcast/magazin/pmb' . $angaben['podunion_magazin_nummer']. '-' . preg_replace('/ +/', '-',  strtolower($angaben['podunion_magazin_title'])) . '.mp3"]'. "\n";
echo 'http://media.blubrry.com/podunion/podunion.com/podcast/magazin/pmb' .	$angaben['podunion_magazin_nummer']. '-' . preg_replace('/ +/', '-',  strtolower($angaben['podunion_magazin_title'])) . '.mp3'. "\n";

echo "\n";
///----------------------------/Downloads--------------------------------------------



///----------------------------Impressum--------------------------------------------
echo '&amp;nbsp;'. "\n\n";

echo '<strong>Impressum</strong>' . "\n\n";

echo 'Produziert von der Redaktion Magazin' . "\n";
echo '<ul>'. "\n";

if ($j_hls){
	echo '<li><a href="http://podunion.com/podcaster/7059/jorg-beckmann" title="Jörg Beckmann bei PodUnion">Jörg</a>: '; if ($angaben['jorgs_sprecher']) 	{ echo 'Sprecher';		if ($angaben['jorgs_schnitt'] || $angaben['jorgs_master'] || $angaben['jorgs_shownotes'] || $angaben['jorgs_bilder']) { echo ', '; } }	if ($angaben['jorgs_schnitt'])		{ echo 'Schnitt'; 		if ($angaben['jorgs_master'] || $angaben['jorgs_shownotes'] || $angaben['jorgs_bilder']) { echo ', '; } }	if ($angaben['jorgs_master'])		{ echo 'Mastering'; 	if ($angaben['jorgs_shownotes'] || $angaben['jorgs_bilder']) { echo ', '; } }	if ($angaben['jorgs_shownotes'])	{ echo 'Show Notes'; 	if ($angaben['jorgs_bilder']) { echo ', '; } }		if ($angaben['jorgs_bilder']) 		{ echo 'Bild'; } 
	echo '</li>'. "\n";
}
if ($martin_hls){
 	echo '<li><a href="http://podunion.com/podcaster/martinrechsteiner/1965/martin-rechsteiner" title="Martin Rechsteiner aka pokipsie bei PodUnion" target="_blank">Martin</a>: ';	if ($angaben['martin_sprecher']) 	{ echo 'Sprecher';		if ($angaben['martin_schnitt'] || $angaben['martin_master'] || $angaben['martin_shownotes'] || $angaben['martin_bilder']) { echo ', '; } }	if ($angaben['martin_schnitt'])		{ echo 'Schnitt'; 		if ($angaben['martin_master'] || $angaben['martin_shownotes'] || $angaben['martin_bilder']) { echo ', '; } }	if ($angaben['martin_master'])		{ echo 'Mastering'; 	if ($angaben['martin_shownotes'] || $angaben['martin_bilder']) { echo ', '; } }	if ($angaben['martin_shownotes'])	{ echo 'Show Notes'; 	if ($angaben['martin_bilder']) { echo ', '; } }		if ($angaben['martin_bilder']) 		{ echo 'Bild'; } 
 	echo '</li>'. "\n";
}
if ($michael_hls){
	echo '<li><a href="http://podunion.com/podcaster/6214/michael-mccouman-jr" title="M.C. aka Michael McCouman jr. bei PodUnion" target="_blank">M.C.</a>: '; if ($angaben['michael_sprecher']) 	{ echo 'Sprecher';		if ($angaben['michael_schnitt'] || $angaben['michael_master'] || $angaben['michael_shownotes'] || $angaben['michael_bilder']) { echo ', '; } }	if ($angaben['michael_schnitt'])		{ echo 'Schnitt'; 		if ($angaben['michael_master'] || $angaben['michael_shownotes'] || $angaben['michael_bilder']) { echo ', '; } }	if ($angaben['michael_master'])		{ echo 'Mastering'; 	if ($angaben['michael_shownotes'] || $angaben['michael_bilder']) { echo ', '; } }	if ($angaben['michael_shownotes'])	{ echo 'Show Notes'; 	if ($angaben['michael_bilder']) { echo ', '; } }		if ($angaben['michael_bilder']) 		{ echo 'Bild'; }	
	echo '</li>'. "\n";
}
if ($rico_hls){
	echo '<li><a href="http://podunion.com/podcaster/1680/rico-f-luthi" title="Rico F. Lüthi bei PodUnion" target="_blank">Rico</a>: ';	if ($angaben['rico_sprecher']) 	{ echo 'Sprecher';		if ($angaben['rico_schnitt'] || $angaben['rico_master'] || $angaben['rico_shownotes'] || $angaben['rico_bilder']) { echo ', '; } }	if ($angaben['rico_schnitt'])		{ echo 'Schnitt'; 		if ($angaben['rico_master'] || $angaben['rico_shownotes'] || $angaben['rico_bilder']) { echo ', '; } }	if ($angaben['rico_master'])		{ echo 'Mastering'; 	if ($angaben['rico_shownotes'] || $angaben['rico_bilder']) { echo ', '; } }	if ($angaben['rico_shownotes'])	{ echo 'Show Notes'; 	if ($angaben['rico_bilder']) { echo ', '; } }		if ($angaben['rico_bilder']) 		{ echo 'Bild'; }	
	echo '</li>'. "\n";
}
if ($torsten_hls){
	echo '<li><a href="http://podunion.com/podcaster/torstenreimann/1977/torsten-reimann" title="Torsten Reimann bei PodUnion" target="_blank">Torsten</a>: '; if ($angaben['torsten_sprecher']) 	{ echo 'Sprecher';		if ($angaben['torsten_schnitt'] || $angaben['torsten_master'] || $angaben['torsten_shownotes'] || $angaben['torsten_bilder']) { echo ', '; } }	if ($angaben['torsten_schnitt'])		{ echo 'Schnitt'; 		if ($angaben['torsten_master'] || $angaben['torsten_shownotes'] || $angaben['torsten_bilder']) { echo ', '; } }	if ($angaben['torsten_master'])		{ echo 'Mastering'; 	if ($angaben['torsten_shownotes'] || $angaben['torsten_bilder']) { echo ', '; } }	if ($angaben['torsten_shownotes'])	{ echo 'Show Notes'; 	if ($angaben['torsten_bilder']) { echo ', '; } }		if ($angaben['torsten_bilder']) 		{ echo 'Bild'; }	
	echo '</li>'. "\n";
}
echo '</ul>'. "\n";

echo 'Jingle produziert von <a title="Ronny Fischer" href="http://www.fischerman.ch/" target="_blank">Ronny Fischer</a>'. "\n";
echo 'Beitrags Bild: <a href="'.$angaben['podunion_magazin_lizurl'].'">'.$angaben['podunion_magazin_lizname'].'</a>'. "\n\n";

echo 'Magazin Homepage <a href="http://podunion.com/podunion-podcast/magazin" title="Magazin Homepage" target="_blank">http://podunion.com/podunion-podcast/magazin</a>
Magazin ist ein Podcast der PodUnion <a title="PodUnion Website" href="http://podunion.com/">http://www.podunion.com</a>' . "\n\n";

echo '[content_block id=2630]';
///----------------------------/Impressum--------------------------------------------


echo '</textarea>';        
?>

	<?php endwhile; // end of the loop. ?>
<?php


#}
?>

	</div>
	</div><!-- #content -->
	</div><!-- #primary -->

<?php #get_sidebar(); ?>
<?php get_footer(); ?>