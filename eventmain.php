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
			<h1 class="brand"><a href="index.php">KARATEKA</a></h1>
			<!-- navigation -->
			<nav class="pull-right nav-collapse collapse">
				<ul id="menu-main" class="nav">
						<li><a title="team" href="index.php">HOME</a></li>
					<li><a title="team" href="aboutus.php">About us</a></li>
					<li><a title="services" href="#">EVENTS</a></li>
					<li><a title="works" href="news.php">KARATE NEWS</a></li>
					<li><a title="blog" href="articles.php">ARTICLES</a></li>
					<li><a title="team" href="clubs.php">clubs</a></li>
					<li><a title="contact" href="index.php#contact">Contact us</a></li>
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
					

		
				echo '<div class="grid-container">';

				while( $row = mysqli_fetch_array($result)){

			echo '<section>'.
					'<div>'.
						
					
						'<div>'.
							'<div style="padding:3%;" data-aos="zoom-in-down">'.
								'<div class="home-post" style="width:350px;height:700px;border: 1px solid #3F729B;">'.
									'<div class="post-image">'.
										'<img class="max-img" style="width:480px; height:280px; object-fit:cover;
										margin-left: auto;
										margin-right: auto;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>'.
								'</div>'.
									'<div class="post-meta">'.
										'<i class="icon-file icon-2x">'.'</i>'.
										'<span class="date">'.$row['date'].'</span>'.
									'</div>'.
									'<div class="entry-content">'.
										'<h5 style=" text-align:center;">'.'<strong>'.$row['title'].'</strong>'.'</h5>'.										
										'</p>'.
										'<p style="	font-size: 18px;">'.
										$row['venue'].
										'</p>'.
										'<p style="	font-size: 23px;
										font-family: Times, serif;
										color: #535353; text-align:left;">'.
										$row['time']
										.'<div>'
										.'<p style="font-family:Segoe UI;font-size:15px; word-wrap: break-word;text-align:center;">'.$row['description'].'</p>'.'</div>'.
									'</div>'.
								'</div>'.
							'<div>'.
				
						'</div>'.
		
					'</div>'.
				'</section>';
			
				}

				echo '</div>';
					
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
			


<div data-aos="fade-up"
     data-aos-duration="3000">
		<?php


$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "karateka";

$con = new mysqli($servername,$username,$password,$dbname);

$query = "select * from demo order by id desc";

$result=$con->query($query);

echo '<div style = "font-family: Times New Roman, Times, serif;
font-size: 60px;
color: #333;
text-align: center;
padding-top: 130px;">'."Updated Draws".'</div>';



$files = scandir("admin/pages/uploads");
for ($a = 2; $a < count($files); $a++)
{
		?>
		<p>
				<?php $row = mysqli_fetch_array($result); ?> 
			

			<?php 	echo '<div style = "padding-bottom:10px;padding-top:20px">'.'<div style = "padding: 8px 0;
				background: #f4f4f4;
				border-color: #EEE #EEE #EEE #645353;
				border-style: solid;
				border-width: 1px 1px 1px 3px;
				padding-left: 4px;
				margin-top: 0;
				font-size: 1.385rem;
				line-height: 1.54rem;
				margin-right:100px;
				margin-left:20px;">'.$row['Date']." - ".$row['filename'].'</br>'.'</div>'.'</br>'.
				'<div style = "margin-left:20px; font-size:17px;">'.'<a href="admin/pages/uploads/'.$files[$a].'"download="'.$files[$a].'">
				Download 
				</a>'.'</br>'.'</br>'.'</div>'.'</div>'.'<div  style = "padding-left:16px;padding-right:100px;">'.'<hr/>'.'</div>';
			
				?>
			
			
		</p>
		<?php
}

/*while( $row = mysqli_fetch_array($result)){






	echo '<div style = "padding-bottom:10px;padding-top:20px">'.'<div style = "padding: 8px 0;
				background: #f4f4f4;
				border-color: #EEE #EEE #EEE #645353;
				border-style: solid;
				border-width: 1px 1px 1px 3px;
				padding-left: 4px;
				margin-top: 0;
				font-size: 1.385rem;
				line-height: 1.54rem;
				margin-right:100px;
				margin-left:20px;">'.$row['Date']." - ".$row['filename'].'</br>'.'</div>'.'</br>'.'<div style = 	"margin-left:20px; font-size:17px;">'.'<a href = "download.php?id='.$row['id'].'" style = "text-decoration: none;color: 	#808080;">Download </a>'.'</br>'.'</br>'.'</div>'.'</div>'.'<div  style = "padding-left:16px;padding-right:100px;">'.'<hr/>'.'</div>';



}

*/

?>
</div>

		
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







    