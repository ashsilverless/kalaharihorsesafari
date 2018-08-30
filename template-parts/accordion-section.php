<div class="col-sm-<?php the_sub_field('accordion_width');?>"><!--set width-->

<?php if( have_rows('accordion_repeater') ): ?>
				<div class="sl-accordion" role="tablist">
					<?php $i=1; while ( have_rows('accordion_repeater') ) : the_row(); ?>
						<div class="sl-card">
						    <div class="sl-card-header" role="tab" id="heading-<?php echo $i; ?>">
							    <p>Q<?php echo $i; ?></p>
						      <a data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="" aria-controls="collapseOne" data-no-scroll><h5 class="mb-0">
						        
						         <?php the_sub_field('header'); ?>
						        
						      </h5></a>
						      <a data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="" aria-controls="collapseOne" data-no-scroll><div class="arrow"></div></a>
						    </div>
						    <div id="collapse-<?php echo $i; ?>" class="collapse <?php the_field('expand'); ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="heading-<?php echo $i; ?>">
						      <div class="sl-card-body">
						       	<?php the_sub_field('content'); ?>
						      </div>
						    </div>
						</div>
					<?php $i++; endwhile; ?>
				</div>
			<?php endif; ?>
</div>

