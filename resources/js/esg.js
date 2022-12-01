$(document).ready(() => {
    // create an array of objects with the id, trigger element (eg. button), and the content element
    const tabElements = [
        {
            id: "financial",
            triggerEl: document.querySelector("#financial-tab"),
            targetEl: document.querySelector("#financial"),
        },
        {
            id: "sustainability",
            triggerEl: document.querySelector("#sustainability-tab"),
            targetEl: document.querySelector("#sustainability"),
        },
        {
            id: "presentation",
            triggerEl: document.querySelector("#presentation-tab"),
            targetEl: document.querySelector("#presentation"),
        },
        {
            id: "governance",
            triggerEl: document.querySelector("#governance-tab"),
            targetEl: document.querySelector("#governance"),
        },
    ];

    // options with default values
    const options = {
        defaultTabId: "financial",
        activeClasses: "faga-tab-active",
        inactiveClasses: "",
        onShow: () => {
            console.log("tab is shown");
        },
    };

    // const tabs = new Tabs(tabElements, options);
});
