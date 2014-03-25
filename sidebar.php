<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="tertiary" class="sidebar-container2" role="complementary">
		<div class="sidebar-inner2">
			<div class="widget-area2">
			   <div class="social-icons">
				<a href="https://www.twitter.com/TiffanySeeber">
					<img class="twitter" src="http://tiffandco.com/wp-content/uploads/2014/03/twittergrey.png" 
						onmouseover="this.src='http://tiffandco.com/wp-content/uploads/2014/03/social-003_twitter.png'"
						onmouseout="this.src='http://tiffandco.com/wp-content/uploads/2014/03/twittergrey.png'" />
				<a href="https://www.facebook.com/tiffany.seeber">
					<img class="fb" src="http://tiffandco.com/wp-content/uploads/2014/03/fbgrey.png" 
						onmouseover="this.src='http://tiffandco.com/wp-content/uploads/2014/03/social-006_facebook.png'"
						onmouseout="this.src='http://tiffandco.com/wp-content/uploads/2014/03/fbgrey.png'" />
				<a href="https://www.linkedin.com/in/tiffanyseeber">
					<img class="linkedin" src="http://tiffandco.com/wp-content/uploads/2014/03/linkedingrey.png" 
						onmouseover="this.src='http://tiffandco.com/wp-content/uploads/2014/03/social-011_linkedin.png'"
						onmouseout="this.src='http://tiffandco.com/wp-content/uploads/2014/03/linkedingrey.png'" />
				<a href="http://www.pinterest.com/tiffanyseeber/">
					<img class="pinterest" src="http://tiffandco.com/wp-content/uploads/2014/03/pinterestgrey.png" 
						onmouseover="this.src='http://tiffandco.com/wp-content/uploads/2014/03/social-033_pinterest.png'"
						onmouseout="this.src='http://tiffandco.com/wp-content/uploads/2014/03/pinterestgrey.png'" />
				<a href="http://instagram.com/tiffanyseeber">
					<img class="instagram" src="http://tiffandco.com/wp-content/uploads/2014/03/instagramgrey.png" 
						onmouseover="this.src='http://tiffandco.com/wp-content/uploads/2014/03/social-038_instagram.png'"
						onmouseout="this.src='http://tiffandco.com/wp-content/uploads/2014/03/instagramgrey.png'" />
</div>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<iframe class="instagram" src="http://www.intagme.com/in/?u=dGlmZmFueXNlZWJlcnxzbHwyMDB8M3wzfEZGRkZGRnx5ZXN8NXx1bmRlZmluZWQ=" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:215px; height: 215px" ></iframe>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>
