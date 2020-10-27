<?php 
/**
 * Template Name: About Us
 */
get_header();
$remove_banner_image = get_theme_mod('remove_banner_image',false);
if($remove_banner_image !=true)
{
			   get_template_part('index','slider');
		
}
spicepress_breadcrumbs();
?>
<div id="content">
<?php
if ( $post->post_content!=="" )
{?>
<!-- About Section -->
<section class="about-section">		
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-12">
				<?php 
				the_post();
				the_content();
				wp_link_pages( );?>
			</div>	
		</div>
	</div>
</section>
<!-- /About Section -->
<?php } ?>
<div class="clearfix"></div>

<!-- Testimonial Section -->
<?php
if ( function_exists( 'spiceb_spicepress_testimonial' ) ) {
spiceb_spicepress_testimonial();
}?>
<!-- /Testimonial Section -->
<div class="clearfix"></div>
</div>
<?php get_footer(); ?>