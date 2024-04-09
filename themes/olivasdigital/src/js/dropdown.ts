addEventListener("DOMContentLoaded", () => {
  const buttonDropdown: HTMLElement =
    document.querySelector<HTMLElement>(".menuToggle");
  const menuItem: HTMLElement =
    document.querySelector<HTMLElement>(".menuItem");

  buttonDropdown.addEventListener("click", () => {
    if (menuItem.getAttribute("style") == "display:flex") {
      menuItem.setAttribute("style", "display:none");
    } else {
      menuItem.setAttribute("style", "display:flex");
    }
  });
});
