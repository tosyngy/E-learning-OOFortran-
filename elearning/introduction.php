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
     <p><li><a href="control_structure.php">Control Structure</a></li></p></ol>
     </td>
        
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
     </tr>
</table>
<div>
</div>
</body>
</html>
