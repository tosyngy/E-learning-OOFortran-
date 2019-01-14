<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>e-learning</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<SCRIPT TYPE="text/javascript" src="javascript/script.js"></SCRIPT>
<SCRIPT TYPE="text/javascript" src="javascript/jquery.js"></SCRIPT>
<style type="text/css">
<!--
.style1 {
	font-size: 18mm;
	font-weight: bold;
	color: #00FF00;
}
	.style3
 {
	font-size: medium; font-weight: bold; color: #000000; 
}


-->
</style>
</head>
<body>
<table width="500" height="800" border=1 align="center" class="style3">
	<tr>
	<td align="left" valign="top">
	<form action="" method="post">
		<ol>
			<li>
	<p>The three major areas of programming faces are represented by?</p>
	<div align="left" id="input">
		<?php
		$var1=$_POST['opt1'];

	$total=0;	
		?>
		<input name="opt1" type="radio" value="1" <?php if($var1=="1"){?>checked="checked" <?php } ?>>DTE<br/>
	<input name="opt1" type="radio" value="2" <?php if($var1=="2"){?>checked="checked" <?php } ?>>DET<br/>
	<input name="opt1" type="radio" value="3" <?php if($var1=="3"){?>checked="checked" <?php } ?>>TED<br/>
	<input name="opt1" type="radio" value="4" <?php if($var1=="4"){?>checked="checked" <?php } ?>>EDT<br/>

	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var1=="2"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var1=="1"||$var1=="3"||$var1=="4"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>
<p align="center">
	<hr align="center"></hr>
</li>
</p>
<li>
	<?php
		$var2=$_POST['opt2'];?>
	<p>the face that does the real work in programming is?</p>
	<div align="left" id="input">
		<input name="opt2" type="radio" value="1" <?php if($var2=="1"){?>checked="checked" <?php } ?>>comment<br/>
	<input name="opt2" type="radio" value="2" <?php if($var2=="2"){?>checked="checked" <?php } ?>>Implicit none<br/>
	<input name="opt2" type="radio" value="3" <?php if($var2=="3"){?>checked="checked" <?php } ?>>execution statements<br/>
	<input name="opt2" type="radio" value="4" <?php if($var2=="4"){?>checked="checked" <?php } ?>>datatype<br/>
