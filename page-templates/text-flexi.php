<?php
/**
 * Template Name: Flexi Test
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
	    
		elseif( get_row_layout() == 'divider' ): 
		
			get_template_part( 'template-parts/divider', 'section' );		
		
		elseif( get_row_layout() == 'carousel_section' ): 
		
			get_template_part( 'template-parts/carousel', 'section' );		
		
		elseif( get_row_layout() == 'accordion_section' ): 
		
			get_template_part( 'template-parts/accordion', 'section' );		
		
		elseif( get_row_layout() == 'content_section' ): 
		
			get_template_part( 'template-parts/content', 'section' );		
		
		endif;

endwhile;

else :?>

<?php    // no layouts found

endif;

?>
</div><!--row-->
</div><!--container-->

