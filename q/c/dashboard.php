<?php
require '../connect.php';
session_start();
$team=$_SESSION["team"];

echo "<tr>";
echo "<th width='150px'><font color='black'>Question Number  </th>";
echo "<th width='130px'><font color='black'> Public Test Cases Passed </th>";
echo "<th width='130px'><font color='black'> Private Test Cases Passed  </th>";
echo "<th width='150px'><font color='black'> Score </th>";
echo "<th width='200px'><font color='black'> Time Bonus </th>";
echo "<th width='150px'><font color='black'> Attempts </th>";
echo "<th width='150px'><font color='black'> Language Used </th>";
echo "</tr>";
echo "<font color='green'>";
$select="SELECT * FROM score_code WHERE team='$team'";
if($result=mysqli_query($connect,$select))
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td><b><font color='black'>".$row["qid"]."</td>";
		echo "<td><b><font color='green'>".$row["pu"]." <font color='black'>/</font><font color='green'> 2 </font></td>";
		echo "<td><b><font color='green'>".$row["pr"]." <font color='black'>/</font><font color='green'> 6 </font></td>";
		echo "<td><b><font color='red'>".($row["pu"]*2+$row["pr"]*5)." <font color='black'>/</font><font color='red'> 34 </font></td>";
		echo "<td><b><font color='red'>".$row["bonus"]." <font color='black'>/</font><font color='red'> 18 <font></td>";
		echo "<td><b><font color='blue'>".$row["attempt"]."</td>";
		echo "<td><b><font color='blue'>".$row["language"]."</td>";
		echo "</tr>";
	}
}
?>