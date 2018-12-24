
<?php
require '../connect.php';
//echo "<table border='2'>";
/*session_start();
$team=$_SESSION["team"];*/
echo "<tr>";
echo "<th width='20px'><font color='black'>Rank  </th>";
echo "<th width='150px'><font color='black'> Team   </th>";
echo "<th width='120px'><font color='black'> Q1 </th>";
echo "<th width='120px'><font color='black'> Q2 </th>";
echo "<th width='120px'><font color='black'> Q3 </th>";
echo "<th width='120px'><font color='black'> Q4 </th>";
echo "<th width='120px'><font color='black'> Q5 </th>";
echo "<th width='120px'><font color='black'> Q6 </th>";
echo "<th width='100px'><font color='black'> Score </th>";
echo "<th width='100px'><font color='black'> Attempts </th>";
echo "</tr>";
$rank=1;
$select="SELECT * FROM score ORDER BY total DESC";
if($result=mysqli_query($connect,$select))
{
	while($row=mysqli_fetch_assoc($result))
	{
		$attempt=0;
		$team=$row["team"];
		echo "<tr>";
		echo "<td><b><font color='black'>".$rank++."</b></td>";
		echo "<td><b><font color='black'>".$row["team"]."</b></td>";
		$select1="SELECT * FROM score_code WHERE team='$team'";
		if($result1=mysqli_query($connect,$select1))
		{
			while($row1=mysqli_fetch_assoc($result1))
			{
				echo "<td><font color='green'><b>".($row1["pu"]*2+$row1["pr"]*5)."</b></font>(<font color='red'><b>+".$row1["bonus"]."</b>)</font></td>";
				$attempt=$attempt+$row1["attempt"];
			}
		}
		echo "<td><b><font color='blue'>".$row["total"]."</b></td>";
		echo "<td><b><font color='blue'>".$attempt."</b></td>";
		echo "</tr>";
	}
}
/*echo "<table border='2'>";
echo "<tr>";
echo "<th width='300px'><font color='black'> Team Name  </th>";
echo "<th width='150px'><font color='black'> Name , roll  </th>";
echo "<th width='150px'><font color='black'> Name , roll  </th>";
echo "</tr>";
$rank=1;
$select="SELECT * FROM user ";
if($result=mysqli_query($connect,$select))
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td><font color='black'>".$row["team"]."</td>";
		echo "<td><font color='green'>".$row["name1"].",".$row["roll1"]."</td>";
		echo "<td><font color='red'>".$row["name2"].",".$row["roll2"]."</td>";
		echo "</tr>";
	}
}*/
/*$select1="SELECT * FROM problems ORDER BY id";
if($result1=mysqli_query($connect,$select1))
{
	while($row1=mysqli_fetch_assoc($result1))
	{
		$qid=$row1["id"];
		echo $row1["statement"];
		
echo "<table border='2'>";
echo "<tr>";
echo "<th width='30px'><font color='black'> Sl.No.  </th>";
echo "<th width='150px'><font color='black'> Input  </th>";
echo "<th width='150px'><font color='black'> Output  </th>";
echo "<th width='150px'><font color='black'> Type  </th>";
echo "</tr>";
$counter=1;
$select="SELECT * FROM testcase WHERE qid='$qid' ";
if($result=mysqli_query($connect,$select))
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td><font color='black'>".$counter++."</td>";
		echo "<td><font color='green'>".$row["input"]."</td>";
		echo "<td><font color='red'>".$row["output"]."</td>";
		echo "<td><font color='red'>".$row["type"]."</td>";
		echo "</tr>";
	}
}
echo "</table>";
echo "<br><br>";
	}
}
/*echo "<font color='black'>";
$select="SELECT * FROM quiz ";
if($result=mysqli_query($connect,$select))
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<br><br><br>Question : ".$row["id"];
		echo "<br>".$row["ques"];
		echo "<br><br>A. ".$row["option1"];
		echo "<br>B. ".$row["option2"];
		echo "<br>C. ".$row["option3"];
		echo "<br>D. ".$row["option4"];
		echo "<br><br>Correct Answer : ".$row["coption"];
	}
		
}
*/
mysqli_error($connect);
?>