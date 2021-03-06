<!DOCTYPE html>

<?php
if(isset($_POST["first_sub"]))
{
    setcookie("name",$_POST["name"], time() + 86400, "/", "", 0);
    setcookie("surname", $_POST["surname"], time() + 86400, "/", "", 0);
    setcookie("age", $_POST["age"], time() + 86400, "/", "", 0);
echo "Cookies Created !!";
}

if(isset($_POST["third_sub"]))
{
    setcookie("name","", time() - 86400, "/", "", 0);
    setcookie("surname", "", time() - 86400, "/", "", 0);
    setcookie("age", "", time() - 86400, "/", "", 0);
} 
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirSense</title>
    <meta name="description" content="AirSense is a website...">
    <meta name="keywords" content="air,anti-pollution,sensor">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        header {
            background-color: #4995A3;
        }
    </style>
</head>

<body>
    <header class="sticky">
        <a class="logo" href="home.html">
            <img src="img/logo_airsense.png" style="width: 190px; height: 70px; position: relative;" alt="logo">
        </a>
        <nav>
            <ul class="nav__links">
                <div class="dropdown">
                <li><a href="about.php">About</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="dropdown-content">
                        <a href="staff.html">Our Staff</a>
                    </div></li>
                </div>
                <div class="dropdown">
                    <li><a href="#">Outputs</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="dropdown-content">
                            <a href="outputs.php">Output 1</a>
                            <a href="pacman.html">Game</a>
                            <a href="multi_login/login.php">Login/SignUp</a>
                        </div>
                    </li>
                </div>
                <div class="dropdown">
                    <li><a href="#">Case Studies</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="dropdown-content">
                            <a href="case.html">Kosovo Case</a>
                            <a href="feedback.php">feedback</a>
                            <a href="flag.html">Svg</a>
                        </div>
                    </li>
                </div>
                <li><a href="newsnevents.html">News & Events</a></li>
            </ul>
        </nav>
        <a class="cta" href="contact.php">Contact</a>
        <p class="menu cta"><a href="home.html">Home</a></p>
    </header>


    <!-- Banner -->

<main class="content-holder">
    <div class="slider">
        <div class="slider-content active" style=" max-width: 100%; height:800px;
        background-image: url('img/windmill.jpg');
        background-position: 0%;">

             <h2 id="first-slide">ABOUT US</h2>

        </div>

        <div class="slider-content not-active" style=" max-width: 100%; height:800px;
        background-image: url('img/tulip.jpg');
        background-position: 0%; ">

          <h2 id= "second-slide">ABOUT US</h2>

        </div>

        <div class="slider-content not-active" style=" max-width: 100%; height:770px;
        background-image: url('img/vetriaki.jpg');
        background-position: 0%; ">

          <h2 id = "third-slide">ABOUT US</h2>

        </div>
        
    </div>
        
        <a id="prev">&#10094;</a>
        <a id="next">&#10095;</a>

    </div>
</main>

    <!-- /Banner-->


     <!-- Concepts-->

<div class="concepts">

    <div class="concepts-info">
        <h2>CONCEPTS</h2>
    </div>

    <div class = "concepts-description">
       <h3> Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        Placeat sunt perspiciatis facilis nulla nam ipsa unde magnam, accusantium quidem id numquam iste ducimus deserunt. 
        Odio pariatur voluptatum expedita aut aperiam. </h3>
    </div>

