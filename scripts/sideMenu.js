//seclecting side menu icon
var sideMenuIcon = document.getElementById("sideMenuIcon");
 console.log(sideMenuIcon);
//selecting side menu div
var sideMenuContainer = document.getElementById("sideMenuContainer");

//side menu close button 
var sideMenuClose = document.getElementById("sideMenuClose");
sideMenuClose.addEventListener("clock", ()=>{
      sideMenuContainer.style.display = "none";
});

sideMenuContainer.style.display = "none";

//adding event listener to side menu icon
sideMenuIcon.addEventListener("click", (e)=>{
      sideMenuContainer.style.display = "flex";
});