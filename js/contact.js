    
	// ---------- Validating form --------------- 

    var emri = document.getElementById('name');
  	var mail = document.getElementById('email');
  	var Subject = document.getElementById('Subject');
	var txtArea = document.getElementById('textarea');
	var radio = document.getElementById('radio');
	  
  	var form = document.getElementById('form');

  	var emriErr = document.getElementById('nameErr');
  	var mailErr = document.getElementById('mailErr');
  	var subjErr = document.getElementById('subjErr');
	var MessErr = document.getElementById('MessErr');
	var radioErr = document .getElementById('radioErr');

  	form.addEventListener('submit', (e) =>{
  		let messages = []
  		if (emri.value === '' || emri.value == null){
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
  		if (mail.value === '' || mail.value == null) {
  			mailErr.style.visibility = "visible";
  			messages.push("This filed is required");
		}
		else if (mail.value.length > 0 ) {
			mailErr.style.visibility = "hidden";
		}  
  		 else if (!ValidateEmail(mail.value)) {
              mailErr.innerText = "This email is invalid";
              mailErr.style.color = "red";
              mailErr.style.visibility = "visible";
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
	 
	 //---------------Geo Location --------------------------------------
	 var map, infoWindow;
		function initMap() {
 	 map = new google.maps.Map(document.getElementById('map'), {
 	   center: {lat: -34.397, lng: 150.644},
    zoom: 6
  });
  infoWindow = new google.maps.InfoWindow;

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
      infoWindow.open(map);
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
}
function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}