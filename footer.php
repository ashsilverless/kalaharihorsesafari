<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SLMaster
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">

	<div class="container">
		<div class="row">
		
			<div class="col-sm-7">
					
				<img src="<?php the_field('logo', 'khs_footer'); ?>	" class="brand"/>
				
				<p><?php the_field('telephone_number', 'khs_footer'); ?> | <?php the_field('mobile_number', 'khs_footer'); ?></p>
				<p><?php the_field('address', 'khs_footer'); ?></p>
				<a href="mailto: <?php the_field('email_address', 'khs_footer'); ?>"><?php the_field('email_address', 'khs_footer'); ?></a>
				
			</div>
			
			<div class="col-sm-5">
			
				<?php echo do_shortcode('[contact-form-7 id="478" title="Footer Contact Form"]');?>
			
			</div>
					
		</div>
	</div><!--container-->
	<div class="socket">
		
		<div class="container">
	
				
			<div class="row">
				
				<div class="col-sm-6">		
						&copy; Kalahari Horse Safaris <?php echo date ('Y');?>.  All rights reserved | <a href="https://silverless.co.uk" target="_blank">Created by Silverless</a> 
				</div>
				
				<div class="col-sm-6 text-right">
					<a href="">Terms & Conditions</a> | <a href="">Privacy</a>
				</div>
			
			</div>
			
		</div><!--container-->

	</div><!--socket-->
		
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
