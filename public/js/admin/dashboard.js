
let menuBtn = document.getElementById("menu-btn");
let sidebar = document.querySelector(".sidebar");

menuBtn.addEventListener("click", function(){

    sidebar.classList.toggle("show");

});


// Active Menu

let menu = document.querySelectorAll(".sidebar ul li");

menu.forEach(item => {

    item.addEventListener("click", function(){

        menu.forEach(nav => {

            nav.classList.remove("active");

        });

        this.classList.add("active");

    });

});