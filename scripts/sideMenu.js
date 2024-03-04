(function (){
  var sideMenuIcon,sideMenuContainer,sideMenuClose;

sideMenuIcon = document.getElementById("sideMenuIcon");
sideMenuContainer = document.getElementById("sideMenuContainer");
sideMenuClose = document.getElementById("sideMenuClose");

sideMenuContainer.style.display = "none";
sideMenuContainer.style.width = "0";

sideMenuIcon.addEventListener("click", (e) =>{
  e.preventDefault();
  if(sideMenuContainer.style.display == "none"){
    sideMenuContainer.style.display = "flex";
    sideMenuContainer.style.width = "100dvw";
  }else{
    sideMenuContainer.style.display = "none"
    sideMenuContainer.style.width = "0"
  }
});

sideMenuClose.addEventListener("click", (e) => {
  e.preventDefault();
  if (sideMenuContainer.style.display == "flex") {
    sideMenuContainer.style.display = "none";
    sideMenuContainer.style.width = "0";
  }
});

})();