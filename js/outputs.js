/* A function to change the header-nav styling  while scrolling */
window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
 header.classList.toggle("sticky", window.scrollY > 0);
});

//Ordered lists animation on scroll
const container = document.querySelector('.lists');
observer = new IntersectionObserver ((entries)=> {
console.log(entries);
if (entries[0].intersectionRatio > 0) {
  entries[0].target.style.animation = 'anim2 2s forwards ease-out';
}
else {
  entries[0].target.style.animation = "none";
}
})
observer.observe(container);

//---------------------------------------------------//

//eyeballs following mousemove function
let eyeballs = document.querySelectorAll(".eye");
document.onmousemove = function () {
   let x = (event.clientX * 100) / window.innerWidth - 50 + "%";
   let y = (event.clientY * 100) / window.innerHeight - 50 + "%";

   for (let i = 0; i < eyeballs.length; i++) {
       eyeballs[i] .style.transform = "translate(" + x + "," + y + ")";
   }
}
document.getElementById("span1").innerHTML = Math.pow(44,2);
document.getElementById("span2").innerHTML = Math.sqrt(40000);
document.getElementById("span3").innerHTML = Math.floor(4.7);