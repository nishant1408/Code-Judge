<?php
$qid=array();
$counter=0;
while($counter<=14)
{
	$p=0;
	$var=rand(1,15);
	for($j=0;$j<$counter;$j++)
	{
		if($qid[$j]==$var)
		{
			$p=1;
		}
	}
	if($p==0)
	{
		$qid[$counter++]=$var;
	}
}
/*for($j=0;$j<$counter;$j++)
	{
		echo $qid[$j]." ";
	}*/
?>