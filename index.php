<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <script src="slider.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="./screenstyle.css"/>
        <title>Proto Web site Test</title>
    </head>
    <body onload="SlideShow()">
        <div id ="barra"> 
            <div id="bartitle">
                <img src="./Images/globe.png" alt="globe"/>
                Proto Web Site Test
            </div>
            <div id="barlink">
                <A href="./index.php">Home</A>
                <A href="./index.php">About</A>
                <A href="./index.php">Places</A>
                <A href="./index.php">Careers</A>
                <A href="./index.php">Blog</A>
            </div>
            <div id="barlogin">
                <A href="./index.php">Login</A>
            </div>
        </div>
        
        <div id ="corpo"> 
            <!-- Slideshow container -->
            <div class="slideshow-container fade">
                <!-- Full images with numbers and message Info -->
                <div class="Containers">
                    <div class="MessageInfo">travel to explore</div>
                    <img src="./Images/image1.jpg" style="width:100%">
                    <div class="Info">First Caption</div>
                </div>

                <div class="Containers">
                    <div class="MessageInfo">travel to explore</div>
                    <img src="./Images/image2.jpg" style="width:100%">
                    <div class="Info">Second Caption</div>
                </div>

                <div class="Containers">
                    <div class="MessageInfo">travel to explore</div>
                    <img src="./Images/image3.jpg" style="width:100%">
                    <div class="Info">Third Caption</div>
                </div>
                <!-- The circles/dots -->
                <div class="dots-container">
                    <span class="dots" onclick="currentSlide(1)"></span>
                    <span class="dots" onclick="currentSlide(2)"></span>
                    <span class="dots" onclick="currentSlide(3)"></span>
                </div>               
            </div>
            <br>
            <div class="table-container">
                <form name="explore" action="" method="post">
                    <div class="location-textform">
                        <label for="location">Where You Want to go</label>
                        <input type="text" id="location" value="Search your location">
                    </div>
                    <div class="datein-textform">
                        <label for="datein">Check-in</label>
                        <input type="text" id="datein" value="Add Date">
                    </div>
                    <div class="dateout-textform">
                        <label for="dateout">Check-out</label>
                        <input type="text" id="dateout" value="Add Date">
                    </div>
                    <div class="buttonform">
                        <input type="button" id="explorebutton" value="Explore Now">
                    </div>                   
                </form>              
            </div>
            
        </div>
               
        <div id ="pie"> 
            <div id="pierights">
                Copyright © 2021 Proto Web Site Test. All rights reserved
            </div>
            <div id="pielink">
                <A href="./index.php">Home</A>
                <A href="./index.php">About</A>
                <A href="./index.php">Places</A>
                <A href="./index.php">Careers</A>
                <A href="./index.php">Blog</A>
            </div>
            <div id="piesocial">
                <A href="https://www.facebook.com/"><img src="./Images/facebook.png" alt="facebook"/></a>
                <A href="https://www.linkedin.com/"><img src="./Images/LinkedIn.png" alt="linkedin"/></a>
                <A href="https://www.instagram.com/"><img src="./Images/Instagram.png" alt="instagram"/></a>
                
                
            </div>
        </div>
    </body>
</html>
