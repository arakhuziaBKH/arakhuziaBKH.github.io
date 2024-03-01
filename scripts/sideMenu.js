//seclecting side menu icon
var sideMenuIcon = document.getElementById("sideMenuIcon");
 console.log(sideMenuIcon);
//selecting side menu div
var sideMenuContainer = document.getElementById("sideMenu");
console.log(sideMenuContainer);

sideMenuContainer.style.display = "none";

//adding event listener to side menu icon
sideMenuIcon.addEventListener("click", (e)=>{
      sideMenuContainer.style.display = "flex";
});