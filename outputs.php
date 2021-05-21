<!DOCTYPE html>
<html>
    <head>
        <title>
            System and outputs
        </title>
        <link rel="stylesheet" type="text/css" href="css/outputs.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/navFooter.css">
        <script src="js/jquery-3.5.1.min.js"></script>
        <script>
            //------------J query code for get/set/add/remove methods----------//
            $(document).ready( function() {
                $(".dl-text").click(function() {
                    $(".dl").slideToggle("slow");
                });
                $(".text").click(function() {
                    $(".smile-face").remove();
                });
                $(".info").click(function() {
                    $("#p1").append("Lorem Ipsum");
                })
                $(".card1-back").click(function() {
                   let x =  $(".card1-back").text();
                   alert("Text on background of this card is : " + x)
                })
                $("#text").click(function() {
                    $("#text").html("<h2>Faleminderit p&eumlr koh&eumln tuaj, konsumator&eumlt jan&euml &ccedilelesi i suksesit ton&euml !</h2>")
                })

            });
        </script>
        <style>
            .video {
                width: 400px;
                height: 400px;
                margin-top: 30px;
                margin-left: 50px;
            }
            video {
                width: 400px;
                height: 400px;
                outline: none;
            }
            header {
                background-color: #4995a3;
            }
        </style>
    </head>
<body>
    <!--**********************Header*********************-->
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
    <!--*******************************End of header**************************-->
    <section style="position: absolute; top: 70px;">
<div class="description">
    <div class="text">
        <h1>Air Monitors</h1>  
    </div>
    <div class="info">
        <p id="p1">
            Part of the <span>AIRSENSE</span> Group, we are committed to sustainable development and helping companies and public authorities limit their environmental impact. We offer products and services that prevent and control air, noise and vibration pollution, increase the productivity and reliability of industrial machinery & contribute to 
            the development of effective, robust & noiseless products
        </p>
    </div>
    <hr>
    <div class="description2">
        <div class="text">
            <h3>
                <?php
                $arr = array('Our','Motto!',':','Protect','the','health','of','people');
                echo implode(" ",$arr);
                ?>
            </h3>
        </div>
        <div class = "info">
            <p><?php
                $number = 1936;
                printf("We have a continuous air quality monitoring station in Irvine which is serviced and maintained by Air Monitors, delivering extremely high levels of data capture. Since %d.",$number);
                ?>
                 it has also included a FIDAS <span id="span2"></span> particulate monitor, 
                so we are now able to monitor TSP, PM10, PM4, PM2.5, PM1 and Particle Number simultaneously, which provides greater insight into the types of pollution and their likely sources. To complement the AQMS we also operate <span id="span3"></span> AQMesh pods which provide the flexibility we need to monitor air quality in precisely the location of greatest importance.
                Web connectivity combined with Air Monitors’ reliability of service provides us with continuous access to accurate air quality data, which means that we are able to fulfil our statutory obligations as a Council, and also find ways to protect the health of people in North Ayrshire.</p>
        </div>
    </div>
