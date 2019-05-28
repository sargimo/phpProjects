window.onload=function(){
    var burger = document.querySelector('.burger');
var nav = document.querySelector('#' + burger.dataset.target);
var header = document.querySelector('.headroom');
var menu = document.querySelector('#menu-primary')
// var carousels;

//Bulma responsive Nav
burger.addEventListener('click', function (){
  burger.classList.toggle('is-active');
  menu.classList.toggle('isResponsive');
  nav.classList.toggle('is-active');
});

//Headroom
var headroom = new Headroom(header, {
 offset: 105,
 tolerance: 5,
 classes: {
   initial: "animated",
   pinned: "slideInDown", //custom style slideDown
   unpinned: "slideOutUp" //custome style slideUp
 }
});
headroom.init();

var options = {duration: 2500};
ScrollReveal().reveal('.vine-hr', options);
ScrollReveal().reveal('.vine-vertical', options);


//bulma-carousel
// carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances


}
