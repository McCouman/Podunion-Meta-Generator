<?php
////########### Include Boxes -> Podunion Magazin
#
#
include_once WP_CONTENT_DIR . '/PodUnion/MetaBox.php';

	// global styles for the meta boxes
	function metabox_style() {
		wp_enqueue_style('PodUnion-metabox', get_stylesheet_directory_uri() . '/box/meta.css');
	}
	if (is_admin()) add_action('admin_enqueue_scripts', 'metabox_style');

	//1----- Angaben zur Episode
	#
	$podunion_magazin_angaben = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_angaben',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '(1) Angaben',
			'template' => get_stylesheet_directory() . '/box/magazin/angaben.php',
	) );	
	
	//2----- Willkommenstext zur Episode
	#
	$podunion_magazin_start = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_einleitung',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '(2) Begrüßungstext / Einleitung',
			'template' => get_stylesheet_directory() . '/box/magazin/start.php',
	) );
	
	//3----- Feedbacks zur Episode
	#
	$podunion_magazin_feedbacks = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_feedbacks',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '(3) Feedbacks der letzten Sendung',
			'template' => get_stylesheet_directory() . '/box/magazin/feedbacks.php',
	) );	
	
	
	//4----- Themen zur Episode
	#
	$podunion_magazin_themen = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_themen',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '(4) Themen der Sendung',
			'template' => get_stylesheet_directory() . '/box/magazin/themen.php',
	) );
	
	//5a----- Highlights von Jörgs
	#
	$podunion_magazin_hl_jorg = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_hl_jorg',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '<img style="width:30px; border: 1px solid #999;" src="http://podunion.com/wordpress/wp-content/uploads/2013/04/joergbeckmann_300.png">
						(5.a) Hightlights von Jörg',
			'template' => get_stylesheet_directory() . '/box/magazin/highlights-jorg.php',
	) );
	
	//5b----- Highlights von Martin
	#
	$podunion_magazin_hl_martin = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_hl_martin',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '<img style="width:30px; border: 1px solid #999;" src="http://podunion.com/wordpress/wp-content/uploads/2012/06/Martin-Rechsteiner-300.png">
						(5.b) Hightlights von Martin',
			'template' => get_stylesheet_directory() . '/box/magazin/highlights-martin.php',
	) );

	//5c----- Highlights von M.C.
	#
	$podunion_magazin_hl_mc = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_hl_mc',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '<img style="width:30px; border: 1px solid #999;" src="http://podunion.com/wordpress/wp-content/uploads/2013/03/Michael-McCouman_300.png">
						(5.c) Hightlights von M.C.',
			'template' => get_stylesheet_directory() . '/box/magazin/highlights-mc.php',
	) );
	
	//5d----- Highlights von Rico
	#
	$podunion_magazin_hl_rico = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_hl_rico',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '<img style="width:30px; border: 1px solid #999;" src="http://podunion.com/wordpress/wp-content/uploads/2012/06/Rico-Luethi_300.png">
						(5.d) Hightlights von Rico',
			'template' => get_stylesheet_directory() . '/box/magazin/highlights-rico.php',
	) );
	
	//5e----- Highlights von Torsten
	#
	$podunion_magazin_hl_torsten = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_hl_torsten',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '<img style="width:30px; border: 1px solid #999;" src="http://podunion.com/wordpress/wp-content/uploads/2012/06/Torsten-Reimann_300.png">
						(5.e) Hightlights von Torsten',
			'template' => get_stylesheet_directory() . '/box/magazin/highlights-torsten.php',
	) );

	//5(f)----- Highlights von Gast 1
	#
	$podunion_magazin_hl_gasteins = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_hl_gasteins',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '<img style="width:30px; border: 1px solid #999;" src="http://0.gravatar.com/avatar/?s=300&d">
						(5.f) Hightlights von Gast (1)',
			'template' => get_stylesheet_directory() . '/box/magazin/highlights-gasteins.php',
	) );

	
	
	//6----- Ende und Verabschiedung
	#
	$podunion_magazin_ende = new PodUnion_MetaBox(array (
			'id' => '_podunion_magazin_ende',
			'types' => array('podunion'), //Tests for post (Podunion: mediafiles, podcaster)
			'title' => '(6) Verabschiedung / Ende',
			'template' => get_stylesheet_directory() . '/box/magazin/ende.php',
	) );
		
/* eof */


### Mediafiles (Podcastings)
#
function post_type_mediafiles_admin() {
 		
 		//globale vars 
 		#global $user_level; //nur für leveling! 
 		global $menu;
	
	//registriere Post Type members
    	register_post_type ( 'magazin', array(
                    			'label' => __('Magazin'),
                    			'public' => true,
                    			'show_ui' => true,
                    			'rewrite' => array(
            		 			'slug' => 'pmb' 
            		 					),
                   				'supports' => array(
                   					'title',
                   					'revisions')
                					)
        				);
	
}
add_action('init', 'post_type_mediafiles_admin');
