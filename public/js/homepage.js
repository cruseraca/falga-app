var $carousel = $(".carousel").flickity({
    wrapAround: true,
    pageDots: false,
    autoPlay: true,
    initialIndex: 1,
    prevNextButtons: false,
});
// previous
$(".carousel-button-left").on("click", function () {
    $carousel.flickity("previous");
});
// next
$('.carousel-button-right').on( 'click', function() {
    $carousel.flickity('next');
  });