</div>

    <div class = "concepts-cards">
        <div class = "first_concept column" >
            <i class="fa fa-pencil" aria-hidden="true"></i>
                    <h2>First concept</h2>
                   
                    <h3> Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Placeat sunt perspiciatis facilis nulla nam ipsa unde magnam, accusantium quidem id numquam iste ducimus deserunt. 
                        Odio pariatur voluptatum expedita aut aperiam. </h3>
               
            </div>

        <div class = "second_concept column">
            <i class="fa fa-code" aria-hidden="true"></i>
                <h2>Second concept</h2>
                
                <?php
                $string = str_replace("Lorem" , "Lumus" , "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat sunt perspiciatis facilis nulla nam ipsa unde magnam, accusantium quidem id numquam iste ducimus deserunt. 
                Odio pariatur voluptatum expedita aut aperiam.");
                echo "<h3>". $string ."</h3>";
                ?>
         
        </div>

        <div class = "third_concept column">
            <i class="fa fa-search" aria-hidden="true"></i>
                <h2>Third concept</h2>
            
                <h3> Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Placeat sunt perspiciatis facilis nulla nam ipsa unde magnam, accusantium quidem id numquam iste ducimus deserunt. 
                    Odio pariatur voluptatum expedita aut aperiam. </h3>
          
        </div>   
    </div>

<!-- /Concepts-->


 <!-- Objectives-->

<div class= "objectives">

    <div class = "split-left">
        <div class = "centered">
            <h4>IDEAS</h4>
            <h2>OBJECTIVES</h2>

            <div class = "first_objective">
                <h5>February <span class = "data"> 20, 2021 </span></h5>
                <h3>FIRST OBJECTIVE</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nesciunt corporis velit?</p>
            </div>

            <div class = "second_objective">
                <h5>February <span class = "data">22, 2021</span> </h5>
                <h3>SECOND OBJECTIVE</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nesciunt corporis velit?</p>
            </div>

            <div class = "third_objective">
                <h5>February<span class = "data"> 25, 2021</span> </h5>
                <h3>THIRD OBJECTIVE</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nesciunt corporis velit?</p>
            </div>

        </div>
    </div>

    <div class = "split-right">
        <div class = "photo">
            <img src="img/logo_airsense.png" alt="Airsense Logo">
        </div>
    </div>

</div>
   
<!-- /Objectives-->

<!-- Featured Projects-->

<div class = "featured_projects">
   
    <h4>FEATURED</h4>
            <h2>PROJECTS</h2>

<div class = "gallery_row">
    <div class = "gallery_column " style="height: 402px;">
        <a target="_blank" href="img/17.jpg">
        <img src="img/17.jpg" alt="Bikes" width = "600px" height = "400px" >
    </a>
    </div>
    
    <div class = "gallery_column">
        <a target="_blank" href="img/19.jpg">
        <img src="img/19.jpg" alt="Architecture"  width = "600px" height = "192px" >
        </a>
        <a target="_blank" href="img/20.jpg" >
        <img src="img/20.jpg" alt="Birds" width = "600px" height = "192px"  >
        </a>
    </div>
      
</div>

<button type="button" class = "button"> <a href="case.html" style= "text-decoration: none; color:black;">FULL PROJECTS</a></button>

</div>

<!-- /Featured Projects-->



<!-- Partners-->

<div class= "partners">
    
    <div class = "left-split">
        <div class = "map">
            <p>Click the University logos!</p>
            <img src="img/eu_map.png" alt="Europe Map" style=" height: 600px; width:600px;" usemap="#workmap">
            <map name="workmap">
                <area shape="rect" coords="55,200,200,250" alt="Tyndall" href="https://www.tyndall.ie/" target="_blank" onclick="myFunction()">
                <area shape="rect" coords="420,35,530,135" alt="Linneuniversitetet" href="https://lnu.se/" target="_blank" onclick="myFunction()">
                <area shape="rect" coords="310,215,435,260" alt="Duisburg" href="https://www.uni-due.de/en/" target="_blank" onclick="myFunction()">
                <area shape="rect" coords="290,360,365,430" alt="TU Wien" href="https://www.tuwien.at/" target="_blank" onclick="myFunction()">
                <area shape="circle" coords="325,530,35" alt="UP" href="https://www.uni-pr.edu/"  target="_blank" onclick="myFunction()">
              </map>
              <script>
                function myFunction() {
                  alert("You clicked the University Logo. It will take you to the Official Webpage of the University!");
                }

                </script>


        </div>
    </div>
    
    <div class = "right-split">
        
            <div class = "top-text">
                <p id="text-one" style="width: 500px;">OUR</p>
                <p id= "text-two" style="width: 500px;">PARTNERS</p>
            </div>

                <div class = "first_partner">
                 
                    <p id="country">IRELAND<span class = "date"> since 2010 </span></p>
                    <p id="university">TYNDALL NATIONAL INSITUTE  <p> 
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nesciunt corporis velit?</p>
                    <audio controls style=" position: relative; left:15%;" title="Click here to listen to the national anthem of Ireland"> 
                        <source src="audio/Ireland.ogg.mp3" type="audio/ogg" >
                    </audio>
                </div>

                <div class = "second_partner">
                    <p id="country">SWEDEN<span class = "date"> since 2012</span> </p>
                    <p id="university">LINNEUNIVERSITETET</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nesciunt corporis velit?</p>
                    <audio controls style=" position: relative; left:15%;" title="Click here to listen to the national anthem of Sweden"> 
                        <source src="audio/Sweden.ogg.mp3" type="audio/ogg" >
                    </audio>
                </div>

                <div class = "third_partner">
                    <p id="country">GERMANY<span class = "date"> since 2008</span>
                        <p id="university">UNIVERSITÄT DUISBURG - ESSEN</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nesciunt corporis velit?</p>
                    <audio controls style=" position: relative; left:15%;" title="Click here to listen to the national anthem of Germany"> 
                        <source src="audio/Germany.ogg.mp3" type="audio/ogg" >
                    </audio>
                </div>

                <div class = "fourth_partner">
                    <p id="country">AUSTRIA<span class = "date"> since 2008</span> </p>
                    <p id="university">TU WIEN</p>
                    <p id = "last_para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nesciunt corporis velit?</p>
                    <audio controls style=" position: relative; left:15%; margin-bottom: 100px;" title="Click here to listen to the national anthem of Austria"> 
                        <source src="audio/Austria.ogg.mp3" type="audio/ogg" >
                    </audio>
                </div>

         </div>

</div>

<!-- /Partners-->

<!-- Video -->
<!-- Slideshow container -->
<div class="slideshow-container">

    <h2 id="meet" title="Double click on me!"><u>MEET OUR PARTNERS</u></h2>
 <script>
        $(document).ready(function(){
          $("#meet").dblclick(function(){
            alert("You have entered the 'Meet our Partners' section. Here you can watch videos in order to get to know our partners more. Slide through!");
          });
        });
        </script>
    <div class="mySlides fade" style="display: block; padding-top: 0px;">
      <video width="600" height="420" style=" margin-top:20px;"  controls>
        <source src="video/tyndall.mp4" type="video/mp4">
              Your browser does not support the video tag.
    </video>

      <div class="text" id="tyndall" title="Double click to learn more!">- TYNDALL NATIONAL INSITUTE -</div>

      <script>
        $(document).ready(function(){
        $("#tyndall").dblclick(function(){
            alert("Tyndall National Institute is a European research centre in integrated ICT hardware and systems and works with industry and academia to transform research into products. Core research areas include photonics and electronics.");
        });
        });
     </script>

    </div>
      
  
    <div class="mySlides fade" style="display: block; padding-top: 0px;">
     
      <video width="600" height="420" style=" margin-top:20px;"  controls>
        <source src="video/TU-wien.mp4" type="video/mp4">
              Your browser does not support the video tag.
    </video>

      <div class="text" id="tuwien" title="Double click to learn more!">- TU WIEN -</div>

      <script>
        $(document).ready(function(){
        $("#tuwien").dblclick(function(){
            alert("TU Wien is one of the major universities in Vienna, Austria. The university has received extensive international and domestic recognition in teaching as well as in research, and it is a highly esteemed partner of innovation-oriented enterprises.");
        });
        });
     </script>

    </div>
    
  
    <div class="mySlides fade" style="display: block; padding-top: 0px;">
      
      <video width="600" height="420" style=" margin-top:20px;"  controls>
        <source src="video/linnaeus.mp4" type="video/mp4">
               Your browser does not support the video tag.
    </video>

      <div class="text" id="linnaeus" title="Double click to learn more!">- LINNEUNIVERSITETET -</div>
      <script>
        $(document).ready(function(){
        $("#linnaeus").dblclick(function(){
            alert("Linnaeus University is a state university in the Småland region of Sweden. It has two campuses, one in Växjö and one in Kalmar. Linnaeus University was established in 2010 by a merger of former Växjö University and Kalmar University, and is named in honour of the Swedish botanist Carl Linnaeus.");
        });
        });
     </script>

    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>

  
<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

 
<!-- /Video   -->

<!-- Canvas Image-->

<!--
<div class = "canv-img" style="border-style: solid;
border-width: 0px 0px 30px 0px;
-moz-border-image: url(img/logo_airsense.png) 0 0 161 0 repeat repeat;
-webkit-border-image: url(img/logo_airsense.png) 0 0 161 0 repeat repeat;
-o-border-image: url(img/logo_airsense.png) 0 0 161 0 repeat repeat;
border-image: url(img/logo_airsense.png) 0 0 161 0 repeat repeat;">

    <h2>Images on Html Canvas!</h2>
    <canvas id='canvas' >
        Sorry, your browser does not support the canvas tag.
      </canvas>
    
      <script>
    
        var canvas = document.getElementById('canvas');

        canvas.width  = canvas.scrollWidth;
        canvas.height = canvas.scrollHeight;
    
        var ctx = canvas.getContext('2d');
    
        function drawRotatedImage(ctx, image, x, y, width, height, rotation){
    
          var halfWidth  = width  / 2;
          var halfHeight = height / 2;
    
          ctx.save();
          ctx.translate(x + halfWidth, y + halfHeight);
          ctx.rotate(rotation);
          ctx.drawImage(image, -halfWidth, -halfHeight, width, height);
          ctx.restore();
        }

        function draw(ctx, image){

          if (!image.complete){
            setTimeout(function(){
              draw(ctx, image);
            }, 50);
            return;
          }
          
          ctx.drawImage(image, 380, 40, 300, 160);
          drawRotatedImage(ctx, image, 20,  60, 300, 160, Math.PI / 4);
          drawRotatedImage(ctx, image,  380, 220, 300, 160, Math.PI);
          drawRotatedImage(ctx, image, 20, 260, 300, 160, -Math.PI / 4);
        
          
        }

        var image = new Image();
        image.src = 'img/logo_airsense.png';
        draw(ctx, image);
    
      </script>
    
</div> 
-->

<!-- /Canvas Image-->

<!-- Ideas -->
<script>
    $(document).ready(function() {
       var html = '<br><textarea type="text" id="inputAdd">'
       $(".AddMoreElements").click(function() {
           $(".addRemove").append(html);
       });
       $(".RemoveElement").click(function() {
           $("textarea:last").remove();
       });
       $(".GetValues").click(function () {
           let values = [];
           $("textarea").each(function(i, elem) {
               values.push($(elem).val());
           });
           alert("Values of elements are: " + values.join(', '));
       });
   });
</script>

<div class = "ideas">
<div class="addRemoveTxt">
    <h2>Use these inputs to give us ideas on what you want to see on this page in the future!</h2>
  </div>

  <form id = "form" action = "" method = "POST">
   <div class = "input-">
  <div class="input-name">
    <br>
    <input type="text" name=""  id="name" placeholder="Name">
    <small id="nameErr">This field is required</small>
    </div>

    <div class="input-email">
    <input type="email" name=""  id="email" placeholder="Email">
    <small id="mailErr">This field is required</small>
  
    </div>
  
</div> 

  <div class="addRemove">
      <textarea type="text" name="idea" id="inputAdd" placeholder="Write your ideas here..." style="background-color:white;"></textarea>
      <small id="MessErr"></small>
  </div>
  
  <div class="addRemoveButtons">
      <button class="AddMoreElements">Add More Elements </button>
      <button class= "RemoveElement"> Remove Elements  </button>
      <button class= "GetValues">Get Element Values</button>
      <input type="submit" name="submit" required="required" value="Submit" class="getValues">
      
  </div>

  <?php

        if (isset($_POST['submit'])){
            $message = $_POST['idea'];
            $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $message);
            fclose($myfile);
        }

