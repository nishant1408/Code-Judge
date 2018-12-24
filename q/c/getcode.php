<?php
session_start();
$qid=$_SESSION["qid"];
	$s="code";
	$code=$_SESSION[$s.$qid];
	echo $code;
?>