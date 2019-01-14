 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>e-learning</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

	<SCRIPT TYPE="text/javascript" src="javascript/script.js"></SCRIPT>
	<SCRIPT TYPE="text/javascript" src="javascript/jquery.js"></SCRIPT>

 </head>
 <body> 
    <div id="body_content">
        <blockquote >

<FORM action="" method="post">
	<input type="text" id="snum" name="snum" onblur="dothis();" />
	<input type="text" name="fnum" />
	<input type="submit" name="submit" value="add" onClick="dothis();">	
</FORM>

<?php
if(isset($_POST["submit"])){
$a=$_POST["snum"];
$b=$_POST["fnum"];
echo "the sum is ". ($a+$b);
}
?>

<SCRIPT TYPE="text/javascript">
function  dothis () {
	var var1=document.getElementById('snum').value;
		alert(var1);
		document.getElementById('snum').value="ola";
}

</SCRIPT>


</blockquote>
    
</div>
 </pre>
</body>
</html>