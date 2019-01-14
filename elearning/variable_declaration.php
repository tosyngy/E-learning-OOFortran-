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
        <a href="question5.php" class="hover">Questions </a>| 
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
         </ol>
         <td width="900" valign="top" bgcolor="#9999FF">
         
         

    <div id="body_content_heading">
    Variable Declaration
         </div>
    <div id="body_content">
    <p>    <blockquote >
<blockquote>
  <br/>
<p id="sub">Datatypes</p>
A variable is a data object whose value can be defined and redefined (in contrast to constants, see below). Variables and constants have a type, which can be one of the five intrinsic types, or a derived type. Intrinsic types are part of the Fortran language. There are five different intrinsic types. In Fortran 90, there is additionally the possibility of defining derived types, which are defined by the user (see below). The five intrinsic types are:
<ol><li>Integer Type<br/>
For integer values (like 1, 2, 3, 0, -1, -2, …). e.g.
<div id="program"><tt>
 integer:: variable_name<br/>
interger:: b=2<br/>
integer::num=-1,ans<br/>
</tt>
</div>
</li>
<li>Real Type<br/>
For real numbers (such as 3.14, -100.876, 1.0 etc.). A processor must provide two different real types: The default real type and a type of higher precision, with the name double precision. Also this is a legacy of FORTRAN 77. Fortran 90 gives much more control over the precision of real and integer variables (through the kind specifier), and there is therefore no need to use double precision. However, you will see double precision often used in older programs. For most of the exercises and examples in this manual the real type suffices. In the real word however, double precision is often required.
For now, if you prefer to use double precision in your programs, use:
<div id="program"><tt>
Real:: variable_name<br/>
Real:: b=2.5<br/>
</tt>
</div>
</li>
<li>Complex Type<br/>
For complex numbers. A complex value consists of two real numbers, the real part and the imaginary part. Thus, the complex number (2.0, -1.0) is equal to 2.0 – 1.0i.
</li>
<li>Logical Type<br/>
There are only two logical result values: .true. and .false. (note the dots around the words true and false).
<div id="program"><tt>
Logical:: variable_name<br/>
Logical a=.true.<br/>
</tt>
</div>
</li>
<li>Character Type<br/>
Data objects of the character type include characters and strings (a string is a sequence of characters). The length of the string can be specified by len (see the examples below). If no length is specified, it is 1.
<div id="program"><tt>
Charater:: variable_name !accept single character<br/>
Charater(n):: variable_name !accept n number character<br/>
Charater :: b="ade"; print*,b; !print a
</tt>
</div>
</li>
<li>Constants<br/>
A constant is a data object whose value cannot be changed.
A literal constant is a constant value without a name, such as 3.14 (a real constant), “Tanja” (a character constant), 300 (an integer constant), (3.0, -3.0) (a complex constant), .true. or .false. (logical constants. These two are the only logical constants available).
A named constant is a constant value with a name. Named constants and variables must be declared at the beginning of a program (or subprogram – see Chapter 4), in a so-called type declaration statement. The type declaration statement indicates the type and name of the variable or constant (note the two colons between the type and the name of the variable or constant). Named constants must be declared with the parameter attribute:
<div id="program"><tt>
real, parameter :: pi = 3.1415927
</tt>
</div></li></ol><p></p>
It is very important for for programmer to know the type of DateType that is appropriate. so Examples are show below
<br/><p></p>
<div id="program"><tt>
Name: &nbsp;&nbsp;&nbsp;&nbsp;  Character::Nam (Basit)<br/>
Balance: &nbsp;&nbsp;&nbsp;&nbsp;  Real::Bal (45000.17)<br/>
Age:  &nbsp;&nbsp;&nbsp;&nbsp; Integer::iAge (25)<br/>
Address: &nbsp;&nbsp;&nbsp;&nbsp; Character(50)::Add (Ojere village, Abeokuta)<br/>
Sex: &nbsp;&nbsp;&nbsp;&nbsp;    Character::Sex (Male/Female)<br/>
Pin: &nbsp;&nbsp;&nbsp;&nbsp;    Integer::mPin (0013107840)<br/>
Grade point: &nbsp;&nbsp;&nbsp;&nbsp; Real::Grade (3.67)<br/><p></p>
</tt></div>
NB: The it is optional, but it makes a nice visual barrier for the more complicated declarations.<br/>
The datatype declaration statement may be used to assign an initial value to a variable as they are declared. This is call initialization of a variable name e.g. 
<div id="program"><tt>
<br/>Temperature = 16.83
<br/>Real::temp = 16.83<br/>
Real::temp<br/>
Temp = 16.83<br/>
</tt></div>
NOTE that: “Real is use in measurement while Integer is use in counting.”

