CONSTANTS
Are containers for values that remain fixed/unchanged at multiple places in as much as they have been referenced multiple times
Constants use the define() function which accepts two arguments: The name of the constant("$"is not required) & its value.
<?php
//The Syntax
define('ConstName', 'value');

//valid constant names
define('ONE', "8");
define('TWO', "23");
define('SUM 2',ONE+TWO);

define('NAME', "Rexx");
echo  "Hello ".NAME;
?>

        1.Sum and Difference of 2 Constants
<?php
define('ONE', 400);
define('TWO', 100);
define('SUM',ONE+TWO);
define('DIFF', ONE- TWO);
//The Output
print "Sum of two constant=".SUM;
print "Difference of the two constants=" .DIFF;
?>

        2.Sum of two numbers and assign the result in a variable
<?php
define('ONE', 100);
define('TWO', 100);
$res= ONE+TWO;
print "Sum of two constant=".$res;
?>

        3.Subtraction of two numbers using constant
<?php
define('X', 1000);
define('Y', 500);
define('Z',X - Y);
print "Subtraction of given number =".Z;
?>

VARIABLES
Variables start with a "$"/A dollar sign then the name of the variable.
Can only begin with the Underscore "_"  or a letter
A Variable name cannot have a space
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ );
A variable name is case-sensitive

        1. Assigning Values to Variables
Use the equality(=) symbol
The syntax is "The variable = The assigned value on the right"
<?php
$numberPlate = "KAJ123X";
    echo $numberPlate;
?>

        2.Concatenation of a variable with string
Concatenation is joining two things together.
In this instance I want to add a sentence to the variable'numberPlate' that I had earlier created.
<?php
echo $numberPlate." is my cars' number plate.";
?>


        3.Destroying PHP Variables
It is useful to be able to delete a variable.
The unset()function allows us to delete variables.
You can pass one or more variables to it.
<?php
unset($numberPlate);
$numberPlate = "KAJ123X";
$e = ($a*$b*100);
echo "The car whose number plate is $numberPlate was Kshs$e.";
?>

        4.Inspecting Variables and Data Types
The function var_dump() inspects the contents of a variable.
<?php
$string = "Number";
$int = 3456;
$doubleFloat = 745.23;
$bool = true;
$array = array("Volvo","BMW","Toyota");
var_dump($string, $int, $doubleFloat, $bool, $array);
?>

        5.PHP $ and $$ Variables The Difference
Here $$var is known as reference variable where as $var is normal variable.
It allows you to have a "variable's variable".
<?php
$f = "Difference";
$f = "Similarities";
echo $f;
echo $f;
echo "Difference";
$name="Ravi";
${$name}="Ranjan";
${${$name}}="Rexx";
echo $name; //Ravi
echo ${$name}; //Ranjam
echo ${${$name}}; //Rexx
?>