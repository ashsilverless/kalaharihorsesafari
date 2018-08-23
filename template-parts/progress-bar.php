</div></div><!--close row and container -->

<?php $barvalto = 100 - get_sub_field('percentage_complete_to');?> 

<div class="progress-bar-wrapper">

  <div class="progress-bar-pre" style="left:0; width:<?php the_sub_field('percentage_complete_from');?>%"></div>
	
  <div class="progress-bar" style="left:<?php the_sub_field('percentage_complete_from');?>%; right:<?php echo $barvalto;?>%;"></div>

</div>

<div class="container"><!--reopen row and container -->
<div class="row">