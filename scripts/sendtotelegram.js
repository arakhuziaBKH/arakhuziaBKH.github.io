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
      url: 'send_telegram_message.php',
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