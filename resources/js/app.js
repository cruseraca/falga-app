import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// $(function () {
//     $("#dropdownNavbarLink")
//         .parent()
//         .hover(
//             function () {
//                 $("#dropdownNavbar").removeClass("hidden");
//             },
//             function () {
//                 $("#dropdownNavbar").addClass("hidden");
//             }
//         );
// });
$(() => {
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
});
