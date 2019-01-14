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
        <a href="question4.php" class="hover">Questions </a>| 
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
    Keywords and Operators 
         </div>
    <div id="body_content">
    <p>    <blockquote >
<blockquote>
  <br/>
<p id="sub">BASIC ELEMENTS OF A FORTRAN PROGRAM<p/>
The basic element of a FORTRAN program originated from character set. The character set of a FORTRAN program is a set of symbols from which all program are composed. It consists of the set of alphanumeric characters and a limited set of punctuation marks and other special symbols. The alphanumeric characters are the upper case letters, A-Z, the lower case letters, a-z, the digits, 0-9, and the underscore character; there is no difference between upper and lower case letters in Fortran 90. The following is a list of the characters used in a FORTRAN program.
<ol type="a"><li>  Digits (0, 1, -------, 9)
</li><li>  Alphabetic characters (A, B, C, ------------, Z) (a, b, c, --------------, z)
</li><li>  Symbols (+, ;, !, &, * etc.)
</li></ol>
These three (3) basics components form the universal set from which all the instruction and statement of your program are derived.
FORTRAN STATEMENTS
<p><p/>
A FORTRAN statement is made up of keywords, names, expressions, and delimiters.<br/>
Keywords are predefined words that have some special meaning; most statements start with a keyword (e.g., print, end, integer, function, etc.).
<br/>Names are programmer-defined and are used to give unique identifiers to variables, constants, procedures, modules, etc. 
<br/>Expressions are the “computational engines” that generate computed results; they are formed from operands and operators. 
<br/>Operands include constants, variables etc.<br/>
<p iid="sub">There are five (5) basic entries of a FORTRAN program<p>
  <ol>
<li>  KEYWORDS: these are reserved words that have special meaning in FORTRAN program. These words are essential components of any meaningful program. One limitation is that, keywords cannot be used as identifiers or variable names. The use of keywords must be consistence with what is defined upon them e.g. Read*, Print*, Write, Implicit none etc.
they are finitely all the words that make up the programs apart from expression, operator and operators.
<p></p></li><li> ARITHMETIC OPERATORS: these are symbols that are used to achieve arithmetic operation and generate some computation. They are similar to those used in elementary arithmetic except for some minor differences. Some operators are called dyadic operators because they take two arguments wherever they occur while some operators are monadic because they can take only one argument.
<pre>________________________________________________________________  
|S/N   |  FORTRAN arithmetic   | operators    |  meaning Type  |
----------------------------------------------------------------
|  1   |          +            | Addition     | Monadic/dyadic |
----------------------------------------------------------------
|  2   |          -            | Subtraction  | Monadic/dyadic |
----------------------------------------------------------------
|  3   |          *            |Multiplication| Monadic/dyadic |
----------------------------------------------------------------
|  4   |          /            | Division     | dyadic         |
----------------------------------------------------------------
|  5   |         **            |Exponentiation| dyadic         |
----------------------------------------------------------------
|  6   |         ()            |Bracket       |                |
----------------------------------------------------------------
|  7   |          =            |Equal to      |                |
----------------------------------------------------------------
The structure look like this:<br/>
<div id="program"><tt>
integer:: a=2,b=3,c
c=a+b
b=a*b
a=b*a
</tt>
</div>
</pre>

Rule of Precedence: when more than one operator occurs in an expression, the correct order of calculation is determine by what is called rule of precedence. Rule of precedence determine the priority of different operator in an expression.
Precedence  Operator
<pre>_____________________________  
|Precedence   |  Operator   |
-----------------------------
|      1      |      ()     |
-----------------------------
|      2      |      **     |
-----------------------------
|      3      |      /,*    |
-----------------------------
|      4      |     +,-     |
-----------------------------
Note: operators of equal precedence are calculated working from left to right.
<div id="program"><tt>
a=(b**c)+b
b=a+c-b
</tt>
</div>
</pre><p></p>
</li><li> RELATIONAL OPERATOR: compare the values of two operands. these are symbols that show relationship between identifiers in a programming construct. They are mostly use in programming where decisions and control structures are needed e.g. 

