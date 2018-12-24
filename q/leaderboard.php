<meta http-equiv="refresh" content="3">
<?php
require 'connect.php';
echo "<tr>";
echo "<th width='100px'><font color='black'>Rank  </th>";
echo "<th width='300px'><font color='black'> Team Name  </th>";
echo "<th width='150px'><font color='black'> Score </th>";
echo "</tr>";
$rank=1;
$select="SELECT * FROM score ORDER BY total DESC";
if($result=mysqli_query($connect,$select))
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td><font color='black'>".$rank++."</td>";
		echo "<td><font color='green'>".$row["team"]."</td>";
		echo "<td><font color='red'>".$row["total"]."</td>";
		echo "</tr>";
	}
}
mysqli_error($connect);
?>