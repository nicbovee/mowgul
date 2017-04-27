export default {
  init() {

    $(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
        $('.hero-content').fadeOut();
     }
    else
     {
      $('.hero-content').fadeIn();
     }
 });
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
