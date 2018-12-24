<?php
require_once "../connect.php";
session_start();
require_once 'timelimit.php';
$setno=$_SESSION['qid'];
$qid=$setno;
$path=$_SESSION['team'];
$team=$path;
define('READ_LEN', 4096);
function files_identical($fn1, $fn2) {
    if(filetype($fn1) !== filetype($fn2))
        return FALSE;
    if(filesize($fn1) !== filesize($fn2))
        return FALSE;
    if(!$fp1 = fopen($fn1, 'rb'))
        return FALSE;
    if(!$fp2 = fopen($fn2, 'rb')) {
        fclose($fp1);
        return FALSE;
    }
    $same = TRUE;
    while (!feof($fp1) and !feof($fp2))
        if(fread($fp1, READ_LEN) !== fread($fp2, READ_LEN)) {
            $same = FALSE;
            break;
        }
    if(feof($fp1) !== feof($fp2))
        $same = FALSE;
    fclose($fp1);
    fclose($fp2);
    return $same;
}
if(isset($_POST['code']))
{
	$pu=0;
	$pr=0;
	$tpu=0;
	$tpr=0;
	$_SESSION["code".$qid]=$_POST['code'];
	$counter=1;
	$executable_path="submissions/".$path."/";
	if($_POST['lan']=="cpp")
	{
		$filename="submissions/".$path."/problem".$qid.".cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code']);
		fclose($fp);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem".$qid.".exe 2>".$executable_path."error-output.txt");
		if(strlen(file_get_contents($executable_path."/error-output.txt"))>0)
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b><br>";
			$output1 = file_get_contents($executable_path."/error-output.txt");
			echo nl2br($output1);
			exit();
		}
	}
	else if($_POST['lan']=="c")
	{
		$filename="submissions/".$path."/problem".$qid.".c";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code']);
		fclose($fp);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem".$qid.".exe 2>".$executable_path."error-output.txt");
		if(strlen(file_get_contents($executable_path."/error-output.txt"))>0)
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b><br>";
			$output1 = file_get_contents($executable_path."/error-output.txt");
			echo nl2br($output1);
			exit();
		}
	}
	else if($_POST['lan']=="java")
	{
		$filename="submissions/".$path."/problem".$qid.".java";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code']);
		fclose($fp);
		shell_exec("javac ".$filename." 2>".$executable_path."/error-output.txt");
		if(strlen(file_get_contents($executable_path."/error-output.txt"))>0)
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b><br>";
			$output1 = file_get_contents($executable_path."/error-output.txt");
			echo nl2br($output1);
			exit();
		}
	}
	else if($_POST['lan']=="php")
	{
		$filename="submissions/".$path."/problem".$qid.".php";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code']);
		fclose($fp);
		shell_exec("php ".$filename." 2>".$executable_path."/error-output.txt");
		if(strlen(file_get_contents($executable_path."/error-output.txt"))>0)
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b><br>";
			$output1 = file_get_contents($executable_path."/error-output.txt");
			echo nl2br($output1);
			exit();
		}
	}
	else if($_POST['lan']=="py3")
	{
		$filename="submissions/".$path."/problem".$qid.".py";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code']);
		fclose($fp);
		shell_exec("python3 ".$filename." 2>".$executable_path."/error-output.txt");
		if(strlen(file_get_contents($executable_path."/error-output.txt"))>0)
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b><br>";
			$output1 = file_get_contents($executable_path."/error-output.txt");
			echo nl2br($output1);
			exit();
		}
	}
	else
	{
		echo "<b style='color: red;'>THIS LANGUAGE IS CURRENTLY NOT AVAILABLE</b>";
		exit();
	}
		echo "<table border='2' cellspacing='10px' cellpadding='10px'>";
		echo "<tr>";
		echo "<th><font color='black'><b>TEST CASE</b></font></th>";
		echo "<th><font color='black'><b>INPUT</b></font></th>";
		echo "<th><font color='black'><b>YOUR ANSWER</b></font></th>";
		echo "<th><font color='black'><b>EXPECTED ANSWER</b></font></th>";
		echo "<th><font color='black'><b>RESULT</b></font></th>";
		echo "<tr>";
	echo "<b>Result (Problem ".$setno." : ) </b> <br />";
	$select="SELECT * FROM testcase WHERE qid='$qid'";
	if($result1=mysqli_query($connect,$select))
	{
	while($row=mysqli_fetch_assoc($result1))
	{
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $row["input"]);
		fclose($fp);
		$output2=$row["output"];
		$fp=fopen("submissions/".$path."/output.txt","w");
		fwrite($fp, $row["output"]);
		fclose($fp);
		$input=$row["input"];
	
	if($_POST['lan']=="cpp")
	{
	    $time_start = microtime(true);
		$output=execute("submissions\\".$path."\problem".$qid.".exe<submissions/".$path."/input.txt");
		$outfile="problem".$qid.".exe";
	    $fp=fopen("submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
			if($row["type"]=="public")
					$tpu++;
				else
					$tpr++;
			if($time>10)
			{
				echo "<font color='red'><b>Time Limit Exceeded</b></font>";
			}
			else if(files_identical($executable_path.'output.txt',$executable_path.'outputans.txt'))
			{
				$result="<font color='green'><b>Accepted</b></font>";
				if($row["type"]=="public")
					$pu++;
				else
					$pr++;
			}
			else
			{
				$result="<font color='red'><b>Wrong Answer</b></font>";
			}
			if($row["type"]=="public")
			{
			echo "<tr>";
			echo "<td><font color='black'><b>".$counter++."</b></font></td>";
			echo "<td><font color='black'><b>".$input."</b></font></td>";
			//echo "<td><font color='black'><b><pre style='all:unset;white-space:pre-wrap;'>".nl2br($output)."</pre><b/><font></td>";
			//echo "<td><font color='black'><b><pre style='all:unset;white-space:pre-wrap;'>".nl2br($output2)."</pre></b></font></td>";
			echo "<td><font color='black'><b>".nl2br($output)."<b/><font></td>";
			echo "<td><font color='black'><b>".nl2br($output2)."</b></font></td>";
			echo "<td>".$result."</td>";
			echo "</tr>";	
			}
		}		
	else if($_POST['lan']=="c")
	{
	    $time_start = microtime(true);
		$output=execute("submissions\\".$path."\problem".$qid.".exe<submissions/".$path."/input.txt");
		$outfile="problem".$qid.".exe";
	    $fp=fopen("submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
			if($row["type"]=="public")
					$tpu++;
				else
					$tpr++;
			if($time>10)
			{
				echo "<font color='red'><b>Time Limit Exceeded</b></font>";
			}
			else if(files_identical($executable_path.'output.txt',$executable_path.'outputans.txt'))
			{
				$result="<font color='green'><b>Accepted</b></font>";
				if($row["type"]=="public")
					$pu++;
				else
					$pr++;
			}
			else
			{
				$result="<font color='red'><b>Wrong Answer</b></font>";
			}
			if($row["type"]=="public")
			{
			echo "<tr>";
			echo "<td><font color='black'><b>".$counter++."</b></font></td>";
			echo "<td><font color='black'><b>".$input."</b></font></td>";
			echo "<td><font color='black'><b>".nl2br($output)."<b/><font></td>";
			echo "<td><font color='black'><b>".nl2br($output2)."</b></font></td>";
			echo "<td>".$result."</td>";
			echo "</tr>";	
			}
		}
	else
		if($_POST['lan']=="java")
		{	
		$time_start = microtime(true);
		$output1=shell_exec('compiler\java\bin\javac submissions\\'.$path.'\problem'.$qid.'java');
		$output=execute("java -classpath submissions/".$path." problem".$qid."<submissions/".$path."/input.txt");
		$outfile="problem".$qid.".class";
		$fp=fopen("submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
			if($row["type"]=="public")
					$tpu++;
				else
					$tpr++;
			if($time>10)
			{
				echo "<font color='red'><b>Time Limit Exceeded</b></font>";
			}
			else if(files_identical($executable_path.'output.txt',$executable_path.'outputans.txt'))
			{
				$result="<font color='green'><b>Accepted</b></font>";
				if($row["type"]=="public")
					$pu++;
				else
					$pr++;
			}
			else
			{
				$result="<font color='red'><b>Wrong Answer</b></font>";
			}
			if($row["type"]=="public")
			{
			echo "<tr>";
			echo "<td><font color='black'><b>".$counter++."</b></font></td>";
			echo "<td><font color='black'><b>".$input."</b></font></td>";
			echo "<td><font color='black'><b>".nl2br($output)."<b/><font></td>";
			echo "<td><font color='black'><b>".nl2br($output2)."</b></font></td>";
			echo "<td>".$result."</td>";
			echo "</tr>";	
			}
		}
	else if($_POST['lan']=="php")
		{	
		$time_start = microtime(true);
		$output=shell_exec("php $filename");
		$outfile="problem".$qid.".php";
		$fp=fopen("submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
			if($row["type"]=="public")
					$tpu++;
				else
					$tpr++;
			if($time>10)
			{
				echo "<font color='red'><b>Time Limit Exceeded</b></font>";
			}
			else if(files_identical($executable_path.'output.txt',$executable_path.'outputans.txt'))
			{
				$result="<font color='green'><b>Accepted</b></font>";
				if($row["type"]=="public")
					$pu++;
				else
					$pr++;
			}
			else
			{
				$result="<font color='red'><b>Wrong Answer</b></font>";
			}
			if($row["type"]=="public")
			{
			echo "<tr>";
			echo "<td><font color='black'><b>".$counter++."</b></font></td>";
			echo "<td><font color='black'><b>".$input."</b></font></td>";
			echo "<td><font color='black'><b>".nl2br($output)."<b/><font></td>";
			echo "<td><font color='black'><b>".nl2br($output2)."</b></font></td>";
			echo "<td>".$result."</td>";
			echo "</tr>";	
			}
		}			
		else if($_POST['lan']=="py3")
		{	
		$time_start = microtime(true);
		$output=exec("python3 $filename<submissions/".$path."/input.txt");
		$outfile="problem".$qid.".py";
		$fp=fopen("submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
			if($row["type"]=="public")
					$tpu++;
				else
					$tpr++;
			if($time>10)
			{
				echo "<font color='red'><b>Time Limit Exceeded</b></font>";
			}
			else if(files_identical($executable_path.'output.txt',$executable_path.'outputans.txt'))
			{
				$result="<font color='green'><b>Accepted</b></font>";
				if($row["type"]=="public")
					$pu++;
				else
					$pr++;
			}
			else
			{
				$result="<font color='red'><b>Wrong Answer</b></font>";
			}
			if($row["type"]=="public")
			{
			echo "<tr>";
			echo "<td><font color='black'><b>".$counter++."</b></font></td>";
			echo "<td><font color='black'><b>".$input."</b></font></td>";
			echo "<td><font color='black'><b>".nl2br($output)."<b/><font></td>";
			echo "<td><font color='black'><b>".nl2br($output2)."</b></font></td>";
			echo "<td>".$result."</td>";
			echo "</tr>";	
			}
		}			
		
}
}
	if($tpu+$tpr>=1)
	{
	echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
	echo "<br><font color='black'><b>Passed </font><font color='green'>".$pu." / ".$tpu." </font><font color='black'>Public Testcases</font>";
	echo "<br><font color='black'><b>Passed </font><font color='green'>".$pr." / ".$tpr." </font><font color='black'>Private Testcases</font>";
	if($pr+$pu == $tpu+$tpr)
		echo "<p><b><font color='green'>Correct Answer !! </font><b></p><font color='black'><b>Move to next question.</b></font>";
	else if(strlen(file_get_contents($executable_path."/error-output.txt"))>0)
		echo "<p><b style='color: red;'>&#10005; Runtime Error!!</b></p><br>";
	else 
		echo "<p><b><font color='red'>Internal Test Case Failed !! </font><b></p>";
	
	$language=$_POST['lan'];
	date_default_timezone_set("Asia/Kolkata");
	$time=time();
	$id=$_SESSION["id"];
	$select="SELECT time FROM log_time WHERE id='$id'";
	if($result=mysqli_query($connect,$select))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$ltime=$row["time"];
		}
	}
	$time=((10800-($time-$ltime))/60)*0.1;
	if($pr==6 && $pu==2)
	$score=$time;
	else
	$score=0;
	$update="UPDATE score_code SET pr='$pr',pu='$pu',attempt=attempt+1,language='$language',bonus='$score' WHERE team='$team' AND qid='$qid'";
	$score=0;
	mysqli_query($connect,$update);
	$select="SELECT * FROM score_code WHERE team='$team'";
	if($result=mysqli_query($connect,$select))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$score=$score+$row["pu"]*2+$row["pr"]*5+$row["bonus"];
		}
	}
	//$score=$score+$_SESSION["quizscore"];
	$update="UPDATE score SET total='$score' WHERE team='$team'";
	mysqli_query($connect,$update);
	}
}
?>
