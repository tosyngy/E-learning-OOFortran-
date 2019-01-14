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
	<p>Control structure in FORTRAN includes all except?</p>
	<div align="left" id="input">
		<?php
		$var1=$_POST['opt1'];

	$total=0;	
		?>
		<input name="opt1" type="radio" value="1" <?php if($var1=="1"){?>checked="checked" <?php } ?>>do construct<br/>
	<input name="opt1" type="radio" value="2" <?php if($var1=="2"){?>checked="checked" <?php } ?>>if construct<br/>
	<input name="opt1" type="radio" value="3" <?php if($var1=="3"){?>checked="checked" <?php } ?>>case construct<br/>
	<input name="opt1" type="radio" value="4" <?php if($var1=="4"){?>checked="checked" <?php } ?>>next construct<br/>

	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var1=="4"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var1=="1"||$var1=="3"||$var1=="2"){
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
	<p>The statement if(x>y) returns either ?</p>
	<div align="left" id="input">
		<input name="opt2" type="radio" value="1" <?php if($var2=="1"){?>checked="checked" <?php } ?>>integer<br/>
	<input name="opt2" type="radio" value="2" <?php if($var2=="2"){?>checked="checked" <?php } ?>>true or false<br/>
	<input name="opt2" type="radio" value="3" <?php if($var2=="3"){?>checked="checked" <?php } ?>>1 or 0<br/>
	<input name="opt2" type="radio" value="4" <?php if($var2=="4"){?>checked="checked" <?php } ?>>float<br/>
</div>
	<div width="10" height="10" align="right">
		<?php
		if($var2=="2"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var2=="1"||$var2=="3"||$var2=="4"){
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
	<p>The if and case construct are almost the same because?</p>
	<div align="left" id="input">
	<input name="opt3" type="radio" value="1" <?php if($var3=="1"){?>checked="checked" <?php } ?>>they work like the do loop<br/>
	<input name="opt3" type="radio" value="2" <?php if($var3=="2"){?>checked="checked" <?php } ?>>this are the only construct<br/>
	<input name="opt3" type="radio" value="3" <?php if($var3=="3"){?>checked="checked" <?php } ?>>only one of it block will execute<br/>
	<input name="opt3" type="radio" value="4" <?php if($var3=="4"){?>checked="checked" <?php } ?>>all block will execute<br/>
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
	<p>The alternative construct to archieve array sequence is?</p>
	<div align="left" id="input">
	<input name="opt4" type="radio" value="1" <?php if($var4=="1"){?>checked="checked" <?php } ?>>switch<br/>
	<input name="opt4" type="radio" value="2" <?php if($var4=="2"){?>checked="checked" <?php } ?>>case<br/>
	<input name="opt4" type="radio" value="3" <?php if($var4=="3"){?>checked="checked" <?php } ?>>if<br/>
	<input name="opt4" type="radio" value="4" <?php if($var4=="4"){?>checked="checked" <?php } ?>>do<br/>
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
	<p>The IF is an example of decision making construct while DO is an example of?</p>
	<div align="left" id="input">
	<input name="opt5" type="radio" value="1" <?php if($var5=="1"){?>checked="checked" <?php } ?>>iteration<br/>
	<input name="opt5" type="radio" value="2" <?php if($var5=="2"){?>checked="checked" <?php } ?>>decision making<br/>
	<input name="opt5" type="radio" value="3" <?php if($var5=="3"){?>checked="checked" <?php } ?>>goto<br/>
	<input name="opt5" type="radio" value="4" <?php if($var5=="4"){?>checked="checked" <?php } ?>>comment<br/>
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
	<p>the if construct have this over the case statement except?</p>
	<div align="left" id="input">
	<input name="opt6" type="radio" value="1" <?php if($var6=="1"){?>checked="checked" <?php } ?>>it test all datatype<br/>
	<input name="opt6" type="radio" value="2" <?php if($var6=="2"){?>checked="checked" <?php } ?>>it test only interger<br/>
	<input name="opt6" type="radio" value="3" <?php if($var6=="3"){?>checked="checked" <?php } ?>>it allow only character<br/>
	<input name="opt6" type="radio" value="4" <?php if($var6=="4"){?>checked="checked" <?php } ?>>it allow only float<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var6=="1"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var6=="2"||$var6=="3"||$var6=="4"){
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
	<p>The array in FORTRAN declaration always come with?</p>
	<div align="left" id="input">
	<input name="opt7" type="radio" value="1" <?php if($var7=="1"){?>checked="checked" <?php } ?>>variable,[],and integer<br/>
	<input name="opt7" type="radio" value="2" <?php if($var7=="2"){?>checked="checked" <?php } ?>>variable,(,integer,)<br/>
	<input name="opt7" type="radio" value="3" <?php if($var7=="3"){?>checked="checked" <?php } ?>>variable<br/>
	<input name="opt7" type="radio" value="4" <?php if($var7=="4"){?>checked="checked" <?php } ?>>variable,real, ()<br/>
	</div>
	<div width="10" height="10" align="right">
		<?php
		if($var7=="2"){
			$total+=1;
		?>
		 <img src="logos/mark.jpg"  align="bottom" height="15" width="15"/>
		<?php
		}else if($var7=="4"||$var7=="3"||$var7=="1"){
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
	<p>c(i,j) mean that c is a?</p>
	<div align="left" id="input">
	<input name="opt8" type="radio" value="1" <?php if($var8=="1"){?>checked="checked" <?php } ?>>nested array<br/>
	<input name="opt8" type="radio" value="2" <?php if($var8=="2"){?>checked="checked" <?php } ?>>ordinary loop<br/>
	<input name="opt8" type="radio" value="3" <?php if($var8=="3"){?>checked="checked" <?php } ?>>construct control<br/>
	<input name="opt8" type="radio" value="4" <?php if($var8=="4"){?>checked="checked" <?php } ?>>nested loop<br/>
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
	<p>an if without else function as?</p>
	<div align="left" id="input">
	<input name="opt9" type="radio" value="1" <?php if($var9=="1"){?>checked="checked" <?php } ?>>nested if<br/>
	<input name="opt9" type="radio" value="2" <?php if($var9=="2"){?>checked="checked" <?php } ?>>single choice if<br/>
	<input name="opt9" type="radio" value="3" <?php if($var9=="3"){?>checked="checked" <?php } ?>>Does nothing<br/>
	<input name="opt9" type="radio" value="4" <?php if($var9=="4"){?>checked="checked" <?php } ?>>multi-choice if<br/>
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
	<p>The case statement must be embed within ______ construction?</p>
	<div align="left" id="input">
	<input name="opt10" type="radio" value="1" <?php if($var10=="1"){?>checked="checked" <?php } ?>>select<br/>
	<input name="opt10" type="radio" value="2" <?php if($var10=="2"){?>checked="checked" <?php } ?>>loop<br/>
	<input name="opt10" type="radio" value="3" <?php if($var10=="3"){?>checked="checked" <?php } ?>>if<br/>
	<input name="opt10" type="radio" value="4" <?php if($var10=="4"){?>checked="checked" <?php } ?>>switch<br/>
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
        <a href="control_structure.php" class="hover"><<< back </a>| 
        <a href="about.html">About Us </a>| 
    </p> 
</div>
</body>
</html>
s