<?php
include '../connect.php' ;
session_start();
if(!isset($_SESSION["team"]))
{
	echo "<script> location.href='../login.php'; </script>";
}
else
{
	$team=$_SESSION["team"];
	$select="SELECT * FROM user WHERE team='$team'";
	if($result=mysqli_query($connect,$select))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$name=$row["name1"]."_".$row["name2"];
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<title>Coding Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<link href="css/jquery-linedtextarea.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider --> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="js/owl.carousel.js"></script>  
<script src="js/jquery-linedtextarea.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
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
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
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
<script src="js/bootstrap.js"></script>	
</style>
</head>
<div class="agileits-modal modal fade" id="timeover" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa" aria-hidden="true"></i> <font face="Comic Sans" >TIME OVER</font> </h4>
				</div>
				
			</div>
		</div>
</div>

<script>
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
			hours = parseInt(timer / 3600, 10)
			t=timer % 3600
            minutes = parseInt(t / 60, 10)
            seconds = parseInt(t % 60, 10);
			hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
			if(timer > 0)
			{
            display.textContent = hours + " hr " + minutes + " min " + seconds+ " sec ";

			}
            if (timer-- < 0) {
				$('#timeover').modal('show');
				location.href='finish.php';
				display.textContent = "TIME OVER";
                //clearInterval(timer);
            }
        }, 1000);
    }
	function autosave(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
			hours = parseInt(timer / 3600, 10)
			t=timer % 3600
            minutes = parseInt(t / 60, 10)
            seconds = parseInt(t % 60, 10);
			hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
			if(timer > 0)
			{
            display.textContent = "Auto save in "+seconds+" seconds";
			}
            if (timer-- < 0) {
				display.textContent = "Code Saved . Next Auto Save in 5 seconds";
				//nextautosave(5,display);
				return;
            }
        }, 1000);
    }
	function nextautosave(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
			hours = parseInt(timer / 3600, 10)
			t=timer % 3600
            minutes = parseInt(t / 60, 10)
            seconds = parseInt(t % 60, 10);
			hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
			if(timer > 0)
			{
            display.textContent = "Auto save in "+seconds+" seconds";
			}
            if (timer-- < 0) {
				display.textContent = "Next Auto Save in"+seconds+" seconds";
				//autosave(10,display);
				return;
            }
        }, 1000);
    }
</script>