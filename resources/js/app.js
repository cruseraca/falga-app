import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const init_lozad = () => {
    const observer = lozad(".lozad", {
        rootMargin: "300px 300px", // syntax similar to that of CSS Margin
        threshold: 0.1, // ratio of element convergence
    }); // lazy loads elements with default selector as '.lozad'
    observer.observe();
};

/**
 * @typedef {object} Popover
 * @property {() => void} show
 * @property {() => void} hide
 */

const init_navbar_popover = () => {
    const $window = $(window);
    let width = $window.width();
    const popover_names = ["about", "business", "sustainability", "media"];
    /** @type {Popover | false} */
    let open = false;
    $window.on("resize", () => {
        width = $window.width();
        if (open) {
            open.hide();
        }
    });

    /** @param {Popover} popover */
    const listeners = (popover) => {
        return {
            show: () => {
                if (width >= 768) {
                    // popover.show();
                }
                if (width < 768) {
                    popover.hide();
                }
            },
            hide: () => {
                if (width >= 768) {
                    // popover.hide();
                }
            },
            click: () => {
                if (width < 768) {
                    if (open === popover) {
                        popover.hide();
                    } else {
                        if (open && open !== popover) {
                            open.hide();
                        }
                        popover.show();
                    }
                }
            },
        };
    };
    popover_names.forEach((n) => {
        // set the popover content element
        const $targetEl = $(`#navbar-popover-${n}`);
        if (!$targetEl.length) {
            return;
        }

        // set the element that trigger the popover using hover or click
        const $triggerEl = $(`#navbar-popover-trigger-${n}`);
        if (!$triggerEl.length) {
            return;
        }

        const $icon = $triggerEl.find("#navbar-popover-trigger-icon");
        const $link = $triggerEl.find("#navbar-popover-trigger-link");
        const options = {
            placement: "bottom",
            triggerType: "hover",
            offset: 0,
            onHide: () => {
                if (open === popover) {
                    open = false;
                }
                $icon.removeClass("navbar-popover-trigger-icon");
            },
            onShow: () => {
                open = popover;
                $icon.addClass("navbar-popover-trigger-icon");
            },
        };
        /** @type {Popover} */
        const popover = new Dropdown($targetEl[0], $triggerEl[0], options);
        popover.hide();

        const l = listeners(popover);
        $triggerEl
            .on("mouseenter", l.show)
            .on("focus", l.show)
            // .on("mouseleave", l.hide)
            // .on("blur", l.hide);
        $icon.on("click", l.click);
    });
};

$(() => {
    init_lozad();
    init_navbar_popover();
});
