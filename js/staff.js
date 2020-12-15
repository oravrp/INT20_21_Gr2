//content adder start
const menu = [{
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Emri Mbiemri",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Emri Mbiemri",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Emri Mbiemri",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Emri Mbiemri",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Emri Mbiemri",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Emri Mbiemri",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Emri Mbiemri",
    },
    {
        img: "/img/StaffPhoto.png",
        text: "Lorem ipsum dolor sit amet.",
        header: "Emri Mbiemri",
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