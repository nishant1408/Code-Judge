<?php
$filename="submissions/".$path."/problem".$qid.".cs";
$executable_path="submissions/".$path."/";
shell_exec("csc ".$filename." 2>".$executable_path."error-output.txt");
		if(strlen(file_get_contents($executable_path."/error-output.txt"))>0)
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b><br>";
			$output1 = file_get_contents($executable_path."/error-output.txt");
			echo nl2br($output1);
			exit();
		}
?>