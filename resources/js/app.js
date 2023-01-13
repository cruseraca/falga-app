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
    const observer = lozad('.lozad', {
        rootMargin: '300px 300px', // syntax similar to that of CSS Margin
        threshold: 0.1, // ratio of element convergence
    }); // lazy loads elements with default selector as '.lozad'
    observer.observe();
});
