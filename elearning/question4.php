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
	<p>The basic element of a FORTRAN originated from?</p>
	<div align="left" id="input">
		<?php
		$var1=$_POST['opt1'];

	$total=0;	
		?>
		<input name="opt1" type="radio" value="1" <?php if($var1=="1"){?>checked="checked" <?php } ?>>Alphabet<br/>
	<input name="opt1" type="radio" value="2" <?php if($var1=="2"){?>checked="checked" <?php } ?>>Character set<br/>
	<input name="opt1" type="radio" value="3" <?php if($var1=="3"){?>checked="checked" <?php } ?>>Sign and Symbol<br/>
	<input name="opt1" type="radio" value="4" <?php if($var1=="4"){?>checked="checked" <?php } ?>>aAlphanumeric<br/>

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
	<p>Examples of keywords in FORTRAN are except?</p>
	<div align="left" id="input">
		<input name="opt2" type="radio" value="1" <?php if($var2=="1"){?>checked="checked" <?php } ?>>print<br/>
	<input name="opt2" type="radio" value="2" <?php if($var2=="2"){?>checked="checked" <?php } ?>>Read<br/>
	<input name="opt2" type="radio" value="3" <?php if($var2=="3"){?>checked="checked" <?php } ?>>Start<br/>
	<input name="opt2" type="radio" value="4" <?php if($var2=="4"){?>checked="checked" <?php } ?>>PROGRAM<br/>
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
	<p>The use of period in FORTRAN is for?</p>
	<div align="left" id="input">
	<input name="opt3" type="radio" value="1" <?php if($var3=="1"){?>checked="checked" <?php } ?>>concatinate<br/>
	<input name="opt3" type="radio" value="2" <?php if($var3=="2"){?>checked="checked" <?php } ?>>Match character<br/>
	<input name="opt3" type="radio" value="3" <?php if($var3=="3"){?>checked="checked" <?php } ?>>mark float number<br/>
	<input name="opt3" type="radio" value="4" <?php if($var3=="4"){?>checked="checked" <?php } ?>>seperate variable<br/>
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
	<p>An arithemic operator needs how many operand to function?</p>
	<div align="left" id="input">
	<input name="opt4" type="radio" value="1" <?php if($var4=="1"){?>checked="checked" <?php } ?>>1<br/>
	<input name="opt4" type="radio" value="2" <?php if($var4=="2"){?>checked="checked" <?php } ?>>4<br/>
	<input name="opt4" type="radio" value="3" <?php if($var4=="3"){?>checked="checked" <?php } ?>>3<br/>
	<input name="opt4" type="radio" value="4" <?php if($var4=="4"){?>checked="checked" <?php } ?>>2<br/>
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
	<p>Arithemetic opererator is made up of +,-,* etc. while the relational operator is made up of?</p>
	<div align="left" id="input">
	<input name="opt5" type="radio" value="1" <?php if($var5=="1"){?>checked="checked" <?php } ?>>/=,<,>, etc. <br/>
	<input name="opt5" type="radio" value="2" <?php if($var5=="2"){?>checked="checked" <?php } ?>>.AND., .NOT., .OR. etc.<br/>
	<input name="opt5" type="radio" value="3" <?php if($var5=="3"){?>checked="checked" <?php } ?>>sin(), cos(), tan() etc-<br/>
	<input name="opt5" type="radio" value="4" <?php if($var5=="4"){?>checked="checked" <?php } ?>>**, (), etc.<br/>
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
	<p>This sign /= means what in Fortran?</p>
	<div align="left" id="input">
	<input name="opt6" type="radio" value="1" <?php if($var6=="1"){?>checked="checked" <?php } ?>>equal to<br/>
	<input name="opt6" type="radio" value="2" <?php if($var6=="2"){?>checked="checked" <?php } ?>>not equal to<br/>
	<input name="opt6" type="radio" value="3" <?php if($var6=="3"){?>checked="checked" <?php } ?>>greater or equal to<br/>
	<input name="opt6" type="radio" value="4" <?php if($var6=="4"){?>checked="checked" <?php } ?>> less or equal to<br/>
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
	<p>The function MAX(a,b) returns?</p>
	<div align="left" id="input">
	<input name="opt7" type="radio" value="1" <?php if($var7=="1"){?>checked="checked" <?php } ?>>return the avarage between a and b<br/>
	<input name="opt7" type="radio" value="2" <?php if($var7=="2"){?>checked="checked" <?php } ?>>return the highest between a and b<br/>
	<input name="opt7" type="radio" value="3" <?php if($var7=="3"){?>checked="checked" <?php } ?>>return the lowest between a and b<br/>
	<input name="opt7" type="radio" value="4" <?php if($var7=="4"){?>checked="checked" <?php } ?>>return the range of a and b<br/>
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
	<p>One of the below is a valid FORTRAN complete Statement?</p>
	<div align="left" id="input">
	<input name="opt8" type="radio" value="1" <?php if($var8=="1"){?>checked="checked" <?php } ?>>a=b+c<br/>
	<input name="opt8" type="radio" value="2" <?php if($var8=="2"){?>checked="checked" <?php } ?>>b+c=a<br/>
	<input name="opt8" type="radio" value="3" <?php if($var8=="3"){?>checked="checked" <?php } ?>>a=c(a)<br/>
	<input name="opt8" type="radio" value="4" <?php if($var8=="4"){?>checked="checked" <?php } ?>>a-b+c<br/>
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
	<p>The symbol for concatenation is?</p>
	<div align="left" id="input">
	<input name="opt9" type="radio" value="1" <?php if($var9=="1"){?>checked="checked" <?php } ?>>.AND.<br/>
	<input name="opt9" type="radio" value="2" <?php if($var9=="2"){?>checked="checked" <?php } ?>>//<br/>
	<input name="opt9" type="radio" value="3" <?php if($var9=="3"){?>checked="checked" <?php } ?>>.OR.<br/>
	<input name="opt9" type="radio" value="4" <?php if($var9=="4"){?>checked="checked" <?php } ?>><><br/>
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
	<p>The continuation sign  ?</p>
	<div align="left" id="input">
	<input name="opt10" type="radio" value="1" <?php if($var10=="1"){?>checked="checked" <?php } ?>>&<br/>
	<input name="opt10" type="radio" value="2" <?php if($var10=="2"){?>checked="checked" <?php } ?>>**<br/>
	<input name="opt10" type="radio" value="3" <?php if($var10=="3"){?>checked="checked" <?php } ?>>c<br/>
	<input name="opt10" type="radio" value="4" <?php if($var10=="4"){?>checked="checked" <?php } ?>>_<br/>
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
        <a href="keywords_and_control.php" class="hover"><<< back </a>| 
        <a href="about.html">About Us </a>| 
    </p> 
</div>
</body>
</html>
s