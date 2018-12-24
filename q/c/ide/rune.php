<?php
require_once "../../connect.php";
session_start();
require_once 'timelimit.php';
$qid="test";
$path=$_SESSION['team'];
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
	$counter=1;
	$executable_path="../submissions/".$path."/";
	if($_POST['lan']=="cpp")
	{
		$filename="../submissions/".$path."/problem".$qid.".cpp";
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
		$filename="../submissions/".$path."/problem".$qid.".c";
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
	else if($_POST['lan']=="c#")
	{
		$filename="../submissions/".$path."/problem".$qid.".cs";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code']);
		fclose($fp);
		shell_exec("csc ".$filename." 2>".$executable_path."error-output.txt");
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
		$filename="../submissions/".$path."/problem".$qid.".java";
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
		$filename="../submissions/".$path."/problem".$qid.".php";
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
		$filename="..\submissions/".$path."/problem".$qid.".py";
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
	/*else if($_POST['lan']=="matlab")
	{
		$filename="submissions/".$path."/problem".$qid.".m";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code']);
		fclose($fp);
		shell_exec("matlab ".$filename." 2>".$executable_path."/error-output.txt");
		if(strlen(file_get_contents($executable_path."/error-output.txt"))>0)
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b><br>";
			$output1 = file_get_contents($executable_path."/error-output.txt");
			echo nl2br($output1);
			exit();
		}
	}*/
	else
	{
		echo "<b style='color: red;'>THIS LANGUAGE IS CURRENTLY NOT AVAILABLE</b>";
		exit();
	}
	echo "<font color='black'><b>Result : </b> <br></font>";
		$fp=fopen("../submissions/".$path."/input.txt","w");
		fwrite($fp, $_POST["input"]);
		fclose($fp);
	
	if($_POST['lan']=="cpp")
	{
	    $time_start = microtime(true);
		$output=execute("..\submissions\\".$path."\problem".$qid.".exe<../submissions/".$path."/input.txt");
		$outfile="problem".$qid.".exe";
	    $fp=fopen("../submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		echo "<tr cellspacing='10px' cellpadding='10px' style='background-color:#f4f4ef'><b><pre style='all:unset;white-space:pre-wrap;'>".nl2br(file_get_contents($executable_path."/outputans.txt"))."</pre></b></tr>";
	}		
	else if($_POST['lan']=="c")
	{
	    $time_start = microtime(true);
		$output=execute("..\submissions\\".$path."\problem".$qid.".exe<../submissions/".$path."/input.txt");
		$outfile="problem".$qid.".exe";
	    $fp=fopen("../submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		echo "<tr cellspacing='10px' cellpadding='10px' style='background-color:#f4f4ef'><b><pre style='all:unset;white-space:pre-wrap;'>".nl2br(file_get_contents($executable_path."/outputans.txt"))."</pre></b></tr>";
	}	
	else if($_POST['lan']=="c#")
	{
	    $time_start = microtime(true);
		$output=execute("submissions\\".$path."\problem".$qid.".exe<../submissions/".$path."/input.txt");
		$outfile="problem".$qid.".exe";
	    $fp=fopen("../submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		echo "<tr cellspacing='10px' cellpadding='10px' style='background-color:#f4f4ef'><b><pre style='all:unset;white-space:pre-wrap;'>".nl2br(file_get_contents($executable_path."/outputans.txt"))."</pre></b></tr>";
	}	
	else
		if($_POST['lan']=="java")
		{	
		$time_start = microtime(true);
		$output1=shell_exec('compiler\java\bin\javac ..\submissions\\'.$path.'\problem'.$qid.'java');
		$output=execute("java -classpath ../submissions/".$path." problem".$qid."<../submissions/".$path."/input.txt");
		$outfile="problem".$qid.".class";
		$fp=fopen("../submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		echo "<tr cellspacing='10px' cellpadding='10px' style='background-color:#f4f4ef'><b><pre style='all:unset;white-space:pre-wrap;'>".nl2br(file_get_contents($executable_path."/outputans.txt"))."</pre></b></tr>";
	}	
	else if($_POST['lan']=="php")
		{	
		$time_start = microtime(true);
		$output=shell_exec("php $filename");
		$outfile="problem".$qid.".php";
		$fp=fopen("../submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		echo "<tr cellspacing='10px' cellpadding='10px' style='background-color:#f4f4ef'><b><pre style='all:unset;white-space:pre-wrap;'>".nl2br(file_get_contents($executable_path."/outputans.txt"))."</pre></b></tr>";
	}	
		else if($_POST['lan']=="py3")
		{	
		$time_start = microtime(true);
		$output=exec("python3 $filename<../submissions/".$path."/input.txt");
		$outfile="problem".$qid.".py";
		$fp=fopen("../submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		echo "<tr cellspacing='10px' cellpadding='10px' style='background-color:#f4f4ef'><b><pre style='all:unset;white-space:pre-wrap;'>".nl2br(file_get_contents($executable_path."/outputans.txt"))."</pre></b></tr>";
	}	
	/*else if($_POST['lan']=="matlab")
		{	
		$time_start = microtime(true);
		$output=exec("matlab $filename<submissions/".$path."/input.txt");
		$outfile="problem".$qid.".m";
		$fp=fopen("submissions/".$path."/outputans.txt","w");
		fwrite($fp, $output);
		fclose($fp);
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		echo "<tr cellspacing='10px' cellpadding='10px' style='background-color:#f4f4ef'><b><pre style='all:unset;white-space:pre-wrap;'>".nl2br(file_get_contents($executable_path."/outputans.txt"))."</pre></b></tr>";
	}	*/
	if(strlen(file_get_contents($executable_path."/error-output.txt"))>0)
		{
			echo "<p><b style='color: red;'>&#10005; Runtime Error!!</b></p><br>";
			$output1 = file_get_contents($executable_path."/error-output.txt");
			echo nl2br($output1);
			exit();
		}
}
?>
