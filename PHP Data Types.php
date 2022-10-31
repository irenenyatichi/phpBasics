PHP is a Loosely Typed Language so here no need to define data type.
To check only data type use gettype( ) function.
There are 3 DATA TYPES
    A.Scalar(predefined)
    B.Compound(user-defined)
    C.Special type

            A.Scalar(It holds only single value)
        1.Integer ~ Contains numeric data types that is greater than or equal to zero. Although a maximum value of about
two billion is the usual value.
        2.Float/double ~ Is a numeric data type with a fractional component.
        3.String ~ Is a Non-numeric data type that can hold letters,numbers and special characters.
String value must be enclosed either in single quotes or double quotes.
        4.Boolean ~ Is a true or false variable

            B.Compound (Multiple values in single variable)
There are 2 Types
        1.Array
<?php
$arr=array(10,20,30,40,50);
var_dump($arr);
?>
        2.Object
<?php
class Demo {
    public function show(){
        echo "This is show method<br/>";
    }   }
$obj= new Demo();   //$obj->show(); //$obj->show();
var_dump($obj);
?>
            C.Special Data types
There are 2 Types
        1.Null ~ represents a variable with no value.
        2.Resource ~ is not an actual data type but a storing of a reference to functions and resources external to PHP.
A common example of using the resource data type is a database call. for eg:
<?php
$con = mysqli_connect(
    "localhost",
    "root",
    "",
    "users");
?>

D. PREDEFINE FUNCTIONS TO CHECK DATA TYPE

        1. is_int( ) : Check given value is integer or not
        2. is_float( ) : Check given value is float or not
        3. is_numeric( ) : Check given value is either integer or float
        4. is_string( ) : Check given value is string or not
        5. is_bool( ) : Check given value is Boolean or not
        6. is_array( ) : Check given value is array or not
        7. is_object( ) : Check given value is object or not
        8. is_null( ) : Check given value is null or not
