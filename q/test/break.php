<?php
session_start();
$connect=mysqli_connect('localhost','root','','archetype');
if(!isset($_SESSION["tid"]))
{
	echo "<script> location.href='login.php' </script>";
}
else
{
	$tid=$_SESSION["tid"];
}
$select="SELECT * FROM techquizusers WHERE tid='$tid'";
if($result=mysqli_query($connect,$select))
{
	while($row=mysqli_fetch_assoc($result))
	{
		$name1=$row["name1"];
		$name2=$row["name2"];
		$score1=$row["score1"];
		if($name2=="")
		{
			$name=$name1;
		}
		else
		{
			$name=$name1." & ".$name2;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<title>Archetype De Future(TechQuiz)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Activity Points Portal" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../style/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../style/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="../style/css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="../style/css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="../style/css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="../style/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="../style/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="../style/js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="../style/js/owl.carousel.js"></script>  
<script src="../style/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<style>
.menu {
    border: 0px;
    padding: 60px;
    background-color : white;
}
.clearfix1 {
    overflow: auto;
}
.option {
    float: left;
}
</style>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="../style/js/move-top.js"></script>
<script type="text/javascript" src="../style/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="../style/js/bootstrap.js"></script>	
</style>
</head>
<Style>
    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button3 {padding: 14px 40px;}
</Style>
<div class="header-two" style="background-color:#560505"><!-- header-two -->
			<div class="container" >
				<div class="header-logo">
					<h1><font size="6" color="#ffffff"><a href=""><span>Archetype De Future</span></a></font></h1>
					
				</div>		
				
				<div class="header-search">
				<p style="font-family:Arial, Helvetica, sans-serif"><font size="3">Welcome <?=$name?></font></p>
				</div>
				
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
<div class="login-page">
		<div class="container"> 
		<?php
		if($score1<13)
		{
			?>
			<h3 class="w3ls-title w3ls-title1">THANK YOU FOR YOUR PARTICIPATION</h3> 			
			<div class="login-body">
				<img src="dsmile.png" width="200px" height="200px">
				<p></p>
				<p></p>
				<h3>SORRY YOU DIDN'T QUALIFY FOR THE ROUND 2</h3>
			</div> 
		<?php
		}
		else
		{
		?>	
		<h3 class="w3ls-title w3ls-title1">CONGRATULATIONS</h3> 			
			<div class="login-body">
				<img src="smile.png" width="200px" height="200px">
				<p></p>
				<p></p>
				<h3>YOU HAVE QUALIFIED FOR ROUND 2</h3>
				<a href="exam2.php">Proceed for Round 2</a>
			</div> 
		<?php
		}
		?>
		</div>
	</div>

				
	<?php
	require '../footer.php';
	?>
	