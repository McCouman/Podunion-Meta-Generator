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
	register_post_type ( 'magazin', 
		array (
                 'label' => __('Magazin'),
                    			
                 //#23.November 2013
                 'labels' => array (
			'name' => __( 'Magazin' ),
			'singular_name' => __( 'Magazin Podcast' ),
			'add_new' => __( 'Erstelle Magazin' ),
			'add_new_item' => __( 'Erstelle Magazin Episode' ),
			'edit' => __( 'Bearbeiten' ),
			'edit_item' => __( 'Bearbeiten Magazin Episode' ),
			'new_item' => __( 'Neue Magazin Episode' ),
			'view' => __( 'Magazin Episode Ansehen' ),
			'view_item' => __( 'Magazin Episode Ansehen' ),
			'search_items' => __( 'Suche durch Magazin Episodeen' ),
			'not_found' => __( 'Keine Magazin Episodeen gefunden' ),
			'not_found_in_trash' => __( 'Keine Magazin Episodeen im Löschung' ),
			'parent' => __( 'Parent Magazin Podcast' ),
		 ),
                  'description' => __( 'Eine neue aufregende Podcast Episode des Magazin Podcasts von Podunion.com' ), 			

                  'public' => true,
		  'show_ui' => true,
		  'publicly_queryable' => true,
		  'exclude_from_search' => false,
		  
		  'menu_position' => 3, //position in Menu!
		  'query_var' => true, //query_var argument allows you to control the query variable used to get posts of this type in podunion
		  'menu_icon' => 'http://podunion.com/logo/Logo-Podcast-Magazin-50.png', //icon cover
		  
		  # Idea for members Plugin: Pleas Test!!!
		  # http://wordpress.org/plugins/members/screenshots/
		  
		  // Global control over capabilities.
		  'capability_type' => 'magazin-team',
		  // Specific control over capabilities.
		  'capabilities' => array(
			'edit_post' => 'edit_magazin-team',
			'edit_posts' => 'edit_magazin-team',
			'edit_others_posts' => 'edit_others_magazin-team',
			'publish_posts' => 'publish_magazin-team',
			'read_post' => 'read_magazin-team',
			'read_private_posts' => 'read_private_magazin-team',
			'delete_post' => 'delete_magazin-team',
		  ),
		  
		  
		  
		  //slug name:
                  'rewrite' => array('slug' => 'pmb'),
                  
                  //export ok!
                  'can_export' => true,
                  
                  
                  //page widgets:
                  /*
                  * Find mor infos to support widgets: :) M.C.
                  *
                  * - title: Text input field to create a post title.
                  * - editor: Content input box for writing.
                  * - comments: Ability to turn comments on/off.
                  * - trackbacks: Ability to turn trackbacks and pingbacks on/off.
                  * - revisions: Allows revisions to be made of your post.
                  * - author: Displays a select box for changing the post author.
                  * - excerpt: A textarea for writing a custom excerpt.
                  * - thumbnail: The thumbnail (featured image in 3.0) uploading box.
                  * - custom-fields: Custom fields input area.
                  * - page-attributes:  The attributes box shown for pages. 
                  *   			this is important for hierarchical post types, 
                  *   			so you can select the parent post.
                  */
                  'supports' => array('title', 'revisions')
                )
        );
	
}
add_action('init', 'post_type_mediafiles_admin');
