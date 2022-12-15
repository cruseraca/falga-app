/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/industrial.js ***!
  \************************************/
var init_carousel = function init_carousel() {
  initCarousels();
  removeCarouselHeight();
};
var initCarousels = function initCarousels() {
  var _loop = function _loop() {
    var $carousel = $(".carousel".concat(i)).flickity({
      cellSelector: ".carousel-cell".concat(i),
      wrapAround: true,
      pageDots: false,
      autoPlay: false,
      initialIndex: 1,
      prevNextButtons: false
    });
    // next
    $(".carousel-button-right".concat(i)).on("click", function () {
      $carousel.flickity("next");
    });
  };
  for (i = 1; i < 7; i++) {
    _loop();
  }
};
var removeCarouselHeight = function removeCarouselHeight() {
  for (i = 1; i < 7; i++) {
    var port = $("carousel".concat(i)).find("flickity-viewport");
    port.css("width", "");
  }
};
$(function () {
  init_carousel();
});
/******/ })()
;