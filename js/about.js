
// Slider
var divElements = document.getElementsByClassName('slider-content');

var index = 0;

document.getElementById('next').addEventListener('click', function(event) {

    divElements[index].classList.remove('active')
    divElements[index].classList.add('not-active')

    index++;
    if (index == divElements.length) index = 0;

    divElements[index].classList.add('active')
    divElements[index].classList.remove('not-active')

})

document.getElementById('prev').addEventListener('click', function(event) {

    divElements[index].classList.remove('active');
    divElements[index].classList.add('not-active');

    index--;
    if (index == -1) index = divElements.length - 1;

    divElements[index].classList.add('active');
    divElements[index].classList.remove('not-active');
})

// Slider-end


