<?php
    include "library/getstatic.php";
    $gs=new getstatic();
    $baseurl=$gs->base_url();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Stationary Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo $baseurl; ?>images/logo.png">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="styles/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/stlawrencestyles.css">
    
    
    <!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fa fa-graduation-cap"></i> Programs</a></li>
                <li><a href="#portfolio"><i class="fa fa-laptop"></i> Facilities</a></li>
                <li><a href="#myskills"><i class="fa fa-building"></i>  Departments</a></li>
                <li><a href="#timeline"><i class="fa fa-user-plus"></i>  Admission</a></li>
                <li><a href="#contact" class="cntct"><i class="fa fa-envelope"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Fixed navbar -->



<!-- Slider -->
<div class="slider">
        <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>
                <li><a href="http://wowslider.com"><img src="data1/images/1.jpg" alt="jquery image gallery" title="one" id="wows1_0"/></a></li>
                <li><img src="data1/images/2.jpg" alt="2" title="Pixar_" id="wows1_1"/></li>
            </ul>
        </div>
        <div class="ws_shadow"></div>
    </div>	
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
</div>
<!-- Slider  -->



<!-- About College  -->
<section id="about">
<div class="container aboutstlawrence">
    
    
    <div class="col-md-8">
        <h1>An Introduction To The College</h1>
        <hr>
    	<p>
    	St. Lawrence College, one of the leading academic institutions in Nepal was established in 1997 A.D. It is located in the heart of Chabahil Pipabot, Kathmandu opposite to the Charumati Stupa. We are committed for the holistic development of each student and offering different courses and degrees under three streams Science, Management and Humanities in higher secondary level and BBS, BA, B.Sc. CSIT under the affiliation of Tribhuvan University.
        <br><br>
The objective of St. Lawrence College is to provide quality education to produce competitive manpower that is saleable in the global market. As per our objectives, we have been achieving outstanding result continuously for last five years. In science stream in grade XI we achieved HSEB board second with 89.4% in the year 2011 (2068 B.S.) and 88 % in the year 2010 (2067 B.S.) continuously, likewise we achieved board second in management with 83% at grade XII in the year 2009 (2066 B.S.) and board first in management with 84% at grade XI in the year 2010 (2067 B.S.) respectively.
		<br><br>
        <strong>Running Programs:</strong>
		<br>
        <strong>+2 Programs: (Afficialted to HSEB)</strong>
        <br>
        Science, Management and Humanities
        <br><br>
        <strong>Bachelor Programs:(Affiliated to TU, Nepal)</strong>
        <br>
        Bachelor in Business Studies (BBS),<br>
        Bachelor in Arts (BA),<br>
        Bachelor Of Science In Computer Science And Information Technology (B.Sc. CSIT) 
    </p>
    </div>
    
    
    <div class="col-md-4">
    	<h1>News And Events</h1>
        <hr>
        <div class="newsandevents">
        	<ul id="ticker_02" class="ticker">
                <li>
                    <h4>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h4>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet pulvinar est. Vestibulum blandit, massa nec..
                    </p>
                    <a href="#" class="btn btn-success">Read More</a>
                </li>
                <li>
                	<br>
                    <h4>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h4>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet pulvinar est. Vestibulum blandit, massa nec..
                    </p>
                    <a href="#" class="btn btn-success">Read More</a>
                </li>
          </ul>
        </div>
    </div>
    
    
</div>
</section>
<!-- About College  -->



<!-- Footer  -->
<section id="footer">
<div class="container-fluid footer-content">
	<div class="container">
    	<div class="row">
        	
            <div class="col-md-4 college-info">
            	<h3>College Information</h3>
                <hr>
                <ul>
                	<li><a href="#"><i class="fa fa-check"></i> College Events</a></li>
                    <li><a href="#"><i class="fa fa-check"></i> ECA</a></li>
                    <li><a href="#"><i class="fa fa-check"></i> CCA</a></li>
                    <li><a href="#"><i class="fa fa-check"></i> Schedule Events</a></li>
                </ul>
            </div>
            
            <div class="col-md-4 college-info">
            	<h3>College Voice</h3>
                <hr>
                <ul>
                	<li><a href="#"><i class="fa fa-user"></i> Administration</a></li>
                    <li><a href="#"><i class="fa fa-user"></i> Faculty Voice</a></li>
                    <li><a href="#"><i class="fa fa-user"></i> Staff Experience</a></li>
                    <li><a href="#"><i class="fa fa-user"></i> Student Voice</a></li>
                </ul>
            </div>
            
            <div class="col-md-4 college-info">
            	<h3>Find Us On</h3>
                <hr>
                <ul>
                	<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i> Google +</a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i> Youtube</a></li>
                </ul>
            </div>
           
        </div>
    </div>
</div>
</section>

<div class="container-fluid footer">
    <div class="container">
        All Rights Reserved, Copyright &copy; 2015, St. Lawrence College
    </div>
</div>

<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.smoothscroll.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script>
	   function tick2(){
      		$('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
   		}
   		setInterval(function(){ tick2 () }, 3000);
</script>
<script>
	$(window).scroll(function() {
    
	$('#about').each(function(){
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+500) {
            $(this).addClass("animated fadeInUp");
        }
    });
	
	$('#footer').each(function(){
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+500) {
            $(this).addClass("animated fadeInUp");
        }
    });
	
	});
</script>
</body>
</html>