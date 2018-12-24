<?php
include 'header.php';
if(isset($_POST["submit"]))
{
	$id=$_SESSION["id"];
	$team=$_SESSION["team"];
	date_default_timezone_set("Asia/Kolkata");
	$time=time();
	$insert="INSERT INTO log_time (id,time) values ('$id','$time')";
	mysqli_query($connect,$insert);
	$qid=1;
	while($qid<=6){
	$insert="INSERT INTO score_code (team,qid,pu,pr,attempt,language,bonus) values ('$team','$qid','','','0','','0')";
	mysqli_query($connect,$insert);
	$qid++;
	}
	$insert="INSERT INTO score (team,total) values ('$team','0')";
	mysqli_query($connect,$insert);
	$_SESSION["qid"]=1;
	echo "<script>location.href='workspace.php'</script>";
		$_SESSION["code1"]="";
	$_SESSION["code2"]="";
	$_SESSION["code3"]="";
	$_SESSION["code4"]="";
	$_SESSION["code5"]="";
	$_SESSION["code6"]="";
}

?>
	<!-- //header --> 	
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">RULES FOR CODING</h3> 			
			<div class="login-body">
				<form action="start.php" method="post"  >
				<font color="black"><b>
				<p>1 . THERE ARE A TOAL OF 6 CODING QUESTIONS<br>
				2 . EACH QUESTION HAS 2 PUBLIC TEST CASES AND 6 PRIVATE TEST CASES , EACH PUBLIC TEST CASE CARRIES +2 AND EACH PRIVATE TEST CASE CARRIES +5<br>
				3 . TIME FOR THIS ROUND IS 180 MINS <br>
				4 . YOU WILL GET 10% OF THE TIME LEFT AS TIME BONUS IF YOU PASS ALL THE TEST CASES FOR A QUESTION <br>
				5 . TYPE YOUR CODE IN THE IDE TEXT BOX AND USE COMPILE AND RUN BUTTONS TO CHECK YOUR ANSWERS<br>
				6 . GET YOUR STATUS FROM THE DASHBOARD<Br>
				7 . IN CASE ON ANY ERROR OR CONFUSION FEEL FREE TO ASK THE CO-ORDINATORS<br>
				8 . USE OPEN EDITOR TO TYPE YOUR CODE AND ALSO FOR DEBUGGING PURPOSE <br>
				9 . IN CASE OF A DRAW , TOTAL NUMBER OF "RUN" COUNT WILL BE THE DECIDING FACTOR <br>
				<font color="green">HAPPY CODING</font>
					<input type="submit" name="submit" value="START">
				</form>
			</div>  
		</div>
	</div>
	<!-- //login-page --> 
	<!-- footer-top -->
	<?php
	include 'footer.php';
	?>