<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type ="text/css" href="css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="images/pattern-left.png"/>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<title>Letta</title>
</head>

<body id="home">
	<!--NAV -->

    <nav id="myHeader" class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="index.php">Letta</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a onclick = "scrollToHome()">Home</a></li>
                <li><a onclick = "scrollToArtwork()" >Artwork</a></li>
                <li><a onclick = "scrollToContact()" >About me</a></li>
            </ul>
            
            </div>
        </div>
    </nav>








    <div class="content">
    <!-- SLIDER -->
        <div id="myCarousel-1" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <p> WELCOME TO LETTANIA </p>
                <div class="item active">
                  <img src="images/slider-1.jpg" style="width:100%;">
                </div>
                <div class="item">
                  <img src="images/slider-1.jpg" style="width:100%;">
                </div>
                <div class="item">
                  <img src="images/slider-1.jpg" style="width:100%;">
                </div>
              </div>
            
              <!-- Left and right controls --><!--
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>-->
        </div>
    </div>
    <!-- pattern -->
    <div class="container">
    	
        <div class="pattern">
      		<img src="images/pattern.png" />
        </div>  
    </div>










    <!-- Products -->
    <div id="scroll-reveal" class="container">
        <!-- <div class="left-pattern"> 
        	<img src="images/pattern-left.png" />
        </div>
        <div class="right-pattern">
        	<img src="images/pattern-right.png" />
        </div>  
        -->
        <h1 id="artwork" class="item-title">ARTWORK</h1>   
        
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="001" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/1.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>King of the Death</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="002" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/2.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Desert Monster</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="003" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/3.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Legendary Blacksmith</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="004" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/4.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Dead Shot</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="005" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/5.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Brave Soul</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="006" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/6.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Dead Island</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="007" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/7.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Tree of mans</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="008" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/8.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Last farewell</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="009" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/9.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Hoi An</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="010" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/10.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Nani???</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="011" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/11.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Attack on Tokyo</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="012" onclick="testOverlay(this,'Picture No.1')" class="img-item" style="background-image:url('images/12.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Dragonborne</h1>
                        </div>                
                </div>
            </div>
        <div class='clearfix'></div>
    </div>
   


<!--
    <div class="container">
        <img class="mySlides" src="images/1.jpg">
        <img class="mySlides" src="images/2.jpg">
        <img class="mySlides" src="images/3.jpg">
        <img class="mySlides" src="images/4.jpg">
        <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
    </div>
-->
<div class="container">
	<div id="row-2" class="row">
		<div class="col-md-9 col-center m-auto">
			<h2><span>Trending <b>Products</b></span></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				 
				<!-- Wrapper for carousel items -->
				<div id="carousel-2" class="carousel-inner">
                    
                    <div class="item carousel-item active">
						<div class="row">                            
                            <div class="col-sm-4"><a href="https://google.com"><div class="img-box" style="background-image:url('images/1.jpg');"></div></a></div>
							<div class="col-sm-4"><a href="https://google.com"><div class="img-box" style="background-image:url('images/2.jpg');"></div></a></div>
							<div class="col-sm-4"><a href="https://google.com"><div class="img-box" style="background-image:url('images/3.jpg');"></div></a></div>
						</div>
					</div>
                    
                    <div class="item carousel-item">
						<div class="row">                            
                            <div class="col-sm-4"><div class="img-box" style="background-image:url('images/1.jpg');"></div></div>
							<div class="col-sm-4"><div class="img-box" style="background-image:url('images/2.jpg');"></div></div>
							<div class="col-sm-4"><div class="img-box" style="background-image:url('images/3.jpg');"></div></div>
						</div>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-chevron-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>



<div class="container">
        <div id="contact" class="about-me">
            <div class="about-picture-content col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-picture">

                </div>
            </div>
            <div class="about-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h1>Nguyen Quang Minh</h1>
                <p>Hello, i'm the owner of this site, nice to meet you, hope we will have good time togetther</p>
                <div class="container-fluid">
                    <div class="about-sub-info col-lg-12">
                        <h1>Education</h1>
                        <p>
                            <ul>
                                <li>University Of Pedagory</li>
                            </ul>
                        </p>
                    </div>
                    <div class="about-sub-info col-lg-12">
                        <h1>Contact</h1>
                        <p>
                            <ul>
                                <li>Tel: 0122-551-9126</li>
                                <li>Email: demonicalist@gmail.com</li>
                                <li>Address: 67 Road of Darkness</li>
                            </ul>
                        </p>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="container">
        <div class="contact">
            <p>Copyright © 2018 Demonicalist</p>
        </div>
    </div>








<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <!-- <div id="caption"></div> -->

</div>
<div style="clear:both"></div>
<!-- SCRIPT --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
    
</body>
</html>
