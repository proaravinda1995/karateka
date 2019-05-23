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


<!-- Compiled and minified JavaScript -->


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
					<li><a title="team" href="aboutus.php">About us</a></li>
					<li><a title="services" href="eventmain.php">EVENTS</a></li>
					<li><a title="works" href="news.php">KARATE NEWS</a></li>
					<li><a title="blog" href="articles.php">ARTICLES</a></li>
					<li><a title="team" href="#">clubs</a></li>
			
					
				</ul>
			</nav>
		</div>
	</div>
</div>
</div>



		<section id="hero1" class="hero" style="background: url(img/clubs.jpg);background-size:cover;
		background-position:center center;
		background-attachment:fixed;">
			<div class="inner">
				<div class="copy">
				<h1 class="para1" data-aos="fade-right">Clubs and Trainee</h1>				
			
				<div class="logo">
						<div class="hover13 column" data-aos="zoom-in"> 
						<figure>
							<img src="img/logo-image.png" alt="" />
						</figure>	
			</div>
			</div>
				</div>
		</section>

		
       
<section>
        <?php


				$servername  = "localhost";
				$username = "root";
				$password = "";
				$dbname = "karateka";

				$con = new mysqli($servername,$username,$password,$dbname);



				$sql = "select id,coach,style,venue,schedule,contact,description,image from clubs ORDER BY id desc";
				$result = $con->query($sql);


			echo '<div style="overflow-x:auto; padding-top:80px">'.'<table width="100%" align="center">'.'<tbody>'.'<tr>';

	$x = 0;


				while( $row = mysqli_fetch_array($result)){

			if($x == 2){
					echo '<tr>'.'<td align="center" width="50%" style="vertical-align: top;">';
					$x=0;
			}else{
				echo '<td align="center" width="50%" style="vertical-align: top;">';
			}
					$x++;

                                                                                                                                                                                                                                 


	echo  '<div  data-aos="flip-right" style="border: 1px solid #2E2E2E; width:400px; height 800px;margin:40px;border-radius: 10px; word-wrap: break-word;margin-top:80px;">'.'<img src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"style="width:400px;height:350px;object-fit:cover;border-radius: 10px;>'.'<hr>'.'<br/>'.'<div>'.'<hr style="padding-top:30px;">'.
      '</br>'.'<div style="font-size:17px;color:#4B515D;font-family:Times;text-align:left; margin-left:40px;margin-top:30px;">'.'<strong>'.'Coach  :  </strong>'.'<i>'.$row['coach'].'</i>'.'</div>'.'</br>'
      .'<div style="font-size:17px;color:#4B515D;font-family:Times;text-align:left;margin-left:40px">'.'<strong>'.'Style  :  </strong>'.'<i>'.$row['style'].'</i>'.'</div>'.'</br>'
        	.'<div style="font-size:17px;color:#4B515D;font-family:Times;text-align:left;margin-left:40px">'.'<strong>'.'Venue  :  </strong>'.'<i>'.$row['venue'].'</i>'.'</div>'.'</br>'
          .'<div style="font-size:17px;color:#4B515D;font-family:Times;text-align:left;margin-left:40px">'.'<strong>'.'Schedule  :  </strong>'.'<i>'.$row['schedule'].'</i>'.'</div>'.'</br>'
          .'<div style="font-size:17px;color:#4B515D;font-family:Times;text-align:left;margin-left:40px">'.'<strong>'.'Contact  :  </strong>'.'<i>'.$row['contact'].'</i>'.'</div>'.'</br>'
          .'<div style="font-size:25px;color:#4B515D;font-family:Arial, Helvetica, sans-serif;text-align:center;margin-left:0px">'.'"'.$row['description'].'"'.'</div>'.'</br>'.'</div>'.'</td>';



			}
			echo '</tr>'.'</tbody>'.'</table>'.'</div>';



				$con->close();


?>

 

	
		</section>

		

	
		
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>

	</section>

    <footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
				<ul class="social-networks">
						<li><a href="https://www.facebook.com/Insight-Karate-370294930277198/?ref=br_rs"><i class="icon-circled icon-bgdark icon-facebook icon-2x"></i></a></li>			
					</ul>
					
					<p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  font-size: 15px">
						&copy; Insight Karate,All rights reserved.
					</p>
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







    