const { default: axios } = require("axios");

const init_carousel = () => {
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
    $(".carousel-button-right").on("click", function () {
        $carousel.flickity("next");
    });
};

const init_contact_us = () => {
    const contact_us = $("#contact-us");
    const submit = contact_us.find("#submit");
    submit.on("click", async () => {
        try {
            const result = await axios.post('/api/contact-us', { name: 'andi' })
            console.log(result.data)
        } catch (e) {
            /**
             * @type {import("axios").AxiosError}
             */
            const a = e
            console.log(a.response.data)
        }
    });
};

$(() => {
    init_carousel();
    init_contact_us();
});
