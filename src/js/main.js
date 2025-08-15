$(document).ready(function(){



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


    var sections = document.querySelectorAll("section");
        for(var i = 0; i < sections.length; i++){
            let item = sections[i];
            item.style.transition = "all .5s easein-out";
        }




        //theme section

        //selecting theme toggling button
        var themeToggle = document.getElementById("theme-toggle");

        // adding event listener to the theme button
        themeToggle.addEventListener("click", function(e){
            e.preventDefault();
            document.body.classList.toggle("light");
        });






    });

    window.addEventListener("DOMContentLoaded", () => {
        function sendMessage() {
          let username = document.getElementById("username").value;
          let email = document.getElementById("email").value;
          let message = document.getElementById("message").value;

          if (username == "") {
            Swal.fire({
              icon: "warning",
              title: "اوووف سسس",
              text: "فیلد نام و نام خانوادگی نمی تواند خالی باشد "
            });
            return false;
          }
          if (email == "") {
            Swal.fire({
              icon: "warning",
              title: "اوووف سسس ",
              text: "لطفا ایمیل را به درستی وارد نمائید!"
            });
            return false;
          }
          if (message == "" || message.length <= 20) {
            Swal.fire({
              icon: "warning",
              title: "اوووف سسس ",
              text: "فیلد پیام نمی تواند خالی باشد . پیام شما نمی تواند کمتر از 20 کاراکتر باشد!"
            });
            return false;
          }

          $.ajax({
            url: 'php/send_telegram_message.php',
            method: 'POST',
            data: {
              username: username,
              email: email,
              message: message
            },
            success: function (data) {
              Swal.fire({
                icon: "success",
                title: "با تشکر از شما ",
                text: "پیام شما با موفقیت ارسال شد"
              });
            },
            error: function (error) {
              Swal.fire({
                icon: "error",
                title: "متاسفم",
                text: "مشکلی پیش آمده است . پیام شما ارسال نشد "
              });
            }
          });
        }

        var sendButton = document.getElementById("sendButton");

        sendButton.addEventListener("click", (e) => {
          e.preventDefault();
          sendMessage();
        });
      });

      (function () {
        const sideMenuIcon = document.getElementById("sideMenuIcon");
        const sideMenuClose = document.getElementById("sideMenuClose");
        const body = document.body;

        sideMenuIcon.addEventListener("click", (e) => {
          e.preventDefault();
          body.classList.add("side-menu-open");
        });

        sideMenuClose.addEventListener("click", (e) => {
          e.preventDefault();
          body.classList.remove("side-menu-open");
        });
      })();

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
