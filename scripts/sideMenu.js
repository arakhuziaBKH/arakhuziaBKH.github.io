(function () {
  const sideMenuIcon = document.getElementById("sideMenuIcon");
  const sideMenuClose = document.getElementById("sideMenuClose");
  const body = document.body;

  sideMenuIcon.addEventListener("click", (e) => {
    e.preventDefault();
    body.classList.add("side-menu-open");
  });

  sideMenuClose.addEventListener("click", (e) => {
    e.preventDefault();
    body.classList.remove("side-menu-open");
  });
})();