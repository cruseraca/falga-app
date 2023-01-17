const init_carousel = () => {
    initCarousels()
    removeCarouselHeight();
};

const initCarousels = () => {
    for (i = 1; i < 7; i++) {
        const $carousel = $(`.carousel${i}`).flickity({
            cellSelector: `.carousel-cell${i}`,
            wrapAround: true,
            pageDots: false,
            autoPlay: false,
            initialIndex: 0,
            prevNextButtons: false,
        });
        // next
        $(`.carousel-button-right${i}`).on("click", function () {
            $carousel.flickity("next");
        });
    }
};

const removeCarouselHeight = () => {
    for (i = 1; i < 7; i++) {
        const port = $(`carousel${i}`).find("flickity-viewport");
        port.css("width", "");
    }
};

$(() => {
    init_carousel();
});
