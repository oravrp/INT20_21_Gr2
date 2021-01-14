//content adder start

const menu = [{
        id: "1",
        img: "/img/StaffPhoto.png",
        text: "<abbr title='Chief Executive Officer'>CEO</abbr>",
        header: "Ora Vrapcani",
        contact: "twitteracc",
    },
    {
        id: "2",
        img: "/img/StaffPhoto.png",
        text: "<abbr title='Chief Technology Officer'>CTO</abbr>",
        header: "Loreta Pajaziti",
        contact: "twitteracc",
    },
    {
        id: "2",
        img: "/img/StaffPhoto.png",
        text: "<abbr title='Chief Technology Officer'>CTO</abbr>",
        header: "Lind Krasniqi",
        contact: "twitteracc",
    },
    {
        id: "2",
        img: "/img/StaffPhoto.png",
        text: "<abbr title='Chief Technology Officer'>CTO</abbr>",
        header: "Lum Dukaj",
        contact: "twitteracc",
    },
    {
        id: "3",
        img: "/img/StaffPhoto.png",
        text: "<abbr title='Chief Operating Officer'>COO</abbr>",
        header: "Florian Halimi",
        contact: "twitteracc",
    },
    {
        id: "3",
        img: "/img/StaffPhoto.png",
        text: "<abbr title='Chief Operating Officer'>COO</abbr>",
        header: "Flamur Mustafa",
        contact: "twitteracc",
    },

];

const gallery = document.querySelector(".gallery");

window.addEventListener("DOMContentLoaded", function() {
    displayMenuItems(menu);
});

function displayMenuItems(item) {
    let displayMenu = item.map(function(menuItem) {

        return `<div class="content content${menuItem.id}" >
    <img src="./${menuItem.img}" alt="Staff image" >
    <h1>${menuItem.header}</h1>
    <p>${menuItem.text}</p>
    <a href="https://twitter.com/?lang=en" target="_blank">${menuItem.contact}</a>
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



function changeFunc(c) {
    x = document.querySelector('.gallery');
    content1 = document.querySelectorAll('.content1');
    content2 = document.querySelectorAll('.content2');
    content3 = document.querySelectorAll('.content3');
    console.log(content3);
    if (c == 0) {
        for (var i = 0; i < content1.length; i++) {
            content1[i].style.display = "inline";
        }
        for (var i = 0; i < content2.length; i++) {
            content2[i].style.display = "inline";
        }
        for (var i = 0; i < content3.length; i++) {
            content3[i].style.display = "inline";
        }
    } else if (c == 1) {
        for (var i = 0; i < content1.length; i++) {
            content1[i].style.display = "inline";
        }
        for (var i = 0; i < content2.length; i++) {
            content2[i].style.display = "none";
        }
        for (var i = 0; i < content3.length; i++) {
            content3[i].style.display = "none";
        }
    } else if (c == 2) {
        for (var i = 0; i < content2.length; i++) {
            content2[i].style.display = "inline";
        }
        for (var i = 0; i < content1.length; i++) {
            content1[i].style.display = "none";
        }

        for (var i = 0; i < content3.length; i++) {
            content3[i].style.display = "none";
        }

    } else if (c == 3) {
        for (var i = 0; i < content3.length; i++)
            content3[i].style.display = "inline"
        for (var i = 0; i < content1.length; i++) {
            content1[i].style.display = "none";
        }
        for (var i = 0; i < content2.length; i++) {
            content2[i].style.display = "none";
        }

    }
}

if ('serviceWorker' in navigator) {
    console.log('online');
    window.addEventListener('load', () => {
        navigator.serviceWorker
            .register('../sw.js')
            .then(reg => console.log('serviceworker registered'))
            .catch(err => console.log(`service worker errorr ${err}`))
    })
}