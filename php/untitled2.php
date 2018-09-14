<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

//变量
<?php
$a=5;
$b=6;
echo"<br>$a+$b=",$a+$b;
?>
//传值赋值
<?php
$age=12;
$num=&$age;
$age=100;
echo $num;

?>
<?php
define('CON','itcast',true);
echo CON;
echo CON

?>
</body>
</html>