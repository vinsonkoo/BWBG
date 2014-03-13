<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 


<?php
	$page = $_GET['page'];
?>

<html> 
 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.1.0/grids-min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="images/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
    <script>
    	//$('body').css('display', 'none');
        $(document).ready(function() {
        	$('body').fadeIn(500);}
        );
    </script>


	<title>Black Women for Black Girls Giving Circle |
		<?php
			switch($page)
			{
				case "about":
					echo "About";
					break;
				case "programs":
					echo "Signature Programs";
					break;
				case "getinvolved":
					echo "Get Involved";
					break;
				case "announcements":
					echo "Announcements";
					break;
				case "donate":
					echo "Donate";
					break;
				case "contact":
					echo "Contact";
					break;
				default:
					echo "Home";
					break;

			}

			?>

	</title>




</head>

<body style="display: none;">

	<div class="pure-g-r">
		<div class="pure-u-1">

			<div class="headerbox">
				<p>Believe in a Black Girl &trade;</p>
			</div>
		</div>
	</div>

	<div class="wrapper">

		<div class="pure-g-r">
			<div class="pure-u-1-5">
				<a href="main.php"><div class="header"><img src="images/bwbg_logo_color_small_white.png"></div></a>
			</div>
			<div class="pure-u-4-5">
				<div class="social-media-icons">
					<a href="http://www.facebook.com/pages/Black-Women-for-Black-Girls/133227723521088" target="_blank"><img src="images/icon_facebook_pink.png"></a>
					<a href="https://twitter.com/BW4BG" target="_blank"><img src="images/icon_twitter_pink.png"></a>
					<a href="http://instagram.com/BW4BG" target="_blank"><img src="images/icon_instagram_pink.png"></a>
				</div></a>
				

				<div class="navigation">
					<div class="pure-g-r">
						<div class="pure-u-1-8">
							<div class="menu_item">
								<a href="main.php?page=about">
									<span class="about">About</span>
								</a>
							</div>
						</div>
						<div class="pure-u-1-6">
							<div class="menu_item">
								<a href="main.php?page=programs">
									<span class="programs">Programs</span>
								</a>
							</div>
						</div>
						<div class="pure-u-1-5">
							<div class="menu_item">
								<a href="main.php?page=getinvolved">
									<span class="getinvolved">Get Involved</span>
								</a>
							</div>
						</div>
						<div class="pure-u-1-4">
							<div class="menu_item">
								<a href="main.php?page=announcements">
									<span class="about">Announcements</span>
								</a>
							</div>
						</div>
						<div class="pure-u-1-8">
							<div class="menu_item">
								<a href="main.php?page=donate">
									<span class="donate">Donate</span>
								</a>
							</div>
						</div>
						<div class="pure-u-1-8">
							<div class="menu_item">
								<a href="main.php?page=contact">
									<span class="contact">Contact</span>
								</a>
							</div>
						</div>
					</div> <!-- end of pure-g-r -->
				</div> <!-- end navigation -->
			</div> <!-- end pure-u-4-5 -->
		</div> <!-- end of pure-g-r -->


		

			<div class="content">

				<?php
				switch($page)
				{
					case "programs":
						include("programs.php");
						break;
					case "about":
						include("about.php");
						break;
					case "getinvolved":
						include("getinvolved.php");
						break;
					case "announcements":
						include("announcements.php");
						break;
					case "donate":
						include("donate.php");
						break;
					case "contact":
						include("contact.php");
						break;
					default:
						include("home.php");
						break;
				}
				?>



			</div> <!-- end content -->
		</div> <!-- end wrapper -->


<div class="wrapper">
	<div class="footer">
		<div class="pure-g-r">

			<!-- <div class="pure-u-1-3">
				<div class="twitter">
					<a href="https://twitter.com/BW4BG"><img src="images/icon_twitter_pink.png">
					<h3>ON TWITTER</h3></a>
				</div>
			</div> -->

			<div class="pure-u-1-2">
				<div class="contact">
					<h3><a href="index.php?page=contact">CONTACT US</a></h3>
					<p>Would you like to get involved in the BWBG Giving Circle efforts? We'd love to hear from you.</p>
					<p><a href="mailto:info@blackwomenforblackgirls.org">info@blackwomenforblackgirls.org</a></p>
				</div>
			</div>

			<div class="pure-u-1-2">
				<div class="followUs">
					<h3>FOLLOW US</h3>
					<ul class="social-media-links">
						<li>
							<a href="http://www.facebook.com/pages/Black-Women-for-Black-Girls/133227723521088" target="_blank">
								<img src="images/icon_facebook_black.png">
								<span>FACEBOOK</span></a>
							<div style="clear: both;"></div>
						</li>
						<li>
							<a href="https://twitter.com/BW4BG" target="_blank">
								<img src="images/icon_twitter_black.png">
								<span>TWITTER</span></a>
							<div style="clear: both;"></div>
						</li>
						<li>
							<a href="http://instagram.com/BW4BG" target="_blank">
								<img src="images/icon_instagram_black.png">
								<span>INSTAGRAM</span></a>
							<div style="clear: both;"></div>
						</li>
					</ul>
				</div>
			</div>

		</div> <!-- end of pure-g-r -->
		
	</div> <!-- end of footer -->

</div> <!-- end of wrapper -->


	<div class="pure-g-r">
		<div class="pure-u-1">

			<div class="footerbox">

			</div>
		</div>
	</div>







</body>

</html>