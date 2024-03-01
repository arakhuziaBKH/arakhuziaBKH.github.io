// Replace with your actual bot token and chat ID
let tg = {
    token: "7169684581:AAFQwSVrTDhKRvb3icjPYpaguIfBNEw4g90",
    chat_id: "654521707"
};

/**
 * Send a message to a specific user
 * @param {String} text - The text to send
 */
function sendMessage(text) {
    const url = `https://api.telegram.org/bot${tg.token}/sendMessage?chat_id=${tg.chat_id}&text=${text}`;
    const xht = new XMLHttpRequest();
    xht.open("GET", url);
    xht.send();
}

const username = document.querySelector("#username");
const email = document.querySelector("#email");
const userMessage = document.querySelector("#message");

// Assuming you have a button to trigger the message
const sendButton = document.querySelector("#sendButton");
sendButton.addEventListener("click", (e) => {
    e.preventDefault();
    const message = `Name: ${username.value}\nEmail: ${email.value}\nText: ${userMessage.value}`;
    sendMessage(message);
});

