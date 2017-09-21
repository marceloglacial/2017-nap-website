
// active menu item
$('body').scrollspy({ target: '#navbar' })


// change navbar layout on scrolling
$(document).ready(function(){
  $(window).scroll(function() {
    if ($(document).scrollTop() > 600) {
      $("section").addClass("body-fix");
      $("nav").addClass("navbar-fixed-top");
    } else {
      $("section").removeClass("body-fix");
      $("nav").removeClass("navbar-fixed-top");
    }
  });
});

// close menu afer click (on mobile)
$('.nav a').on('click', function(){
  if($(window).width() < 767)
  {
    $('.navbar-toggle').click()
  }
});

// vendor.js > http://www.w3schools.com/bootstrap/bootstrap_theme_band.asp
(function ($) {

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, .arrow").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

})(jQuery);