?>


</div>
</form>
  <!-- /Ideas -->

  <!-- /Read files -->

<div class = "read-file" style="background-color: rgb(248, 248, 248); padding-top: 5px; padding-bottom: 10px;">

    <button data-poll-id="5" type="button" class = "button" id="bt" name = "bt" style = "margin-left: auto; margin-bottom: 5px; margin-top: 10px;">Click to learn more about Airsense</button>
    <p></p>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#bt").click(function(){
                $.ajax({
                    type: 'POST',
                    url: 'file-read.php',
                    success: function(data) {
                        alert(data); 
    
                    }
                });
       });
    });
    </script>


</div>


  <!-- /Read files -->

  <!-- /Cookie -->

  <div class = "cookies" style = "background-color: rgb(194, 222, 235);">
  <div class="addRemoveTxt">
    <h2>COOKIES!</h2>
  </div>
        
        <FORM method="POST" action="about.php">
<div class = "input-name">
        <input type ="text" name="name" placeholder = "Enter Name :"> <br/>
        <input type ="text" name="surname" placeholder = "Enter Surname : "> <br/>
        <input type ="text" name="age" placeholder = "Enter Age : "> <br/>
        <br/>
</div>
<div class = "addRemoveButtons">
        <input type = "submit" name = "first_sub" value = "Create Cookie">
        <input type = "submit" name = "second_sub" value = "Retrive Cookie">
        <input type = "submit" name = "third_sub" value = "Delete Cookie">
