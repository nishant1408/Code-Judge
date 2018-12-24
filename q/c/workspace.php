<?php
include 'header.php';
$team=$_SESSION["team"];
$id=$_SESSION["id"];
date_default_timezone_set("Asia/Kolkata");
$time=time();
$select="SELECT time FROM log_time WHERE id='$id'";
if($result=mysqli_query($connect,$select))
{
	while($row=mysqli_fetch_assoc($result))
	{
		$ltime=$row["time"];
	}
}
if($id!=1)
$time=(11700-($time-$ltime));
else
$time=9999999;

//$time=(9000-($time-$ltime));

?>
<div class="agileits-modal modal fade" id="dashboard-window" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog" style="width:950px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="dashboard_content"></h4>
					<br>
					<div class="col-md-12">
				<div class="col-md-4">
				<button class="form-control" type="submit" style="background-color:#ef3b3b;" id="leaderboard" ><b> LEADER-BOARD </b></button>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				<button class="form-control" type="submit" style="background-color:#ef3b3b;" onclick="$('#dashboard-window').modal('hide');$('#finish-window').modal('show');" ><b> FINISH TEST </b></button>
				</div>
				</div>
				</div>
			</div>
		</div>
</div>
<div class="agileits-modal modal fade" id="finish-window" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 >ARE YOU SURE YOU WANT TO FINISH ? YOU CAN'T START AGAIN<br><br></h4>
					<div class="col-md-12">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
					<button class="form-control" type="submit" style="background-color:#ef3b3b;" onclick="location.href='finish.php'" ><b> YES </b></button>
					</div>
					<div class="col-md-4">
					</div>
					</div>
					</div>
				</div>
				
			</div>
		</div>
</div>
<div class="agileits-modal modal fade" id="leaderboard-window" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog" style="width:1350px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="leaderboard_content"></h4>
					<div class="col-md-12">
					<div class="col-md-4">
					<button class="form-control" type="submit" style="background-color:#ef3b3b;" onclick="location.href='workspace.php" ><b> CLOSE </b></button>
					</div>
					</div>
				</div>
				
			</div>
		</div>
</div>
<script type="text/javascript">
		$(document).ready(function() {
		var Minutes = <?=$time?>,
            display = document.querySelector('#time');
        startTimer(Minutes, display);
		var change = 0;
		$.post('getques.php',{change, change }, function(data){
		$('#ques').html(data);
	});
	$('#code').val('');
	$.post('getcode.php',{ }, function(data){
		$('#code').val(data);
	});
		display = document.querySelector('#autosave');
		while(1)
		{
			nextautosave(5,display);
			autosave(10,display);

		}
		
		});
	</script>
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
<div class="header-two" style=""><!-- header-two -->
			<div class="container" >
				<div class="col-md-12">
					<div class="col-md-4">
					<h1><b>@LP}{@ - TEC}{</b></h1>
					</div>
					<div class="col-md-6">
					<h3>Team : <?=$team?></h3>
					</div>
					<div class="col-md-2">
					<button class="form-control" ><b><a id="time"></a></b></button>
					</div>
				</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
<body >
<style>
.menu {
    border: 0px;
    padding: 10px;
    background-color : white;
	width : 100%;
}
.clearfix1 {
    overflow: auto;
}
.option {
    float: left;
}

</style>
<div class="menu clearfix1">
	<div class="col-md-2">
		<button class="form-control" type="submit" style="background-color:#4286f4;" id="previous" ><b> PREVIOUS </b></button>
	</div>
	<div class="col-md-6">
	</div>
		<div class="col-md-2">
		<button class="form-control" type="submit"  style="background-color:#4286f4;" id="dashboard" ><b> DASHBOARD </b></button>
		</div>
	<div class="col-md-2">
		<button class="form-control" type="submit" style="background-color:#4286f4;" id="next" ><b> NEXT </b></button>
	</div>
</div>			

					<div class="menu clearfix1" id="question">
					<div class="col-md-5">
					<pre style='white-space:pre-wrap;height:500px' >
					<p id="ques"></p>
					</pre>
					</div>
					<div class="col-md-7">
					<p id="autosave"></p>
					<p >Submit Code : </p>
					<textarea onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}" class="lined" class="form-control bfh-states" id="code" rows="20" style="width:700px" placeholder="Write Your Code Here or Copy Paste " required=""></textarea>
					<br>
					</div>
					<div class="col-md-5">
					</div>
					<div  class="col-md-7">
					<div class="col-md-4">
					<select class="form-control bfh-states" id="lan" required>
					<option value="">SELECT LANGUAGE</option>
					<option value="c">C gcc 6.3.0</option>
					<option value="cpp">C++ 11 gcc 6.3.0</option>
					<option value="java">JAVA jdk 1.8</option>
					<option value="php">PHP 7.2.8</option>
					<option value="py3">Python 3.6</option>
					</select>
					</div>
					<div class="col-md-3">
					<button class="form-control" type="submit" style="background-color:#4286f4;" id="compile" ><b> COMPILE </b></button>
					</div>
					<div class="col-md-2">
					<button class="form-control" type="submit" style="background-color:#4286f4;" id="run" ><b> RUN </b></button>
					</div>
					<div class="col-md-3">
					<button class="form-control" type="submit" style="background-color:#4286f4;" onclick="window.open('ide/editor.php','_blank');" ><b> OPEN IDE </b></button>
					</div>
					<br>
					</div>
					<div class="col-md-5">
					</div>
					<div class="col-md-7">
					<!--<a id="load"></a>--><br>
					<pre id="output"></pre>
					</div>
					<br>
					</div>
					</div>

