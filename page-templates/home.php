<?php
/**
 * Template Name: Home
 *
 * @package SLMaster
 */

get_header();
?>

<div class="container"><!--open row and container -->
<div class="row">

<?php

// check if the flexible content field has rows of data
if( have_rows('page_content') ):

     // loop through the rows of data
    while ( have_rows('page_content') ) : the_row();

        if( get_row_layout() == 'hero_section' ):

			get_template_part( 'template-parts/hero', 'section' );
	
		elseif( get_row_layout() == 'image_section' ): 
		
			get_template_part( 'template-parts/image', 'section' );		
		
		elseif( get_row_layout() == 'full_width_section' ): 
		
			get_template_part( 'template-parts/fullwidth', 'section' );		
		
		elseif( get_row_layout() == 'progress_bar' ): 

			get_template_part( 'template-parts/progress', 'bar' );		

		elseif( get_row_layout() == 'testimonial_section' ): 

			get_template_part( 'template-parts/testimonial', 'section' );		

		elseif( get_row_layout() == 'testimonial_section' ): 

			get_template_part( 'template-parts/quote', 'section' );	
					
		endif;

endwhile;

else :?>

<?php    // no layouts found

endif;

?>
</div><!--row-->
</div><!--container-->

<?php get_footer();
?>