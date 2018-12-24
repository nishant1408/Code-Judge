<?php
require_once "../connect.php";
session_start();
require_once 'timelimit.php';
$setno=$_SESSION['qid'];
$qid=$setno;
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
	$_SESSION["code".$qid]=$_POST['code'];
	$pu=0;
	$pr=0;
	$tpu=0;
	$tpr=0;
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
		else
		{
			echo "<b style='color: green;'>&#10004; Compiled Successfully.No Error!!</b><br>";
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
		else
		{
			echo "<b style='color: green;'>&#10004; Compiled Successfully.No Error!!</b><br>";
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
		else
		{
			echo "<b style='color: green;'>&#10004; Compiled Successfully.No Error!!</b><br>";
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
		else
		{
			echo "<b style='color: green;'>&#10004; Compiled Successfully.No Error!!</b><br>";
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
		else
		{
			echo "<b style='color: green;'>&#10004; Compiled Successfully.No Error!!</b><br>";
			exit();
		}
	}
	else
	{
		echo "<b style='color: red;'>THIS LANGUAGE IS CURRENTLY NOT AVAILABLE</b>";
		exit();
	}
}
?>