</div>
<!--*************Card informations for our environment********************-->
    <div class="cards-text">
        <h2 style="font-family: poppins; font-size: 26px;">Hover these images to learn more about our environment and our devices</h2>
    </div>
    <div class="cards">
    <div class="card1">
        <div class="flip-card">
          <div class="card1-front">
            <img src="img/card1-front.jpg" alt="" style="width:400px;height:400px;">
          </div>
          <div class="card1-back">
            <h1 style="margin-top: 40px; margin-bottom: 40px; font-size: 32px; font-family: poppins;">Environments and Structure</h1>
            <p style="font-size: 30px; font-family: poppins;">Lorem Ipsum</p>
            <p style="margin-top: 30px; font-size: 30px; font-family: poppins;">Lorem Ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
      <div class="video">
        <video controls>
            <source src="video/video.mp4" type="video/mp4">  
        </video>
    </div>
      <div class="card2">
        <div class="flip-card">
          <div class="card2-front">
            <img src="img/card2-back.jpg" alt="" style="width:400px;height:400px;">
          </div>
          <div class="card2-back">
            <h1 style="margin-top: 40px; margin-bottom: 40px; font-size: 32px; font-family: poppins;">Air Monotoring Devices</h1>
            <p style="font-size: 30px; font-family: poppins;">Lorem Ipsum</p>
            <p style="margin-top: 30px; font-size: 30px; font-family: poppins;">Lorem Ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    
      </div>
      <div class= "list-description">
          <h1>The detailed procedure of our air monitoring is explained below</h1>
      </div>
      <div class="lists">
          <ol>
              <li><span style="font-weight: bold;">Passive Monotoring</span>
              <ul class="a">
                         <?php
                            $str = "Diffusion tubes absorb a specific pollutant from the ambient air&
                            Diffusion tubes normally monitor for 2-4 weeks at a time@
                            The tubes must be sent to a laboratory for analysis to see how much pollution they have detected";
                            $pattern = "/[&@]/";
                            $string = preg_split($pattern, $str);
                            foreach($string as $x){
                            echo "<li>$x</li>";
                            }
                         ?>
                  </ul>
                  </li>
                  <li><span style="font-weight: bold;">Active (Semi Automatic) Sampling</span>
                    <ul class="b">
                    <?php
                            $str = "An analyser pulls the ambient air through a filter for a set period of time e.g  one filter per day&
                            The filters are then collected and sent to a laboratory for analysis to see how much pollution they have detected";
                            $pattern = "/[&@]/";
                            $string = preg_split($pattern, $str);
                            foreach($string as $x){
                            echo "<li>$x</li>";
                            }
                         ?>
                    </ul>
                  </li>
                  <li> <span style="font-weight: bold;">Automatic point monitoring</span>
                      <ul class="c">
                      <?php
                            $str = "Ambient air is pulled through an analyser which recognises the chosen gas and will calculate its concentration&
                            Automatic sites monitor pollutants 24hours a day&
                            Data is sent from the site directly to your computer which means it can be seen instantly";
                            $pattern = "/[&@]/";
                            $string = preg_split($pattern, $str);
                            foreach($string as $x){
                            echo "<li>$x</li>";
                            }
                         ?>
                        </ul>
                  </li>
                  <li><span style="font-weight: bold;">Photochemical and optical sensor systems</span>
                      <ul class = "d">
                      <?php
                            $str = "These are portable monitoring tools that can continuously monitor a range of pollutants.&
                            Data can be downloaded to your computer and analysed.";
                            $pattern = "/[&@]/";
                            $string = preg_split($pattern, $str);
                            foreach($string as $x){
                            echo "<li>$x</li>";
                            }
                         ?>
                      </ul> 
                  </li>
             </ol>
      </div>
      <div class="table-info">
        <h1>Air Pollution is a global problem. From this table you can see air pollution in years</h1>
    </div>
      <div class="table">
          <table cellspacing = "5">
              <tr>
              <th>Variable</th>
                <?php
                $year = array(1980, 2000, 2010, 1990);
                sort($year);

                foreach($year as $x) {
                                echo  "<th>$x vs 2019</th>";
                                }
                ?>
              </tr>
              
              <?php

               $elem = array (
                array("Carbon monoxide",-85,-78,-65,-23),
                array("Lead",-98,-98,-93,-95),
                array("Sulfur Dioxide",-93,-95,-78,-60),
                array("Ozone",-35,-25,-21,-10),
                array("Nitrogen Dioxide",-62,-51,-36,-17)
                );
                

                echo "<tr>";
                        echo "<td>".$elem[0][0]."</td>"."<td>".$elem[0][1]."</td>"."<td>".$elem[0][2]."</td>"."<td>".$elem[0][3]."</td>"."<td>".$elem[0][4]."</td>"."<br>";
                echo "</tr>";
                    echo "<tr>";
                    echo "<td>".$elem[1][0]."</td>"." "."<td>".$elem[1][1]."</td>"." "."<td>".$elem[1][2]."</td>"." "."<td>".$elem[1][3]."</td>"." "."<td>".$elem[1][4]."</td>".".<br>";
                    echo"</tr>";

                    echo "<tr>";
                    echo "<td>".$elem[2][0]."</td>"." "."<td>".$elem[2][1]."</td>"." "."<td>".$elem[2][2]."</td>"." "."<td>".$elem[2][3]."</td>"." "."<td>".$elem[2][4]."</td>".".<br>";
                    echo"</tr>";

                    echo "<tr>";
                    echo "<td>".$elem[3][0]."</td>"." "."<td>".$elem[3][1]."</td>"." "."<td>".$elem[3][2]."</td>"." "."<td>".$elem[3][3]."</td>"." "."<td>".$elem[3][4]."</td>".".<br>";
                    echo"</tr>";

                    echo "<tr>";
                    echo "<td>".$elem[4][0]."</td>"." "."<td>".$elem[4][1]."</td>"." "."<td>".$elem[4][2]."</td>"." "."<td>".$elem[4][3]."</td>"." "."<td>".$elem[4][4]."</td>".".<br>";
                    echo"</tr>";
                  
              ?>
          </table>
      </div>
      <div class="dl-text">
          <h1>Description of these substnces that are in the air</h1>
      </div>
      <div class="dl">
          <dl>
          <?php
                $disc = array("Lead"=>"Metal that is highly poisonous for every organ in our body",
                "Sulfur Dioxide"=>"Colorless gas in the air that is very harmful for our resporatory tract",
                "Nitrogen Dioxide"=>"Gas in the air that can cause a range of harmful attacks",
                "Carbon Monoxide"=>"Highly toxic gas that is produced industrially",);
                ksort($disc);

                foreach($disc as $x => $x_value) {
                echo "<dt>$x</dt>" ;
                echo "<br>";
                echo  "<dd>$x_value</dd>" ;
                echo "<br>";
                }

                ?>
              
          </dl>
      </div>
      <div class="covid-text">
          <h1>Using our services you can be safe from viruses</h1>
      </div>
        <div class="faces" style="cursor: url(img/cursor.png), pointer">
              <div class="face">
                  <div class="eyes">
                      <span class="eye"></span>
                      <span class="eye"></span>
                  </div>
              </div>
              <div class="face">
                <div class="eyes">
                    <span class="eye"></span>
                    <span class="eye"></span>
                </div>
            </div>
          </div>
          <div class="message">
              <div class = "svg">
        <svg class="smile-face" widh = "100px" height = "123px" viewbox = "0 0 250px 250px">
        <circle class="face1" cx = "80px" cy = "80px" r= "35px"> </circle>
        <circle class="left-eye" cx = "70px" cy = "70px" r = "5px"></circle>
        <circle class="right-eye" cx = "90px" cy = "70px" r = "5px"></circle>
        <path class="mouth" d = "M70, 88 Q80, 95 90,88"></path>
      </svg>
              </div>
      <div class="text">
          <h1 style="font-family: poppins; color: red;" id="text">Thank you for your time spending on our  website !</h1>
      </div>
      </div>
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
    </section>
    <script src="js/outputs.js"></script>
    </body>
    </html>