</div>
	<div width="10" height="10" align="right">
		<?php
		if($var2=="3"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var2=="2"||$var2=="2"||$var2=="4"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>
<p align="center">
	<hr align="center"></hr>
</li>
</p>
<li><?php
		$var3=$_POST['opt3'];?>
	<p>What follows the Keyword PROGRAM is?</p>
	<div align="left" id="input">
	<input name="opt3" type="radio" value="1" <?php if($var3=="1"){?>checked="checked" <?php } ?>>PROGRAM STRUCTURE<br/>
	<input name="opt3" type="radio" value="2" <?php if($var3=="2"){?>checked="checked" <?php } ?>>PROGRAM COMMENT<br/>
	<input name="opt3" type="radio" value="3" <?php if($var3=="3"){?>checked="checked" <?php } ?>>PROGRAM NAME<br/>
	<input name="opt3" type="radio" value="4" <?php if($var3=="4"){?>checked="checked" <?php } ?>>PROGRAM FILE<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var3=="3"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var3=="1"||$var3=="2"||$var3=="4"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>
<p align="center">
	<hr align="center"></hr>
</li>
<li>
	<?php
		$var4=$_POST['opt4'];?>
	<p>The stop in a FORTRAN program is optional while the comment is?</p>
	<div align="left" id="input">
	<input name="opt4" type="radio" value="1" <?php if($var4=="1"){?>checked="checked" <?php } ?>>not valid<br/>
	<input name="opt4" type="radio" value="2" <?php if($var4=="2"){?>checked="checked" <?php } ?>>abstract<br/>
	<input name="opt4" type="radio" value="3" <?php if($var4=="3"){?>checked="checked" <?php } ?>>Conpulsory<br/>
	<input name="opt4" type="radio" value="4" <?php if($var4=="4"){?>checked="checked" <?php } ?>>Optional<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var4=="4"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var4=="2"||$var4=="3"||$var4=="1"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>
<p align="center">
	<hr align="center"></hr>
</li>
</p>
<li>
	<?php
		$var5=$_POST['opt5'];?>
	<p>To successfully write a simple FORTRAN program this two are neccessary?</p>
	<div align="left" id="input">
	<input name="opt5" type="radio" value="1" <?php if($var5=="1"){?>checked="checked" <?php } ?>>Program, name and end <br/>
	<input name="opt5" type="radio" value="2" <?php if($var5=="2"){?>checked="checked" <?php } ?>>Program, name and stop<br/>
	<input name="opt5" type="radio" value="3" <?php if($var5=="3"){?>checked="checked" <?php } ?>>Implicit none and end<br/>
	<input name="opt5" type="radio" value="4" <?php if($var5=="4"){?>checked="checked" <?php } ?>>Program name and execution<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var5=="1"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var5=="2"||$var5=="3"||$var5=="4"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>
<p align="center">
	<hr align="center"></hr>
</li>
</p>
<li>
	<?php
		$var6=$_POST['opt6'];?>
	<p>This FORTRAN keyword has the same meaning except?</p>
	<div align="left" id="input">
	<input name="opt6" type="radio" value="1" <?php if($var6=="1"){?>checked="checked" <?php } ?>>PROgram<br/>
	<input name="opt6" type="radio" value="2" <?php if($var6=="2"){?>checked="checked" <?php } ?>>PROGRAM<br/>
	<input name="opt6" type="radio" value="3" <?php if($var6=="3"){?>checked="checked" <?php } ?>>PraGrOm<br/>
	<input name="opt6" type="radio" value="4" <?php if($var6=="4"){?>checked="checked" <?php } ?>> proGram<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var6=="3"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var6=="1"||$var6=="2"||$var6=="4"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>
		
<p align="center">
	<hr align="center"></hr>
</li>
</p>
<li>
	<?php
		$var7=$_POST['opt7'];?>
	<p>________ is one of the keyword in FORTRAN to display result to the outside world?</p>
	<div align="left" id="input">
	<input name="opt7" type="radio" value="1" <?php if($var7=="1"){?>checked="checked" <?php } ?>>FETCH<br/>
	<input name="opt7" type="radio" value="2" <?php if($var7=="2"){?>checked="checked" <?php } ?>>WRITE<br/>
	<input name="opt7" type="radio" value="3" <?php if($var7=="3"){?>checked="checked" <?php } ?>>READ<br/>
	<input name="opt7" type="radio" value="4" <?php if($var7=="4"){?>checked="checked" <?php } ?>>DISPLAY<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var7=="2"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var7=="1"||$var7=="3"||$var7=="4"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>

		<p align="center">
	<hr align="center"></hr>
</li>
</p>
<li>
	<?php
		$var8=$_POST['opt8'];?>
	<p>What is likely to be your response on this two statements PRINT 'Hello world' and PRINT Hello world?</p>
	<div align="left" id="input">
	<input name="opt8" type="radio" value="1" <?php if($var8=="1"){?>checked="checked" <?php } ?>>One execute the other will not<br/>
	<input name="opt8" type="radio" value="2" <?php if($var8=="2"){?>checked="checked" <?php } ?>>They both work fine no big different<br/>
	<input name="opt8" type="radio" value="3" <?php if($var8=="3"){?>checked="checked" <?php } ?>>They work differently<br/>
	<input name="opt8" type="radio" value="4" <?php if($var8=="4"){?>checked="checked" <?php } ?>>The qoute is use for readability purpose<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var8=="1"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var8=="2"||$var8=="3"||$var8=="4"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>

		<p align="center">
	<hr align="center"></hr>
</li>
</p>
<li>
	<?php
		$var9=$_POST['opt9'];?>
	<p>A program name must alway end the program?</p>
	<div align="left" id="input">
	<input name="opt9" type="radio" value="1" <?php if($var9=="1"){?>checked="checked" <?php } ?>>true<br/>
	<input name="opt9" type="radio" value="2" <?php if($var9=="2"){?>checked="checked" <?php } ?>>false<br/>
	<input name="opt9" type="radio" value="3" <?php if($var9=="3"){?>checked="checked" <?php } ?>>depend<br/>
	<input name="opt9" type="radio" value="4" <?php if($var9=="4"){?>checked="checked" <?php } ?>>as instructed<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var9=="2"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var9=="1"||$var9=="3"||$var9=="4"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>

		<p align="center">
	<hr align="center"></hr>
</li>
</p>
<li>
	<?php
		$var10=$_POST['opt10'];?>
	<p>Comment is very important  because it?</p>
	<div align="left" id="input">
	<input name="opt10" type="radio" value="1" <?php if($var10=="1"){?>checked="checked" <?php } ?>>It is use to give additional information about the code<br/>
	<input name="opt10" type="radio" value="2" <?php if($var10=="2"){?>checked="checked" <?php } ?>>The compiler will not execute it<br/>
	<input name="opt10" type="radio" value="3" <?php if($var10=="3"){?>checked="checked" <?php } ?>>It can conver any length on the IDE<br/>
	<input name="opt10" type="radio" value="4" <?php if($var10=="4"){?>checked="checked" <?php } ?>>It determined the output of the program<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var10=="1"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var10=="3"||$var10=="2"||$var10=="4"){
			?>
		 <img src="logos/miss.jpg"  align="bottom" height="10" width="10"/>	
		<?php 
		}else{
			}?>
		</div>

<p align="center">
	<hr align="center"></hr>
</li>
</p>
<p align="center">
	<input type="submit" align="center" value="submit" style="width:250px;"/>
<fieldset >
<blink><label><?php echo'YOUR SCORE: '.$total; ?></label></blink>
</feildset>
</p> 
</ol>
</form>
	</tr>
</table><p>
	<div class="links" align="center" style="margin-bottom: 10px;" id="quick_links_links">
       <a href="index.php">Home </a>| 
        <a href="structure_of_fortran.php" class="hover"><<< back </a>| 
        <a href="about.html">About Us </a>| 
    </p> 
</div>
</body>
</html>
s