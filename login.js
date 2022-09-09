//Javascript for login card
var card = document.getElementById("card");
        function openRegister() {
            card.style.transform = "rotateY(-180deg)";
        }

        function openLogin() {
            card.style.transform = "rotateY(0deg)";
        }

//Javascript for navigation bar effect on scroll
window.addEventListener("scroll", function(){
    var header = this.document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

//Javascript for responsive navigation sidebar menu
var menu = document.querySelector(".menu");
var menuBtn = document.querySelector(".menu-btn");
var closeBtn = document.querySelector(".close-btn");

menuBtn.addEventListener("click", () => {
    menu.classList.add("active");
});

closeBtn.addEventListener("click", () => {
    menu.classList.remove("active");
});

//Javascript for navigation bar effect on scroll
window.addEventListener("scroll", function(){
    var header = this.document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});
