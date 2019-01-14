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
        <a href="question2.php" class="hover">Questions </a>| 
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
     <p><li><a href="control_structure.php">Control Structure</a></li></p></ol>
     </td>
         <td width="900" valign="top" bgcolor="#9999FF">
 <div id="body_content_heading">
    Concept of Fortran Programming
         </div>
    <div id="body_content">
    <p>  </p>  <blockquote >
<blockquote>
  <br/>
<p id="sub">How to Write a Computer Program</p>
There are four general phases during the development of any computer program:<br>
<ol>
<li> Specify the problem,</li>
<li> Analyze and break down into a series of steps towards solution, (i.e., design an algorithm),</li>
<li> Write the code (e.g. Pascal, FORTRAN, C++, Algol, PL/I etc),</li>
<li> Compile and run (i.e., test the program).</li>
</ol>
When writing a computer program it is absolutely vital that the problem to be solved is fully understood. A good percentage of large programming projects run into trouble owing to a misunderstanding of what is actually required. The specification of the problem is crucial. It is usual to write a detailed `spec' of the problem using a `natural language' (e.g., English). Once the problem has been specified, it needs to be broken down into small steps towards the solution, in other words an algorithm should be designed. It is perfectly reasonable to use English to specify each step. This is known as pseudo-code
<p id="sub">Characteristic of Sciencistific Programming</p>
<ol>
<li>  EXPRESIVITY: this is the ability of a scientific language to clearly reflect the meaning intended by a programmer. Such language should include notations which are consistent with those that are used in the field for which the language was design.
</li><li>  WELL DEFINEDNESS: this is the ability of a language syntax and semantic to be freed of ambiguity. Syntax is a collection of rules guiding programming construct and statement. Semantic is the meaning of programming construct and statement.
</li><li>  DATA TYPES AND STRUCTURE: this is the ability of a scientific language to support varieties of data value and non-elementary collection of data value. Data values are facts that describe things process by our program or algorithm.
</li><li>  MODULARITY: this is a language support for independent and functions.
</li><li>  GENERALITY: this is a language ability to be employed in a wide range of application.
</li><li> EFFICIENCY: this is a description of a language execution speed (rate of execution performance).
</li><li>  PEDAGOGY: this is the ability to teach and learn scientific programming language.
</li><li> PORTABILITY: this is the ability of a language to be implemented on varieties of a computer.
</li><li>  INPUT AND OUTPUT FACILITY: this is a language support for database, file access and information retrieval system.
</li>
</ol>
<p id="sub">Some of The significant Feature of FORTRAN</p>
<ol><li>  Simple to learn.
</li><li>  Machine independent (portable).
</li><li>  Consistence with mathematical functions and symbols.
</li><li>  Problem oriented language.
</li><li> Efficient execution.
</li><li>  Ability to control storage allocation.
</li><li>  More freedom in code layout.
</li></ol>

<p id="sub">Areas of Application</p>
FORTRAN is useful for a wide range of application such as:
<ol><li>  Numerical weather prediction.
</li><li>  Finite element analysis.
</li><li>  Computational fluid dynamics.
</li><li>  Computational physics.
</li><li>  Computational chemistry.
</li><li>  Number crunching or mathematical equation processing.
</li><li>  Engineering applications.
</li></ol>

<p id="sub">features of FORTRAN 1990/1995</p>
Fortran 1990/1995 is a super-set of FORTRAN 1977. Major revisions in FORTRAN 1990/1995 are:
<ol><li>  Free form source input.
</li><li>  Use of both upper case and lower case characters. In addition, FORTRAN does not distinguish between upper and lower case characters, so NUMBER is entirely equivalent to number or NumbER. However, this is not allowed in password settings
</li><li>  Identifiers (The names of variables are sometimes referred to an “ identifiers ”.) or variable names may be up to 31 characters in length. The FORTRAN language defines a number of names, or keywords, such as PRINT, INTEGER, MAX, etc. The spelling of these names is defined by the language. There are a number of entities that must be named by the programmer, such as variables, procedures etc. These names must be chosen to obey a few simple rules
</li><li>  Comments are indicated with ‘ ! ’ (Exclamation mark). This makes in-line comments easier.
</li><li>  Use of ‘ ;’ (semi column) to separate command in the same line i.e. it supports more than one statement per line.
</li><li>  There is no explicit delimiter in FORTRAN.
</li><li>  Use of ‘ & ’ (ampersand) as a continuation symbol.
</li><li>  Use of implicit none in declaration statement.
</li><li>  Support the use of dynamic storage
</li><li>  Support the use of Module which provide object based facilities for Fortran 90
</li></ol>
<p id="sub">FORTRAN 90'S object oriented facilities</p>
Fortran 90 has some degree of object oriented facilities such as:
<ol><li>  data abstraction - user-defined types;
</li><li>   data hiding -PRIVATE and PUBLIC attributes;
</li><li>   encapsulation - Modules and data hiding facilities;
</li><li>  inheritance and extensibility - super-types, operator overloading and generic procedures;
</li><li>   Reusability- Modules;
</li></ol>
<p></p>  
Fortran 77 had virtually no object oriented features at all; Fortran 90 adds much but by no means all the required functionality. As usual there is a trade off with efficiency. One of the ultimate goals of Fortran 90 is that the code must be efficient.
Comments<br/>
All programs should have a textual commentary explaining the structure and meaning of each section of the program. All characters appearing on a line to the right of the ! character are ignored by the compiler and do not form any part of the executable program. The text appearing after a ! character is referred to as a comment and this feature should be used to explain to the reader of a program what the program is trying to achieve. This is particularly important if the program will have to be altered sometime in the future.
<br/><div id="program"><tt>
area = pi*radius*radius !Calculate the area of circle
</tt>
</div>
<br/>
Comments are also used to inhibit the action of statements that are used to output intermediate values when testing a program but which may be required again. The following statement is said to be ‘commented out’ and is not executed.
<br/><div id="program"><tt>
! WRITE (6,*) temp, radius*radius
</tt>
</div>
<br/><br/>
<div align="right">
<p><b><h3>TEST YOUR UNDERSTANDING AT THIS CONNER</h3></b><p/>
  <a href="question2.php">
<img src="logos/elearning8.jpg" align="top" height="100" width="100"/>
   </a>
</blockquote>
</blockquote>
    
</div>
<hr id="info_footer">
<div class="links" align="center">
        <span class="style4"><a href="index.html">Home </a>| 
        <a href="question2.php" class="hover">Questions </a>| 
        <a href="about.html">About Us </a>| 
        <a href="index.html">Close</a></span>
</div>
    <div id="link-image">
        <a href="structure_of_fortran.php">
<img src="logos/next.jpeg" align="right" height="50" width="100"/>
   </a>
   <a href="introduction.php" >
    <img src="logos/previous.jpeg"  align="left" height="50" width="100"/></div>
</a>
<br/>
</hr>

 

</td>
     </tr>
          
</table>
</body>
</html>
