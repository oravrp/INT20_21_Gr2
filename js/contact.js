    

    var emri = document.getElementById('name');
  	var mbiemri = document.getElementById('lastName');
  	var Subject = document.getElementById('Subject');
  	var txtArea = document.getElementById('textarea');
  	var form = document.getElementById('form');

  	var emriErr = document.getElementById('nameErr');
  	var mbiemriErr = document.getElementById('lastNameErr');
  	var subjErr = document.getElementById('subjErr');
  	var MessErr = document.getElementById('MessErr');

  	form.addEventListener('submit', (e) =>{
  		let messages = []
  		if (emri.value === '' || emri == null){
  			emriErr.style.visibility = "visible";
  			messages.push("This field is required");
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
  		if (txtArea.value === '' || txtArea.value==null){
  			MessErr.style.visibility = "visible";
  			messages.push("This field is required");
  		}
  		else if (txtArea.value.length < 20) {
  			MessErr.innerText = "Your text should contain at least 20 characters";
  			MessErr.style.color = "red";
  			MessErr.style.visibility = "visible";
  			messages.push("This field is required");

  		}
  		if(messages.length > 0 ){
  		
  		e.preventDefault();
  		}

  	})