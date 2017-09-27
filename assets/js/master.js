// close menu afer click (on mobile)
$('.nav a').on('click', function(){
  if($(window).width() < 767)
  {
    $('.navbar-toggle').click()
  };
});

// Smooth Scrolling - https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_eff_animate_smoothscroll
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

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
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        //window.location.hash = hash;
      });
    } // End if
  });
});


// display menu after scrolling
$(document).ready(function(){
  if($(window).width() > 767) // only for desktop resolution
  {
    $(window).scroll(function() {
      var height = $(window).scrollTop();
      if(height  > 600) {
        $("nav.nav-home").fadeIn();
        $("nav.nav-home").removeClass("hidden");
      } else {
        $("nav.nav-home").addClass("hidden");
      };
    });
  } else { // mobile
    $("nav.nav-home").removeClass("hidden");
  };
});
