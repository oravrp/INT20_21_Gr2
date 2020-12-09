
 window.addEventListener("scroll", function () {
             var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
})

/* A function to change the header-nav styling  while scrolling */