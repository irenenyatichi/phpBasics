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

        3.Mathematical Operations
<?php
$a = 300;
$b = 100;
$c = $a + $b;
$d = $a - $b;
echo "Variable 'a' in addition to variable 'b' is ".$c;
echo "Variable 'a' minus variable 'b' is ".$d;
?>

        4.Destroying PHP Variables
It is useful to be able to delete a variable.
The unset()function allows us to delete variables.
You can pass one or more variables to it.
<?php
unset($numberPlate);
$numberPlate = "KAJ123X";
$e = ($a*$b*100);
echo "The car whose number plate is $numberPlate was Kshs$e.";
?>

        5.Inspecting Variables
The function var_dump() inspects the contents of a variable.
<?php
$string = "Number";
$int = 3456;
$float = 745.23;
$bool = true;
var_dump($string, $int, $float, $bool);
?>

        6.PHP $ and $$ Variables The Difference
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