</div>        
        </FORM>

        <?php
        if(isset($_POST['second_sub']))
        {
        if(isset($_COOKIE["name"]))
        {
        echo "Name = ". $_COOKIE["name"]."<br/>";
        echo "Surname = ". $_COOKIE["surname"]."<br/>";
        echo "Age = ". $_COOKIE["age"]."<br/>";
        }
        else
        {
        echo "Cookies deleted !!";

        }
        }
        ?>

</div>

 



 <!-- Footer -->
 <footer id="footer" class="footer">
    <div class="text-center">
        <address>Adresa:&nbsp;&nbsp;&nbsp;
            038/230 900
            Bregu i Diellit-Prishtinë, Kosovë</address>
        <ul class="social-links">
            <li><a href="https://www.twitter.com/" target="_0"><i class="fa fa-twitter fa-fw"></i></a></li>
            <li><a href="https://www.facebook.com/" target="_0"><i class="fa fa-facebook fa-fw"></i></a></li>
            <li><a href="https://mail.google.com/" target="_0"><i class="fa fa-google-plus fa-fw"></i></a></li>
            <li><a href="https://github.com/" target="_0"><i class="fa fa-github"></i></i></a></li>
            <li><a href="https://linkedin.com/" target="_0"><i class="fa fa-linkedin fa-fw"></i></a></li>
        </ul>
        Copyright &copy; University Of Prishtina 2020
        <div class="credits">
        </div>
    </div>
</footer>

    <script src="js/about.js"></script>
    <script src="js/homepage.js"></script>
</body>

</html>