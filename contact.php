
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirSense</title>
    <meta name="description" content="AirSense is a website...">
    <meta name="keywords" content="air,anti-pollution,sensor">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
    </script>
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">
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
                <li><a href="about.html">About</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="dropdown-content">
                        <a href="staff.html">Our Staff</a>
                    </div></li>
                </div>
                <div class="dropdown">
                    <li><a href="#">Outputs</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="dropdown-content">
                            <a href="outputs.html">Output 1</a>
                            <a href="pacman.html">Game</a>
                            <a href="Login.html">Login/SignUp</a>
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
        <a class="cta" href="contact.html">Contact</a>
        <p class="menu cta"><a href="home.html">Home</a></p>
    </header>
    <div class="location">
        <div class="location-info">
            <div class="txt">
                <h2 style="padding-bottom: 1rem;color: #546871;/* color: white; */ font-size: 30px;">Contact Us</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium</p></div>
        </div>
        <div style="display: inline-block;width:100%;height: 400px; vertical-align: middle; top: 60px;" id="map">
        </div>
        
        <!-- ************************* Contact information ******************************* -->
        <section class="contact">

                <h4>You can send us a message by entering your details and we will reach you as soon as possible</h4>
    
            <div class="container">
                <div class="contact-info">
                    <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                    <h3>Address</h3>
                    <p>Bregu i Diellit Rr. George Bush</p>
                    <p>Prishtine, Kosovo</p>
                    <p>Kosovo 10000</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon" ><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                    <h3>Phone</h3>
                    <p>038-230-900</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden= "true"></i></div>
                    <div class="text">
                    <h3>Mail</h3>
                        <a href="mailto: fiek@uni-pr.edu" style="font-size: 16px; text-decoration: none;">fiek@uni-pr.edu</a>
                    </div>
                </div>
            </div>
            <!--****************************Form Section ***********************************-->
            <div class="form">
                <form id="form" method="POST" action="mail.php">
                    <div class="input1">
                        <div class="input">
                        <br>
                        <input type="text" name="name"  id="name" placeholder="Name">
                        <small id="nameErr">This field is required</small>
                        </div>
                        <div class="input" id="id1">
                        <input style="margin-left: 13px; margin-top: 24px;" type="email" name="email"  id="email" placeholder="Email">
                        <small id="mailErr">This field is required</small>
                        </div>
                    </div>
                    <div class="input">
                        <input style = "width: 635px;" type="text" name="subject" placeholder="Subject" id="Subject">
                        <small id="subjErr">This field is required</small>
                    </div>
                    <div class="input">
                        <textarea id="textarea" placeholder="Message" name="message"></textarea>
                        <small id="MessErr">This field is required</small>
                    </div>
                    <div class="input">    
                        <input type="submit" name="submit" required="required" value="Submit" class="getValues">
                    </div>
                </form>
            </div>
            </div>
            </section>
    </div>
    <!--************************** Footer *********************-->
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
  <script src="js/contact.js"></script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPvs2MZNfRqUqOcLPsSo6f1GXOGv9MW7M&callback=initMap">
    </script>
</body>
</html>