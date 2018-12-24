<?php
include 'header.php';
$error=0;
$counter=0;

session_destroy();
session_start();
if(isset($_POST["submit"]))
{
	$team=$_POST["team"];
	$password=$_POST["password"];
	$select="SELECT id,password FROM user WHERE team='$team'";
	if($result=mysqli_query($connect,$select))
	{
		while ($row = mysqli_fetch_assoc($result)) 
		{
			$rpassword=$row["password"];
			$id=$row["id"];
		}
	}
		if($password == $rpassword)
				{
					$_SESSION["id"]=$id;
					$_SESSION["team"]=$team;
						echo "<script> location.href='c/'; </script>";
				}
				else
				{
					$error=1;
				}
}

?>
	<!-- //header --> 	
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">LOGIN</h3> 			
			<div class="login-body">
				<form action="login.php" method="post"  >
				<p> <?php if($error==1) { echo "<font color='red'>INVALID DETAILS</font>"; }?>
					<input type="text" class="form-control bfh-states" name="team" placeholder="Team Name" required="">
					<input type="password" class="form-control bfh-states" name="password" placeholder="Password" required="">
					<input type="submit" name="submit" value="Proceed">
					<a href="insert.php">click here>> </a>to register your team before proceeding continue if already done it<br>
					<div class="forgot-grid">
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