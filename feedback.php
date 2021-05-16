<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <meta name="description" content="AirSense is a website...">
    <meta name="keywords" content="air,anti-pollution,sensor">
    <link rel="stylesheet" type="text/css" href="css/feedback.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
    <style>
        <?php
        include "css/feedback.css";
        ?>
    </style>
    <script>
        function tellUsWhy() {
            var value = document.getElementById("number").value;
            if (value < 30) {
                document.getElementById("tellUsWhyHidden").style.display = "block";
            }
            else {

                document.getElementById("tellUsWhyHidden").style.display = "none";
            }
            if (value == 100) {
                document.getElementById("smileFace").className = "reachedMax";
                document.getElementById("output").style.display = "none";
            }
            else {
                document.getElementById("smileFace").className = "";
                document.getElementById("output").style.display = "inline";
            }
            buildSmile(value);
            buildSad(value);
        }

        function buildSmile(expand) {
            var c = document.getElementById("smileFace");

            var ctx = c.getContext("2d");

            ctx.clearRect(0, 0, c.width, c.height);

            var grd = ctx.createLinearGradient(0, 0, 200, 0);
            grd.addColorStop(0, "orange");
            grd.addColorStop(1, "yellow");
            ctx.fillStyle = grd;
            ctx.beginPath();
            ctx.arc(25, 25, 15 + expand / 16, 0, Math.PI * 2, true); // Outer circle
            ctx.fill();
            ctx.moveTo(30 + expand / 16, 25);
            ctx.arc(25, 25, 5 + expand / 16, 0, Math.PI, false);  // Mouth (clockwise)
            ctx.stroke();
            ctx.beginPath()
            ctx.moveTo(19 - expand / 16, 17);
            ctx.arc(22, 19, 1.5 + expand / 1000, 0, Math.PI * 2, true);  // Left eye
            ctx.moveTo(26 + expand / 16, 17);
            ctx.arc(28, 19, 1.5 + expand / 1000, 0, Math.PI * 2, true);  // Right eye
            ctx.fillStyle = "black";

            ctx.fill();

        }
        function buildSad(expand) {
            var c = document.getElementById("sadFace");
            var ctx = c.getContext("2d");
            expand = 100 - expand;
            ctx.clearRect(0, 0, c.width, c.height);
            var grd = ctx.createLinearGradient(0, 0, 75, 0);
            grd.addColorStop(0, "orange");
            grd.addColorStop(1, "yellow");
            ctx.fillStyle = grd;
            ctx.beginPath();
            ctx.arc(25, 25, 15 + expand / 16, 0, Math.PI * 2, true); // Outer circle
            ctx.fill();
            ctx.moveTo(30 + expand / 16, 35);
            ctx.arc(25, 35, 5 + expand / 16, 0, Math.PI, true);  // Mouth (clockwise)
            ctx.stroke();
            ctx.beginPath()
            ctx.moveTo(19 - expand / 16, 17);
            ctx.arc(22, 19, 1.5 + expand / 1000, 0, Math.PI * 2, true);  // Left eye
            ctx.moveTo(26 + expand / 16, 17);
            ctx.arc(28, 19, 1.5 - expand / 1000, 0, Math.PI * 2, true);  // Right eye
            ctx.fillStyle = "black";

            ctx.fill();
        }


        //add new key=>value to the HTML5 storage
        function SaveItem() {

            var name = document.forms.form.name1.value;
            var data = document.forms.form.data.value;
            localStorage.setItem(name, data);
            doShowAll();

        }



        function doShowAll() {
            if (CheckBrowser()) {
                var key = "";
                var list = "<tr><th>Name of User</th><th>Was the page helpful</th></tr>\n";
                var i = 0;
                //for more advance feature, you can set cap on max users 
                for (i = 0; i <= localStorage.length - 1; i++) {
                    key = localStorage.key(i);
                    list += "<tr><td style='padding-left:125px'>" + key + "</td>\n<td style='padding-left:98px'>"
                        + localStorage.getItem(key) + "</td></tr>\n";
                }
                //if no user exists 
                if (list == "<tr><th>Name of User</th><th>Was the page helpful</th></tr>\n") {
                    list += "<tr><td style='padding-left:115px'><i>empty</i></td>\n<td style='padding-left:75px'><i>empty</i></td></tr>\n";
                }
                //bind the data to html table
                //you can use jQuery too....
                document.getElementById('list').innerHTML = list;
            } else {
                alert('Cannot save list as your browser does not support HTML 5');
            }
        }
        //-------------------------------------------------------------------------------------
        //restart the local storage
        function ClearAll() {
            localStorage.clear();
            doShowAll();
        }
        /*
         =====> Checking the browser support
         //this step may not be required as most of modern browsers do support HTML5
         */

        function CheckBrowser() {
            if ('localStorage' in window && window['localStorage'] !== null) {
                // we can use localStorage object to store data
                return true;
            } else {
                return false;
            }
        }

    </script>
