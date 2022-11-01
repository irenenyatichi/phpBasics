PHP OPERATORS
        1.Arithmetic/Mathematical Operations
<?php
$a = 300;
$b = 100;
$c = $a + $b;
$d = $a - $b;
$g = $a / $b;
$h = $a * $b;
$j = $a % $b;
$k = $a ** $b;

echo "Variable 'a' in addition to variable 'b' is ".$c;
echo "Variable 'a' minus variable 'b' is ".$d;
echo "Variable 'a' over to variable 'b' is ".$g;
echo "Variable 'a' multiplied by variable 'b' is ".$h;
echo "The remainder after the division of Variable 'a' and variable 'b' is ".$j;
echo "Variable 'a' exponentiated by variable 'b' is ".$k;
?>

        2.Assignment Operators
Assignment operators are used with numeric values to assign a value to a variable.
The basic assignment operator in PHP is '='.
It means that the left operand gets set to the value of the assignment expression on the right.
    <?php
    $l = 1500;  $l+= 500;  //Addition
    $m = 1500;  $m-= 500;  //Subtraction
    $n = 1500;  $n*= 500; //Multiplication
    $o = 1500;  $o/= 500;  // Division
    $o = 1500;  $o%= 500; // Modulus
    ?>

        3.Comparison Operators / Array Operators
Allows one to compare values of different variables.
    a. ==	Equal to
    b. ===	Equal to and of the same type(Strict Comparison)
    c. !=	Not equal to
    d. !==	Not equal to and of the same type
    e. >	Greater than
    f. <	Less than
    g. >=	Greater than or equal to
    h. <=	Less than or equal to
    i. <>	Inequality.Returns true if $x is not equal to $y
<?php
$x = array('a' => 'red', 'b' => 'green');
$y = array('c' => 'blue', 'd' => 'yellow');

var_dump($x <> $y);
?>

        4.Increment / Decrement Operators

    a. ++$x	Pre-increment	Increments $x by one, then returns $x
            <?php
            $x = 10;
            echo ++$x;
            ?>
            <!--11-->
    b. $x++	Post-increment	Returns $x, then increments $x by one (Doesn't change)
    c. --$x	Pre-decrement	Decrements $x by one, then returns $x
    d. $x--	Post-decrement	Returns $x, then decrements $x by one (Doesn't change)
            <?php
            $x = 10;
            echo ++$x;
            ?>
            <!--10-->

        5.Logical Operators
Are used to combine conditional statements.
    a. and And	$x and $y	True if both $x and $y are true
    b. &&	And	$x && $y	True if both $x and $y are true
<?php
$x = 100;
$y = 50;

if ($x == 100 and $y == 50) {echo 'and done';}
if ($x == 100 && $y == 50) {echo '&& done';}
?>
    c. or	Or	$x or $y	True if either $x or $y is true
    d. ||	Or	$x || $y	True if either $x or $y is true
<?php
$x = 100;
$y = 50;

if ($x == 100 or $y == 80) {echo 'or done';}
if ($x == 100 || $y == 80) {echo '|| done';}
?>
    e. xor	Xor	$x xor $y	True if either $x or $y is true, but not both
<?php
$x = 100;
$y = 50;

if ($x == 100 xor $y == 80) {echo 'xor done';}
?>
    f. !==	Not	!$x	True if $x is not true
<?php
$x = 100;

if ($x !== 90) {echo 'Hello world!';}
?>


        6.String Operators
    a)  "."	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2
<?php
$txt1 = 'Hello';
$txt2 = ' world!';
echo $txt1 . $txt2;
?><!-- Hello world-->
    b)  ".="	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1
<?php
$txt1 = 'Hello';
$txt2 = ' world!';
$txt1 .= $txt2;
echo $txt1;
?><!-- Hello world-->

        7.Conditional Assignment Operators
    a."?:" Known as Ternary
Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE
<?php
// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? 'anonymous' : 'logged in';
echo('<br>');

$user = 'John Doe';
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? 'anonymous' : 'logged in';
?>

    b. "??" known as Null coalescing
Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL. If expr1 does not exist, or is NULL,
the value of $x is expr2.
<?php
// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET['user'] ?? 'anonymous';
echo('<br>');

// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? 'red';
?>