$(document).ready(function(){
const text = $(".text");
const button = $(".button");

button.addEventListener("click", ()=>{
    navigator.clipboard.writeText("hi");
});


});