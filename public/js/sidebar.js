let arrow = document.querySelectorAll(".arrow");
let arrowSub = document.querySelectorAll(".arrow-sub");
for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
    });
}
for (var i = 0; i < arrowSub.length; i++) {
    arrowSub[i].addEventListener("click", (e) => {
        let arrowParentSub = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParentSub.classList.toggle("showMenu-sub");
    });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});