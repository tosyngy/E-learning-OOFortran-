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
        <a href="question1.php" class="hover">Questions </a>| 
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
     <p><li><a href="control_structure.php">Control Structure</a></li></p></p>
      </ol>
     </td>








 <?php
$var=$_POST['option'];
if($var=='1'){
 ?> 






 <td width="900" valign="top" bgcolor="#9999FF">
         <div id="body_content_heading">
    Introduction
         </div>
    <div id="body_content">
    <p> </p>   <blockquote >
<blockquote>
  <br/>
<b>The Fortran Programming Language</b><p></p>
The Fortran programming language was one of the First (if not the First) high level" languages developed
for computers. It is referred to as a high level language to contrast it with machine language or assembly
language which communicate directly with the computer's processor with very primitive instructions. Since
all that a computer can really understand are these primitive machine language instructions, a Fortran
program must be translated into machine language by a special program called a Fortran compiler before it
can be executed. Since the processors in various computers are not all the same, their machine languages are
not all the same. For a variety of reasons, not all Fortran compilers are the same. For example, more recent
Fortran compilers allow operations not allowed by earlier versions. In this chapter, we will only describe
features that one can expect to have available with whatever compiler one may have available.
Fortran was initially developed almost exclusively for performing numeric computations (Fortran is an
acronym for \Formula Translation"), and a host of other languages (Pascal, Ada, Cobol, C, etc.) have been
developed that are more suited to nonnumerical operations such as searching databases for information.
Fortran has managed to adapt itself to the changing nature of computing and has survived, despite repeated
predictions of its death. It is still the major language of science and is heavily used in statistical computing.
<p></p>

Fortran (mathematical FORmula TRANslation system) was originally developed in 1954 by IBM.
Fortran was one the first to allow the programmer to use a higher level language rather than machine
code (0s and 1s) or assembly language (using mnemonics). This resulted in programs being easier
read, understand and debug and saved the programmer from having to work with the details of the
underlying computer architecture.<br/>
In 1958 the second version was released with a number of additions (subroutines, functions,
common blocks). A number of other companies then started developing their own versions of
compilers (programs which translate the high level commands to machine code) to deal with the
problem of portability (machine dependency).<br>
In 1962 Fortran IV was released. This attempted to standardize the language in order to work
independent of the computer (as long as the Fortran IV compiler was available!)
In 1966 the first ANSI (American National Standards Institute) standard was released which defined
a solid base for further development of the language.<br/>
In 1978 the second ANSI standard was released which standardized extensions, allowed structured
programming, and introduced new features for the IF construct and the character data type.
The third ANSI standard was released in 1991, with a new revision expected within 10 years.<p></p>

<b> Reason for Chosen FORTRAN 90</b>

<p></p><ul>
<li>Fortran 90 is a superset of Fortran 77. New facilities for array type operations, new methods for
specifying precision, free form, recursion, dynamic arrays etc. were introduced. Despite that the
whole Fortran77 is included the new ANSI standard proposes that some of the Fortran77 features
are obsolete and will be removed in the next version.</li>
<li>In theory a Fortran 77 program should compile successfully with a Fortran 90 compiler with minor
changes. This is the last time a reference to Fortran 77 is made and it is recommended that
<li>programmers new to Fortran not to consult any Fortran 77 books.</li>
The Fortran 90 version was augmented with a number of new features because previously modern
developments were not accommodated. Developments such as the recent importance of dynamic data
structures and the (re)introduction of parallel architecture.</li>
<li>Comparing with other languages, and only for number crunching, one can see that Fortran90 scores
higher on numeric polymorphism, decimal precision selection, real Kind type etc. Only 90 has data
parallel capabilities meaningful for numeric computation which are missing from other languages.
Also 90's data abstraction is not as powerful as in C++ but it avoids the complexities of
object-oriented programming.</li>
</ul><p></p>
This course intends to teach Fortran 90/95 It is assumed that you have access to a computer with a Fortran 90 or Fortran 95 compiler. It is strongly recommended to switch on the compiler flag that warns when the compiler encounters source code that does not conform to the Fortran 90 standard, and the flag that shows warning messages.
<br/>For example:<br/>
<ul>
<li>Silicon Graphics: f90 ansi w2 o executable name sourcefile.f90</li>
<li>f90 ansi fullwarn o executable name sourcefile.f90</li>
<li>Sun: f90 ansi</li>
<li>force</li>
<li>or Plato which can be use to execute some other programs.</li></ul>
<p></p>
Consider the following program before we get started from the next chapter of the book
<h6 id="prog1"></h6>
<div id="program"><tt>
PROGRAM nothing<br/>
! does nothing<br/>
END PROGRAM nothing<br/>
</div></tt><p></p>
Consider the following (more complicated) program
<h6 id="prog2"></h6>
<div id="program"><tt>
PROGRAM hi<br/>
! display a message<br/>
WRITE(*,*) 'Hello World!'<br/>
END PROGRAM hi<br/>
</div></tt>
<br/><br/>
<div align="right">
<p><b><h3>TEST YOUR UNDERSTANDING AT THIS CONNER</h3></b><p/>
  <a href="question1.php">
<img src="logos/elearning8.jpg" align="top" height="100" width="100"/>
   </a>
</div>
</blockquote>
</blockquote>
    
</div>
<hr id="info_footer">
<div class="links" align="center">
        <span class="style4"><a href="index.php">Home </a>| 
        <a href="question1.php" class="hover">Questions </a>| 
        <a href="about.html">About Us </a>| 
        <a href="index.php">Close</a></span>
</div>
    <div id="link-image">
        <a href="concept_of_programming.php">
<img src="logos/next.jpeg" align="right" height="50" width="100"/>
   </a>
   <a href="index.php" >
    <img src="logos/previous.jpeg"  align="left" height="50" width="100"/></div>
</a>
<br/>
</hr>
</td>









 <?php
}elseif($var=='2'){
  ?>






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





<?php
}elseif($var=='3'){
  ?>




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







<?php
}elseif($var=='4'){
  ?>






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






<?php
}elseif($var=='5'){
  ?>






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





<?php
}elseif($var=='6'){
  ?>



  <td width="900" valign="top" bgcolor="#9999FF">
<div id="body_content_heading">
    Control structure
         </div>
    <div id="body_content">
    <p>    <blockquote >
<blockquote>
  <br/>

<p id="sub">Control Constructs<p>
A program can consist of several statements, which are executed one after the other:
program program_name
<div id="program"><tt>
<ul><li>implicit none
</li><li>statement1
</li><li>statement2
</li><li>statement3
</li><li>statement4
</li><li>end program_name</li></ul>
</tt></div>
However, this rigid sequence may not suit the formulation of the problem very well. For example, one may need to execute the same group of statements many times, or two different parts of the program may need to be executed, depending on the value of a variable. For this, Fortran 90 has several constructs that alter the flow through the statements. These include if constructs, do loops, and case constructs.
<p id="sub">If constructs:<p>
The simplest form of an if construct is:
<div id="program"><tt><pre>if (logical expression) then
statement
end if</pre></tt></div>
as in:
<div id="program"><tt><pre>if (x < y) then
x = y
end if</pre></tt></div>
The statement x = y is only executed if x is smaller than y.<br/>
Several statements may appear after the logical expression. The if block can also be given a name, so the more general form of the if construct is:
<div id="program"><tt><pre>[name:] if (logical expression) then
! various statements
...
end if [name]</pre>
</tt></div>
Both endif and end if are allowed. The name preceding the if is optional (but if it is specified, the name after the endif must be the same).
<br/>The block if statement can also contain an else block:
<div id="program"><tt><pre>[name:] if (logical expression) then
! various statements
...
else
! some more statements
end if [name]</pre>
</tt></div><br/>
Block if statements can be nested:
<div id="program"><tt><pre>[name:] if (logical expression 1) then
! block 1
else if (logical expression 2) then
! block 2
else if (logical expression 3) then
! block 3
else
! block 4
end if [name]</pre></tt></div>
Example (try to follow the logic in this example):<br/>
<div id="program"><tt><pre>if ( optimisation ) then
print*, "Geometry optimisation: "
if ( converged ) then
print*, "Converged energy is ", energy
else
print*, "Energy not converged. Last value: ", energy
end if
else if (singlepoint ) then
print*, "Single point calculation: "
print*, "Energy is ", energy
else
print*, "No energy calculated."
end if</pre></tt></div>
Indentation is optional, but highly recommended: a consistent indentation style helps to keep track of which if, else if, and end if belong together (i.e., have the same “if level”).
<p id="sub">Do loops<p>
A program often needs to repeat the same statement many times. For example, you may need to sum all elements of an array.
<br/>
You could write:
<div id="program"><tt><pre>real, dimension (5) :: array1
real :: sum
! here some code that fills array1 with numbers
...
sum = array1(1)
sum = sum + array1(2)
sum = sum + array1(3)
sum = sum + array1(4)
sum = sum + array1(5)</pre></tt></div>
But that gets obviously very tedious to write, particularly if array1 has many elements. Additionally, you may not know beforehand how many times the statement or statements need to be executed. Thus, Fortran has a programming structure, the do loop, which enables a statement, or a series of statements, to be carried out iteratively.
<br/>For the above problem, the do loop would take the following form:
<div id="program"><tt><pre>real, dimension (5) :: array1
real :: sum
integer :: i ! i is the “control variable” or counter
! here some code that fills array1 with numbers
...
sum = 0.0 ! sum needs to be initialised to zero
do i = 1, 5
sum = sum + array1(i)
end do</pre></tt></div>
Both enddo and end do are allowed.<br/>
It is possible to specify a name for the do loop, like in the next example. This loop prints the odd elements of array2 to the screen. The name (print_odd_nums in this case) is optional. The increment 2 specifies that the counter i is incremented with steps of 2, and therefore, only the odd elements are printed to the screen. If no increment is specified, it is 1.
<div id="program"><tt><pre>real, dimension (100) :: array2
integer :: i
! here some code that fills array2 with numbers
...
print_odd_nums: do i = 1, 100, 2
print*, array2(i)
end do print_odd_nums</pre></tt></div>
Do loops can be nested (one do loop can contain another one), as in the following example:
<div id="program"><tt><pre>real, dimension (10,10) :: a, b, c ! matrices
integer :: i, j, k
! here some code to fill the matrices a and b
...
! now perform matrix multiplication: c = a + b
do i = 1, 10
do j = 1, 10
c(i, j) = 0.0
do k = 1, 10
c(i, j) = c(i, j) + a(i, k) + b(k, j)
end do
end do
end do</pre></tt></div>
Note the indentation, which makes the code more readable.
<br/>Endless Do
The endless do loop takes the following form:
<div id="program"><tt><pre>[doname:] do
! various statements
exit [doname]
! more statements
end do [doname]</pre></tt></div>
<br/>Note the absence of the control variable (counter). As before, the name of the do loop is optional (as indicated by the square brackets).
<br/>To prevent the loop from being really “endless”, an exit statement is needed. If the exit statement is executed, the loop is exited, and the execution of the program continues at the first executable statement after the end do.
<br/>The exit statement usually takes the form
<br/>if (expression) then
<br/>exit
<br/>end if<br/>
as in the following example:<br/>
<div id="program"><tt><pre>program integer_sum
! this program sums a series of numbers given by the user
! example of the use of the endless do construct
implicit none
integer :: number, sum
sum = 0
do
print*, “give a number (type –1 to exit): “
read*, number
if (number == -1) then
exit
end if
sum = sum + number
end do
print*, “The sum of the integers is “, sum
end program integer_sum</pre></tt></div>
The name of the do loop can be specified in the exit statement. This is useful if you want to exit a loop in a nested do loop construct:
<div id="program"><tt><pre>iloop: do i = 1, 3
print*, "i: ", i
jloop: do j = 1, 3
print*, "j: ", j
kloop: do k = 1, 3
print*, "k: ", k
if (k==2) then
exit jloop
end do kloop
end do jloop
end do iloop</pre></tt></div>
When the exit statement is executed, the program continues at the next executable statement after end do jloop. Thus, the first time that exit is reached is when i=1, j=1, k=2, and the program continues with i=2, j=1, k=1.
<br/>A statement related to exit is the cycle statement. If a cycle statement is executed, the program continues at the start of the next iteration (if there are still iterations left to be done).
<br/>Example:
<div id="program"><tt><pre>program cycle_example
implicit none
character (len=1) :: answer
integer :: i
do i = 1, 10
print*, “print i (y or n)?”
read*, answer
if (answer == “n”) then
cycle
end if
print*, i
end do
end program cycle_example</pre></tt></div>
<br/>
<p id="sub">Case constructs</p>
The case construct has the following form:<br/>
<div id="program"><tt><pre>[name:] select case (expression)
case (selector1)
! some statements
...
case (selector2)
! other statements
...
case default
! more statements
...
end select [name]</pre></tt></div>
As usual, the name is optional. The value of the selector, which can be a logical, character, or integer (but not real) expression, determines which statements are executed. The case default block is executed if the expression in select case (expression) does not match any of the selectors.

<br/><br/>
<div align="right">
<p><b><h3>TEST YOUR UNDERSTANDING AT THIS CONNER</h3></b><p/>
  <a href="question6.php">
<img src="logos/elearning8.jpg" align="top" height="100" width="100"/>
   </a>
</blockquote>
</blockquote>
    
</div>
<hr id="info_footer">
<div class="links" align="center">
        <span class="style4"><a href="index.php">Home </a>| 
        <a href="question6.php" class="hover">Questions </a>| 
        <a href="about.html">About Us </a>| 
        <a href="index.php">Close</a></span>
</div>
    <div id="link-image">
        <a href="about.html">
<img src="logos/next.jpeg" align="right" height="50" width="100"/>
   </a>
   <a href="variable_declaration.php" >
    <img src="logos/previous.jpeg"  align="left" height="50" width="100"/></div>
</a>
<br/>
</hr>

 

</td>



<?php
}else{
  
}
?>  
     </tr>
</table>
<div>
</div>
</body>
</html>
