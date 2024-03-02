var sideMenuIcon,sideMenuContainer,sideMenuClose;

sideMenuIcon = document.getElementById("sideMenuIcon");
sideMenuContainer = document.getElementById("sideMenuContainer");
sideMenuClose = document.getElementById("sideMenuClose");

sideMenuContainer.style.display = "none";

sideMenuIcon.addEventListener("click", (e) =>{
  if(sideMenuContainer.style.display == "none"){
    sideMenuContainer.style.display = "flex";
  }else{
    sideMenuContainer.style.display = "none"
  }
});

sideMenuClose.addEventListener("click", (e) => {
  if (sideMenuContainer.style.display == "flex") {
    sideMenuContainer.style.display = "none";
  }
});