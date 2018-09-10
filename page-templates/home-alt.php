<?php
/**
 * Template Name: Home Alt
 *
 * @package SLMaster
 */

get_header();
?>
<?php if( have_rows('hero_section') ): ?>

 	<?php while ( have_rows('hero_section') ) : the_row(); ?>	
 	
<section class="sl-hero auto-height sl-video" style="background-image: url(<?php the_sub_field('video_background_image'); ?>);">

<div class="video-wrapper">
<div id="muteYouTubeVideoPlayer"></div>
<iframe src="https://www.youtube.com/embed/<?php the_sub_field('hero_video');?>?modestbranding=0&controls=0&mute=1&showinfo=0&rel=0&autoplay=1&loop=1&playlist=<?php the_sub_field('hero_video');?>" frameborder="0" allowfullscreen></iframe>
</div>


<div class="content-wrapper">
	
<?php if( get_sub_field('text_one') ): ?>
<p><?php the_sub_field('text_one');?></p>
<?php endif; ?>

<?php if( get_sub_field('text_two') ): ?>
<h1><?php the_sub_field('text_two');?></h1>
<?php endif; ?>


<a href="" class="scroll-icon"></a>


</div><!--end content wrapper-->

</section>

<?php endwhile;
else :
endif;
?>





<div class="scroll-section">
	
<?php if( have_rows('content_section') ): ?>

 	<?php while ( have_rows('content_section') ) : the_row(); ?>	
	
<img src="<?php the_sub_field('image');?>"/>	
<div class="content-wrapper">

<div class="container"><!--open row and container -->
<div class="row">





</div><!--row-->
</div><!--container-->

</div><!--content-wrapper-->

<?php endwhile;
else :
endif;
?>

</div>

<?php get_footer();
?>