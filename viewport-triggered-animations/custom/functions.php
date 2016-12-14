<?php
/**
 * Functions.php
 *
 * @package  ScrollTriggeredAnimations
 * @author   Peter Hauser
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// banner start sequence
//
// [fo_banner_start color="green" padding="10px" text-align="left"]Banner Text[fo_banner_end]
//
function add_banner_start ( $attr ) 
{
	$xox = '<p class="fo-banner" style="background:' . $attr['color'] . ';';
	if ( array_key_exists('padding',$attr) ) 
	{
		$xox .= 'padding: ' . $attr['padding'] . ';';
	}
	if ( array_key_exists('text-align',$attr) ) 
	{
		$xox .= 'text-align: ' . $attr['text-align'] . ';';
	}
	$xox .= '">';
	return $xox;
}
add_shortcode( 'fo_banner_start', 'add_banner_start' );

// banner end sequence
function add_banner_end() 
{
	return '</p><!-- banner -->';
}
add_shortcode( 'fo_banner_end', 'add_banner_end' );

// animation start sequence
//
// [fo_animation_start name="bounceInRight" delay="1s" duration="3s"]Animated Text[fo_animation_end]
//
function add_animation_start ( $attr ) 
{
	//print_r ( array_keys($attr) );
	$xox = '<div class="';
	if ( array_key_exists('triggered',$attr) && $attr['triggered'] == 'true' ) 
	{
		$xox .= 'animation-triggered" ';
		if ( array_key_exists('name',$attr) ) 
		{
			$xox .= ' data-animation=' . $attr['name'];
		}
		$xox .= ' style="opacity:0; ';
	}
	else
	{
		$xox .= 'animated ';
		if ( array_key_exists('name',$attr) && $attr['name'] != 'none') 
		{
			$xox .= $attr['name'];
		}
		$xox .= '" style="';
		if ( array_key_exists('delay',$attr) ) 
		{
			$xox .= '-webkit-animation-delay: ' . $attr['delay'] . ';';
	 	   	$xox .=    '-moz-animation-delay: ' . $attr['delay'] . ';';
			$xox .= 	'-ms-animation-delay: ' . $attr['delay'] . ';';
	 	  	$xox .= 	 '-o-animation-delay: ' . $attr['delay'] . ';';
			$xox .= 	 	'animation-delay: ' . $attr['delay'] . ';';
		}
	}
	if ( array_key_exists('duration',$attr) ) 
	{
		$xox .= '-webkit-animation-duration: ' . $attr['duration'] . ';';
 	   	$xox .=    '-moz-animation-duration: ' . $attr['duration'] . ';';
		$xox .= 	'-ms-animation-duration: ' . $attr['duration'] . ';';
 	  	$xox .= 	 '-o-animation-duration: ' . $attr['duration'] . ';';
		$xox .= 	 	'animation-duration: ' . $attr['duration'] . ';';
	}
	$xox .= '">';
	return $xox;
}
add_shortcode( 'fo_animation_start', 'add_animation_start' );

// animation end sequence
function add_animation_end() 
{
  return '</div>';
}
add_shortcode( 'fo_animation_end', 'add_animation_end' );


// awesome font
//
// [fo_font_awesome symbol="fa-joomla"]
//
function add_font_awesome ( $args ) 
{
	return '<span class="fa ' . $args['symbol'] . '"></span>';
}
add_shortcode( 'fo_font_awesome', 'add_font_awesome' );
