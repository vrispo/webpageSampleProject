<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" media="screen" href="./screenstyle.css"/>
        <script src="slider.js"></script>        
        <link rel="stylesheet" href="datepickercss.css"/>
        <script src="datepicker.js"></script>
        
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
            
            <div class="table-container">
                <form name="explore" action="" method="post">
                    <div class="location-textform">
                        <label for="location">Where You Want to go</label>
                        <input type="text" id="location" value="Search your location">
                    </div>
                    <div class="datein-textform">
                        <div class="datein-label">Check-in</div>    
                        <div class="datein-picker" onclick="toggleDatePicker(event,'datein-picker')">
                            <div class="selected-date"">Add Date</div>
                            <div class="dates">
                                <div class="month">
                                    <div class="arrows prev-mth" onclick="goToPrevMonth(event,'datein-picker')">&lt;</div>
                                    <div class="mth"></div>
                                    <div class="arrows next-mth" onclick="goToNextMonth(event,'datein-picker')">&gt;</div>
                                </div>
                                <div class="days">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dateout-textform">
                        <div class="dateout-label">Check-out</div>  
                        <div class="dateout-picker" onclick="toggleDatePicker(event,'dateout-picker')">
                            <div class="selected-date"">Add Date</div>
                            <div class="dates">
                                <div class="month">
                                    <div class="arrows prev-mth" onclick="goToPrevMonth(event,'dateout-picker')">&lt;</div>
                                    <div class="mth"></div>
                                    <div class="arrows next-mth" onclick="goToNextMonth(event,'dateout-picker')">&gt;</div>
                                </div>
                                <div class="days">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttonform">
                        <input type="button" id="explorebutton" value="Explore Now">
                    </div>                   
                </form>
            </div>
            
            <div class='info-container'>
                <div class='info-box'>
                    <div class="info-img" style="background-image: url('./Images/Get Best Prices.png')"></div>
                    <div class="info-title">Get Best Prices</div>
                    <div class="info-text">Pay throught our application and save thousands  and get amazing rewards</div>
                </div>
                <div class='info-box'>
                    <div class="info-img" style="background-image: url('./Images/Covid Safe.png')"></div>
                    <div class="info-title">Covid Safe</div>
                    <div class="info-text">We have all the curated hotels that have all the precaution for a covid safe environment</div>
                </div>
                <div class='info-box'>
                    <div class="info-img" style="background-image: url('./Images/Flexible Payment.png')"></div>
                    <div class="info-title">Flexible Payment</div>
                    <div class="info-text">Enjoy the flexible payment through our app and get rewards on every payment</div>                    
                </div>
                <div class='info-box'>
                    <div class="info-img" style="background-image: url('./Images/Nearby.png')"></div>
                    <div class="info-title">Find The Best Near You</div>
                    <div class="info-text">Find the best hotels and places to visit near you in a single click</div>                    
                </div>
            </div>
        
        
            <div class="destination-container">
                <div class="destination-title">Recommended Destination</div>
            </div>
            
            <!-- comment <div class="date-picker" onclick="toggleDatePicker(event)">
                <div class="selected-date"">Add Date</div>
                <div class="dates">
                    <div class="month">
                        <div class="arrows prev-mth" onclick="goToPrevMonth()">&lt;</div>
                        <div class="mth"></div>
                        <div class="arrows next-mth" onclick="goToNextMonth()">&gt;</div>
                    </div>
                    <div class="days">
                    </div>
                </div>
            </div>-->
            
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
