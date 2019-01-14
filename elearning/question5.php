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
	<p>A variable can contain any character?</p>
	<div align="left" id="input">
		<?php
		$var1=$_POST['opt1'];

	$total=0;	
		?>
		<input name="opt1" type="radio" value="1" <?php if($var1=="1"){?>checked="checked" <?php } ?>>true<br/>
	<input name="opt1" type="radio" value="2" <?php if($var1=="2"){?>checked="checked" <?php } ?>>false<br/>
	<input name="opt1" type="radio" value="3" <?php if($var1=="3"){?>checked="checked" <?php } ?>>depend<br/>
	<input name="opt1" type="radio" value="4" <?php if($var1=="4"){?>checked="checked" <?php } ?>>but no period<br/>

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
	<p>Two varaible can be assign to a single datatype on a single line using ?</p>
	<div align="left" id="input">
		<input name="opt2" type="radio" value="1" <?php if($var2=="1"){?>checked="checked" <?php } ?>>colon<br/>
	<input name="opt2" type="radio" value="2" <?php if($var2=="2"){?>checked="checked" <?php } ?>>semi-colon<br/>
	<input name="opt2" type="radio" value="3" <?php if($var2=="3"){?>checked="checked" <?php } ?>>comma<br/>
	<input name="opt2" type="radio" value="4" <?php if($var2=="4"){?>checked="checked" <?php } ?>>period<br/>
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
	<p>REAL :: a=16 returns?</p>
	<div align="left" id="input">
	<input name="opt3" type="radio" value="1" <?php if($var3=="1"){?>checked="checked" <?php } ?>>16<br/>
	<input name="opt3" type="radio" value="2" <?php if($var3=="2"){?>checked="checked" <?php } ?>>16.00<br/>
	<input name="opt3" type="radio" value="3" <?php if($var3=="3"){?>checked="checked" <?php } ?>>16.0<br/>
	<input name="opt3" type="radio" value="4" <?php if($var3=="4"){?>checked="checked" <?php } ?>>1600<br/>
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
	<p>The implicit none help to?</p>
	<div align="left" id="input">
	<input name="opt4" type="radio" value="1" <?php if($var4=="1"){?>checked="checked" <?php } ?>>convert integer type to float type<br/>
	<input name="opt4" type="radio" value="2" <?php if($var4=="2"){?>checked="checked" <?php } ?>>Help datatype do the same work on variable<br/>
	<input name="opt4" type="radio" value="3" <?php if($var4=="3"){?>checked="checked" <?php } ?>>Over rule declaration of variable<br/>
	<input name="opt4" type="radio" value="4" <?php if($var4=="4"){?>checked="checked" <?php } ?>>overrule the convensional alphabet that must began a datatype variable<br/>
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
	<p>The constant variable cannot change it value during execution because the _________ keyword has been us to declare it?</p>
	<div align="left" id="input">
	<input name="opt5" type="radio" value="1" <?php if($var5=="1"){?>checked="checked" <?php } ?>>parameter<br/>
	<input name="opt5" type="radio" value="2" <?php if($var5=="2"){?>checked="checked" <?php } ?>>constant<br/>
	<input name="opt5" type="radio" value="3" <?php if($var5=="3"){?>checked="checked" <?php } ?>>final<br/>
	<input name="opt5" type="radio" value="4" <?php if($var5=="4"){?>checked="checked" <?php } ?>>static<br/>
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
	<p>Variable name must be up to?</p>
	<div align="left" id="input">
	<input name="opt6" type="radio" value="1" <?php if($var6=="1"){?>checked="checked" <?php } ?>>31<br/>
	<input name="opt6" type="radio" value="2" <?php if($var6=="2"){?>checked="checked" <?php } ?>>1<br/>
	<input name="opt6" type="radio" value="3" <?php if($var6=="3"){?>checked="checked" <?php } ?>>2<br/>
	<input name="opt6" type="radio" value="4" <?php if($var6=="4"){?>checked="checked" <?php } ?>>10<br/>
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
	<p>Charater of a variable name must not be more than?</p>
	<div align="left" id="input">
	<input name="opt7" type="radio" value="1" <?php if($var7=="1"){?>checked="checked" <?php } ?>>30<br/>
	<input name="opt7" type="radio" value="2" <?php if($var7=="2"){?>checked="checked" <?php } ?>>31<br/>
	<input name="opt7" type="radio" value="3" <?php if($var7=="3"){?>checked="checked" <?php } ?>>69<br/>
	<input name="opt7" type="radio" value="4" <?php if($var7=="4"){?>checked="checked" <?php } ?>>234<br/>
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
	<p>A valid format in FORTRAN for declaring variable is?</p>
	<div align="left" id="input">
	<input name="opt8" type="radio" value="1" <?php if($var8=="1"){?>checked="checked" <?php } ?>>character(10) :: a<br/>
	<input name="opt8" type="radio" value="2" <?php if($var8=="2"){?>checked="checked" <?php } ?>>float b,c<br/>
	<input name="opt8" type="radio" value="3" <?php if($var8=="3"){?>checked="checked" <?php } ?>>string a<br/>
	<input name="opt8" type="radio" value="4" <?php if($var8=="4"){?>checked="checked" <?php } ?>>integer =a<br/>
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
	<p>How many character will a variable be able to store, if declare with character(n)::a?</p>
	<div align="left" id="input">
	<input name="opt9" type="radio" value="1" <?php if($var9=="1"){?>checked="checked" <?php } ?>>n-1<br/>
	<input name="opt9" type="radio" value="2" <?php if($var9=="2"){?>checked="checked" <?php } ?>>n<br/>
	<input name="opt9" type="radio" value="3" <?php if($var9=="3"){?>checked="checked" <?php } ?>>n+1<br/>
	<input name="opt9" type="radio" value="4" <?php if($var9=="4"){?>checked="checked" <?php } ?>>n(n+1)<br/>
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
	<p>The appropriate datatype to be use while dealing with measurement is?</p>
	<div align="left" id="input">
	<input name="opt10" type="radio" value="1" <?php if($var10=="1"){?>checked="checked" <?php } ?>>real<br/>
	<input name="opt10" type="radio" value="2" <?php if($var10=="2"){?>checked="checked" <?php } ?>>integer<br/>
	<input name="opt10" type="radio" value="3" <?php if($var10=="3"){?>checked="checked" <?php } ?>>character<br/>
	<input name="opt10" type="radio" value="4" <?php if($var10=="4"){?>checked="checked" <?php } ?>>Logical<br/>
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
        <a href="variable_declaration.php" class="hover"><<< back </a>| 
        <a href="about.html">About Us </a>| 
    </p> 
</div>
</body>
</html>
s