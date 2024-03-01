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

const nameInput = document.querySelector("#nameInput");
const emailInput = document.querySelector("#emailInput");
const textInput = document.querySelector("#textInput");

// Assuming you have a button to trigger the message
const sendButton = document.querySelector("#sendButton");
sendButton.addEventListener("click", () => {
    const message = `Name: ${nameInput.value}\nEmail: ${emailInput.value}\nText: ${textInput.value}`;
    sendMessage(message);
});

