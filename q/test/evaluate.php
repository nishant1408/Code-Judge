<?php
require '../connect.php';
if(!isset($_SESSION["tid"]))
{
	echo "<script> location.href='login.php' </script>";
}
else
{
	$tid=$_SESSION["tid"];
}
$cans=array();
$ans=array();
$score=0;
for($i=1;$i<=25;$i++)
{
    $var="cans".$i;
    $var1="ques".$i;
    if(isset($_POST[$var1]))
    $ans[$i]=$_POST[$var1];
    else
    $ans[$i]="";
    $cans[$i]=$_POST[$var];
    if($ans[$i]!="" && $cans[$i]==$ans[$i])
        $score++;
}
$update="UPDATE techquizusers SET attempt1='1',score1='$score' WHERE tid='$tid'";
mysqli_query($connect,$update);
$update="UPDATE techquizusers SET score=score+score1 WHERE tid='$tid'";
mysqli_query($connect,$update);
echo "<script>location.href='break.php'</script>";
?>