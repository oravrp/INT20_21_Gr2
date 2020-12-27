    
	// ---------- Validating form --------------- 

    var emri = document.getElementById('name');
  	var mbiemri = document.getElementById('lastName');
  	var Subject = document.getElementById('Subject');
	var txtArea = document.getElementById('textarea');
	var radio = document.getElementById('radio');
	  
  	var form = document.getElementById('form');

  	var emriErr = document.getElementById('nameErr');
  	var mbiemriErr = document.getElementById('lastNameErr');
  	var subjErr = document.getElementById('subjErr');
	var MessErr = document.getElementById('MessErr');
	var radioErr = document .getElementById('radioErr');

  	form.addEventListener('submit', (e) =>{
  		let messages = []
  		if (emri.value === '' || emri == null){
  			emriErr.style.visibility = "visible";
  			messages.push("This field is required");
		}
		else if (emri.value.length >0 && isNaN(emri.value)){
			emriErr.style.visibility = "hidden";
		} 
  		 else if (!isNaN(emri.value)) {
              emriErr.innerText = "You can not put numbers in this field";
              emriErr.style.color = "red";
              emriErr.style.visibility = "visible";
              messages.push("This field is required");
          }
  		if (mbiemri.value === '' || mbiemri.value == null) {
  			mbiemriErr.style.visibility = "visible";
  			messages.push("This filed is required");
		}
		else if (mbiemri.value.length > 0 && isNaN(mbiemri.value)) {
			mbiemriErr.style.visibility = "hidden";
		}  
  		 else if (!isNaN(mbiemri.value)) {
              lastNameErr.innerText = "You can not put numbers in this field";
              lastNameErr.style.color = "red";
              lastNameErr.style.visibility = "visible";
              messages.push("This field is required");
          }
  		if (Subject.value === '' || Subject.value == null) {
  			subjErr.style.visibility = "visible";
  			messages.push("This field is required");
		}
		else if (Subject.value.length>0) {
			subjErr.style.visibility = "hidden";
		}
		  
  		if (txtArea.value === '' || txtArea.value==null){
  			MessErr.style.visibility = "visible";
  			messages.push("This field is required");
		 }
		else if (txtArea.value.length > 20 ) {
			MessErr.style.visibility = "hidden";
		}  
  		else if (txtArea.value.length < 20) {
  			MessErr.innerText = "Your text should contain at least 20 characters";
  			MessErr.style.color = "red";
  			MessErr.style.visibility = "visible";
  			messages.push("This field is required");

		  }
		  if (radio.checked == false) {
		   radioErr.style.visibility = "visible";
		   messages.push("You nedd to agree to our terms");
		  }
		  else {
			radioErr.style.visibility="hidden";
		  }
  		  if(messages.length > 0 ){
  		  e.preventDefault();
		  }
		  if (messages.length == 0 ) {
			 alert("Thank you for your message, we try to be better every day !");
		  } 
	  })

	  //-------------Revealing Div with class container on scroll---------------

	  const container = document.querySelector('.container');
	  observer = new IntersectionObserver ((entries)=> {
      console.log(entries);
      if (entries[0].intersectionRatio > 0) {
        entries[0].target.style.animation = 'anim1 2s forwards ease-out';
      }
      else {
        entries[0].target.style.animation = "none";
     }
     })
     observer.observe(container);