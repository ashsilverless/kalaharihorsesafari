<?php if( get_sub_field('full_width') == 'full' ): ?>
	</div>
	</div><!--close row and container-->
<?php endif; ?>

<div class="sl-carousel owl-carousel owl-theme">
    <?php if (have_rows('carousel')):
        while (have_rows('carousel')) : the_row();
            ?>
            <div class="item">	            
	            <img src="<?php the_sub_field('image');?>" class=""/>
            </div>
            <?php
        endwhile;
		else :
    endif;
    ?>
</div>

<?php if( get_sub_field('full_width') == 'full' ): ?>
	<div class="container"><!--reopen row and container -->
	<div class="row">
<?php endif; ?>

	