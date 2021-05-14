
/* A function to change the header-nav styling  while scrolling */
 window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
});

/* Javascript Code for the about-section to show image on zoom */

var modal = document.getElementById('show');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('foto');
var Img = document.getElementById("photo");
var capText = document.getElementById("figcaption");
img.onclick = function(){
  modal.style.display = "block";
  Img.src = this.src;
  capText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
  modal.style.display = "none";
}

/* Javascript code for the slider in the bg-color section*/
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
  var slides = document.getElementsByClassName("mySlides");
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
