/*  ---------RETOURNEMENT ACTUALITES---------   */
const actualitesItem = document.body.querySelectorAll(".actualites_item");

actualitesItem.forEach(function(item){
    item.addEventListener("click", function(){
        item.classList.toggle("active");
    })
})

