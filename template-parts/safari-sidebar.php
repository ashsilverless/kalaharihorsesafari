<h3>Find A Safari</h3>

<?php

// check if the flexible content field has rows of data
if( have_rows('find_a_safari', 'khs_find' )):

     // loop through the rows of data
    while ( have_rows('find_a_safari', 'khs_find' ) ) : the_row();

        if( get_row_layout() == 'safari_dates' ): ?>

			<div class="dates">
				
				<p><?php the_sub_field('from');?> - <?php the_sub_field('to');?></p>	
				
			</div>
	
		<?php elseif( get_row_layout() == 'safari_year' ): ?>
		
			<p class="year"><?php the_sub_field('year');?></p> 			
		
		<?php endif;

endwhile;
else :
endif; ?>

<a href="#colophon" class="cta">Book Now<span></a>