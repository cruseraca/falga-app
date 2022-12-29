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
    const contact_us = $("#contact-us-form");
    contact_us.on("submit", () => {
        contact_us.attr("disabled", true);
        $.ajax({
            method: "POST",
            url: "/api/contact-us",
            data: contact_us.serialize(),
            success: (r) => {
                modal.show();
                description.text("Your message has been recorded.");
                contact_us.removeAttr("disabled");
            },
            error: (e) => {
                modal.show();
                description.text(
                    e.responseJSON ? e.responseJSON.message : "Unkown Error!"
                );
                contact_us.removeAttr("disabled");
            },
        });
    });

    // set the modal menu element
    const targetEl = document.getElementById("contact-us-modal");

    // options with default values
    const options = {
        placement: "bottom-right",
        backdrop: "dynamic",
        backdropClasses:
            "bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40",
        onHide: () => {
            //
        },
        onShow: () => {
            //
        },
        onToggle: () => {
            //
        },
    };
    /**
     * @typedef {object} Modal
     * @prop {() => void} show
     * @prop {() => void} hide
     * @prop {() => void} toggle
     */
    /**
     * @type {Modal}
     */
    const modal = new Modal(targetEl, options);
    const mEl = $(targetEl);
    mEl.find("#dismiss").on("click", () => modal.hide());
    const description = mEl.find("#description");
};

$(() => {
    init_carousel();
    init_contact_us();
});
