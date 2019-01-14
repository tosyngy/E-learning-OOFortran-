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
	<form action="question1.php" method="post">
		<ol>
			<li>
	<p>Among many programming languages that exist FORTRAN IS efficent for
		scienstific calculation and wheather focast which is one of the future of?</p>
	<div align="left" id="input">
		<?php
		$var1=$_POST['opt1'];

	$total=0;	
		?>
		<input name="opt1" type="radio" value="1" <?php if($var1=="1"){?>checked="checked" <?php } ?>>Assembly Language<br/>
	<input name="opt1" type="radio" value="2" <?php if($var1=="2"){?>checked="checked" <?php } ?>>High Level language<br/>
	<input name="opt1" type="radio" value="3" <?php if($var1=="3"){?>checked="checked" <?php } ?>>Machine Code<br/>
	<input name="opt1" type="radio" value="4" <?php if($var1=="4"){?>checked="checked" <?php } ?>>	Machine Languages<br/>

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
	<p>FORTRAN was  develop in 1954 by?</p>
	<div align="left" id="input">
		<input name="opt2" type="radio" value="1" <?php if($var2=="1"){?>checked="checked" <?php } ?>>COSDASYL<br/>
	<input name="opt2" type="radio" value="2" <?php if($var2=="2"){?>checked="checked" <?php } ?>>OAK GROUP<br/>
	<input name="opt2" type="radio" value="3" <?php if($var2=="3"){?>checked="checked" <?php } ?>>IBM<br/>
	<input name="opt2" type="radio" value="4" <?php if($var2=="4"){?>checked="checked" <?php } ?>>FORTH TRANSALATOR<br/>
</div>
	<div width="10" height="10" align="right">
		<?php
		if($var2=="3"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var2=="1"||$var2=="2"||$var2=="4"){
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
	<p>A FORTRAN program always began?</p>
	<div align="left" id="input">
	<input name="opt3" type="radio" value="1" <?php if($var3=="1"){?>checked="checked" <?php } ?>>	Start<br/>
	<input name="opt3" type="radio" value="2" <?php if($var3=="2"){?>checked="checked" <?php } ?>>Beginning<br/>
	<input name="opt3" type="radio" value="3" <?php if($var3=="3"){?>checked="checked" <?php } ?>>Program<br/>
	<input name="opt3" type="radio" value="4" <?php if($var3=="4"){?>checked="checked" <?php } ?>>Genesis<br/>
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
	<p>The most simplex FORTRAN program must contain a PROGRAM and_____?</p>
	<div align="left" id="input">
	<input name="opt4" type="radio" value="1" <?php if($var4=="1"){?>checked="checked" <?php } ?>>END<br/>
	<input name="opt4" type="radio" value="2" <?php if($var4=="2"){?>checked="checked" <?php } ?>>TERMINATE<br/>
	<input name="opt4" type="radio" value="3" <?php if($var4=="3"){?>checked="checked" <?php } ?>>STOP<br/>
	<input name="opt4" type="radio" value="4" <?php if($var4=="4"){?>checked="checked" <?php } ?>>DONE<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var4=="1"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var4=="2"||$var4=="3"||$var4=="4"){
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
	<p>THE order of execution of a FORTRAN program is FROM?</p>
	<div align="left" id="input">
	<input name="opt5" type="radio" value="1" <?php if($var5=="1"){?>checked="checked" <?php } ?>>top to botton <br/>
	<input name="opt5" type="radio" value="2" <?php if($var5=="2"){?>checked="checked" <?php } ?>>side by side<br/>
	<input name="opt5" type="radio" value="3" <?php if($var5=="3"){?>checked="checked" <?php } ?>>based on compiler decision<br/>
	<input name="opt5" type="radio" value="4" <?php if($var5=="4"){?>checked="checked" <?php } ?>>decide by processor speed<br/>
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
	<p>A FORTRAN code will always execute even if there is error?</p>
	<div align="left" id="input">
	<input name="opt6" type="radio" value="1" <?php if($var6=="1"){?>checked="checked" <?php } ?>>true<br/>
	<input name="opt6" type="radio" value="2" <?php if($var6=="2"){?>checked="checked" <?php } ?>>false<br/>
	<input name="opt6" type="radio" value="3" <?php if($var6=="3"){?>checked="checked" <?php } ?>>may be<br/>
	<input name="opt6" type="radio" value="4" <?php if($var6=="4"){?>checked="checked" <?php } ?>>ofcourse<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var6=="2"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var6=="1"||$var6=="3"||$var6=="4"){
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
	<p>FORTRAN stands for?</p>
	<div align="left" id="input">
	<input name="opt7" type="radio" value="1" <?php if($var7=="1"){?>checked="checked" <?php } ?>>FORmulation TRANslator<br/>
	<input name="opt7" type="radio" value="2" <?php if($var7=="2"){?>checked="checked" <?php } ?>>FORmula TRANslation<br/>
	<input name="opt7" type="radio" value="3" <?php if($var7=="3"){?>checked="checked" <?php } ?>>FORmulation TRANsistor<br/>
	<input name="opt7" type="radio" value="4" <?php if($var7=="4"){?>checked="checked" <?php } ?>>FOR TRANslator<br/>
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
	<p>No problem can be solve without planning?</p>
	<div align="left" id="input">
	<input name="opt8" type="radio" value="1" <?php if($var8=="1"){?>checked="checked" <?php } ?>>true<br/>
	<input name="opt8" type="radio" value="2" <?php if($var8=="2"){?>checked="checked" <?php } ?>>false<br/>
	<input name="opt8" type="radio" value="3" <?php if($var8=="3"){?>checked="checked" <?php } ?>>may be<br/>
	<input name="opt8" type="radio" value="4" <?php if($var8=="4"){?>checked="checked" <?php } ?>>ofcourse<br/>
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
	<p>A FORTRAN code will execute without the need to convert to machine language?</p>
	<div align="left" id="input">
	<input name="opt9" type="radio" value="1" <?php if($var9=="1"){?>checked="checked" <?php } ?>>true<br/>
	<input name="opt9" type="radio" value="2" <?php if($var9=="2"){?>checked="checked" <?php } ?>>false<br/>
	<input name="opt9" type="radio" value="3" <?php if($var9=="3"){?>checked="checked" <?php } ?>>may be<br/>
	<input name="opt9" type="radio" value="4" <?php if($var9=="4"){?>checked="checked" <?php } ?>>ofcourse<br/>
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
	<p>The order of arrangement of a FORTRAN Code is ?</p>
	<div align="left" id="input">
	<input name="opt10" type="radio" value="1" <?php if($var10=="1"){?>checked="checked" <?php } ?>>Declaration,Execution,Terminate<br/>
	<input name="opt10" type="radio" value="2" <?php if($var10=="2"){?>checked="checked" <?php } ?>>Execution, Declaration, Terminate<br/>
	<input name="opt10" type="radio" value="3" <?php if($var10=="3"){?>checked="checked" <?php } ?>>Terminate, Declaration, Execution<br/>
	<input name="opt10" type="radio" value="4" <?php if($var10=="4"){?>checked="checked" <?php } ?>>Declaration, Termination, Execution<br/>
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
        <a href="introduction.php" class="hover"><<< back </a>| 
        <a href="about.html">About Us </a>| 
    </p> 
</div>
</body>
</html>
