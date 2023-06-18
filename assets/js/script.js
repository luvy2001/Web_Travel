
const preloader = document.querySelector("[data-preloader]");

window.addEventListener("load", () => {
    preloader.classList.add("remove");
})



/**
 * add event on multiple elements
 */

const addEventOnElements = function(elements, eventType, callback) {
    for(let i=0, len = elements.length; i<len; i++) {
        elements[i].addEventListener(eventType, callback);
    }
}



/**
 * Navbar toggler for mobile
 */

const navbar =document.querySelector("[data-navbar]");
const navTogglers=document.querySelectorAll("[data-nav-toggler]");
const overlay=document.querySelector("[data-overlay]");

const toogleNav = function() {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toogleNav);



/**
 * Header
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function() {

    header.classList[ window.scrollY > 100 ? "add" : "remove"]("active");

});

/**
 * View Destination button
 */
let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.container .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 3;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}

