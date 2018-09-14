<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
$color='pink';
?>
<body bgcolor="<?php echo$color ?>">
//html嵌入php

<?php
//php输出html
echo'<p align="center">大标题</p>';
print"<br>";
echo"<font size='5'>这是5号字体</font>";
echo "123"."1213";
print "1213";
?>
<?php
//输出版本号
echo"当前版本号".PHP_VERSION;
print"<br>";
echo"操作版本".PHP_OS;
?>
//输出时间
<?php
echo date ('Y-m-d',time());//年月日
echo date ('H:i:s',time());//时分秒
?>

</body>
</html>