</body>
<script>
$(function() {
	$(".lined").linedtextarea(
		{selectedLine: 10000}
	);
});
</script>
<script>
$('#output').html('<font color="blue"><b>OUTPUT TERMINAL</b></font>');
$('#compile').click(function(){ 
	$('#output').html('<img src="rolling.gif" style="height: 35px; width: 35px;"> <font color="green"><b>COMPILING .....</b></font><br>');
	//$('#load').html('<img src="rolling.gif" style="height: 35px; width: 35px;">');
	var code=$('#code').val();
	var lan=$('#lan').val();
	if(code == '')
	{
		$('#output').html('<font color="red"><b>CODE CAN NOT BE EMPTY</b></font>');
		$('#load').html('');
	}
	else if(lan == '')
	{
		$('#output').html('<font color="red"><b>SELECT A LANGUAGE</b></font>');
		$('#load').html('');
	}
	else
	{
	$.post('compile.php',{ code: code,lan: lan}, function(data){
		$('#output').html(data);
		$('#load').html('');
	});
	}
	
});
$('#run').click(function(){ 
	$('#output').html('<img src="rolling.gif" style="height: 35px; width: 35px;"> <font color="green"><b>YOUR CODE IS BEING EVALUATED .....</b></font><br>');
	//$('#load').html('<img src="rolling.gif" style="height: 35px; width: 35px;">');
	var code=$('#code').val();
	var lan=$('#lan').val();
	if(code == '')
	{
		$('#output').html('<font color="red"><b>CODE CAN NOT BE EMPTY</b></font>');
		$('#load').html('');
	}
	else if(lan == '')
	{
		$('#output').html('<font color="red"><b>SELECT A LANGUAGE</b></font>');
		$('#load').html('');
	}
	else
	{
	$.post('run.php',{ code: code,lan: lan}, function(data){
		$('#output').html(data);
		$('#load').html('');
	});
	}
	
});
$('#dashboard').click(function(){ 
	$.post('dashboard.php',{ }, function(data){
		$('#dashboard_content').html(data);
	});
	$('#dashboard-window').modal('show');
});
$('#previous').click(function(){ 
var change = -1;
$('#code').val('');
$('#ques').html('<img src="rolling.gif" style="height: 35px; width: 35px;">');
	$.post('getques.php',{change , change }, function(data){
		$('#ques').html(data);
	});
	$.post('getcode.php',{ }, function(data){
		$('#code').val(data);
	});
});
$('#next').click(function(){ 
var change = 1;
$('#code').val('');
$('#ques').html('<img src="rolling.gif" style="height: 35px; width: 35px;">');
	$.post('getques.php',{change , change }, function(data){
		$('#ques').html(data);
	});
	$.post('getcode.php',{ }, function(data){
		$('#code').val(data);
	});
});
$('#leaderboard').click(function(){ 
	$('#dashboard-window').modal('hide');
	setInterval(function () {
	$.post('leaderboard.php',{ }, function(data){
		$('#leaderboard_content').html(data);
	});
	$('#leaderboard-window').modal('show');
	}, 100);
});
</script>
<?php
include 'footer.php';
?>