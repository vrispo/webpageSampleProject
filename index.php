<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" media="screen" href="./screenstyle.css"/>
        <script src="slider.js"></script>        
        <link rel="stylesheet" href="datepickercss.css"/>
        <script src="datepicker.js"></script>
        <link rel="stylesheet" href="destination.css"/>
        <script src="destination.js"></script>
        
        <script language="javascript">
            function start(){
                SlideShow();
                //initTab();
            }

            function adattaIframe(obj) {
                obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
            }
        </script>
        
        <title>Proto Web site Test</title>
    </head>
    <body onload="start()">
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
                <div id="navigation">
                    <ul>
                    <li>
                        <div onclick="switchTabInIframe(event, 0)" ;>Asia</div>
                    </li>
                    <li>
                        <div onclick="switchTabInIframe(event, 1)">Europa</div>
                    </li>
                    <li>
                        <div onclick="switchTabInIframe(event, 2)">Africa</div>
                    </li>
                    <li>
                        <div onclick="switchTabInIframe(event, 3)">America</div>
                    </li>
                    </ul>
                </div>
                <iframe class="cities-frame" src="./asia.php" title="Asia destinations" onload="adattaIframe(this)"></iframe>
 
            </div>
            
            <div class="blogs">
                <div class="blog-title">Blogs</div>
                <div class='blogs-container'>
                <div class="blog-left" onclick="location.href='https://www.nomadicmatt.com/travel-blogs/hiking-kilimanjaro-guide/';">
                    <div>The Ultimate Guide to Climbing Mount Kilimangiaro</div>
                </div>
                <div class="blog-right">
                    <div class="up" onclick="location.href='https://www.nuflit.com/blog/guides/12-things-i-d-tell-any-new-traveller';">
                        <div>12 Thinghs I'd Tell Any New Traveler</div>
                    </div>
                    <div class="down" onclick="location.href='https://www.nomadicmatt.com/travel-blogs/solo-female-travel-packing-guide/';">
                        <div>The Ultimate Packing List for Female Travelers</div>
                    </div>
                </div>
                </div>
            </div>
            
            <div class="clients">
                <div class="client-title">Clients</div>
                <div class='clients-container'>
                    <div class="client-left">
                        <div class='left'></div>
                        <div class='right'>
                            <div class="descr">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies mi eget mauris pharetra. Amet risus nullam eget felis eget nunc lobortis. Purus in massa tempor nec. Porta nibh venenatis cras sed. Viverra ipsum nunc aliquet bibendum enim. Risus pretium quam vulputate dignissim suspendisse in. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum. Risus sed vulputate odio ut enim blandit volutpat maecenas. Netus et malesuada fames ac turpis egestas. Sed arcu non odio euismod lacinia at quis risus sed. Praesent elementum facilisis leo vel fringilla est ullamcorper. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Elit pellentesque habitant morbi tristique senectus et netus.
Morbi tincidunt augue interdum velit.
                            </div>
                            <div class="client">
                                <div class="client-img"></div>
                                <div class="client-descr">
                                    <div class='name'>Mario Rossi</div>
                                    <div class='mans'>Manager</div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div class="client-right">
                        <div class='left'></div>
                        <div class='right'>
                            <div class="descr">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies mi eget mauris pharetra. Amet risus nullam eget felis eget nunc lobortis. Purus in massa tempor nec. Porta nibh venenatis cras sed. Viverra ipsum nunc aliquet bibendum enim. Risus pretium quam vulputate dignissim suspendisse in. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum. Risus sed vulputate odio ut enim blandit volutpat maecenas. Netus et malesuada fames ac turpis egestas. Sed arcu non odio euismod lacinia at quis risus sed. Praesent elementum facilisis leo vel fringilla est ullamcorper. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Elit pellentesque habitant morbi tristique senectus et netus.
Morbi tincidunt augue interdum velit.
                            </div>
                            <div class="client">
                                <div class="client-img"></div>
                                <div class="client-descr">
                                    <div class='name'>Luca Verdi</div>
                                    <div class="mans">Developer</div>                                    
                                </div>                                
                            </div>
                        </div>                
                    </div>
                </div>
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
