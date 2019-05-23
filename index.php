<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Karateka - Insight  karate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Insight karate is simply the one-stop destination and digital integration of all Karate related activity in Sri Lanka !<br> <br>As a great advocate of the martial art, our main goal at insight karate is to promote Karate in Sri Lanka as a passage to building a healthy lifestyle by improving the following qualities and characteristics of students.">
	<meta name="keywords" content="Insight karate,karate,sri lanka karate,karate clubs,events,karate training,training
	,champion,strength,articles,News Updates,karate sri lanka">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.png">
	<link rel="stylesheet" href="animate.min.css">
	<link rel="stylesheet" href="css/design.css">
	<link rel="stylesheet" href="css/gallery.css">
	<link rel="stylesheet" href="css/foot.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!-- =======================================================
    Theme Name: Maxim
    Theme URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
	======================================================= -->
	<style>
    @import url('https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700');

:root {
  --color: #3c3163;
  --transition-time: 0.5s;
}

* {
  box-sizing: border-box;
}



a {
  color: inherit;
}

.cards-wrapper {
  display: grid;
  justify-content: center;
  align-items: center;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 4rem;
  padding: 4rem;
  margin: 0 auto;
  width: max-content;
}

.card {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  height: 380px;
  width: 290px;
	font-size: 1.5em;
	color: white;
  border-radius: 1em;
  padding: 1em;
  /*margin: 2em;*/
  display: flex;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em rgb(19, 19, 19);
  transition: all, var(--transition-time);
  overflow: hidden;
  border: 10px solid rgb(230, 230, 230);
	text-decoration: none;
	margin-top: 50px;

}



.card:hover {
  transform: rotate(0);
}

.card h1 {
  margin: 0;
  font-size: 25px;
	line-height: 1.2em;
	color: rgb(255, 255, 255);
	text-align: center;
	padding-top: 25px;
	font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
	
}

.card p {
  font-size: 15px;
  font-family: Arial, Helvetica, sans-serif;
  margin-top: 18px;
	line-height: 2em;
	text-align: left;
	
}

.card .tags {
  display: flex;
}

.card .tags .tag {
  font-size: 18px;
  background: rgba(209, 149, 243, 0.5);
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
	transition: all, var(--transition-time);
	margin-top: 20px;
}

.card:hover .tags .tag {
  background: var(--color);
  color: white;
}



.card:before, .card:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card:before {
  background: rgb(204, 204, 204);
  width: 250%;
  height: 250%;
}

.card:after {
  background: rgb(165, 164, 164);
  width: 200%;
  height: 200%;
}

.card:hover {
  color: var(--color);
}

.card:hover:before, .card:hover:after {
  transform: scale(1);
}

.card-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
}

.info {
  font-size: 1.2em;
  display: flex;
  padding: 1em 3em;
  height: 3em;
}

.info img {
  height: 3em;
  margin-right: 0.5em;
}

.info h1 {
  font-size: 1em;
  font-weight: normal;
}

