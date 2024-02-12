const text = document.querySelector("text");
const button = document.querySelector("button");

button.addEventListener("click",()=>{
    navigator.clipboard.writeText(text.value);
});