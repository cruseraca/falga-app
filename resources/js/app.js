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
 * @property {() => boolean} isVisible
 */

const init_navbar_popover = () => {
    const $window = $(window);
    const popover_names = ["about", "business", "sustainability", "media"];
    /** @type {{ open: false | Popover }} */
    const holder = { open: false };
    $window.on("resize", () => {
        console.log("resize");
        const { open } = holder;
        if (open) {
            open.hide();
        }
    });
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
        /** @type {{ popover: Popover }} */
        const p = {};
        const options = {
            placement: "bottom",
            triggerType: "hover",
            offset: 0,
            onHide: () => {
                $icon.removeClass("navbar-popover-trigger-icon");
            },
            onShow: (r) => {
                holder.open = r;
                p.popover = r;
                $icon.addClass("navbar-popover-trigger-icon");
            },
        };
        p.popover = new Dropdown($targetEl[0], $link[0], options);
        p.popover.hide();

        const show = () => {
            if (window.innerWidth < 768) {
                holder.open = false;
                p.popover.hide();
            }
        };
        const click = () => {
            const { open } = holder;
            const { popover } = p;
            if (window.innerWidth < 768) {
                if (holder.open == p.popover) {
                    holder.open = false;
                    popover.hide();
                } else {
                    if (open && open != popover) {
                        open.hide();
                    }
                    popover.show();
                }
            }
        };
        $link.on("mouseenter", show).on("focus", show);
        $icon.on("click", click);
    });
};

$(() => {
    init_lozad();
    init_navbar_popover();
});
