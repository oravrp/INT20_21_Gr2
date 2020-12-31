//content adder start
const menu = [{
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Ora Vrapcani",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Loreta Pajaziti",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Lind Krasniqi",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Lum Dukaj",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Florian Halimi",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Flamur Mu$tafa",
    },

];

const gallery = document.querySelector(".gallery");

window.addEventListener("DOMContentLoaded", function() {
    displayMenuItems(menu);
});

function displayMenuItems(item) {
    let displayMenu = item.map(function(menuItem) {

        return `<div class="content">
    <img src="./${menuItem.img}" alt="" >
    <h1>${menuItem.header}</h1>
    <p>${menuItem.text}</p>
</div>`;

    });

    displayMenu = displayMenu.join("");

    gallery.innerHTML = displayMenu;
}
//content adder end

// Meet the team effect start
const text = document.querySelector('.hed1');
const stringText = text.textContent;
const splitText = stringText.split("");
text.textContent = "";

for (let i = 0; i < splitText.length; i++) {
    text.innerHTML += "<span>" + splitText[i] + "</span>"
}

let char = 0;
let timer = setInterval(onTick, 50);

function onTick() {
    const span = text.querySelectorAll('span')[char];
    span.classList.add('fade');
    char++
    if (char === splitText.length) {
        complete();
        return;
    }
}

function complete() {
    clearInterval(timer);
    timer = null;
}
// Meet the team effect end