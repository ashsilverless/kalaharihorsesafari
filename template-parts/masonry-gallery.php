<section id="sl-masonry">

<?php

if( have_rows('gallery') ):

    while ( have_rows('gallery') ) : the_row();?> 
    
    <div class="masonry-item">
	    
	    <a href="<?php the_sub_field('image');?>" data-fancybox="gallery">
			<img src="<?php the_sub_field('image');?>" />
  		</a>

    </div> 
        
        <?php
endwhile;
else :
endif; ?>

</section>

    <script>
        Macy({
            container: '#sl-masonry',
            trueOrder: false,
            waitForImages: true,
            margin: 10,
            columns: 3,
            breakAt: {
                1200: 3,
                940: 3,
                520: 2,
                400: 1
            }
        });

    </script>
