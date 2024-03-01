//seclecting side menu icon
var sideMenuIcon = document.getElementsByClassName("sideMenuIcon");

//selecting side menu div
var sideMenuContainer = document.getElementById("sideMenu");

sideMenuContainer.style.display = "none";

//adding event listener to side menu icon
sideMenuIcon.addEventListener("click", (e)=>{
      sideMenuContainer.style.display = "flex";
});