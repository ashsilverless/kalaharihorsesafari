jQuery(document).ready(function( $ ) {

/* ADD CLASS ON SCROLL*/
	
	$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
        $("header").addClass("scrolled");
    } else {
        $("header").removeClass("scrolled");
    }
});


//SMOOTH SCROOL TO ANCHOR 

$(document).ready(function(){
	
  // Add smooth scrolling to all links
  $("a").not("[data-no-scroll]").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      	}, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


/* ADD CLASS ON PAGE LOAD 

$(document).ready(function( $ ) {

$( "ul.nav li.nav-item" ).first().find('a').addClass( "active" );
$( ".tab-pane" ).first().addClass( "active" );
});
*/

/* GLOBAL OWL CAROUSEL SETTINGS */

$('.sl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: [" Previous", " Next"],
	navClass: ['owl-prev', 'owl-next'],
    dots:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
})

/* CLASS AND FOCUS ON CLICK */

$(function() {
  $(".hamburger").click(function() { 
    $('nav').toggleClass("reveal");
    $('#content').toggleClass("reveal");
    $('.static.tray').toggleClass("fade");                   
  });
});

$(function() {
  $("#content").click(function() { 
    $('.static.tray').removeClass("fade");    
    $('nav').removeClass("reveal");
    $('#content').removeClass("reveal");               
  });
});




//document
$(document).ready(function(){

  $(window).scroll(function() {

    var $window = $(window);
    var viewportTop = $window.scrollTop();
    var viewportBottom = viewportTop + $window.height();

    //(blockBottom <= viewportBottom) &&  (blockTop >= viewportTop) 
    $('.block').each(function(){
      var thisTop = $(this).offset().top;
      var thisBot = thisTop + $(this).height();

      if ( (thisBot <= viewportBottom) &&  (thisTop >= viewportTop)  ) {
        $(this).addClass('active_block');
      } else {
        $(this).removeClass('active_block');
      }  

      if( thisBot <= viewportBottom ) {
        $(this).addClass('pos_abs_bot');
      } else {
        $(this).find('.image-holder').removeClass('pos_fixed');
        $(this).removeClass('pos_abs_bot');
      }
    });

    $('.image-holder').each(function(){
      var thisTop = $(this).offset().top;
      var thisBot = thisTop + $(this).height();

      if( viewportTop >= thisTop ) {
        $(this).addClass('pos_fixed');
      } else {
        $(this).removeClass('pos_fixed');
      }


    });

  });

});




$(function() {
// init controller
var controller = new ScrollMagic.Controller();


new ScrollMagic.Scene({
triggerElement: "#home",
duration: '30%'
})
.setClassToggle('.sl-hero .content-wrapper', 'in-view')		
.addTo(controller);

// loop through all elements
$("h2.fade-heading").each(function() {
	var h2fh = $(this);

		// build a scene
		var scene = new ScrollMagic.Scene({
		triggerElement: this,
		offset: 50,
		triggerHook: 'onEnter'
		})
			.setClassToggle(this, "visible")
			.addTo(controller);
});

// loop through all elements
$(".content").each(function() {
	var jh1 = $(this);
	
	// build a scene
	var scene = new ScrollMagic.Scene({
	triggerElement: this,
	offset: 50,
	triggerHook: 'onEnter'
	})
	.setClassToggle(this, "visible")
	.addTo(controller);
});

// loop through all elements
$(".progress-bar").each(function() {
	var jh1 = $(this);
	
	// build a scene
	var scene = new ScrollMagic.Scene({
	triggerElement: this,
	triggerHook: '0.75'
	})
	.setClassToggle(this, "reveal")
	.addTo(controller);
});

// loop through all elements
$(".itinerary").each(function() {
	var jh1 = $(this);
	
	// build a scene
	var scene = new ScrollMagic.Scene({
	triggerElement: this,
	triggerHook: '0.5'
	})
	.setClassToggle(this, "reveal")
	.addTo(controller);
});

// loop through all elements
$(".itinerary").each(function() {
	var jh1 = $(this);
	
	// build a scene
	var scene = new ScrollMagic.Scene({
	triggerElement: this,
	offset: 150,
	triggerHook: 'onEnter'
	})
	.setClassToggle(this, "visible")
	.addTo(controller);
});

// loop through all elements
$(".block").each(function() {
	var jh1 = $(this);
	
		// build a scene
		var scene = new ScrollMagic.Scene({
		triggerElement: this,
		offset: -50,
		triggerHook: 'onLeave'
		})
			.setClassToggle(this, "add-icon")
			.addTo(controller);
});

// loop through all elements
$(".content").each(function() {
	var jh1 = $(this);
	
		// build a scene
		var scene = new ScrollMagic.Scene({
		triggerElement: this,
		offset: -350,
		triggerHook: 'onLeave'
		})
			.setClassToggle(this.closest('.block'), "no-icon")
			.addTo(controller);
});


});





});//Don't remove



















