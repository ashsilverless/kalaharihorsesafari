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

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
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

$(function() {
  $(".sl-card-header a").click(function() { 
    $(this).parent().toggleClass("rotate");                 
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


});

});//Don't remove



















