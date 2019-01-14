<html >
<head>
<title>e-learning</title>
<link rel="stylesheet" type="text/css" href="css/admin.css" />
<SCRIPT TYPE="text/javascript" src="javascript/script.js"></SCRIPT>
  <SCRIPT TYPE="text/javascript" src="javascript/jquery.js"></SCRIPT>
 <SCRIPT TYPE="text/javascript">

$(function () {
            setInterval("rotateImages()",3500);
        });

        function rotateImages() {
            var oCurPhoto = $(".scroll-image div.current");
            var oNxtPhoto = oCurPhoto.next();
            if (oNxtPhoto.length == 0)
                oNxtPhoto = $(".scroll-image div:first");

            oCurPhoto.removeClass('current').addClass('previous');
            oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000,
            function () {
                oCurPhoto.removeClass('previous');
            });
        }
  </SCRIPT>
<style type="text/css">
<!--
.style3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	color: #999999;
}
.style4 {
	font-family: "Courier New", Courier, monospace;
	font-style: italic;
}
.style6 {color: #00FF99}
.style8 {color: #CDCDCD}
.style9 {
	font-size: 16mm;
	font-weight: bold;
	color: #00CCFF;
}
.style10 {font-size: 24px; font-family: Georgia, "Times New Roman", Times, serif;}
.style11 {color: #660000}
-->
</style>
</head>
<body>
<table width="678" height="542"  align="center" id="tab1">
  <tr>
    <td width="251" height="170"><p>&nbsp;</p>
        <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p align="left" class="style3"> <span class="style6"> <img src="logos/logo.jpg" alt="pix" width="251" height="25">MAPOLY<span class="style4"> academy </span></span></p></td>
  </tr>
  <tr bgcolor="yellow">
    <td height="338" rowspan="2"><DIV id="rollover_images_quick">

<DIV class="scroll-image">

  <div class="current">
      <img src="logos/elearning1.jpg"  id="imgscroller"/>
   </div>

   <div >
     <img src="logos/elearning2.jpg" id="imgscroller" />
   </div>

   <div >
     <img src="logos/learning7.jpg" id="imgscroller" />
   </div>

   <div >
       <img src="logos/elearning.jpg" id="imgscroller" />
   </div>


   <div >
       <img src="logos/elearning5.jpg" id="imgscroller" />
   </div>

   <div >
       <img src="logos/elearning8.jpg" id="imgscroller" />
   </div>

</DIV></td>
    <td width="417" bordercolor= "#0000FF" bgcolor="#006600" class="style8">
	<table width="417" height = "299" align="center" bgcolor="#3399CC">
      <tr>
        <td width="409" bordercolor="#3300FF" bgcolor="#6600FF"><div align="center"><span class="style9"><blink>e-learning</blink></span> </div>
              <p align="center" class="style10">
                <marquee>
                <span class="style11">PROGRAMMING IN FORTRAN LANGUAGE</span>
                </marquee>
          </p></td>
      </tr>
    </table>
		<form action="chapters.php" method="POST" class="opt">
        <select name="option">
          <option value="1" class="opt">Introduction</option>
          <option value="2" class="opt">Concept of Programming</option>
          <option value="3" class="opt">Structure of Fortran</option>
          <option value="4" class="opt">Keywords and Control </option>
          <option value="5" class="opt">Variable Declaration</option>
          <option value="6" class="opt">Control Structure</option>
   </select>
          <input type="submit" name="submit" value="go"/>

	  </form>
</table>

</body>
</html>
