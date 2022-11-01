PHP CONDITIONAL STATEMENTS
        A.The if Statement
Executes if the statement is true if false it display nothing(blank).
Syntax:
    if (condition) {
        code to be executed if condition is true;}
<?php
    $t = date('H');

    if ($t < '20') {
        echo 'Have a good day!';}
?>
        B.The if...else Statement
This statement allows you to display output in both the condition
(if the condition is true display some message otherwise display other message).
Syntax:
    if (condition) {
        code to be executed if condition is true;
    } else {
        code to be executed if condition is false;}
<?php
$t = date('H');

if ($t < '20') {
    echo 'Have a good day!';
} else {
    echo 'Have a good night!';
}
?>
        C.The if...elseif...else Statement
The statement executes different codes for more than two conditions.
Syntax:
    if (condition) {
        // if TRUE then execute this code
    }
    elseif {
        // if TRUE then execute this code
    }
    elseif {
        // if TRUE then execute this code
    }
    else {
        // if FALSE then execute this code
}<?php
$t = date('H');

if ($t < '10') {
    echo 'Have a good morning!';
} elseif ($t < '20') {
    echo 'Have a good day!';
} else {
    echo 'Have a good night!';
}
?>
        D.The switch Statement
It has various cases to which it matches the condition and appropriately executes a particular case block.
It first evaluates an expression and then compares with the values of each case.
If a case matches then the same case is executed.
The break statement is used to stop the automatic control flow into the next cases and exit from the switch case.
The default statement contains the code that would execute if none of the cases match.
Syntax:
    switch(n) {
        case statement1: code to be executed if n==statement1;
    break;
        case statement2: code to be executed if n==statement2;
    break;
        case statement3: code to be executed if n==statement3;
    break;
        case statement4: code to be executed if n==statement4;
    break;
    default: code to be executed if n != any case;
<?php
$n = 'February';
switch ($n) {
    case 'January':
        echo 'Its January';
        break;
    case 'February':
        echo 'Its February';
        break;
    case 'March':
        echo 'Its March';
        break;
    case 'April':
        echo 'Its April';
        break;
    case 'May':
        echo 'Its May';
        break;
    case 'June':
        echo 'Its June';
        break;
    case 'July':
        echo 'Its July';
        break;
    case 'August':
        echo 'Its August';
        break;
    case 'September':
        echo 'Its September';
        break;
    case 'October':
        echo 'Its October';
        break;
    case 'November':
        echo 'Its November';
        break;
    case 'December':
        echo 'Its December';
        break;
    default:
        echo "Doesn't exist";
}
?>

        E.Ternary Operators
a shorthand way of writing if…else, called Ternary Operators.
The statement uses a question mark (?) and a colon (:) and takes three operands:
    i) a condition to check
    ii) a result for TRUE
    iii) a result for FALSE.
Syntax:
(condition) ? if TRUE execute this : otherwise execute this;
<?php
$x = -12;
// As an if...else statement
if ($x > 0) {
    echo "The number is positive \n";
}
else {
    echo "The number is negative \n";
}
// As an ternary operator
echo ($x > 0) ? 'The number is positive' : 'The number is negative';
?>