<p id="sub">Rules for Naming Variable in Fortran 90</p>
A name or “identifier” in Fortran must adhere to fixed rules.
<ol>
<li>They cannot be longer than 31 characters,</li>
<li> must be composed of alphanumeric characters (all the letters of the alphabet, and the digits 0 to 9) and underscores ( _ ), and 
</li><li>the first character must be a letter. 
 </li/><li>Identifiers are case-insensitive (except in character strings like “Hello world!” in the example above); Thus, PRINT and print are completely identical.
</li><li>  The first character of a symbolic name must be a letter.
</li><li>  No spaces are permitted in between symbolic name except with the use of underscore.
</li><li>  Symbolic name list are separated by comma.
</li></ol>
<center><img src="logos/pic1.jpg" alt="pix" width="456" height="195" align="bottom"/></center><p></p>

<p id="sub">Variables</p>
Like named constants, variables must be declared at the beginning of a program (or subprogram) in a type declaration statement:
<br/>integer :: total<br/>
real :: average1, average2 ! this declares 2 real values<br/>
complex :: cx<br/>
logical :: done<br/>
character(len=80) :: line ! a string consisting of 80 characters<br/>

<p id="">assignment statement</p>
  This is use to show the purpose of identifier in a program, it is an expression formed by using arithmetic operator in assign an initial value to a variable. Expressions are often used in conjunction with the assignment operator, =, to give values to objects. The general format of an assignment statement is: symbolic name = expression. An expression is a value (integer, real and alphabet) or combination of arithmetic operator and relevant identifier. 
<br/>
Examples,<br/>
<div id="program"><tt>
a = b<br/>
c = SIN (.7)*12.7<br/>
name = initials//surname<br/>
bool = (a.EQ.b.OR.c.NE.d)<br/>
The LHS is an object and the RHS is an expression.<p></p>
</tt></div>
There are two (2) types of assignment statement:
<ol>
<li> Simple Assignment Statement: This assign a particular value to a symbolic name e.g.<br/>
  <div id="program"><tt>
Real::temperature = 16.00<br/>
Real::temperature<br/>
  Temperature = 16.00
</tt></div>
</li>
<li> Complex Assignment Statement: This is a combination of arithmetic operator and symbolic name. It is usually used to achieve calculation involving a formula e.g.
Calculate the area of a circle:
<div id="program"><tt>
!Formula πr2<br/>
Area =?<br/>
Radius = 5.3<br/>
Ar = π (Pi) * Ra*Ra<br/>
Real::A, P, R<br/>
  R = 5.3<br/>
  P = 3.142<br/>
A = P*R**2 OR A =P*R*R &nbsp;&nbsp;&nbsp;&nbsp;   !complex assignment statement<br/>
</tt></div>
</li>
</ol>
NB: The only statements that do not begin with a keyword are the assignment statement that has the form variable = expression
<br/><br/>
<div align="right">
<p><b><h3>TEST YOUR UNDERSTANDING AT THIS CONNER</h3></b><p/>
  <a href="question5.php">
<img src="logos/elearning8.jpg" align="top" height="100" width="100"/>
   </a>
</blockquote>
</blockquote>
    
</div>
<hr id="info_footer">
<div class="links" align="center">
        <span class="style4"><a href="index.html">Home </a>| 
        <a href="question5.html" class="hover">Questions </a>| 
        <a href="about.html">About Us </a>| 
        <a href="index.html">Close</a></span>
</div>
    <div id="link-image">
        <a href="control_structure.php">
<img src="logos/next.jpeg" align="right" height="50" width="100"/>
   </a>
   <a href="keywords_and_control.php" >
    <img src="logos/previous.jpeg"  align="left" height="50" width="100"/></div>
</a>
<br/>
</hr>

 

</td>
     </tr>
          
</table>
</body>
</html>
