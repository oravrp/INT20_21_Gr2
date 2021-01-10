//content adder start
const menu = [{
        id: "1",
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Ora Vrapcani",
        contact: "twitteracc",
    },
    {
        id: "2",
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Loreta Pajaziti",
        contact: "twitteracc",
    },
    {
        id: "2",
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Lind Krasniqi",
        contact: "twitteracc",
    },
    {
        id: "2",
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Lum Dukaj",
        contact: "twitteracc",
    },
    {
        id: "3",
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Florian Halimi",
        contact: "twitteracc",
    },
    {
        id: "3",
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
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


function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("content");
    if (c == "all") c = "";
    console(x);
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

// Show filtered elements
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}


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