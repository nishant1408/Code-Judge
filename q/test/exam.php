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
		$attempt1=$row["attempt1"];
		if($name2=="")
		{
			$name=$name1;
		}
		else
		{
			$name=$name1." & ".$name2;
		}
		if($attempt1==1)
			echo "<script> location.href='exam2.php'; </script>";
	}
}
$time=20;
include 'genarray.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<title>Coding MCQ</title>
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
<div class="agileits-modal modal fade" id="rules" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa" aria-hidden="true"></i> <font face="Comic Sans" ><b>RULES ( ROUND 1) : </b></font> </h4>
					<b>1. THERE ARE TOTAL 15 QUESTIONS.<br><br>
					2. TIME IS 20 MINUTES.<br><br>
		            3. WRONG ANSWER WILL RESULT IN <i>-1</i><br><br>
			        4. EACH QUESTION CARRIES "<i>+3</i>" MARKS<br><br></b>
					<button style="background-color:#560505" type="button" class="close2" data-dismiss="modal" aria-hidden="true" id="start">START</button>
				</div>
				
			</div>
		</div>
</div>
<div class="agileits-modal modal fade" id="timeover" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa" aria-hidden="true"></i> <font face="Comic Sans" >YOUR TIME IS UP.THE RESPONSE WILL BE SUBMITTED IN 10 SEC SIT BACK AND WAIT FOR RESULTS.</font> </h4>
				</div>
				
			</div>
		</div>
</div>
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
			        <button class="button button3"><h3 id="timer"></h3></button>
				</div>
				
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->

<script>
$(document).ready(function(){ 
document.getElementById('questions').style.display = 'none';
$(document).on("keydown", disableF5);
});

function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); document.forms["question"].submit();};
var ready=0;
setInterval(function () {  
	if(ready==0)
			$('#rules').modal('show');
        }, 1000);
</script>
	<!-- //header --> 	
	<!-- login-page -->

	
	<div class="container menu clearfix1" style="width:100%;" >
				<form id="questions" method="post" action="evaluate.php">
				<?php
				$count=1;
				for($i=0;$i<count($qid);$i++)
				{
				    $question="";
				    $option1="";
				    $option2="";
				    $option3="";
				    $option4="";
				    $cans="";
				    $file1="";
				    $file2="";
					$selectq="SELECT * FROM quizquestion WHERE qid='$qid[$i]'";
					if($resultq=mysqli_query($connect,$selectq))
					{
						while($rowq=mysqli_fetch_assoc($resultq))
						{
							$question=$rowq["question"];
							$option1=$rowq["option1"];
							$option2=$rowq["option2"];
							$option3=$rowq["option3"];
							$option4=$rowq["option4"];
							$cans=$rowq["correctanswer"];
							$file1=$rowq["file1"];
							$file2=$rowq["file2"];
						}
					}
					?>
					<br>
					<font color="blue" size"3" align="left"><b>QUESTION <?=$count?> of 15 :</b></font></br>
					<font size="4" align="left">
					<?=$question?><br></font><br>
					<?php
					if($file1!="")
					    echo "<img src='resource/".$file1."' >";
					if($file2!="")
					    echo "<img src='resource/".$file2."' >"; 
				
				?>
				<br>
				<font size="3" align="left">
					<input type="radio" name="ques<?=$count?>" value="A"><?=$option1?><br>
					<input type="radio" name="ques<?=$count?>" value="B"><?=$option2?><br>
					<input type="radio" name="ques<?=$count?>" value="C"><?=$option3?><br>
					<input type="radio" name="ques<?=$count?>" value="D"><?=$option4?><br>
					<input type="hidden" name="cans<?=$count?>" value="<?=$cans?>" >
					</font>
					<?php
					$count++;
				}
					?>
				<input type="submit" class="form-control bfh-states" name="end" value="SUBMIT" >
				</form>
				</div>
				
	<!-- //login-page --> 
	<!-- footer-top -->
<script>
function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = "TIME LEFT - "+minutes + ":" + seconds;
			timer--;
            if (timer <= 0) {
				display.textContent = "TIME OVER";
				document.getElementById('questions').style.display = 'none';
				$('#timeover').modal('show');
				
				setTimeout(function(){
					document.forms['questions'].submit();
				}, 10000);
            }
        }, 1000);
    }
	$('#start').click(function(){ 
	ready=1;
	document.getElementById('questions').style.display = 'block';
	var Minutes = <?=$time?> * 60,
    display = document.querySelector('#timer');
    startTimer(Minutes, display);
});
</script>
	<?php
	require '../footer.php';
	?>