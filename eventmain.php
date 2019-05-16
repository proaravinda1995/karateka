<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Karateka - Insight  karate</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
		<link rel="stylesheet" href="css/calendar.css">
	
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
.responsive {
  width: 100%;
  max-width: 400px;
  height: auto;;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 80px; /* Location of the box */
	top: 0;		
  width: 100%; /* Full width */
  height: 410px; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.1); /* Black w/ opacity */
	border-radius: 25px;
}

/* Modal Content */
.modal-content {
  background-color: #fafafa;
	margin: auto;
  padding: 20px;
  border: 1px solid #888;
	width: 350px;
	height: 300px;
	border-radius: 25px;
  
}

/* The Close Button */
.close {
  color: #424242;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.button1{
	border:0;
  background-color:#333;
  margin:20px auto;
  text-align:center;
  padding:10px;
  outline:none;
  color:rgb(255, 255, 255);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  border-radius:24px;
  transition:0.25s;
  cursor:pointer;
  width:100px;
  padding: 1% 3%;
  border: none;
}

.button1:hover{
	color: rgb(70, 70, 70);
  background-color: white;
  border: 1px solid rgb(71, 71, 71);
  border-radius: 5px;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
	padding: 10px;
	grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));



}

.grid-container > div {
	background-color:  rgba(240, 240, 240, 0.75);
  text-align: center;
  padding: 20px 0;
	font-size: 30px;
}

</style>
	
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
			<h1 class="brand"><a href="index.html">KARATEKA</a></h1>
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



		<section id="hero1" class="hero" style="background: url(img/event.jpeg);background-size:cover;
		background-position:center center;
		background-attachment:fixed;">
			<div class="inner">
				<div class="copy">
				<h1 class="para1" data-aos="fade-up-right">Karate Events</h1>
				<div class="logo">
						<div class="hover13 column" data-aos="zoom-in"> 
						<figure>
							<img src="img/logo-image.png" alt="" />
						</figure>	
			</div>
			</div>
				</div>
		</section>

       

        
 <!--calender-->
       
 <p class="txt" data-aos="zoom-in">Karate Event Calender</p>
		  
 <section>   
	 
	 <div class="calback">
	<div class="container" style="padding:10%;">	
	<div class="page-header">
					
			<div class="pull-right form-inline">
				<div class="btn-group">
					<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
					<button class="btn btn-default active" data-calendar-nav="today">Today</button>
					<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-warning" data-calendar-view="year">Year</button>
					<button class="btn btn-warning active" data-calendar-view="month">Month</button>
					<button class="btn btn-warning" data-calendar-view="week">Week</button>
					<button class="btn btn-warning" data-calendar-view="day">Day</button>
				</div>
			</div>
			<h3></h3>
			
		<div class="row">
			<div class="col-md-9">
				<div id="showEventCalendar"></div>
			</div>
			<div class="col-md-3">
				<h4>All Events List</h4>
				<ul id="eventlist" class="nav nav-list"></ul>
			</div>
		</div>	
		
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>
	<script type="text/javascript" src="js/events.js"></script>
	<?php include('footer.php');?>
	
	
	</section>				


<div>
<p class="txt" data-aos="zoom-in">Upcoming Events</p>
</div>

			
<section>

