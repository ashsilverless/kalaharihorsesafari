
</div></div><!--close row and container -->

<div id="<?php the_sub_field('section_id');?>" class="block <?php the_sub_field('effect');?>">
	
	<div class="sl-fullwidth image-holder" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
	
	<div class="section">

		<h2 class="<?php the_sub_field('alignment');?> fade-heading"><?php the_sub_field('heading');?></h2>	
			
		
		
		<div class="content align-<?php the_sub_field('alignment');?> <?php the_sub_field('drop_cap');?>"> 	
		<?php if( have_rows('content') ):?>
		<?php while ( have_rows('content') ) : the_row(); ?>
		
			
				<?php the_sub_field('text');?>
				
					<?php endwhile;?>
				
									<p class="cta-read">
					<a href="<?php the_sub_field('button_target');?>" class="cta"><?php the_sub_field('button_text');?></a>	
				</p>
				
				<p class="cta-read">		
					<a href="#<?php the_sub_field('continue_reading_target');?>" class="read"><span>or</span> continue reading</a>
				</p>		
			
			

			
			
	<?php
		else :
		endif;
		?>			
</div>
	</div><!--section-->
	    <div class='clearfix'></div>	
</div><!--block-->

<div class="container"><!--reopen row and container -->
<div class="row">
	
	
	
	
