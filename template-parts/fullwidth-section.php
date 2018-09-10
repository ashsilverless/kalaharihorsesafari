
	
<div id="<?php the_sub_field('section_id');?>" class="block <?php the_sub_field('effect');?>">
	
	
	
	<div class="sl-fullwidth image-holder" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
	<div class="icon-wrapper">
	
	<div class="floating-icon">
	<img src="<?php the_sub_field('icon');?>"/>
	</div>
	
	<a href="#<?php the_sub_field('continue_reading_target');?>"><span></span></a>
	
	</div>

<div class="container"><!--reopen row and container -->
<div class="row">
	<div class="section">

		<h2 class="<?php the_sub_field('alignment');?> fade-heading"><?php the_sub_field('heading');?></h2>	
			
		
		
		<div class="content align-<?php the_sub_field('alignment');?> <?php the_sub_field('drop_cap');?>"> 	
		<?php if( have_rows('content') ):?>
		<?php while ( have_rows('content') ) : the_row(); ?>
		
			
				<?php the_sub_field('text');?>
				
					<?php endwhile;?>
				
									<p class="cta-read">
					<a href="<?php the_sub_field('button_target');?>" class="cta"><?php the_sub_field('button_text');?><span></span></a>	
				</p>
		
	<?php
		else :
		endif;
		?>			
</div>

	    				<div class="next-section">		
					
				</div>	

	</div><!--section-->
	
	</div></div><!--close row and container -->
	
	    <div class='clearfix'></div>	
	   	
</div><!--block-->

	
	
	
	
