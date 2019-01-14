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
    </form>
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
     <p><li><a href="Syntax_and_Semantic.php">Syntax and Semantic</a></li></p>
     <p><li><a href="Uses_and_Application_of_array.php">Uses and Application of Array</a></li></p>
     <p><li><a href="simple_algorithm_logic.php">Simple Algorithm Logic in Tacking Programming Problem</a></li></p>
     <p><li><a href="Intro_to_programming_tools.php">Intro to Programming Tools</a></li></p>
     <p><li><a href="Relationship_between_programming_languages.php">Relationship between Programming Languages</a></li></p>
      </ol>
     </td>
         </ol>
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
  <a href="question1.php">
<img src="logos/elearning8.jpg" align="top" height="100" width="100"/>
   </a>
</blockquote>
</blockquote>
    
</div>
<hr id="info_footer">
<div class="links" align="center">
        <span class="style4"><a href="index.html">Home </a>| 
        <a href="question.html" class="hover">Questions </a>| 
        <a href="about.html">About Us </a>| 
        <a href="index.html">Close</a></span>
</div>
    <div id="link-image">
        <a href="index.php">
<img src="logos/next.jpeg" align="right" height="50" width="100"/>
   </a>
   <a href="variable_declaration.php" >
    <img src="logos/previous.jpeg"  align="left" height="50" width="100"/></div>
</a>
<br/>
</hr>

 

</td>
     </tr>
          
</table>
</body>
</html>
