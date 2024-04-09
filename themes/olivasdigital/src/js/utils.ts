addEventListener("DOMContentLoaded", () => {
    OD_dropdown() /* button responsive menu */
    OD_redirect_categoria() /* button ccategory card */
});

function OD_dropdown() {
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
}

function OD_redirect_categoria(){
    if(document.querySelectorAll('.OD-tax').length !== 0){
        const ODtax: NodeListOf<HTMLDivElement> = document.querySelectorAll(".OD-tax");
        ODtax.forEach((element) => {
            element.addEventListener('click' ,(e) => {
                e.preventDefault();
                const slug:string = element.getAttribute('slug')
                const homeUrl:string = element.getAttribute('home_url')
                window.open(homeUrl + '/projects?categoria=' + slug )
                return;
            })
        })

        }
}
