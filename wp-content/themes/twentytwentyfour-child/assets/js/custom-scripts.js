jQuery(document).ready(function($) {
  // Hero Banner Carousel
  $('.hero.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    items: 1,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true
  });

  // Carousel for car modal
  $('.modal-images.owl-carousel').owlCarousel({
    loop: true,
    dots: true,
    items: 1,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true
  });

  // Show modal
  $('.car-tile').on('click', function () {
    const id = $(this).data('id');
    $(`.car-modal[data-id="${id}"]`).fadeIn().css('display', 'flex');
  });

  // Hide modal
  $('.modal-close, .car-modal').on('click', function (e) {
    if ($(e.target).hasClass('car-modal') || $(e.target).hasClass('modal-close')) {
      $(this).closest('.car-modal').fadeOut();
    }
  });
});