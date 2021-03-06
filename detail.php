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
                <li><a onclick = "scrollToHome()"><div class="fa fa-arrow-up"></div></a></li>
            </ul>
            
            </div>
        </div>
    </nav>
    
    



    <div id="product-detail" class="container animate-right">
        <h1 class="p-detail">Product Detail</h1>
        <div class="product-img col-lg-6">
            <img src="images/12.jpg">
        </div>
        
        <div class="product-detail col-lg-6 ">
            <p>Our products are imported from many Country such as Japan, Amercica, France....
            Their qualities are uncomparable !!!!
            </p>
            <h2>Price: 2.000$</h2>
            <input class="buy-button" type="button" value="Buy Now">
        </div>
        
    </div>
        
        <div class='clearfix'></div>
    </div>
   



<div class="container animate-bottom" >
	<div id="row-2" class="row">
		<div class="col-md-9 col-center m-auto">
			<h2><span>Related <b>Products</b></span></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				 
				<!-- Wrapper for carousel items -->
				<div id="carousel-2" class="carousel-inner">
                    
                    <div class="item carousel-item active">
						<div class="row">                            
                            <div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><a onclick="clickRedirect()"><div class="img-box" style="background-image:url('images/1.jpg');"></div></a></div>
							<div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><a onclick="clickRedirect()"><div class="img-box" style="background-image:url('images/2.jpg');"></div></a></div>
							<div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><a onclick="clickRedirect()"><div class="img-box" style="background-image:url('images/3.jpg');"></div></a></div>
						</div>
					</div>
                    
                    <div class="item carousel-item">
						<div class="row">                            
                            <div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="img-box" class="img-responsive img-fluid" style="background-image:url('images/1.jpg');"></div></div>
							<div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="img-box" class="img-responsive img-fluid" style="background-image:url('images/2.jpg');"></div></div>
							<div class="img-hot col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="img-box" class="img-responsive img-fluid" style="background-image:url('images/3.jpg');"></div></div>
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


<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-3">
                    <h5>Series</h5>
                    <ul>
                        <li><a href="#">The World Conqueror</a></li>
                        <li><a href="#">Sign of Imusuras</a></li>
                        <li><a href="#">Ancient Tomb Of A'Zek</a></li>
                        <li><a href="#">A Lonely Journey</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-3">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="#">Purchase</a></li>
                        <li><a href="#">Transfer</a></li>
                        <li><a href="#">Order</a></li>
                        <li><a href="#">Shipment</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-3">
                    <h5>Private and Policy</h5>
                    <ul>
                        <li><a href="#">Our Rule</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 info">
                    <p><input id="btn-contact" type="button" value="Contact Now"></p>
                </div>
            </div>
        </div>
        <div class="second-bar">
           <div class="container">
                <h2 class="logo"><a href="#"> LETTA </a></h2>
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>





    <div class="container">
        <div class="contact">
            <p>Copyright © 2018 Demonicalist</p>
        </div>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    






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


<script type='text/javascript'>


</script>   

    

</body>
</html>
