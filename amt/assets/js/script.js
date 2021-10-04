const buttons = document.querySelector(".box-switch");
const elements = document.querySelector(".theme");
const activeClass = "dark";
window.addEventListener("load", (event) => {
localStorage.getItem("theme") && elements.classList.add(activeClass);
});
buttons.addEventListener("click", (event) => {
elements.classList.toggle(activeClass);
localStorage.getItem("theme")
? localStorage.removeItem("theme", activeClass)
: localStorage.setItem("theme", activeClass);
});
if (window.screen.width >= 1500) {
jQuery(document).ready(function($){  
$('li.menu-item-has-children').hover(
function () {
$('ul.sub-menu', this).stop().slideDown(400);
}, 
function () {
$('ul.sub-menu', this).stop().slideUp(400);            
}
);
});
}
if (window.screen.width <= 1499) {
jQuery(document).ready(function () {
jQuery('.uk-navbar > ul > li.menu-item-has-children > a').click(function () {
jQuery('.uk-navbar > ul > li.menu-item-has-children  ul').slideUp();
if (jQuery(this).next().is(":visible")) {
jQuery(this).next().slideUp();
} else {
jQuery(this).next().slideToggle();
}
return false;
});
});
}
jQuery(function() {
jQuery('.uk-navbar > ul > li.menu-item-has-children > a').on('click', function() {
return false;
});
});
$(window).scroll(function(){
if ($(this).scrollTop() > 110) {
$('.menu').addClass('banner');
} else {
$('.menu').removeClass('banner');
}
});
var wrapperMenu = document.querySelector('.wrapper-menu');
wrapperMenu.addEventListener('click', function(){
wrapperMenu.classList.toggle('open');  
});
$(function($){
$(".site-print").click(function(){
window.print();
return false;
});
});
var clipboard = new ClipboardJS('.btnClip');
var clipboard = new ClipboardJS('.btnClips');
