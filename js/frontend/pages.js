/*  ----------OUVERTURE FERMETURE SUBMENU----------     */
const subMenu = document.body.querySelector("#submenu");
const hamburger = document.body.querySelector("#hamburger");
const cross = document.body.querySelector("#cross");
const firstLine = hamburger.querySelector(".line:first-child");
const middleLine = hamburger.querySelector(".line:nth-child(2)");
const lastLine = hamburger.querySelector(".line:last-child");






function openSubMenu(){
    hamburger.classList.toggle("cross");
    subMenu.classList.toggle("visible");
}



hamburger.addEventListener("click", openSubMenu);


/*  ----------FONCTIONNEMENT SUBMENU-------------     */
const subMenuItems = document.body.querySelectorAll(".internal_link");
const articles = document.body.querySelectorAll('.article');

subMenuItems.forEach(function(item){
    item.addEventListener("click", function(e){
        const id = item.dataset.articleId;
        const article = document.body.querySelector("#" + id);
        const visible = document.body.querySelector(".visible_article");
        visible.classList.remove("visible_article");
        article.classList.toggle("visible_article");
        openSubMenu();
    })
});


/*  --------FONCTIONNEMENT GOOGLE MAP-----------     */
const mapDiv = document.body.querySelector('#google-map-div');
const mapGoogle = document.body.querySelector("#google-map");
const mapLink = document.body.querySelector("#map-link");

function openMap(){
    mapDiv.classList.replace("map-close", "map-open");
}

function closeMap(){
    mapDiv.classList.replace("map-open", "map-close");
}

mapLink.addEventListener("click", openMap);
mapDiv.addEventListener("click", closeMap);