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
  
    // Construct the text to send
    let text = `نام کاربر : ${username}<br>ایمیل کاربر : ${email}<br>پیام کاربر : ${message}`;
  
    // Construct the URL to request
    let url = `https://api.telegram.org/bot${tg.token}/sendMessage?chat_id=${tg.chat_id}&text=${text}`;
  
    // Send the request using jQuery.ajax
    $.ajax({
      url: url,
      method: "GET",
      success: function(data) {
        // Do something when the request is successful
        alert("Message sent!");
      },
      error: function(error) {
        // Do something when the request fails
        alert("Something went wrong!");
      }
    });
  }

var sendButton = document.getElementById("sendButton");

sendButton.addEventListener("click", (e) =>{
  e.preventDefault();
  sendMessage();
});