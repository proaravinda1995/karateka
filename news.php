<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Karateka - Insight  karate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.png">
	<link rel="stylesheet" href="animate.min.css">
	<link rel="stylesheet" href="css/design.css">

	<link rel="stylesheet" href="css/foot.css">
    <link rel="stylesheet" href="css/event.css">
   
    
    
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!-- =======================================================
    Theme Name: Maxim
    Theme URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->
 

</head>

<body>	
	<!-- navbar -->
	<div class="navbar-wrapper">

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<!-- Responsive navbar -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</a>
			<h1 class="brand"><a href="index.php">KARATEKA</a></h1>
			<!-- navigation -->
			<nav class="pull-right nav-collapse collapse">
				<ul id="menu-main" class="nav">
						<li><a title="team" href="index.php">HOME</a></li>
					<li><a title="team" href="#about">About us</a></li>
					<li><a title="services" href="#services">EVENTS</a></li>
					<li><a title="works" href="#works">KARATE NEWS</a></li>
					<li><a title="blog" href="#blog">ARTICLES</a></li>
					<li><a title="team" href="#about">clubs</a></li>
					<li><a title="contact" href="#contact">Contact us</a></li>
					
				</ul>
			</nav>
		</div>
	</div>
</div>
</div>



		<section id="hero1" class="hero" style="background: url(img/newsbg.jpeg);background-size:cover;
		background-position:center center;
		background-attachment:fixed;">
			<div class="inner">
				<div class="copy">
				<h1 class="para1" data-aos="fade-right">Karate news</h1>
				
			
				<div class="logo">
						<div class="hover13 column" data-aos="zoom-in"> 
						<figure>
							<img src="img/logo-image.png" alt="" />
						</figure>	
			</div>
			</div>
				</div>
		</section>

        <h1 class="para2" data-aos="fade-right"
					data-aos-offset="300"
					data-aos-easing="ease-in-sine" style="text-align:center; padding-top:80px;padding-bottom:80px;font-size:80px;">Lates Karate News...</h1>
	
	

		<?php

				$servername  = "localhost";
				$username = "root";
				$password = "";
				$dbname = "karateka";

				$con = new mysqli($servername,$username,$password,$dbname);



				$sql = "select id,topic,date,description,image from news ORDER BY id desc";
				$result = $con->query($sql);


				



				//Impact, Charcoal, sans-serif

				while( $row = mysqli_fetch_array($result)){



    				echo
                                '<div style="padding:3%;">'.
							  '<div style = "-webkit-box-shadow: -1px 3px 34px -5px rgba(0,0,0,0.37);
                              -moz-box-shadow: -1px 3px 34px -5px rgba(0,0,0,0.37);
                              box-shadow: -1px 3px 34px -5px rgba(0,0,0,0.37); border-radius:25px;padding:50px;" >'.
														//image setting
                            '<div>'.'<img src ="data:image/jpeg;base64,'.base64_encode($row['image']).'" width ="250" height ="200" align = "left" style = "margin-left:20px;margin-right:20px;border:solid black 1px;margin-top:6px;border-radius: 10%;">'.'</div>'.


														//image topic
                            '<div style ="font-size:50px;font-weight:bold; font-family:Arial,Helvetica,sans-serif;margin-top:8px;text-align:center">'.
                            $row["topic"].'</br>'.
                            '</div>'.
														//date
														'<div style ="font-size:20px;font-family:Arial Narrow">'.
														'<i>'.$row["date"].'</br>'.'</i>'.
														'</div>'.

														//image description
														'<div  style ="font-size:18px;font-weight:500;margin-top:15px;";>'.
														'<i>'.$row["description"].'</br>'.'</i>'.
														'</div>'.


                            '<div style = "clear:left;">'.

                            '</div>'.


                            '</br>'.
                          	'</br>'.
                            '</br>'.

					  '</div>'.'</div>';








				}







				$con->close();
				?>

        
 

		

	
		
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>

	</section>

    <footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
					</ul>
					<div class="foot">
					<p class="copyright">
						&copy; Maxim Theme. All rights reserved.
						<div class="credits">
							<!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
              -->
							Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
						</div>
					</p>
				</div>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
	<script src="js/design.js"></script>
	

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>







    