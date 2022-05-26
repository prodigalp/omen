<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eyestrain Webpage</title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <script src="https://kit.fontawesome.com/9f7bbf7eb1.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="wrapper">
            <nav>
                <div class="navigation">
                    <ul>
                        <li><a href="sindex.php">Home</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#prjs">Project</a></li>
                        <li><a href="#" id="myBtns">Resume</a></li>
                        <li><a href="#contactz">Contacts</a></li>
                    </ul>
                </div>
            </nav>
        <!-- <button id="myBtn">Open Modal</button> -->
            
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <!-- <p>Some text in the Modal..</p> -->
                    <img src="./assets/img/Karim Abdul Tapar CV (Updated2).png" alt="My Resume">
                </div>
            </div>

            <div class="heroFullHeight" id="about">
                
                <div class="mainHero">
                    <div class="leftHero">
                        <img src="./assets/img/blue3.jpg" alt="Left Hero Image">
                        <div class="greet">Hi, I'm <span>Karim</span></div>
                        <div class="position"><p>SAP Specialist / Web Developer</p></div>
                        <div class="contacts"><p><i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;<span>0932 928 9323</span></p></div>
                        <div class="btns">
                            <a href="./assets/img/Karim Abdul Tapar CV (Updated2).png" download="Karim Abdul Tapar (Updated CV)">
                                <button type="button">Download CV</button>
                            </a>
                            <a href="#skills">
                                <button type="button">Take a tour</button>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="rightHero"> -->
                        <!-- <div class="qrcodeMy"> -->
                            <!-- <img src="./assets/img/qrcode.png" alt="My QRCode LinkedIn"> -->
                            <!-- <p>Scan me!</p> -->
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
                <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>
            </div>
            
            <div class="skillSet" id="skills">
                <div class="skillHead"><h2>Professional&nbsp;<span>Skills</span></h2></div>
                    <div class="skillTrio">
                        <div class="frontEnd">
                            <h3>Front End</h3>
                            <div class="html">
                                <img src="./assets/img/skills/html.png" alt="HTML Logo">
                                <p>HTML5</p>
                            </div>
                            <div class="css">
                                <img src="./assets/img/skills/css3.png" alt="CSS3 Logo">
                                <p>CSS3</p>
                            </div>
                            <div class="js">
                                <img src="./assets/img/skills/js.png" alt="Javascript Logo">
                                <p>JAVASCRIPT</p>
                            </div>
                            <div class="sass">
                                <img src="./assets/img/skills/sass.png" alt="SASS Logo">
                                <p>SASS</p>
                            </div>
                            <div class="bootstrap">
                                <img src="./assets/img/skills/bootstrap.png" alt="Bootstrap Logo">
                                <p>BOOTSTRAP</p>
                            </div>
                        </div>
                        <div class="backend">
                            <h3>Back End</h3>
                            <div class="php">
                                <img src="./assets/img/skills/php.png" alt="PHP Logo">
                                <p>PHP</p>
                            </div>
                            <div class="mysql">
                                <img src="./assets/img/skills/mysql.png" alt="MySQL Logo">
                                <p>MYSQL</p>
                            </div>
                        </div>
                        <div class="inventory">
                            <h3>Inventory Management</h3>
                            <div class="sap">
                                <img src="./assets/img/skills/sap.png" alt="SAP Logo">
                                <p>SAP</p>
                            </div>
                            <div class="ps">
                                <img src="./assets/img/skills/ps.png" alt="Photoshop Logo">
                                <p>PHOTOSHOP</p>
                            </div>
                            <div class="excel">
                                <img src="./assets/img/skills/excel.png" alt="Excel Logo">
                                <p>MS-EXCEL</p>
                            </div>
                            <div class="doc">
                                <img src="./assets/img/skills/word.png" alt="Word Logo">
                                <p>MS-WORD</p>
                            </div>
                            <div class="ppt">
                                <img src="./assets/img/skills/ppt.png" alt="Powerpoint Logo">
                                <p>POWERPOINT</p>
                            </div>
                        </div>
                    </div>
                <!-- <div class="skillHead" class="about"><h2><a href="#">Back to top</a></h2></div> -->
            </div>
            <div class="projects" id="prjs">
                <!-- <div class="prjHeader"><h2>Accomplished&nbsp;<span>Projects</span></h2></div> -->
                <div class="imgPrjMain">
                    <div class="imgPrjOne">
                        <div class="imgHoverSwap1">
                            <a href="#" target="_blank">
                                <img src="./assets/img/prj/prj1.png" alt="Project One" class="imgFade">
                                <div class="imgMes">
                                    <div class="imgText">
                                        <p>Instructor Time Monitoring</p>
                                        <p>and Payroll System (SJCB)</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="imgHoverSwap2">
                            <a href="#" target="_blank">
                                <img src="./assets/img/prj/prj2.png" alt="Project Two" class="imgFade">
                                <div class="imgMes">
                                    <div class="imgText">
                                        <p>SJCB Library System</p>
                                        <p>with Dictionary</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="imgHoverSwap3">
                            <a href="#" target="_blank">
                                <img src="./assets/img/prj/prj3.png" alt="Project Three" class="imgFade">
                                <div class="imgMes">
                                    <div class="imgText">
                                        <p>Ramcar Logistics and</p>
                                        <p>Inventory System</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="imgPrjTwo">
                        <div class="imgHoverSwap4">
                            <a href="#" target="_blank">
                                <img src="./assets/img/prj/prj4.png" alt="Project Four" class="imgFade">
                                <div class="imgMes">
                                    <div class="imgText">
                                        <p>Orion Preventive Maintenance System</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="imgHoverSwap5">
                            <a href="#" target="_blank">
                                <img src="./assets/img/prj/prj5.png" alt="Project Five" class="imgFade">
                                <div class="imgMes">
                                    <div class="imgText">
                                        <p>SMPP Product Finder</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="imgHoverSwap6">
                            <a href="#" target="_blank">
                                <img src="./assets/img/prj/prj6.png" alt="Project Six" class="imgFade">
                                <div class="imgMes">
                                    <div class="imgText">
                                        <p>SJCB Student Voting System</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="prjFooter">
                    <a href="#about">
                        <h2>Back to <span>top</span></h2>
                    </a>
                </div> -->
            </div>

            <div class="contactsi" id="contactz">
                <h2 class="work2">Lets work together!</h2>
                <div class="colImg">
                    <div class="colImgOne">
                        <img src="./assets/img/contacts/gito.png" alt="Github Contacts">
                    </div>
                    <div class="colImgTwo">
                        <img src="./assets/img/contacts/gmail.png" alt="Gmail Contacts">
                    </div>
                    <div class="colImgTri">
                        <img src="./assets/img/contacts/link.png" alt="LinkedIne Contacts">
                    </div>
                </div>
                <div class="contacts"><p><i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;<span>0932 928 9323</span></p></div>
            </div>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtns");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            }
        }
        </script>

        <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>
    </body>
</html>