
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


// ---------- Validating form --------------- 

var emri = document.getElementById('name');
var mail = document.getElementById('email');
var txtArea = document.getElementById('inputAdd');

var form = document.getElementById('form');

var emriErr = document.getElementById('nameErr');
var mailErr = document.getElementById('mailErr');
var MessErr = document.getElementById('MessErr');

form.addEventListener('submit', (e) =>{
    let messages = []
    if (emri.value === '' || emri.value == null){
        emriErr.style.visibility = "visible";
        emri.style.border = "1px solid red";
      messages.push("This field is required");
        
  }
  else if (emri.value.length >0 && isNaN(emri.value)){
      emriErr.style.visibility = "hidden";
      emri.style.border = "1px solid green";
  } 
    else if (!isNaN(emri.value)) {
        emriErr.innerText = "You can not put numbers in this field";
        emriErr.style.color = "red";
        emriErr.style.visibility = "visible";
        emri.style.border = "1px solid red";
        messages.push("This field is required");
    }
    if (mail.value === '' || mail.value == null) {
        mailErr.style.visibility = "visible";
        mail.style.border = "1px solid red";
        messages.push("This filed is required");
  }
  else if (mail.value.length > 0 ) {
      mailErr.style.visibility = "hidden";
      mail.style.border = "1px solid green";
  }  
     else if (!ValidateEmail(mail.value)) {
        mailErr.innerText = "This email is invalid";
        mailErr.style.color = "red";
        mailErr.style.visibility = "visible";
        mail.style.border = "1px solid green";
        messages.push("This field is required");
    }
    
    if (txtArea.value === '' || txtArea.value==null){
        MessErr.style.visibility = "visible";
        txtArea.style.border = "1px solid red";
        messages.push("This field is required");
   }
  else if (txtArea.value.length > 20 ) {
      MessErr.style.visibility = "hidden";
      txtArea.style.border = "1px solid green";
  }  
    else if (txtArea.value.length < 20) {
        MessErr.innerText = "Your text should contain at least 20 characters";
        MessErr.style.color = "red";
        MessErr.style.visibility = "visible";
        txtArea.style.border = "1px solid red";
        messages.push("This field is required");

    }

      if(messages.length > 0 ){
      e.preventDefault();
    }
    if (messages.length == 0 ) {
       alert("Thank you for giving us new ideas! We are getting better and better every day!");
    } 
})