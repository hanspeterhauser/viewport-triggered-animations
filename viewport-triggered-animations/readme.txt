=== Scroll Triggered Animations ===
Contributors: Peter Hauser
Tags: theme, scroll, animations
Requires at least: 3.0.0
Tested up to: 4.5.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


=== Usage ===

- Banner 

	Parameters: 
		color: the text color
		padding: the banner padding
		text-align: leftrightcenter

	[fo_banner_start color="green" padding="10px" text-align="left"]

		Banner text goes here

	[fo_banner_end


- Scroll Trigger Animations

	Parameters: 
		name: the animation name
		delay: the animation delay in seconds. Ignored when scrollTriggered=true
		duration: the animation duration in seconds
		scrollTriggered: optional. If missing or false the animation behaves like a normal animation

	[fo_animation_start name="bounceInRight" delay="1s" duration="3s" scrollTriggered="true"]

		Animated text goes here

	[fo_animation_end]


Animations can wrap banners

	[fo_animation_start name="bounceInRight" delay="1s" duration="3s"]

		[fo_banner_start color="green" padding="10px" text-align="left"]

			Banner text goes here

		[fo_banner_end

	[fo_animation_end]