/* MEDIA QUERIES */
@media screen and (max-width: 1285px) {
  .cards-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .cards-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card-grid-space .num {
    margin-left: 0;
    text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .cards-wrapper {
    padding: 4rem 2rem;
  }
  .card {
		max-width: calc(100vw - 4rem);
		margin-left: 90px;
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h1 {
    margin: 0;
	}
	
}



/* popup */

.popup{
  width: 100%;
  height: 100vh;
  display: none;
  position: fixed;
  top: 0;
  right: 0;
}

#popup-article:target{
  display: flex;
}

.popup:before{
  content: "";
  box-sizing: border-box;
  width: 100%;
  background-color: rgb(233, 233, 233);

  position: fixed;
  left: 0;
  top: 50%;
  will-change: height, top;
  animation: open-animation .6s cubic-bezier(0.83, 0.04, 0, 1.16) .65s both;
}

.popup:after{
  content: "";
  width: 0;
  height: 2px;
  background-color: #dbdada;
  will-change: width, opacity;
  animation: line-animation .6s cubic-bezier(0.83, 0.04, 0, 1.16) both;
  position: absolute;
  top: 50%;
  left: 0;
  margin-top: -1px;
}

.popup p {
  font-size: 15px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  margin-top: 0.5em;
  line-height: 2em;
}

@keyframes line-animation{

  0%{
    width: 0;
    opacity: 1;
  }

  99%{
    width: 100%;
    opacity: 1;
  }

  100%{
    width: 100%;
    opacity: 0;
  }  
}

@keyframes open-animation{

  0%{
    height: 0;
    top: 50%;
  }

  100%{
    height: 100vh;
    top: 0;
  }
}

.popup__block{
  height: calc(100vh - 40px);
  padding: 5% 15%;
  box-sizing: border-box;
  position: relative;
  margin: auto;
  overflow: auto;
  animation: fade .5s ease-out 1.3s both;
}

@keyframes fade{

  0%{
    opacity: 0;
  }

  100%{
    opacity: 1;
  }
}

.popup__title{
  font-size: 35px;
	margin: 0 0 1em;
	text-align: center;
	font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.popup__close{
  width: 3.2rem;
  height: 3.2rem;
  text-indent: -9999px;
  
  position: fixed;
  top: 20px;
  right: 20px;
padding-top: 160px;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: contain;
  background-image: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMDAwMDAwIiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4gICAgPHBhdGggZD0iTTE5IDYuNDFMMTcuNTkgNSAxMiAxMC41OSA2LjQxIDUgNSA2LjQxIDEwLjU5IDEyIDUgMTcuNTkgNi40MSAxOSAxMiAxMy40MSAxNy41OSAxOSAxOSAxNy41OSAxMy40MSAxMnoiLz4gICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg==);
}

/* /--popup */
    </style>
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
					<h1 class="brand"><a href="#">KARATEKA</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
								<li><a title="team" href="#about">HOME</a></li>
							<li><a title="team" href="aboutus.php">About us</a></li>
							<li><a title="services" href="eventmain.php">EVENTS</a></li>
							<li><a title="works" href="news.php">KARATE NEWS</a></li>
							<li><a title="blog" href="articles.php">ARTICLES</a></li>
							<li><a title="team" href="clubs.php">clubs</a></li>
						
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->

	<div id="particles-js"></div> <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
			<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
	<div>

	
	<div id="header-wrapper" class="header-slider">			
		<header class="clearfix">	
					<div class="logo">
						<div class="hover13 column data-aos="flip-left"> 
						<figure>
							<img src="img/logo-image.png" alt="" />
						</figure>
					</div>
						</div>
			
			
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider flyIn">
							<ul class="slides">
								<li>
									<p style="font-size:49px" class="home-slide-content">
										<strong>strength</strong> and passion
									</p>
								</li>
								<li>
									<p style="font-size:49px" class="home-slide-content">
											Bring out the <strong>champion</strong>
									</p>
								</li>
								<li>
									<p style="font-size:49px" class="home-slide-content">
											in <strong>you</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>	
		</div>		
		</header>
	</div>


	
	<section>
			<div class="back5">
			<div class="container">
					<div class="back5">
					<h1 class="heading1" data-aos="zoom-in">"The difference between winning and losing is<br> most often not <strong>quitting</strong>."</h1>
					
					<div class="gallery">
				
						<div class="gallery-item hovereffect" data-aos="zoom-out-right">
							<img class="gallery-image img-responsive" src="img/gallery/1.jpg" alt="">
							<div class="overlay">
									<h2></h2>
									<p>
										CONFIDENCE
									</p>
							</div>
						</div>
				
						<div class="gallery-item hovereffect" data-aos="zoom-out-right">
							<img class="gallery-image img-responsive" src="img/gallery/2.jpg" alt="">
							<div class="overlay">
									<h2></h2>
									<p>
										RESPECT
									</p>
							</div>
						</div>
				
						<div class="gallery-item hovereffect" data-aos="zoom-out-left">
							<img class="gallery-image img-responsive" src="img/gallery/3.jpg" alt="">
							<div class="overlay">
									<h2></h2>
									<p>
										PATIENCE
									</p>
							</div>
						</div>
				
						<div class="gallery-item hovereffect" data-aos="zoom-out-left">
							<img class="gallery-image img-responsive" src="img/gallery/4.jpg" alt="">
							<div class="overlay">
									<h2></h2>
									<p>
										HUMILITY
									</p>
							</div>
						</div>
				
					</div>
				
				</div>
	</section>
</div>


<!-- spacer section -->
<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						Karate is action, survival, living; hesitation is paralysis, reaction, mortality.<cite>Soke Behzad Ahmadi</cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
				<img src="img/karate.png">
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->


	<!-- section: team -->
	<section id="about" class="section">
		<div class="container">
			<h4 data-aos="fade-right">Welcome Karateka</h4>
			<div class="row">
				<div class="span4 offset1">
					<div  data-aos="zoom-in">
						<h2>Insight <strong>karate</strong></h2>
						<p class="para1">
							Insight  karate is simply the one-stop destination and digital integration of all Karate related activity in Sri Lanka !
							<br>
							As a great advocate of the martial art, our main goal at insight karate is to promote Karate in Sri Lanka as a passage to building a healthy lifestyle
						</p>
						<a href="#" class="btn btn-danger button">more</a>
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter" data-aos="zoom-out-left">
						<div class="hover13 column">
						<figure>
						<img src="img/icons/creativity.png" alt=""  style="-webkit-box-shadow: 18px 18px 79px -8px rgba(0,0,0,0.75);
						-moz-box-shadow: 18px 18px 79px -8px rgba(0,0,0,0.75);border-radius: 8%;
						box-shadow: 18px 18px 79px -8px rgba(0,0,0,0.75);"/>
						</figure>
					</div>
					</div>	
				</div>
			</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- end section: team -->
<section style="padding-top:80px">
	<div class="gal" data-aos="fade-left">Gallery</div>
	<hr class="line" data-aos="fade-up">
	<br><br><br>
	 <!-- Source: https://www.jssor.com -->
	 <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
	 <script type="text/javascript">
			 jssor_1_slider_init = function() {

					 var jssor_1_SlideshowTransitions = [
						 {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
						 {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
						 {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
						 {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InQuint,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
						 {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
						 {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
						 {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
						 {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
						 {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
						 {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
						 {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
						 {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
						 {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
						 {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
					 ];

					 var jssor_1_options = {
						 $AutoPlay: 1,
						 $SlideshowOptions: {
							 $Class: $JssorSlideshowRunner$,
							 $Transitions: jssor_1_SlideshowTransitions,
							 $TransitionsOrder: 1
						 },
						 $ArrowNavigatorOptions: {
							 $Class: $JssorArrowNavigator$
						 },
						 $ThumbnailNavigatorOptions: {
							 $Class: $JssorThumbnailNavigator$,
							 $Rows: 2,
							 $SpacingX: 14,
							 $SpacingY: 12,
							 $Orientation: 2,
							 $Align: 156
						 }
					 };

					 var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

					 /*#region responsive code begin*/

					 var MAX_WIDTH = 960;

					 function ScaleSlider() {
							 var containerElement = jssor_1_slider.$Elmt.parentNode;
							 var containerWidth = containerElement.clientWidth;

							 if (containerWidth) {

									 var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

									 jssor_1_slider.$ScaleWidth(expectedWidth);
							 }
							 else {
									 window.setTimeout(ScaleSlider, 30);
							 }
					 }

					 ScaleSlider();

					 $Jssor$.$AddEvent(window, "load", ScaleSlider);
					 $Jssor$.$AddEvent(window, "resize", ScaleSlider);
					 $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
					 /*#endregion responsive code end*/
			 };
	 </script>
	 <style>
			 /*jssor slider loading skin spin css*/
			 .jssorl-009-spin img {
					 animation-name: jssorl-009-spin;
					 animation-duration: 1.6s;
					 animation-iteration-count: infinite;
					 animation-timing-function: linear;
			 }

			 @keyframes jssorl-009-spin {
					 from { transform: rotate(0deg); }
					 to { transform: rotate(360deg); }
			 }

			 /*jssor slider arrow skin 093 css*/
			 .jssora093 {display:block;position:absolute;cursor:pointer;}
			 .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
			 .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
			 .jssora093:hover {opacity:.8;}
			 .jssora093.jssora093dn {opacity:.6;}
			 .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

			 /*jssor slider thumbnail skin 101 css*/
			 .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
			 .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
			 .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
			 .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
			 .jssort101 .p:hover{padding:2px;}
			 .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
			 .jssort101 .p:hover.pdn{padding:0;}
			 .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
			 .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
			 .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
			 .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
			 .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
	 </style>
	 <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;" data-aos="flip-left">
			 <!-- Loading Screen -->
			 <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
					 <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
			 </div>
			 <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
					 <div>
							 <img data-u="image" src="imggal/1.jpg" />
							 <img data-u="thumb" src="imggal/1r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/2.jpg" />
							 <img data-u="thumb" src="imggal/2r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/3.jpg" />
							 <img data-u="thumb" src="imggal/3r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/4.jpg" />
							 <img data-u="thumb" src="imggal/4r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/5.jpg" />
							 <img data-u="thumb" src="imggal/5r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/6.jpg" />
							 <img data-u="thumb" src="imggal/6r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/7.jpg" />
							 <img data-u="thumb" src="imggal/7r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/8.jpg" />
							 <img data-u="thumb" src="imggal/8r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/9.jpg" />
							 <img data-u="thumb" src="imggal/9r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/10.jpg" />
							 <img data-u="thumb" src="imggal/10r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/11.jpg" />
							 <img data-u="thumb" src="imggal/11r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/12.jpg" />
							 <img data-u="thumb" src="imggal/12r.jpg" />
					 </div>
					 <div>
							 <img data-u="image" src="imggal/13.jpg" />
							 <img data-u="thumb" src="imggal/13r.jpg" />
					 </div>

					 <div>
						<img data-u="image" src="imggal/14.jpg" />
						<img data-u="thumb" src="imggal/14r.jpg" />
				</div>
				<div>
					<img data-u="image" src="imggal/15.jpg" />
					<img data-u="thumb" src="imggal/15r.jpg" />
			</div>
			 </div>
			 <!-- Thumbnail Navigator -->
			 <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
					 <div data-u="slides">
							 <div data-u="prototype" class="p" style="width:99px;height:66px;">
									 <div data-u="thumbnailtemplate" class="t"></div>
									 <svg viewbox="0 0 16000 16000" class="cv">
											 <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
											 <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
											 <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
									 </svg>
							 </div>
					 </div>
			 </div>
			 <!-- Arrow Navigator -->
			 <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
					 <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
							 <circle class="c" cx="8000" cy="8000" r="5920"></circle>
							 <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
							 <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
					 </svg>
			 </div>
			 <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
					 <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
							 <circle class="c" cx="8000" cy="8000" r="5920"></circle>
							 <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
							 <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
					 </svg>
			 </div>
	 </div>
	 <script type="text/javascript">jssor_1_slider_init();</script>
	 <!-- #endregion Jssor Slider End -->
</section>

<br><br>
<br>
<br>
<br>
<br>
	<section id="articles" >
	
		<div class="article">
			<div class="art" data-aos="fade-down-right">Articles</div>
			<hr class="line" data-aos="fade-up">

			<div class="container">
					<div class="row">
						<div class="span6 alignright" data-aos="zoom-in">
								<div class="card-grid-space">
										<a class="card open-popup" href="#popup-article"
												style="--bg-img: url(article-images/cardimg1.jpg)">
												<div>
														<h1>4 MAIN STYLES OF KARATE</h1>
														<p>Karate dates back hundreds of years, but is still going strong, and for good reason. First
																beginning on…</p>
													
														<div class="tags">
																<div class="tag">Read More</div>
														</div>
												</div>
										</a>
								
								</div>
							</blockquote>
						</div>
						<div class="span6 read" data-aos="fade-up"
						data-aos-duration="3000">
								<h1 class="more1"><a href="articles.php" class="link2">Read More Karate <br>Articles...</a></h1>
								<br>
								<br>
								<br>
								<p class="articlepara">"Force has no place where there is need of skills. Get yourself skilled with best karate articles." </p>
						</div>
					</div>
			
					</div>
				</div>
			
	
				 <div id="popup-article" class="popup">
            <div class="popup__block">
                <h1 class="popup__title">THE 4 MAIN STYLES OF KARATE, AND WHO INVENTED THEM!</h1>
                <p>Karate dates back hundreds of years, but is still going strong, and for good reason. First beginning
                    on the trading island of Okinawa, the word Karate was used to describe a weaponless self-defense
                    style that at the time was very important to know – thanks to all the pirates, thieves, and dodgy
                    locals.</p>
                <img src="article-images/shito2.jpeg" width="900px" height="400px" style="width: 100%; height: auto; border-radius: 25px; ">
                <h3>1. Wado-ryu</h3>
                <p>Created by Hienori Otsuka in 1939, this type is relatively new. It is heavily influenced by Gichin
                    Funakoshi Jiu-jitsu and traditional Okinawan karate techniques. The name translates to “way of
                    harmony”, describing the basic movements associated with Jiu-jitsu and focuses on being able to
                    avoid attacks rather than fighting back. The evading fluid and mobile techniques focus on using as
                    little force as possible, avoiding hard contact sparring, leaving many to describe Wado-ryu as more
                    of a spiritual discipline rather than a fighting discipline.

                    The use of Taisabaki (body shifting, or body management) helps minimize an opponent’s attack, and
                    Wado-ryu also uses a shorter stance that what is seen in other styles.<br>
                    <img src="article-images/wado-ryu.jpg" alt=""></p>
                <h3>2. Goju-ryu</h3>
                <p>Founded in 1930 by Chojun Miyagi, this has now become one of the major schools today. Miyagi decided
                    it was necessary to open a new school and focus on more hard-hitting techniques. As a result, he
                    decided to name his new art Goju-ryu Karate, meaning “hard and soft”, as the tradition took
                    inspiration from the precepts of traditional Chinese Kempo. The style implements soft circular
                    blocking techniques that combo perfectly with powerful counter-strike attacks.

                    Miyagi was the student of the legendary Sensei, Kanryo Higaonna, well known for introducing eight
                    specific forms he learnt from Chinese martial arts into the Karate that he taught to his Japanese
                    students.<br>
                </p><img src="article-images/goju-ryu.jpg" alt="">
                <h3>3. Shito-ryu</h3>
                <p>The name of the style “Shito-ryu” is derived from Kenwa Mabuni Sensei’s two teachers: Ankō Itosu, a
                    famous teacher of Shuri-te karate, and Kanryō Higaonna, a prominent teacher of Naha-te karate. This
                    tradition was introduced in 1928 and utilizes an estimated 50 katas! Technique is the key to this
                    style, and focuses even more on power and heavy strikes – one of the more aggressive schools of
                    thought in Karate. It explores both internal and external martial arts, combining powerful stances
                    we see in things like Shotokan, as well as bringing the ki inside and focusing on breathing power,
                    similar to that of Goju-ryu.</p><br>
                <img src="article-images/shito-ryu.jpg" alt="">
                <h3>4. Shotokan</h3>
                <p>Shotokan is probably one of the main sub-styles of the Karate we see today. Founded by Gichin
                    Funakoshi, it is considered to be the foundation of modern Karate, and Funakoshi is often credited
                    as one of modern-day karate’s founding masters. Born in the birthplace of Karate, Okinawa, in 1868,
                    he studied with one of the most well-respected karate masters of the time – Yasutsune Azato. After
                    moving to Tokyo in 1921, he brought all his knowledge with him and infected the mainland with his
                    style of fighting.

                    The name “Shotokan” was created by Funakoshi himself, mimicking the pen-name he used to use to sign
                    poems in his younger days. The style makes use of linear techniques and wide stances, bringing more
                    balance and power to the fighter. It is designed to deliver quick, powerful strikes while also being
                    perfectly adapted to strong defense.</p><br>
                    <img src="article-images/shotokan.jpg" alt="">
								<a href="#" class="popup__close">close</a>
								

							
						</div>
					
        </div>
				
			</div>
			
		</div>

	</section>
	<br><br>
<br>
<br>
<br>
<br>
	
	<!-- spacer section -->	
	<div  style="padding-top:180px;padding-bottom:150px">
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter" data-aos="zoom-in-up">
					<blockquote class="large">
						Our ultimate Goal is to take Sri Lankan Karate to the <br>next level !

					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight">
					<i class="icon-trophy icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
</div>

<div data-aos="fade-right"
     data-aos-offset="300"     data-aos-easing="ease-in-sine">
<img src="img/banner.png">
</div>

<div style="padding-top:180px;">

</div>
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
	<script src="js/gallery.js"></script>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
