<?php
/**
 * Plugin Pages Structures
 *
 * @package   nox-maps
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 David Cramer
 */


// This array is for the Admin Pages. each element defines a page that is seen in the admin
return array(
	'uix-plugin'      => array(                                                         // this is the settings array. The key is the page slug
		'page_title'  =>  'UIX Plugin',                                                  // title of the page
		'menu_title'  =>  'UIX Plugin',                                                  // title seen on the menu link
		'capability'  =>  'manage_options',                                              // required capability to access page
		'icon'        =>  'dashicons-book-alt',                                          // Icon or image to be used on admin menu
		'position'    =>  59.872,                                                        // Position priority on admin menu)
		'save_button' =>  'Save Changes',                                                // If the page required saving settings, Set the text here.
		'styles'      =>  array(                                                        // if the page has additional styles and scripts, they can be declared here
			// additional styles are an array of handle => src, use just the handle for registered styles
			'prism'	=>	UIX_PLUGIN_URL . 'demo/prism.css',
		),
		'scripts'     =>  array(                                                        // As with styles, scripts can be delcared the same way
			'prism'	=>	UIX_PLUGIN_URL . 'demo/prism.js',
		),
		'tabs'        =>  array(                                                        // tabs array are for setting the tab / section templates
			// each array element is a tab with the key as the slug that will be the saved object property
			'general'		=> array(
				'page_title'        => 'General',                                  // the tab page title 
				'page_description'  => 'This explains the general principles',                   // the tab description
				'menu_title'        => 'General',                                           // the title of the tab menu item
				'template'          => 'includes/templates/general.php',           // the template to define the tab content and values
				'partials'          => array(                                               // if the tab makes use of partials, use this to define them
					// the key is the partial slug. {{>partial_slug}} which can be used in the template ( partials are globaly available so tabs can share them )
					'checkboxes'  	=> 'includes/templates/checkboxes.php',
				),
				'default'	 => true                                                 // defines which is the default tab
			),
			'nodes'		=>	array(
				'page_title'        => 'Using Nodes',       	                           // the tab page title 
				'page_description'  => 'Example of how dynamic nodes work.',
				'menu_title'        => 'Nodes', 		                                        // the title of the tab menu item
				'template'          => 'includes/templates/nodes.php',           // the template to define the tab content and values
			),
		),
		'help'	=> array(	// the wordpress contextual help is also included
			// key is the help slug
			'default-help' => array(
				'title'		=> 	esc_html__( 'Easy to add Help' , 'uix' ),
				'content'	=>	"Just add more items to this array with a unique slug/key."
			),
			'more-help' => array(
				'title'		=> 	esc_html__( 'Makes things Easy' , 'uix' ),
				'content'	=>	"the content can also be a file path to a template"
			)
		),
		'help_sidebar' => 'This can be html or a path to a file as well.'
	),
);