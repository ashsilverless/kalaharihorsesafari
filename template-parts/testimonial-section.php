
</div>
</div><!--close row and container -->


<section class="testimonial auto-height" style="background-image: url(<?php the_sub_field('video_background_image'); ?>);">

	<div class="video-wrapper">
		
	<div id="player"></div>
	    
	    <script>
	      var tag = document.createElement('script');
	      tag.src = "https://www.youtube.com/iframe_api";
	      var firstScriptTag = document.getElementsByTagName('script')[0];
	      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	
	      var player;
	      function onYouTubeIframeAPIReady() {
	        player = new YT.Player('player', {
	            videoId: '<?php the_sub_field('video'); ?>',
	            playerVars: {
	                modestbranding: 0,
	                autoplay: 1,
	                controls: 0,
	                showinfo: 0,
	                wmode: 'transparent',
	                branding: 0,
	                rel: 0,
	                autohide: 0,
	                mute: 1,
	                origin: window.location.origin
	            },
	            events: {
	                'onReady': onPlayerReady,
	                'onStateChange': onPlayerStateChange
	            }
	          });
	        }
	        function onPlayerReady(event) {
	            event.target.playVideo();
	        }
	        function onPlayerStateChange(event) {
	            if (event.data === YT.PlayerState.ENDED) {
	                player.playVideo(); 
	            }
	        }
	    </script>
		
	</div>



	
	
	<div class="content-wrapper">
	
		<p><?php the_sub_field('testimonial');?></p>
		
		<p><?php the_sub_field('individual');?></p>
	
	</div><!--end content wrapper-->

</section>

<div class="container"><!--reopen row and container -->
<div class="row">
	