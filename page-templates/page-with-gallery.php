<?php
/**
 * Template Name: Page With Gallery
 *
 * @package SLMaster
 */

get_header();

get_template_part( 'template-parts/page', 'header' );?>

<div class="container"><!--open row and container -->
<div class="row">

<div class="col-md-9">

<?php if( have_rows('lead_copy') ): ?>

 	<?php while ( have_rows('lead_copy') ) : the_row(); ?>

		<div class="page-content"> 	
			<h3><?php the_sub_field('heading');?></h3>
			<?php the_sub_field('copy');?>
		</div>

<?php endwhile;
else :
endif;
?>

<?php if( have_rows('single_image') ): ?>

 	<?php while ( have_rows('single_image') ) : the_row(); ?>

		<a href="<?php the_sub_field('link');?>">
			<img src="<?php the_sub_field('image');?>" style="width:<?php the_sub_field('width');?>px;"/>
		</a>

<?php endwhile;
else :
endif;
?>
	
</div>

<div class="col-md-3">
	<div class="sidebar">
<?php get_template_part( 'template-parts/safari', 'sidebar' );?>	
	</div>
</div>
			
</div><!--row-->
</div><!--container-->

<div class="container"><!--open row and container -->
<div class="row">
	
	<?php echo do_shortcode('[new_royalslider id="1"]');?>
	<!--<?php get_template_part( 'template-parts/masonry', 'gallery' );?>-->
	
</div><!--row-->


<div class="row">

	<div class="col-sm-8 offset-sm-2">
	
		<section class="onbody-cta">

<?php if( have_rows('call_to_action') ): ?>

 	<?php while ( have_rows('call_to_action') ) : the_row(); ?>
 			
			<a href="<?php the_sub_field('target');?>">
			
			<img src="<?php the_sub_field('image');?>"/>
			
			<div class="content-wrapper">
				<p><?php the_sub_field('text_-_line_one');?></p>	
				<p><?php the_sub_field('text_-_line_two');?></p>	
			</div>
	
				
			</a>
		
		<?php endwhile;
		else :
		endif;
		?>
		</section>

	</div>

</div><!--row-->
</div><!--container-->


<section class="leaders">

<?php if( have_rows('leaders') ): ?>
	
	<div class="container">	
		<div class="row">
 	
 	<?php while ( have_rows('leaders') ) : the_row(); ?>

		
	<div class="col-sm-4">	
	
			<div class="leader-wrapper" style="background-image: url(<?php the_sub_field('image'); ?>)">
				
				<h2><?php the_sub_field('heading');?></h2>	
			
				<a href="<?php the_sub_field('target');?>" class="standard-button"><?php the_sub_field('icon');?>Find Out More</a>		
			</div>
					
	</div>		
		<?php endwhile;
		else :
		endif;
		?>		
		</div><!--row-->
	</div><!--container-->
</section><!--leaders-->

<?php get_footer();?>









