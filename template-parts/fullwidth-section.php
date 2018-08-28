
</div></div><!--close row and container -->

<div class="block <?php the_sub_field('effect');?>">
	
	<div class="sl-fullwidth image-holder" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
	
	<div class="section">

		<h2 class="<?php the_sub_field('heading_alignment');?> fade-heading"><?php the_sub_field('heading');?></h2>		
		<?php // check if the repeater field has rows of data
		if( have_rows('content') ):
		while ( have_rows('content') ) : the_row(); ?>
		
			<div class="content align-<?php the_sub_field('alignment');?> <?php the_sub_field('drop_cap');?>"> 	
				<?php the_sub_field('text');?>ddd
			</div>
			
		<?php endwhile;
		else :
		endif;
		?>		
<?php the_sub_field('button_text');?>

	</div><!--section-->
	    <div class='clearfix'></div>	
</div><!--block-->

<div class="container"><!--reopen row and container -->
<div class="row">
	