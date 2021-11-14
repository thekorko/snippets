			<?php
			/*Do shortcodes from template files*/
			echo do_shortcode('[qtx]' . '$text_to_be_wrapped_in_shortcode '. '[/qtx]')


			/*
			* html center tag shortcode example
			* https://developer.wordpress.org/reference/functions/do_shortcode/
			*/
			function qtx_center_shortcode($atts, $content = null) {
				return do_shortcode('<center>'.$content.'</center>');
			}
			add_shortcode('center', 'qtx_center_shortcode');
			?>
