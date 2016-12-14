# viewport-triggered-animations
A WordPress plugin which provides shortcode for viewport triggered animations

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