<?php

				$servername  = "localhost";
				$username = "root";
				$password = "";
				$dbname = "karateka";

				$con = new mysqli($servername,$username,$password,$dbname);



				$sql = "select eventid,title,date,time,venue,description,image from addevent ORDER BY eventid desc";
				$result = $con->query($sql);
					

			/*	echo '<div style="overflow-x:auto;padding-left:80px; padding-top:80px">'.'<table style="width:1200px;" cellpadding="15">'.'<tbody>'.'<tr style=" border-top: 12px solid transparent;
				border-bottom: 12px solid transparent;">';
		
	$x = 0;
*/		
				echo '<div class="grid-container">';

				while( $row = mysqli_fetch_array($result)){

			echo '<section id="blog" class="section">'.
					'<div>'.
						
					
						'<div>'.
							'<div class="span3">'.
								'<div class="home-post">'.
									'<div class="post-image">'.
										'<img class="max-img"  src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>'.
								'</div>'.
									'<div class="post-meta">'.
										'<i class="icon-file icon-2x">'.'</i>'.
										'<span class="date">'.$row['date'].'</span>'.
									'</div>'.
									'<div class="entry-content">'.
										'<h5>'.'<strong>'.'<textarea rows="3" style=" border-style: none; resize: none;
										border-color: Transparent; ">';echo $row['title']; echo '</textarea>'.'</strong>'.'</h5>'.
										'<p>'.
										$row['time'].
										'</p>'.
										'<p>'.
										$row['venue'].
										'</p>'.
										'<button id="myBtn" class="button1">View More.. </button>'.
									'</div>'.
								'</div>'.
							'<div>'.
				
						'</div>'.
		
					'</div>'.
				'</section>'

				.'<div id="myModal" class="modal responsive">'
				
					
					.'<div class="modal-content">'
						.'<span class="close">&times;</span>'
						.'<p>'.$row['description'].'</p>'
					.'</div>'
				
				.'</div>';
				}

				echo '</div>';
					
			/*	if($x == 3){
					echo '<tr>'.'<td style="vertical-align: top;text-align: center;">';
					$x=0;
			}else{
				echo '<td style="vertical-align: top;text-align: center;"width=50%>';
			}
					$x++;

		

				echo '<div data-aos="flip-left" style="height:570px;width:320px;border-radius: 18px;-webkit-box-shadow: -1px 17px 50px -6px rgba(41,41,41,0.69);
				-moz-box-shadow: -1px 17px 50px -6px rgba(41,41,41,0.69);
				box-shadow: -1px 17px 50px -6px rgba(41,41,41,0.69);padding:2%;padding-top:40px;">'.'<img src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"style="width:70%;height:60%;object-fit:cover;border-radius: 10px;>'.'<hr>'.'<br/>'.'<div>'.'<hr style="padding-top:30px;">'.
				'<p style="font-size:22px; font-family: Roboto Slab;">'.'<b>'.$row['title'].'<b>'.
				'</p>'.
				'</br>'.'<div style="font-size:17px;color:#4B515D;font-family:Times;text-align:left;">'.'<strong>'.'Date  :  </strong>'.'<i>'.$row['date'].'</i>'.'</div>'.'</br>'
				.'<div style="font-size:17px;color:#4B515D;font-family:Times;text-align:left;">'.'<strong>'.'Time  :  </strong>'.'<i>'.$row['time'].'</i>'.'</div>'.'</br>'
				.'<div style="font-size:17px;color:#4B515D;font-family:Times;text-align:left;">'.'<strong>'.'Venue  :  </strong>'.'<i>'.$row['venue'].'</i>'.'</div>'.'</br>'
				.'<button id="myBtn" class="button1">View More.. </button>'.'</br>'.'</br>'.'</br>'.'</div>'.'</div>'.'</td>'
			
				.'<div id="myModal" class="modal responsive">'
				
					
					.'<div class="modal-content">'
						.'<span class="close">&times;</span>'
						.'<p>'.$row['description'].'</p>'
					.'</div>'
				
				.'</div>';
	
			}
			echo '</tr>'.'</tbody>'.'</table>'.'</div>';*/



				$con->close();
				?>

</section>

		
		<section id="hero2" class="hero" style="background: url(img/hero.jpeg);  background-size:cover;
  background-position:center center;
  background-attachment:fixed;">
			<div class="inner">
				<div class="copy">
				<p class="txt2">"True strength is in the soul and spirit,<br> not in the muscles."</p>
				
				</div>
			</div>
		</section>
			
		<section class="content">
			<div class="inner">
				<div class="copy">
				<h1>An inspiring quote</h1>
					
				</div>
			</div>
		</section>
		
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
	
	<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

</html>







    