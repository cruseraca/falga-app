const init_popover = () => {
    const popover_names = [
        "others",
        "automation",
        "civil",
        "electrical",
        "instrumentation",
        "mechanical",
    ];
    let pops = [];
    popover_names.forEach((n) => {
        // set the popover content element
        const $targetEl = $(`#epci-wd-popover-${n}`);

        // set the element that trigger the popover using hover or click
        const $triggerEl = $(`#epci-wd-${n}`);

        // options with default values
        const options = {
            placement: "bottom",
            triggerType: "hover",
        };
        let visible = false;
        const popover = new Popover($targetEl[0], $triggerEl[0], options);
        pops.push(popover);
        popover.hide();
        $triggerEl.on("click", () => {
            if (visible) {
                visible = false;
                popover.hide();
            } else {
                visible = true;
                popover.show();
            }
            pops.forEach((p) => {
                if (p != popover) {
                    p.hide();
                }
            });
        });
    });
};

$(() => {
    init_popover();
});