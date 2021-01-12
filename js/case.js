//js code for the canvas element-per text
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.fillText("Lorem Ipsum", 10, 50);

const fill = document.querySelector('.fill');
const empties = document.querySelectorAll('.empty');

// Fill listeners
fill.addEventListener('dragstart', dragStart);
fill.addEventListener('dragend', dragEnd);

// Loop through empty boxes and add listeners
for (const empty of empties) {
    empty.addEventListener('dragover', dragOver);
    empty.addEventListener('dragenter', dragEnter);
    empty.addEventListener('dragleave', dragLeave);
    empty.addEventListener('drop', dragDrop);
}

// Drag Functions

function dragStart() {
    this.className += ' hold';
    setTimeout(() => (this.className = 'invisible'), 0);
}

function dragEnd() {
    this.className = 'fill';
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter(e) {
    e.preventDefault();
    this.className += ' hovered';
}

function dragLeave() {
    this.className = 'empty';
}

function dragDrop() {
    this.className = 'empty';
    this.append(fill);
}

//Perdorimi i metodave Exec() and Test() tek RegEx
function kliko() {
    var str = document.getElementById('check').innerHTML;
    var patt = new RegExp("Effect");
    //var res = patt.test(str);
    var res = patt.exec(str);
    document.getElementById("check").innerHTML = res;
}

newRe = new RegExp('Drag')
str1 = document.getElementById('check').innerHTML;
// Check whether regular expression exists in the string.
if (newRe.test(str1)) {
    alert("'Drag' is found in " + str1);
}