function togglePopup() {
    document.getElementById("popup-1")
    .classList.toggle("active");
}   
function togglePopup2() {
    document.getElementById("popup-2")
    .classList.toggle("active");
}   
function togglePopup3() {
    document.getElementById("popup-3")
    .classList.toggle("active");
}   
function stickyMenu(){
    var sticky = document.getElementById('Sticky');
   if(window.pageYOffset>220){
}
else{
    sticky.classList.remove(sticky)
}
}
window.onscroll=function(){
stickyMenu();
}