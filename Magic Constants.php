<?php
namespace GeeksforGeeks;
class Company {
    public function gfg() {
        return __namespace__;
    }}
$obj = new Company();
echo $obj->gfg();
?>

    <?php
echo "The Line number : ". __LINE__;
?>
        1. __LINE__-->
<!--Returns the current line number of the file at the time of file compilation-->

        2.__FILE__
Returns the full path of the executed file with the name of the file.
<?php
echo "The File name and full path : ". __FILE__;
?>

        3.__dir__
Returns the directory of the executed file.
<?php
echo "The directory is : ". __dir__;
?>

        4.__FUNCTION__,     __CLASS__,     __METHOD__
Returns the function, method and class
<?php
class demo{
    function test(){
        echo "Function of demo class: ". __FUNCTION__ ."<br/>";}
    function testMe(){
        echo "Method of demo class: ". __METHOD__ ."<br/>";
        echo "Class: ". __CLASS__;
    }
}
$object=new demo(); $object->test(); $object->testMe();
?>


        5. Maximum and Minimum Integers
Brings the maximum and Minimum Integers
<?php
echo "Integer Maximum Value : ".PHP_INT_MAX;
echo "Integer Minimum Value : ".PHP_INT_MIN;
?>

//trait Mango{
//    function gfg(){
//        echo __trait__;
//    }
//}
//class Fruit{
//    use Mango;
//}
//$a = new Company;
//$a->gfg();
//?>

<!--These are predefined PHP constants.-->
<!--They get changed on the basis of use.-->
<!--They start with the double underscore (__) and ends with the double underscore.-->
<!--They are similar to other predefined constants but they change their values with the context, they are called magic constants.-->
<!---->
<!--        1. __LINE__-->
<!--Returns the current line number of the file at the time of file compilation-->

