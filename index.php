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
                <div class="Containers" style="background-image: url('./Images/image1.jpg')">
                    <div class="MessageInfo">travel to explore</div>
                    <!-- <img src="./Images/image1.jpg" style="width:100%"> -->
                    <div class="Info">First Caption</div>
                </div>

                <div class="Containers" style="background-image: url('./Images/image2.jpg')">
                    <div class="MessageInfo">travel to explore</div>
                    <div class="Info">Second Caption</div>
                </div>

                <div class="Containers" style="background-image: url('./Images/image3.jpg')">
                    <div class="MessageInfo">travel to explore</div>
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
            <br>
            <div class='info-container'>
                <div class='info-box'>
                    <div class="info-img" style="background-image: url('./Images/Get Best Prices.png')"></div>
                    <div class="info-title"><p>Get Best Prices</p></div>
                    <div class="info-text"><p>Pay through our application and save thousands and get amazing rewards</p></div>
                </div>
                <div class='info-box'>
                    <div class="info-img" style="background-image: url('./Images/Covid Safe.png')"></div>
                    <div class="info-title"><p>Covid Safe</p></div>
                    <div class="info-text"><p>We have all the curated hotels that have all the precaution for a covid safe environment</p></div>
                </div>
                <div class='info-box'>
                    <div class="info-img" style="background-image: url('./Images/Flexible Payment.png')"></div>
                    <div class="info-title"><p>Flexible Payment</p></div>
                    <div class="info-text"><p>Enjoy the flexible payment through our app and get rewards on every payment</p></div>                    
                </div>
                <div class='info-box'>
                    <div class="info-img" style="background-image: url('./Images/Nearby.png')"></div>
                    <div class="info-title"><p>Find The Best Near You</p></div>
                    <div class="info-text"><p>Find the best hotels and places to visit near you in a single click</p></div>                    
                </div>
            </div>
        </div>
        <br>
        <div class="destination-container">
            <div class="destination-title">Recommended Destination</div>
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
