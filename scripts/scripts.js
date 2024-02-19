$(document).ready(function(){

    $("#contactMe").on("click", function(e){
        Notification.requestPermission().then(permissions => {
            if (permission === "granted"){
                new Notification($("#contactMe").text());
            }
        });
    });




    // function reveal() {
    //       var reveals = document.querySelectorAll(".reveal");
    //     for (var i = 0; i < reveals.length; i++) {
    //         var windowHeight = window.innerHeight;
    //         var elementTop = reveals[i].getBoundingClientRect().top;
    //         var elementVisible = 150;
    //         if (elementTop < windowHeight - elementVisible) {
    //             reveals[i].classList.add("active");
    //         } else {
    //             reveals[i].classList.remove("active");                                    
    //         }
    //     }
    // }
    
    // window.addEventListener("scroll", reveal);
    // reveal();

    
AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
// Global settings:
disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
initClassName: 'aos-init', // class applied after initialization
animatedClassName: 'aos-animate', // class applied on animation
useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
disableMutationObserver: false, // disables automatic mutations' detections (advanced)
debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


// Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
offset: 120, // offset (in px) from the original trigger point
delay: 0, // values from 0 to 3000, with step 50ms
duration: 400, // values from 0 to 3000, with step 50ms
easing: 'ease', // default easing for AOS animations
once: false, // whether animation should happen only once - while scrolling down
mirror: false, // whether elements should animate out while scrolling past them
anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});






// smooth scroling with jquery
//
//
//
$('a.btn')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
// On-page links
if (
location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
&& 
location.hostname == this.hostname
) {
// Figure out element to scroll to
var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
// Does a scroll target exist?
if (target.length) {
// Only prevent default if animation is actually gonna happen
event.preventDefault();
$('html, body').animate({
scrollTop: target.offset().top
}, 1000, function() {
// Callback after animation
// Must change focus!
var $target = $(target);
$target.focus();
if ($target.is(":focus")) { // Checking if the target was focused
return false;
} else {
$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
$target.focus(); // Set focus again
};
});
}
}
});

//
//
//
//end of smooth scrolling with jquery





});