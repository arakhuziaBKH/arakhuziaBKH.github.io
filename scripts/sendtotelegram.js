// Define your bot token and chat id
let tg = {
    token: "7169684581:AAGDuWoS4cZPOTRJVOmB7CEpz4uDXwAlFwE", // Your bot's token that got from @BotFather
    chat_id: "654521707" // The user's(that you want to send a message) telegram chat id
  };
  
  // Define a function that sends the form data to the bot
  function sendMessage() {
    // Get the values of the input fields
    let username = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    if(username == ""){
      Swal.fire({
        icon: "warning",
        title: "اوووف سسس",
        text: "فیلد نام و نام خانوادگی نمی تواند خالی باشد "
      });
    }
    if(email == ""){
      Swal.fire({
        icon: "warning",
        title: "اوووف سسس ",
        text: "لطفا ایمیل را به درستی وارد نمائید!"
      });
    }
    if(message == "" && message.length <= 20){
      Swal.fire({
        icon: "warning",
        title: "اوووف سسس ",
        text: "فیلد پیام نمی تواند خالی باشد . پیام شما نمی تواند کمتر از 20 کاراکتر باشد!"
      });
    }
  
    // Construct the text to send
    let text = `نام کاربر : ${username}<br>   ایمیل کاربر : ${email}<br>   پیام کاربر : ${message}`;
  
    // Construct the URL to request
    let url = `https://api.telegram.org/bot${tg.token}/sendMessage?chat_id=${tg.chat_id}&text=${text}`;
  
    // Send the request using jQuery.ajax
    $.ajax({
      url: url,
      method: "GET",
      success: function(data) {
        // Do something when the request is successful
        Swal.fire({
          icon: "success",
          title: "با تشکر از شما ",
          text: "پیام شما با موفقیت ارسال شد"
        });
      },
      error: function(error) {
        // Do something when the request fails
        Swal.fire({
          icon: "danger",
          title: "مشکل اتصال",
          text: "از روشن بودن خود اطمینام حاصل کنید!"
        });

        Swal.fire({
          icon: "danger",
          title: "متاسفم",
          text: "مشکلی پیش آمده است . پیام شما ارسال نشد "
        });
      }
    });
  }

var sendButton = document.getElementById("sendButton");

sendButton.addEventListener("click", (e) =>{
  e.preventDefault();
  sendMessage();
});