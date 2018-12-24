<?php
include 'header.php';
?>
<Style>
    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button3 {padding: 14px 40px;}
</Style>
<div class="header-two" style=""><!-- header-two -->
			<div class="container" >
				<div class="header-logo">
					<h1><font size="6" color=""><a href="">CODING IDE</a></font></h1>
					
				</div>		
				
				<div class="header-search">
				<p style="font-family:Arial, Helvetica, sans-serif"><font size="3"></font>
			        <h3 id="time"></h3></p>
				</div>
				
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
<body >
<style>
.menu {
    border: 0px;
    padding: 10px;
    background-color : white;
	width : 100%;
}
.clearfix1 {
    overflow: auto;
}
.option {
    float: left;
}
</style>			
					<div class="menu clearfix1" id="question">
					<div class="col-md-12">
					<p>Write Code (Class name for JAVA code should be 'problemtest')</p>
					<textarea onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}" class="lined" class="form-control bfh-states" id="code" rows="20" style="width:1200px" placeholder="Write Your Code Here or Copy Paste " required=""></textarea>
					<br>
					<textarea class="lined" id="input" class="form-control bfh-states" placeholder="Custom input to Run code" rows="4" style="width:400px"></textarea><br>
					</div>
					<div  class="col-md-7">
					<div class="col-md-4">
					<select class="form-control bfh-states" id="lan" required>
					<option value="">SELECT LANGUAGE</option>
					<option value="c">C gcc 6.3.0</option>
					<option value="cpp">C++ 11 gcc 6.3.0</option>
					<option value="c#">C# 5</option>
					<option value="fortran">FORTRAN</option>
					<option value="java">JAVA jdk 1.8</option>
					<option value="matlab">MATLAB</option>
					<option value="php">PHP 7.2.8</option>
					<option value="py3">Python 3.6</option>
					</select>
					</div>
					<div class="col-md-3">
					<button class="form-control" type="submit" style="background-color:#4286f4;" id="compile" ><b> COMPILE </b></button>
					</div>
					<div class="col-md-2">
					<button class="form-control" type="submit" style="background-color:#4286f4;" id="run" ><b> RUN </b></button>
					</div>
					<br>
					</div>
					<div class="col-md-12">
					<!--<a id="load"></a>--><br>
					<pre id="output"></pre>
					</div>
					<br>
					</div>
					</div>

</body>
<script>
$(function() {
	$(".lined").linedtextarea(
		{selectedLine: 10000}
	);
});
</script>
<script>
$('#output').html('<font color="blue"><b>OUTPUT TERMINAL</b></font>');
$('#compile').click(function(){ 
	$('#output').html('<img src="rolling.gif" style="height: 35px; width: 35px;"> <font color="green"><b>COMPILING .....</b></font><br>');
	//$('#load').html('<img src="rolling.gif" style="height: 35px; width: 35px;">');
	var code=$('#code').val();
	var lan=$('#lan').val();
	var classname=$('#classname').val();
	if(code == '')
	{
		$('#output').html('<font color="red"><b>CODE CAN NOT BE EMPTY</b></font>');
		$('#load').html('');
	}
	else if(lan == '')
	{
		$('#output').html('<font color="red"><b>SELECT A LANGUAGE</b></font>');
		$('#load').html('');
	}
	else
	{
	$.post('compilee.php',{ code: code,lan: lan,classname : classname}, function(data){
		$('#output').html(data);
		$('#load').html('');
	});
	}
	
});
$('#run').click(function(){ 
	$('#output').html('<img src="rolling.gif" style="height: 35px; width: 35px;"> <font color="green"><b>YOUR CODE IS BEING EVALUATED .....</b></font><br>');
	//$('#load').html('<img src="rolling.gif" style="height: 35px; width: 35px;">');
	var code=$('#code').val();
	var lan=$('#lan').val();
	var input=$('#input').val();
	if(code == '')
	{
		$('#output').html('<font color="red"><b>CODE CAN NOT BE EMPTY</b></font>');
		$('#load').html('');
	}
	else if(lan == '')
	{
		$('#output').html('<font color="red"><b>SELECT A LANGUAGE</b></font>');
		$('#load').html('');
	}
	else
	{
	$.post('rune.php',{ code: code,lan: lan,input : input}, function(data){
		$('#output').html(data);
		$('#load').html('');
	});
	}
	
});

</script>
<?php
include 'footer.php';
?>