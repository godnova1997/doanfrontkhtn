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
    <nav id="myHeader" class="navbar navbar-inverse sticky">
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
                <li><a onclick = "scrollToHome()">Top</a></li>
                <li><a onclick = "scrollToArtwork()" >Artwork</a></li>
                <li><a onclick = "scrollToContact()" >About me</a></li>
                <li><a onclick = "scrollToProgress()">Progress</a></li>
            </ul>
            </div>
        </div>
    </nav>




    <div class="content animate-right">
    <!-- SLIDER -->
        <div id="myCarousel-1" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel-1" data-slide-to="1"></li>
                <li data-target="#myCarousel-1" data-slide-to="2"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div id="test" class="carousel-inner">
                <!--<p> WELCOME TO LETTANIA </p>-->
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
    	
        <div id="artwork-scroll" class="pattern">
      		<img src="images/pattern.png" />
        </div>  
    </div>










    <!-- Products -->
    <div   class="container">
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
                            <div id="001" onclick="testOverlay(this)" class="img-item" style="background-image:url('images/1.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>King of the Death</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="002" onclick="testOverlay(this)" class="img-item" style="background-image:url('images/2.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Desert Monster</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="003" onclick="testOverlay(this)" class="img-item" style="background-image:url('images/3.jpg');">                                                
                        </div>
                        <div class="img-description">
                            <h1>Legendary Blacksmith</h1>
                        </div>                
                </div>
            </div>
            <div class="item-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item-content">
                            <div id="004" onclick="testOverlay(this)" class="img-item" style="background-image:url('images/4.jpg');">                                                
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
   


<div class="container">
	<div id="row-2" class="row">
		<div class="col-md-9 col-center m-auto">
			<h2><span>Hot <b>Pictures</b></span></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				 
				<!-- Wrapper for carousel items -->
				<div id="carousel-2" class="carousel-inner">
                    
                    <div class="item carousel-item active">
						<div class="row">                            
                            <div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><a ><div id="0001" onclick="testOverlay(this)" class="img-box" style="background-image:url('images/1.jpg');"></div></a></div>
							<div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><a ><div id="0002" onclick="testOverlay(this)" class="img-box" style="background-image:url('images/2.jpg');"></div></a></div>
							<div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><a ><div id="0004" onclick="testOverlay(this)" class="img-box" style="background-image:url('images/3.jpg');"></div></a></div>
						</div>
					</div>
                    
                    <div class="item carousel-item">
						<div class="row">                            
                            <div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><a onclick="testOverlay(this)"><div class="img-box" style="background-image:url('images/4.jpg');"></div></a></div>
							<div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><a onclick="testOverlay(this)"><div class="img-box" style="background-image:url('images/5.jpg');"></div></a></div>
							<div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><a onclick="testOverlay(this)"><div class="img-box" style="background-image:url('images/6.jpg');"></div></a></div>
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






    <div id="about" class="container-fluid">
        <h1 class="about-title">About me</h1>
        
        <div class="container">
            <div id="contact" class="about-me">
                <div class="about-item">
                    <div >
                        <div class="about-img" style="background-image:url('images/designer.jpg')" >

                        </div>
                    </div>
                </div>
                <div class="about-item" style="background-image:url('images/introduction.jpg')">
                    <div class="shadow"></div>
                    <h1>Introduction</h1>       
                    <p> 
                          Hello I'm Nguyen Quang Minh
                        </br>
                          Nice to meet you!!!! ^v ^
                        </br>
                          This is my website about arts
                        </br>
                    <p>     
                </div>
                <div class="about-item" style="background-image:url('images/contact.jpg')">
                    <div class="shadow"></div>    
                    <h1>Contact</h1>   
                    <p>
                        Facebook: fb.com/quangminhnguyen
                        </br>
                        Tel: 0122-551-9126
                        </br>
                        Add:123/456 ABC St 
                        </br>
                    <p>                  
                </div>
                <div class="about-item" style="background-image:url('images/education.jpg')">
                    <div class="shadow"></div>
                    <h1>Education</h1>   
                    <p>
                        University Of Pedagogy
                        </br>
                        2015-2019
                        </br>
                    <p>                    
                </div>
            </div>
        </div>
    </div>
    







    <!--PROGRESS-->
    <div id="progress-container" class="container">
        <h1 id="progress-title">Project In Progress</h1>
        <div class="progress-detail">
            <h1 style="width:30%;">Sky Kingdom </h1>
            <div  class="progress">                
                <div id="0001" onclick ="showProgress(this)" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                40%
                </div>                
            </div>
            <div id="status0001" class="progress-info">
                    <p>
                        Sketched: 50%</br>
                        Colored: 30%</br>
                        Estimate Time To Publish: July 30th 2018
                    </p>
            </div>
        </div>        
        <div class="progress-detail">
            <h1 style="width:30%;">At The Horizon </h1>
            <div class="progress">                
                <div id="0002" onclick ="showProgress(this)" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                90%
                </div>
            </div>
            <div id="status0002" class="progress-info">
                    <p>
                        Sketched: 100%</br>
                        Colored: 80% </br>
                        Estimate Time To Publish: July 30th 2018
                    </p>
            </div>
        </div>
        <div class="progress-detail">
            <h1 style="width:30%;">Until The End </h1>
            <div class="progress">                
                <div id="0003" onclick ="showProgress(this)" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                60%
                </div>
            </div>
            <div id="status0003" class="progress-info">
                    <p>
                        Sketched: 100%</br>
                        Colored: 20% </br>
                        Estimate Time To Publish: July 30th 2018
                    </p>
            </div>
        </div>
        <div class="progress-detail">
            <h1 style="width:30%;">Edge Of The Void</h1>
            <div class="progress">                
                <div id="0004" onclick ="showProgress(this)" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
                10%
                </div>
            </div>
            <div id="status0004" class="progress-info">
                    <p>
                        Sketched: 20%</br>
                        Colored: 0% </br>
                        Estimate Time To Publish: July 30th 2018
                    </p>
            </div>
        </div>
    </div>
    

    <div id="footer" class="container-fluild">
        <div class="footer-info">
            <div class="album">
                <h1> Albums </h1>
                <ul>
                    <li>Battle Cry</li>
                    <li>Tokyo Showdown</li>
                    <li>One and Forever</li>
                    <li>Mystical Love</li>
                </ul>
            </div>
            <div class="services">
                <h1> Services </h1>
                <ul>
                    <li>Purchase</li> 
                    <li>Transfer</li> 
                    <li>Order</li> 
                    <li>Shipment</li>                                       
                </ul>
            </div>
            <div class="private-and-policy">
                <h1> Private and Policy </h1>
                <ul>
                    <li>Our terms</li>                        
                </ul>
            </div>
            
        </div>
        <div class="social">
            <div class="social-item">
                <img style="float:left;" width=50px height=50px src="images/facebook.png"><p style="line-height:50px; height:50px; color:white; float:left;">Facebook</p>
            </div>
            <div class="social-item">
                <img style="float:left;" width=50px height=50px src="images/google-plus.png"><p style="line-height:50px; height:50px; color:white; float:left;">Google Plus</p>
            </div>
            <div class="social-item">
                <img style="float:left;" width=50px height=50px src="images/pinterest.png"><p style="line-height:50px; height:50px; color:white; float:left;">Pinterest</p>
            </div>
            <div class="social-item">
                <img style="float:left;" width=50px height=50px src="images/twitter.png"><p style="line-height:50px; height:50px; color:white; float:left;">Twitter</p>
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
