<?php
/*
Plugin Name: WordPress MU allowed tags extender
Plugin URI: http://github.com/remiprev/wpmu-htmlelements/
Description: Allow custom HTML tags in WordPress MU posts and pages.
Version: 1.0
Author: Rémi Prévost
Author URI: http://remiprevost.com
*/

function wpmu_htmlelements(&$tags) {
	$tags += array(
		'iframe' => array(
			'src' => array(),
			'width' => array(),
			'height' => array(),
			'frameborder' => array(),
			'scrolling' => array(),
			'marginheight' => array(),
			'marginwidth' => array()
		),
		'object' => array(
			'width' => array(),
			'height' => array(),
			'data' => array(),
			'type' => array(),
			'classid' => array(),
		), 
		'param' => array(
			'name' => array(),
			'value' => array(),
		), 
		'embed' => array(
			'src' => array(),
			'type' => array(),
			'bgcolor' => array(),
			'allowfullscreen' => array(),
			'flashvars' => array(),
			'wmode' => array(),
			'width' => array(),
			'height' => array(),
			'style' => array(),
			'id' => array(),
			'flashvars' => array(),
		)
	);
	return $tags;
}

add_filter('edit_allowedposttags', 'wpmu_htmlelements');