</head>
<body>
    <header>
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
                            <a href="outputs.html">Output1</a>
                            <a href="pacman.html">Game</a>
                            <a href="Login.html">Login/SignUp</a>
                        </div>
                    </li>
                </div>
                <div class="dropdown">
                    <li><a href="#">Case Studies</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="dropdown-content">
                            <a href="case.html">Kosovo Case</a>
                            <a href="feedback.html">Feedback</a>
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
    <!--Banner-->
    <div class="banner">
        <h1>Website Feedback</h1>
        <img src="img/fb.png" alt="feedback illustration">
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="Gradient1">
                <stop stop-color="#10637b" offset="0%"></stop>
                <stop stop-color="#4995A3" offset="75%"></stop>
            </linearGradient>
        </defs>
        <path fill="url(#Gradient1)"
            d="M0,160L120,149.3C240,139,480,117,720,112C960,107,1200,117,1320,122.7L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
        </path>
    </svg>

    <!--/ Banner-->
    <main>
        <div onload="doShowAll()">
            <form method="POST" name="form" id="feedback>"
                oninput="x.value=parseInt(number.value)+'%'" onsubmit="return validate()">
                <fieldset style="padding-left: 50px;">
                    <legend>
                        <h2>Please help us improve our service by completing the feedback:</h2>
                    </legend>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="field">
                                        <div class="label">
                                            <p><b>Name </b> (Required)</p>
                                        </div>
                                        <input type="text" name="name" class="text required highlightable"
                                            placeholder="Type your first name here..." autocomplete="on" />
                                    </div>
                                </td>
                                <td>
                                    <div class="field">
                                        <div class="label">
                                            <p><b>Surname </b> (Required)</p>
                                        </div>
                                        <input type="text" name="surname" class="text required highlightable"
                                            placeholder="Type your last name here..." autocomplete="on" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="field">
                                        <div class="label">
                                            <p><b>Telephone </b> (Optional) <span id="moreInfo">Only fulfill it if you
                                                    had a Kosovan number</span></p>

                                        </div>
                                        <input type="text" name="phone" class="text highlightable"
                                            placeholder="(383) 78 123456" id="telephone" />
                                        <p id="splitTel"></p>
                                    </div>
                                </td>
                                <td>
                                    <div class="field">
                                        <div class="label">
                                            <p><b>Date of Birth </b> (optional)</p>
                                        </div>
                                        <input type="date" name="birthdate" class="text highlightable"
                                            placeholder="Type your last name here..." id="date" />
                                        <!--max date-->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td id="states" colspan="2">
                                    <div class="field">
                                        <div class="label">
                                            <p><b>Continent </b> (Required)</p>
                                        </div>
                                        <select name="continent" class="text required highlightable"
                                            id="selectContinent" onclick="selectChanged()">
                                            <option value="0">Choose your continent:</option>
                                            <option value="1">Europe</option>
                                            <option value="2">America</option>
                                            <option value="3">Africa</option>
                                            <option value="4">Asia</option>
                                            <option value="5">Australia</option>
                                        </select>

                                    </div>
                                </td>
                                <td id="hidden">
                                    <div class="field">
                                        <div class="label">
                                            <p><b>Country </b> (Required)</p>
                                        </div>
                                        <datalist id="European">
                                            <option>Albania</option>
                                            <option>France</option>
                                            <option>France</option>
                                            <option>Spain</option>
                                            <option>Sweden</option>
                                            <option>Norway</option>
                                            <option>Germany</option>
                                            <option>Finland</option>
                                            <option>Poland</option>
                                            <option>Italy</option>
                                            <option>United Kingdom</option>
                                            <option>Romania</option>
                                            <option>Belarus</option>
                                            <option>Kazakhstan</option>
                                            <option>Greece</option>
                                            <option>Bulgaria</option>
                                            <option>Iceland</option>
                                            <option>Hungary</option>
                                            <option>Portugal</option>
                                            <option>Austria</option>
                                            <option>Czech Republic</option>
                                            <option>Ireland</option>
                                            <option>Lithuania</option>
                                            <option>Latvia</option>
                                            <option>Croatia</option>
                                            <option>Bosnia and Herzegovina</option>
                                            <option>Slovakia</option>
                                            <option>Estonia</option>
                                            <option>Russia</option>
                                            <option>Denmark</option>
                                            <option>Switzerland</option>
                                            <option>Netherlands</option>
                                            <option>Moldova</option>
                                            <option>Belgium</option>
                                            <option>Armenia</option>
                                            <option>North Macedonia</option>
                                            <option>Serbia</option>
                                            <option>Turkey</option>
                                            <option>Slovenia</option>
                                            <option>Montenegro</option>
                                            <option>Cyprus</option>
                                            <option>Azerbaijan</option>
                                            <option>Luxembourg</option>
                                            <option>Georgia</option>
                                            <option>Andorra</option>
                                            <option>Malta</option>
                                            <option>Liechtenstein</option>
                                            <option>San Marino</option>
                                            <option>Monaco</option>
                                            <option>Vatican City</option>
                                        </datalist>
                                        <datalist id="American">
                                            <option>Antigua and Barbuda</option>
                                            <option>Argentina</option>
                                            <option>Bahamas</option>
                                            <option>Barbados</option>
                                            <option>Belize</option>
                                            <option>Bolivia</option>
                                            <option>Brazil</option>
                                            <option>Canada</option>
                                            <option>Chile</option>
                                            <option>Colombia</option>
                                            <option>Costa Rica</option>
                                            <option>Cuba</option>
                                            <option>Dominica</option>
                                            <option>Dominican Republic</option>
                                            <option>Ecuador</option>
                                            <option>El Salvador</option>
                                            <option>Grenada</option>
                                            <option>Guatemala</option>
                                            <option>Guyana</option>
                                            <option>Haiti</option>
                                            <option>Honduras</option>
                                            <option>Jamaica</option>
                                            <option>Mexico</option>
                                            <option>Nicaragua</option>
                                            <option>Panama</option>
                                            <option>Paraguay</option>
                                            <option>Peru</option>
                                            <option>Saint Kitts and Nevis</option>
                                            <option>Saint Lucia</option>
                                            <option>Saint Vincent and the Grenadines</option>
                                            <option>Suriname</option>
                                            <option>Trinidad and Tobago</option>
                                            <option>United States</option>
                                            <option>Uruguay</option>
                                            <option>Venezuela</option>
                                        </datalist>

                                        <datalist id="African">
                                            <option>Algeria</option>
                                            <option>Angola</option>
                                            <option>Benin</option>
                                            <option>Botswana</option>
                                            <option>Burkina Faso</option>
                                            <option>Burundi</option>
                                            <option>Cabo Verde</option>
                                            <option>Cameroon</option>
                                            <option>Central African Republic</option>
                                            <option>Chad</option>
                                            <option>Comoros</option>
                                            <option>Congo</option>
                                            <option>Cote d'Ivoire</option>
                                            <option>Djibouti</option>
                                            <option>Egypt</option>
                                            <option>Equatorial Guinea</option>
                                            <option>Eritrea</option>
                                            <option>Eswatini</option>
                                            <option>Ethiopia</option>
                                            <option>Gabo</option>
                                            <option>Gambia</option>
                                            <option>Ghana</option>
                                            <option>Guinea</option>
                                            <option>Guinea-Bissau</option>
                                            <option>Kenya</option>
                                            <option>Lesotho</option>
                                            <option>Liberia</option>
                                            <option>Lybia</option>
                                            <option>Madagascar</option>
                                            <option>Malawi</option>
                                            <option>Mali</option>
                                            <option>Mauritania</option>
                                            <option>Mauritius</option>
                                            <option>Morocco</option>
                                            <option>Mozambique</option>
                                            <option>Namibia</option>
                                            <option>Niger</option>
                                            <option>Nigeria</option>
                                            <option>Rwanda</option>
                                            <option>Sao Tome and Principe</option>
                                            <option>Senegal</option>
                                            <option>Seychelles</option>
                                            <option>Sierra Leone</option>
                                            <option>Somalia</option>
                                            <option>South Africa</option>
                                            <option>South Sudan</option>
                                            <option>Sudan</option>
                                            <option>Tanzania</option>
                                            <option>Togo</option>
                                            <option>Tunisia</option>
                                            <option>Uganda</option>
                                            <option>Zambia</option>
                                            <option>Zimbabwe</option>
                                            <option>Wakanda</option>
                                        </datalist>

                                        <datalist id="Asian">
                                            <option>Afghanistan</option>
                                            <option>Armenia</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Bhutan</option>
                                            <option>Brunei</option>
                                            <option>Cambodia</option>
                                            <option>China</option>
                                            <option>Cyprus</option>
                                            <option>Georgia</option>
                                            <option>India</option>
                                            <option>Indonesia</option>
                                            <option>Iran</option>
                                            <option>Iraq</option>
                                            <option>Israel</option>
                                            <option>Japan</option>
                                            <option>Jordan</option>
                                            <option>Kazakhstan</option>
                                            <option>Kuwait</option>
                                            <option>Kyrgyztan</option>
                                            <option>Laos</option>
                                            <option>Lebanon</option>
                                            <option>Malaysia</option>
                                            <option>Maldives</option>
                                            <option>Mongolia</option>
                                            <option>Myanmar</option>
                                            <option>Nepal</option>
                                            <option>North Korea</option>
                                            <option>Oman</option>
                                            <option>Pakistan</option>
                                            <option>Palestine</option>
                                            <option>Philippines</option>
                                            <option>Qatar</option>
                                            <option>Russia</option>
                                            <option>Saudi Arabia</option>
                                            <option>Singapore</option>
                                            <option>South Korea</option>
                                            <option>Sri Lanka</option>
                                            <option>Syria</option>
                                            <option>Taiwan</option>
                                            <option>Tajikistan</option>
                                            <option>Thailand</option>
                                            <option>Timor-Leste</option>
                                            <option>Turkey</option>
                                            <option>Turkmenistan</option>
                                            <option><abbr title="United Arab Emirates">UAE</abbr></option>
                                            <option>Uzbekistan</option>
                                            <option>Vietnam</option>
                                            <option>Yemen</option>

                                        </datalist>

                                        <datalist id="Australian">
                                            <option>Australia</option>
                                            <option>Fiji</option>
                                            <option>Kiribati</option>
                                            <option>Marshall Islands</option>
                                            <option>Micronesia</option>
                                            <option>Nauru</option>
                                            <option>New Zealand</option>
                                            <option>Palau</option>
                                            <option>Papua New Guinea</option>
                                            <option>Samoa</option>
                                            <option>Solomon Islands</option>
                                            <option>Tonga</option>
                                            <option>Tuvalu</option>
                                            <option>Vanuatu</option>
                                        </datalist>
                                        <input type="text" list="European" class="text required highlightable"
                                            name="country" id="country">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="field">
                                        <p>Is this your first visit to the website?</p>
                                        <p><input type="radio" value="1" class="buttons" name="firstVisit"
                                                onclick="showReason(0)"> <span> Yes</span> </p>
                                        <p><input type="radio" value="2" class="buttons" name="firstVisit"
                                                onclick="showReason(1)"> <span>No</span> </p>
                                        <div id="reasonHidden">
                                            What is the primary reason for your visit?
                                            <textarea name="reason" class="textarea text highlightable"
                                                rows="5"></textarea>
                                        </div>
                                    </div>

                                </td>

                                <td>
                                    <div class="field">
                                        <p>Were you able to find what you needed?</p>
                                        <p><input type="radio" class="buttons" name=data value="yes"
                                                onclick="SaveItem()" onclick="showNeeded(0)"> Yes </p>
                                        <p><input type="radio" class="buttons" name=data value="no" onclick="SaveItem()"
                                                onclick="showNeeded(1)"> No </p>
                                        <div id="foundHidden">
                                            Please tell us what info were you seeking:
                                            <textarea name="reason" class="textarea text" rows="5"
                                                form="feedback"></textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>



                                    <div id="items_table">
                                        <h3>Feedback record</h3>
                                        <table id=list></table>

                                <td>
                                    <p>
                                        <label><input type=button value="Clear" onclick="ClearAll()">
                                            <i>* Delete all items</i></label>
                                    </p>
                                </td>
        </div>
        </td>
        <td></td>
        </tr>
        <tr>
            <td>
                <div class="field">
                    <p>Which parts of our website did you find helpful</p>
                    <div class="checkBoxes">
                        <p><input type="checkbox" value="1" class="buttons" name="helpfulParts">
                            Service</p>
                        <p><input type="checkbox" value="2" class="buttons" name="helpfulParts">
                            News&amp;Events</p>
                        <p><input type="checkbox" value="3" class="buttons" name="helpfulParts">
                            Case Studies</p>
                        <p><input type="checkbox" value="4" class="buttons" name="helpfulParts">
                            Outputs </p>
                    </div>
                    <div class="checkBoxes">
                        <p><input type="checkbox" value="5" class="buttons" name="helpfulParts">
                            Web portal</p>
                        <p><input type="checkbox" value="6" class="buttons" name="helpfulParts">
                            Platform</p>
                        <p><input type="checkbox" value="7" class="buttons" name="helpfulParts">
                            Other</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="field">
                    <p>How helpful did you find our website (1-100)</p>
                    <p><canvas id="sadFace" width="50" height="50"></canvas>
                        <input type="range" id="number" value="50" onmouseover="tellUsWhy();" onchange="tellUsWhy()">
                        <canvas id="smileFace" width="50" height="50"></canvas><span id="output"><output name="x"
                                for="number"></output></span>
                    </p>
                    <div id="tellUsWhyHidden">
                        Please tell us what went wrong:
                        <textarea name="wrong" class="text highlightable textarea " rows="5"></textarea>
                    </div>
                </div>
            </td>
        </tr>


        </tbody>
        <tfoot>
            <td colspan="2">
                <div class="field rotate3d">
                    <div class="label">
                        <p>Do you have any other comment to add:</p>
                    </div>

                    <textarea name="comment" class="textarea text" rows="5"></textarea>
                </div>
                <div>
                    <input type="submit" formtarget="_blank" value="SUBMIT" id="submitFeedback" name="submit"
                    onclick="clearInputs()"><br><br>
                    <input type="reset" value="RESET" onclick="drawBarriers()">
                </div>
            </td>

        </tfoot>

        </table>
        </fieldset>

        </form>
        </div>
        <!-- <script>
            function Person(first, last, age, comment) {
                this.name = first;
                this.surname = last;
                this.age = age;
                this.comment = comment;
            }
            Person.prototype.nationality = 'English'

            Person.prototype.fname = function () {
                return this.name + " " + this.surname;
            };

            var person = new Person('Don', 'Ahmeti', 25, 'A really amazing and useful website!')
            document.getElementById('com').innerHTML = person['comment']
            document.getElementById('emri').innerHTML = person.fname()
            document.getElementById('nat').innerHTML = person['nationality']
        </script> -->
    </main>
    <?php
    if (isset($_POST['submit'])) {
    require "userFeedback.php";
    };
    ?>
    <!--Footer-->
    <footer id="footer" class="footer">
        <div class="container text-center">
        <address>Adresa:&nbsp;&nbsp;&nbsp;
            Bregu i Diellit-Prishtinë, Kosovë - 038/230 900</address>
        <ul class="social-links">
            <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-github"></i></i></a></li>
            <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
        </ul>
        Copyright &copy; University Of Prishtina 2020 
        <div class="credits">
        </div>
        </div>
    </footer>
  <!--/ Footer-->

    <script>
        function clearInput() {
        var btn = document.getElementById('submitFeedback');
        var inputs = document.querySelectorAll('input');
        btn.addEventListener('click', () => {
            inputs.forEach(input => input.value = '');
        })
    }


        function isBlank(inputField) {
            if (inputField.value == "") {
                return true;
            }
            return false;
        }

        function makeClean(element) {
            element.classList.remove("error");
        }

        window.addEventListener("load", function () {
            var requiredInputs = document.querySelectorAll(".required1");
            for (var i = 0; i < requiredInputs.length; i++) {
                requiredInputs[i].addEventListener("change", function (e) {
                    makeClean(e.target);
                });
            }
            var mainForm = document.getElementById("form2");
            mainForm.addEventListener("submit", function (e) {

                var requiredInputs = document.querySelectorAll(".required1");
                for (var i = 0; i < requiredInputs.length; i++) {
                    if (isBlank(requiredInputs[i])) {
                        e.preventDefault();
                        requiredInputs[i].classList.add("error");
                    }
                    else {
                        makeClean(requiredInputs[i]);
                    }
                }
            });
        });
    </script>
    <script src="js/feedback.js"></script>
</body>
</html>