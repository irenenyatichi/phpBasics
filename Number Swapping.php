NUMBER SWAPPING
In php this refers to interchanging two numbers with or without an extra variable.

        1.Using a temporary variable.
Here the concept is the value of the first number is stored in the temporary variable.
This value is then replaced by the value of the second number.
The second number is then assigned the value of the temporary variable.
<?php
//Original Numbers
$firstNumber = 90;
$secondNumber = 10;
echo "The original values are first number=".$firstNumber ," and second number=".$secondNumber;

//The Swap
$temporaryVariable = $firstNumber;
$firstNumber = $secondNumber;
$secondNumber = $temporaryVariable;
echo "After swapping the numbers are first number=".$firstNumber," and second number=".$secondNumber;
?>

        2.Swapping Two Numbers without Temporary Variable
<?php
//Original Numbers
$num1 = 100;
$num2 = 200;
echo "The original values are first number=".$num1 ," and second number=".$num2;

//The Swap
$num1 = $num1 - $num2;
$num2 = $num1 + $num2;
$num1 = $num2 - $num1;
echo "After swapping the numbers are first number=".$num1," and second number=".$num2;
?>

        3.Using ^ operator
This is known as the XOR operator and stands for exclusive OR.
It is a logical operator used to combine logical statements (similar to the logical AND '&&', logical OR '||', etc) and/or compare two expressions or boolean values
It then returns a boolean value as a result.
Use the keyword ‘XOR’ in between the 2 expressions or boolean values as given below:
    $result = expression1 xor expression2
    $result = TRUE xor FALSE
<?php
//Original Numbers
$num1 = 6;
$num2 = 4;
echo "The original values are first number=".$num1 ," and second number=".$num2;

//The Swap
$num1 ^= $num2 ^= $num1 ^= $num2;
echo "After swapping the numbers are first number=".$num1," and second number=".$num2;
?>

        4.Using array() method or using Some Predefined Functions
This method only allows integers.
The numbers are passed as swapped arguments in an array object, i.e array(num2 , num1)
They are then assigned to a list object using the list() method,
The numbers are stored in order i.e. the first number followed by the second number swapping the numbers
<?php
//Original Numbers
$num1 = 68;
$num2 = 42;
echo "The original values are first number=".$num1 ," and second number=".$num2;

//The Swap
list($num1, $num2) = array($num2, $num1);
echo "After swapping the numbers are first number=".$num1," and second number=".$num2;
?>
