<meta charset="utf-8">
<?php
require_once 'index1.php';
$classname = "index1";
call_user_func(array($classname, 'say_hello'));
call_user_func($classname .'::say_hello'); // ????????5.2.3
call_user_func('index1::say_hello'); //ya dobavil
$myobject = new index1();
call_user_func(array($myobject, 'say_hello'));
?>