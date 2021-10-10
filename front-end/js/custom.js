jQuery(function($) {
    "use strict";

/*----- Subscription Form ----- */
$(document).ready(function() {
     // jQuery Validation
     $("#chimp-form").validate({
         // if valid, post data via AJAX
         submitHandler: function(form) {
             $.post("/front-end/mailchimp/subscribe.php", { email: $("#chimp-email").val() }, function(data) {
                 $('#response').html(data);
             });
         },
         // all fields are required
         rules: {
             email: {
                 required: true,
                 email: true
             }
         }
     });
 });
});

/** Banner */
function closeBanner() {
    document.querySelector("#banner-block").style.display = "none";
}
window.addEventListener('load', async () => {
    document.querySelector("#close-banner").addEventListener("click", closeBanner);
});

/** Mobile Menu */
function showMobile() {
    document.querySelector("#mobile-menu-block").style.display = "block";
}
function closeMobile() {
    document.querySelector("#mobile-menu-block").style.display = "none";
}
window.addEventListener('load', async () => {
    document.querySelector("#close-mobile-menu").addEventListener("click", closeMobile);
});
window.addEventListener('load', async () => {
    document.querySelector("#show-mobile-menu").addEventListener("click", showMobile);
});

/** Alert Button */
function switchAlertsState() {
    document.getElementById("alerts-form").submit();
}
window.addEventListener('load', async () => {
    document.querySelector("#alerts-button").addEventListener("click", switchAlertsState);
});

/** Modal Popup */
function showPopup() {
    document.querySelector("#popup-block").style.display = "block";
}
function closePopup() {
    document.querySelector("#popup-block").style.display = "none";
}
window.addEventListener('load', async () => {
    document.querySelector("#close-popup").addEventListener("click", closePopup);
});
window.addEventListener('load', async () => {
    document.querySelector("#show-popup").addEventListener("click", showPopup);
});