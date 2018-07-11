<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

if ( current_user_can( 'edit_theme_options' ) ) {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright', __( '&copy; Copyright 2016. All Rights Reserved.', 'illdy' ) );
} else {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright' );
}
?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<?php
			$the_widget_args = array(
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h5>',
				'after_title'   => '</h5></div>',
			);
			?>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-1' ) ):
					dynamic_sidebar( 'footer-sidebar-1' );
				elseif ( current_user_can( 'edit_theme_options' ) ):
					the_widget( 'WP_Widget_Text', 'title=' . __( 'MWWT', 'illdy' ) . '&text=<ul>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'About Us', 'illdy' ) . '">' . __( 'About Us', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Terms and Conditions', 'illdy' ) . '">' . __( 'Terms and Conditions', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Privacy Policy', 'illdy' ) . '">' . __( 'Privacy Policy', 'illdy' ) . '</a></li>
						</ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-2' ) ):
					dynamic_sidebar( 'footer-sidebar-2' );
				elseif ( current_user_can( 'edit_theme_options' ) ):
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Hotels', 'illdy' ) . '&text=<ul>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Cap Cana', 'illdy' ) . '">' . __( 'Cap Cana', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Casa Hemingway', 'illdy' ) . '">' . __( 'Casa Hemingway', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Hodelpa', 'illdy' ) . '">' . __( 'Hodelpa', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Casa de Campo', 'illdy' ) . '">' . __( 'Casa de Campo', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Bahia Principe', 'illdy' ) . '">' . __( 'Bahia Principe', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Gansevoort', 'illdy' ) . '">' . __( 'Gansevoort', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Embajador', 'illdy' ) . '">' . __( 'Embajador', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Marriot', 'illdy' ) . '">' . __( 'Marriot', 'illdy' ) . '</a></li>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Paradus Palma Real', 'illdy' ) . '">' . __( 'Paradus Palma Real', 'illdy' ) . '</a></li>

						</ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-3' ) ):
					dynamic_sidebar( 'footer-sidebar-3' );
				elseif ( current_user_can( 'edit_theme_options' ) ):
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Partners', 'illdy' ) . '&text=<ul>
						<li><a href="' . esc_url( '#' ) . '" title="' . __( 'Colonial Tour and Travel', 'illdy' ) . '">' . __( 'Colonial Tour and Travel', 'illdy' ) . '</a></li>
						</ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-4' ) ):
					dynamic_sidebar( 'footer-sidebar-4' );
				elseif ( current_user_can( 'edit_theme_options' ) ):
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Support', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Documentation', 'illdy' ) . '">' . __( 'Documentation', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'FAQs', 'illdy' ) . '">' . __( 'FAQs', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Forums', 'illdy' ) . '">' . __( 'Forums', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Contact', 'illdy' ) . '">' . __( 'Contact', 'illdy' ) . '</a></li></ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
		</div><!--/.row-->
	</div><!--/.container-->
	<div class="bottom-footer">
		<div class="container">
			<p class="copyright">
				<span><?php printf( '%s <a href="%s" title="%s" target="_blank">%s</a>.', __( '', '' ), esc_url( '' ), __( '', 'illdy' ), __( '', 'illdy' ) ); ?></span>
				<span class="bottom-copyright" data-customizer="copyright-credit"><?php echo illdy_sanitize_html( $footer_copyright ); ?></span>
			</p>
		</div>
	</div>
</footer><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>