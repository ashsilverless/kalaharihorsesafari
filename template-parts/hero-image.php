
<?php if( get_field('type') == 'image' ): ?>
<section class="sl-hero <?php the_field('height');?>-height" style="background-image: url(<?php the_field('hero_image'); ?>);">
<?php endif; ?>

<?php if( get_field('type') == 'video' ): ?>
<section class="sl-hero auto-height sl-video" style="background-image: url(<?php the_field('video_background_image'); ?>);">

<div class="video-wrapper">
<iframe width="900" height="300" src="http://www.youtube.com/embed/<?php the_field('hero_video');?>?rel=0&amp;autoplay=1&amp;mute=1&amp;controls=0&amp;showinfo=0&ampmodestbranding=1" frameborder="0" allowfullscreen></iframe>
</div>
<?php endif; ?>






<div class="content-wrapper">
<?php if( get_field('hero_image_text_-_line_one') ): ?>
<p><?php the_field('hero_image_text_-_line_one');?></p>
<?php endif; ?>


<?php if( get_field('hero_image_text_-_line_two') ): ?>
<h1><?php the_field('hero_image_text_-_line_two');?></h1>
<?php endif; ?>

<?php

// check if the repeater field has rows of data
if( have_rows('button') ): ?>

<div class="button-wrapper"> 

 	<?php while ( have_rows('button') ) : the_row(); ?>
 	
 	<a href="<?php the_sub_field('button_target');?>" class="sl-button" style="background-color:<?php the_sub_field('button_colour');?>; color: <?php the_sub_field('text_colour');?>; "><?php the_sub_field('button_text');?></a>

<?php endwhile;
else :
endif;
?>
</div>
</section>

	
