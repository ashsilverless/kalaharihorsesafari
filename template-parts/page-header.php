<?php
if( have_rows('hero_section') ): ?>

 	<?php while ( have_rows('hero_section') ) : the_row(); ?>

<?php
if( get_sub_field('type') == 'image' ): ?>

<section class="sl-hero fifty-height page-header" style="background-image: url(<?php the_sub_field('hero_image'); ?>);">

	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1 class="page-title"><?php the_title();?></h1>
			</div>
		</div>
	</div>
	
</section>

<?php endif;?>

<?php if( get_sub_field('type') == 'video' ): ?>
<section class="sl-hero auto-height sl-video" style="background-image: url(<?php the_sub_field('video_background_image'); ?>);">

<div class="video-wrapper">
<div id="muteYouTubeVideoPlayer"></div>
<iframe src="https://www.youtube.com/embed/<?php the_sub_field('hero_video');?>?modestbranding=0&controls=0&mute=1&showinfo=0&rel=0&autoplay=1&loop=1&playlist=<?php the_sub_field('hero_video');?>" frameborder="0" allowfullscreen></iframe>
</div>

</section>
<?php endif;
	
endwhile;
else :
endif;
?>