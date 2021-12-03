// JavaScript Document




/*Ẩn hiện mật khẩu*/
var passField = document.getElementById('password');
var showBtn = document.getElementById('eye');
showBtn.onclick = (()=>{
	if (passField.type === "password"){
		passField.type = "text";
		showBtn.classList.add("hide-btn");
	}else{
		passField.type = "password";
		showBtn.classList.remove("hide-btn");
	}
});

/*Thông báo đang bật capslock*/
var inputPass = document.getElementById("password");
var warningCaps = document.getElementById("warningCaps");
inputPass.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    warningCaps.style.display = "block";
  } else {
    warningCaps.style.display = "none"
  }
});

/*Click vào màn hình để tắt modal*/
var modal = document.getElementById('search-box');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

/*Accordion*/
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}


/*Slides ảnh*/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide-show");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
/*-------*/
var slideSv = 1;
showSlidesSv(slideSv);

function plusSlidesSv(n) {
  showSlidesSv(slideSv += n);
}

function showSlidesSv(n) {
  var i;
  var slides = document.getElementsByClassName("slideSv-show");
  if (n > slides.length) {slideSv = 1}    
  if (n < 1) {slideSv = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideSv-1].style.display = "block";
}

/*Tabs*/
function Tabs(evt, tab) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tab).style.display = "block";
  evt.currentTarget.className += " active";
}


   

