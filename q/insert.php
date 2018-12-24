<?php
require 'header.php';
if(isset($_POST["submit"]))
{
	$name1=strtoupper($_POST["name1"]);
	$roll1=$_POST["roll1"];
	$year1=$_POST["year1"];
	$email1=$_POST["email1"];
	$mobile1=$_POST["mobile1"];
	$name2=strtoupper($_POST["name2"]);
	$roll2=$_POST["roll2"];
	$year2=$_POST["year2"];
	$email2=$_POST["email2"];
	$mobile2=$_POST["mobile2"];
	$password=$_POST["password"];
	$team=$_POST["team"];
	$insert="INSERT INTO user (team,name1,roll1,email1,mobile1,year1,name2,roll2,email2,mobile2,year2,password) values ('$team','$name1','$roll1','$email1','$mobile1',
	'$year1','$name2','$roll2','$email2','$mobile2','$year2','$password')";
	if(mysqli_query($connect,$insert))
	{
		mkdir('c/submissions/'.$team);
		echo "<script> location.href='login.php' ; </script> ";
	}
	else
	{
		echo mysqli_error($connect);
	}
}
?>
	<!-- //header --> 	
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Register Yourself</h3> 			
			<div class="login-body">
				<form action="insert.php" method="post" enctype="multipart/form-data" >
					<p>FIRST MEMBER DETAILS</p>
					<br>
					<input type="text" class="form-control bfh-states" name="name1" placeholder="Name" required="">
					<input type="text" class="form-control bfh-states" name="roll1" placeholder="Roll" >
					<input type="email" class="form-control bfh-states" name="email1" placeholder="Email" required="">
					<br>
					<input type="number" class="form-control bfh-states" name="mobile1" placeholder="Mobile" required="">
					<br>
					<select class="form-control bfh-states" name="year1" required>
					<option value="">SELECT YEAR</option>
					<option value="1st">First</option>
					<option value="2nd">Second</option>
					<option value="3rd">Third</option>
					<option value="4th">Fourth</option>
					</select>
					<br>
					<p>SECOND MEMBER DETAILS</p>
					<br>
					<input type="text" class="form-control bfh-states" name="name2" placeholder="Name" >
					<input type="text" class="form-control bfh-states" name="roll2" placeholder="Roll" >
					<input type="email" class="form-control bfh-states" name="email2" placeholder=" Email" >
					<br>
					<input type="number" class="form-control bfh-states" name="mobile2" placeholder="Mobile" >
					<br>
					<select class="form-control bfh-states" name="year2" >
					<option value="">SELECT YEAR</option>
					<option value="1st">First</option>
					<option value="2nd">Second</option>
					<option value="3rd">Third</option>
					<option value="4th">Fourth</option>
					</select>
					<br>
					<p>YOUR TEAM NAME & PASSWORD</p>
					<br>
					<input type="text" class="form-control bfh-states" name="team" placeholder="Team Name" required>
					<input type="password" class="form-control bfh-states" name="password" placeholder="Enter Password" required="">
					<br>
					<input type="submit" name="submit" value="Proceed">
				
					<div class="forgot-grid">
						<a href="login.php">click here>> </a>to proceed for test<br>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
		</div>
	</div>
	<!-- //login-page --> 
	<!-- footer-top -->
	<?php
	include 'footer.php';
	?>