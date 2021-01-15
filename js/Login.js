//js code to style the main container
const signUpButton = document.getElementById('signUp');
const logInButton = document.getElementById('logIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => container.classList.add('right-panel-active'));
logInButton.addEventListener('click', () => container.classList.remove('right-panel-active'));  

//login and signup validation code
function CheckPassword(n) {
    const inputem = document.getElementById('email');
    const em = document.getElementById('msg');
    try {
        if (inputem.value == '') {
            inputem.style.borderBottom = '3px solid #F35F5F'
            throw "Input empty"
        }
    }
    catch (err) { msg.innerHTML = err }
    var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    switch (n) {
        case 1:
            const inputtxt = document.getElementById('psw');
            if (inputtxt.value.match(decimal)) {
                return true;
            }
            else {
                document.getElementById('warn').innerHTML = 'Password must contain at least 8 characters,one uppercase letter one digit and one special character';
                inputtxt.style.borderBottom = '3px solid #F35F5F'
                return false;
            }
            break;
        case 2:
            const inputtxt1 = document.getElementById('psw2');
            if (inputtxt1.value.match(decimal)) {
                return true;
            }
            else {
                document.getElementById('warn2').innerHTML = 'Password must contain at least 8 characters,one uppercase letter one digit and one special character';
                inputtxt.style.borderBottom = '3px solid #F35F5F'
                return false;
            }
            break;
    }
}

//js function to replace some part of text (using RegExp Mod. i)
function replace() {
    var str = document.getElementById("some").innerHTML;
    var txt = str.replace(/hello/i, "Hi");
    document.getElementById("some").innerHTML = txt;
}
//js function using RegExp Modifier g
function globalSearch() {
    var str = document.getElementById('search').innerHTML;
    var pattern = /e/g;
    var result = str.match(pattern);
    document.getElementById("search").innerHTML = result;
}
//js function to change body background-color based on current time 
function color() {
    var time = new Date();
    var h = time.getHours();
    sessionStorage.setItem(time, h);
    const el = document.body;
    if (sessionStorage.getItem(time) > 0 && sessionStorage.getItem(time) < 12) {
        el.style.backgroundColor = '#f6f4f7'
    }
    else if (sessionStorage.getItem(time) > 17 && sessionStorage.getItem(time) < 23) {
        el.style.backgroundColor = '#eee'
    }
    else {
        el.style.backgroundColor = 'white'

    }
}
color()

function time() {
    var koha = new Date()
    document.getElementById('time').innerHTML = koha
}
time()
function vlera() {
    var max = Math.max(2, 7, 21, 9, 5);
    document.getElementById('max1').innerHTML = max.toExponential(3).toString() + " " + isNaN(max);
}
/* A function to change the header-nav styling  while scrolling */
window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
   header.classList.toggle("sticky", window.scrollY > 0);
});
