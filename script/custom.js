$(document).ready(function() {
  $("#loading").fadeOut();
  $(".hamburger").click(function(event) {
    event.preventDefault();
    event.stopPropagation();
    $(".hamburger").toggleClass("active");
    $("nav ul").toggleClass("active");
  });

  //Click outside the menu will close it
  $(document).click(function () {
    if($(".hamburger").hasClass("active")) {
      $(".hamburger").removeClass("active");
    }
    if($("nav ul").hasClass("active")) {
      $("nav ul").removeClass("active");
    }
  });
  
  $(".img-crop").click(function() {
    $(".img-crop p").toggleClass("active");
    $(".img-crop img").toggleClass("active");    
  });

  //FAQ
  $(document).ready(function(){
  	dynamicFAQ();
  });

  function dynamicFAQ() {
  	$('.more').hide();

    var expand = $(".expand");
    expand.cliked = 1;
    expand.click(function () {
      $(this).text((expand.cliked++ % 2 == 0) ? "Read More..." : "Read Less...");
  		$(this).toggleClass('open').next().slideToggle();
  	});
  }

  //Click on the map wrapper will remove it
  $(".map-wrapper").click(function() {
    $(this).fadeOut();
  });


  // Smooth scrooling
  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
//          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
//            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
});