<pre>_________________________________________  
|Operators   |          Definitions     |
-----------------------------------------
|    /=      | Not equal to             |
-----------------------------------------
|     <      | Less than                |
-----------------------------------------
|    <=      | Less than or equal to    |
-----------------------------------------
|    >       | Greater than             |
-----------------------------------------
|    >=      | Greater than or equal to |
-----------------------------------------
|    ==      | Is equal to?             |
-----------------------------------------
<div id="program"><tt>
if(a>b);print*,a; endif ! this is a three lines of statement seperated by semi-colon; 
</tt>
</div></pre>
Some symbols or signs that are permitted in FORTRAN are comma(,) ,period(.) and single or double qoutes (",')
The comma is usually used to separate list of variables or identifiers e.g. age, sex, grade, name etc.
The period is use for floating point number e.g. 14.85
Single quotation is use string processing e.g. print ‘tunde’
</li><li><p>FUNCTIONS: Functions are descriptive name that specify a more complex operation. An intrinsic function is a type of function that is built-in into FORTRAN e.g. 

<pre>__________________________________________________________  
|S/N   |  Function Name  |  Definition                   |
----------------------------------------------------------
|  1   |   Sqrt(m)       | Square root of m              |
----------------------------------------------------------
|  2   |   Sin(y)        | Sine of y                     |
----------------------------------------------------------
|  3   |   Cos(k)        | Cosin of k                    |
----------------------------------------------------------
|  4   |   Tan(a)        | Tangent of a                  |
----------------------------------------------------------
|  5   |   Log(x)        | Loge of x                     |
----------------------------------------------------------
|  6   |   Log10(x)      | Log10 of x                    |
----------------------------------------------------------
|  7   |   Abs(m)        |        |m|                    |
----------------------------------------------------------
|  8   |   Exp(x)        | e<sup>x</sup>                            |
----------------------------------------------------------
|  9   |   Float(y)      | Convert integer to real       |
----------------------------------------------------------
|  10  |   Ifix(x)       | Convert real to integer       |
----------------------------------------------------------
|  11  |   Mod(a, b)     | Remainder of a divided by b   |
----------------------------------------------------------
|  12  |   Max(a, b)     | Maximum of a and b            |
----------------------------------------------------------
|  13  |   Min(a, b)     | Minimum of a and b            |
----------------------------------------------------------
Note: max and min cand take on more than two functions such as max(a,b,c).
<div id="program"><tt>
a=Sqrt(b) 
c=max(a,b)
</tt>
</div></pre>
</pre></p>
</li><li>LOGICAL OPERATOR: these are operators that perform a particular action basic on true or false. These operators are:-
Operator  Definition
.NOT. Negation
.AND. Conjunction
.OR.  Disjunction
.EQV. Equivalence
.NEQV.  In equivalence
<pre>_________________________________________  
|Operators   |          Definitions     |
-----------------------------------------
|   .NOT.    | Not equal to             |
-----------------------------------------
|   .AND.    | Less than                |
-----------------------------------------
|   .OR.     | Less than or equal to    |
-----------------------------------------
|   .EQV.    | Greater than             |
-----------------------------------------
|   .NEQV.   | Greater than or equal to |
-----------------------------------------
Concatenation
There is only one intrinsic character operator, the concatenation operator, //. 
Most string manipulation is performed using intrinsic functions.
PRINT*, "Rowche "//"Rumble"
would produce "Rowche Rumble" without the qoute.
<div id="program"><tt>
if((a>b).AND.(b>c)print*,"the lesser is:",b 
</tt>
</div></pre>
</pre>
<br/><br/>
<div align="right">
<p><b><h3>TEST YOUR UNDERSTANDING AT THIS CONNER</h3></b><p/>
  <a href="question4.php">
<img src="logos/elearning8.jpg" align="top" height="100" width="100"/>
   </a>
</blockquote>
</blockquote>
    
</div>
<hr id="info_footer">
<div class="links" align="center">
        <span class="style4"><a href="index.php">Home </a>| 
        <a href="question5.php" class="hover">Questions </a>| 
        <a href="about.html">About Us </a>| 
        <a href="index.php">Close</a></span>
</div>
    <div id="link-image">
        <a href="variable_declaration.php">
<img src="logos/next.jpeg" align="right" height="50" width="100"/>
   </a>
   <a href="structure_of_fortran.php" >
    <img src="logos/previous.jpeg"  align="left" height="50" width="100"/></div>
</a>
<br/>
</hr>

 

</td>
     </tr>
          
</table>
</body>
</html>
