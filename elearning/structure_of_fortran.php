<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>e-learning</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

    <SCRIPT TYPE="text/javascript" src="javascript/script.js"></SCRIPT>
    <SCRIPT TYPE="text/javascript" src="javascript/jquery.js"></SCRIPT>
</head>
<body >
 <table align="center"  id="wrapper">
   <tr >
<td height="157"  colspan="2" bordercolor="#FFFFFF" bgcolor="#9999FF" >
<div align="center"  id="header-text" >
PROGRAMMING IN FORTRAN
</div><br/>
<fieldset id="link">
        <span ><a href="index.php">Home </a>| 
        <a href="question3.php" class="hover">Questions </a>| 
        <a href="about.html">About Us </a>| 
        <a href="index.php">Close</a><br/><br/>
    </span>    
      </feildset>
</td>
   </tr>
     <tr>
         <td id="var_link">
                <div id="head_link">Contents Links</div><p></p>
             <ol>
     <li> <a href="introduction.php">Introduction</a></li>
     <p><li><a href="concept_of_programming.php">Concept of Programming</a></li></p>
     <p><li><a href="structure_of_fortran.php">Structure of Fortran</a></li></p>
     <p><li><a href="Keywords_and_control.php">Keywords and Controls Structure</a></li></p>
     <p><li><a href="Variable_declaration.php">Variable Declaration</a></li> </p>
     <p><li><a href="control_structure.php">Control Structure</a></li></p> </ol>
     </td>
         <td width="900" valign="top" bgcolor="#9999FF">
    <div id="body_content_heading">
    Structure of Fortran
         </div>
    <div id="body_content">
    <p></p>   <blockquote >
<blockquote>
  <br/>
The structure of a FORTRAN program consists of three (3) major areas of phases:
<ol>
<li>  Declaration
</li><li>  Execution
</li><li>  Termination
</li></ol>
Declaration statements are non-executable statement.<br/>
Execution statements are those statements that result in machine language instruction.<br/>
Termination statements are used to indicate the end of a program.<br/>
<p id="sub">The Order Of fortran programming</p>
<ol><li>  Program symbolic name
</li><li>  Introductory comments (optional)
</li><li>  Implicit none
</li><li>  Datatype declaration
</li><li>  Execution statement e.g.    
<ul><li>simple assignment
</li><li>Read statement
</li><li>Complex assignment
</li><li>Output statement
</li></ul>
</li><li>  Stop (optional)
</li><li>  End
</li></ol>

Let take a look at our <a href="Introduction.php#prog1">first program in chapter 1</a>
<div id="program"><tt>
PROGRAM nothing<br/>
! does nothing<br/>
END PROGRAM nothing<br/></tt>
</div>
This is probably the simplest Fortran90 program. It does nothing. The first statement simply tells the
compiler that a program named "nothing" is to follow. The second statement is a comment (because of
the exclamation mark) and it is ignored by the compiler. The third and last statement informs the
compiler that the program terminates at that point. Notice that statements between PROGRAM and
END are executed in the order that they are written (not strictly true but ok for the moment).
Keywords such as PROGRAM and END are written in capitals just for illustration purposes. Small
case or a mixture of upper and lower case is acceptable. So PROGRAM, Program, PROgrAM are
all acceptable.
<p></p>
Let take a look at the <a href="Introduction.php#prog2">second program in chapter 1</a>
<div id="program"><tt>
PROGRAM hi<br/>
! display a message<br/>
WRITE(*,*) 'Hello World!'<br/>
END PROGRAM hi<br/></tt>
</div>
<p>
The above program introduces the concept of displaying information to the screen (or other devices).
Running this program the message Hello World (without the quotes) will appear on the screen. This
is achieved by employing the keyword WRITE and typing the appropriate message between single
quotes or double qoute. One can extend the program to, say, display the name of the current user. Then using in a
similar fashion another available keyword (READ) the user can enter his/her name and by changing
the WRITE statement he/she can display the name.
</p>
Although there are several problem that might be complex than this, but must of the method to adopt
is as illustrated above.
<p></p>
Note the following:<br><ul>
</li><li>a program starts with program program_name
</li><li>it ends with end program program_name
</li><li>print* displays data (print*,'Hello, world!' the character string “Hello, world!”) on the screen.
</li><li>all characters after the exclamation mark (!) (except in a character string) are ignored by the compiler. It is good programming practice to include comments. Comments can also start after a statement, for example:<br>
print*, “Hello world!” ! this line prints the message “Hello world!”
</li><li>Note the indentation. Indentation is essential to keep a program readable. Additionally, empty lines are allowed and can help to make the program readable.
</li><li>Fortran 90 allows both upper and lowercase letters (unlike FORTRAN 77, in which only uppercase was allowed).
</li><ul>
<br/><br/>
<div align="right">
<p><b><h3>TEST YOUR UNDERSTANDING AT THIS CONNER</h3></b><p/>
  <a href="question3.php">
<img src="logos/elearning8.jpg" align="top" height="100" width="100"/>
   </a>
</blockquote>
</blockquote>
    
</div>
<hr id="info_footer">
<div class="links" align="center">
        <span class="style4"><a href="index.html">Home </a>| 
        <a href="question3.php" class="hover">Questions </a>| 
        <a href="about.html">About Us </a>| 
        <a href="index.html">Close</a></span>
</div>
    <div id="link-image">
        <a href="keywords_and_control.php">
<img src="logos/next.jpeg" align="right" height="50" width="100"/>
   </a>
   <a href="concept_of_programming.php" >
    <img src="logos/previous.jpeg"  align="left" height="50" width="100"/></div>
</a>
<br/>
</hr>

 

</td>
     </tr>
          
</table>
</body>
</html>
