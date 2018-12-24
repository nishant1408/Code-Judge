<?php
include '../connect.php';
session_start();
$change=$_POST["change"];
$qid=$_SESSION["qid"];
$qid=$qid+$change;
if($qid>6)
	$qid=1;
else if($qid<1)
	$qid=6;
$_SESSION["qid"]=$qid;
$select="SELECT * FROM problems WHERE id='$qid' ";
			if($result=mysqli_query($connect,$select))
			{
				while($row=mysqli_fetch_assoc($result))
				{
					$statement=$row["statement"];
					echo "<font color='black'><b>Class name for JAVA program must be problem".$qid."<br><br>Question ".$qid.":<br><br></b>".$statement."</font>";
					}
				}
			
?>