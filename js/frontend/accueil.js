/*  ---------RETOURNEMENT ACTUALITES---------   */
const actualitesItem = document.body.querySelectorAll(".actualites_item");

actualitesItem.forEach( item => {
    item.addEventListener("click", function(){
        item.classList.toggle("active");
    })
})



/*  --------------DEPLOIEMENT HAMBURGER MENU----------- */
const hamburger = document.body.querySelector("#hamburger");
const hamburgerMenu = document.body.querySelector("#hamburger_menu");

function moveMenu(){
    hamburger.classList.toggle('cross');
    hamburgerMenu.classList.toggle('deployed');
}

hamburger.addEventListener("click", moveMenu);


