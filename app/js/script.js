console.log('Hello');

$(window).scroll(function() {
  if ($(this).scrollTop() > 250) {
      $('nav').addClass("sticky");
  } else {
      $('nav').removeClass("sticky");
  }
});

$(window).scroll(function() {
if ($(this).scrollTop() > 250) {
    $('.navbar-brand').addClass("brandLogoShrink").removeClass("brandLogo");
} else {
  $('.navbar-brand').addClass("brandLogo").removeClass("brandLogoShrink");
}
});