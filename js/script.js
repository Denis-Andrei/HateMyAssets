

$(window).on('load',  () => {

    if($(window).height() < 500){
        $('.header').css({'height': '50rem'});
    }else{
        $('.header').css({'height': '90vh'});
    }

    if($(document).scrollTop() > 10){
        $('.navigation').addClass('navigation-onScroll');
    }
})

$(document).on('scroll', () => { 
    ($(document).scrollTop() > 10) 
    ? 
    $('.navigation').addClass('navigation-onScroll') 
    : 
    $('.navigation').removeClass('navigation-onScroll')
    
})

////////////////////////////////////////////////////
//HAMBURGER MENU
const $hamburger = $('.navigation__hamburger');
const $navList = $('.navigation__list');
const $navLink = $('.navigation__item');

$hamburger.on('click', () =>{
    $navList.toggleClass('navigation__list-open'); 
    $('.navigation__hamburger-icon').toggleClass('navigation__hamburger-icon-close')
})


////////////////////////////////////////////////////
//COLLAPSIBLE BTN
var collapsible = document.getElementsByClassName("collapsible-menu__btn");
var i;

for (i = 0; i < collapsible.length; i++) {
  collapsible[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}


    