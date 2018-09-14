<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<style>
	body{
		background-color:#eee;
		font-size:14px;
		}
	table{
		border-collapse:collapse;
		border-spacing:0;
		width:100%;
		color:#2B2B2B;
		}
	.border{
		border:solid #DADADA 1px;
		background-color:#fff;
		text-align:center;
		}
	.border tr,td{
		border:solid #DADADA 1px;
		padding:10px;
	 	}
	.border tr:nth_child(5){
		text-align:right;
		}
	.border tr:nth_child(6){
		text-align:right;
		}
	.border tr:nth_child(1){
		font-weight:bold;
		}
	span{
		color:red;
		}
</style>

<body>

	
	
	const zhe =0.8;
	$shui1 = "香蕉";
	$shui2 = "苹果";
	$shui3 = "橘子";
	$num1 = "2";
	$num2 = "1";
	$num3 = "3";
	$jia1 = "7.99";
	$jia2 = "6.89";
	$jia3 = "3.99";
	
	$shui1_zong = $num1*$jia1;
	$shui2_zong = $num2*$jia2;
	$shui3_zong = $num3*$jia3;
	
	$quanbujiage = ($shui1_zong+$shui2_zong+$shui3_zong)*zhe;
	$str  ="<table class=\"bordered\">";
	$str .="<tr><td>商品名称</td><td>购买数量(斤)</td><td>商品价格（元/斤）</td></tr>";
	$str .="<tr><td>$shui1</td><td>$num1(斤)</td><td>$shui1_zong</td></tr>"; 
	$str .="<tr><td>$shui2</td><td>$num2(斤)</td><td>$shui2_zong</td></tr>"; 
	$str .="<tr><td>$shui3</td><td>$num3(斤)</td><td>$shui3_zong</td></tr>"; 
	$str .="<tr><td colspan='3'>商品折扣:<span>".zhe."</span></td></tr>";
	$str .="<tr><td colspan='3'>打折后购买商品总价格:{$quanbujiage}元</td></tr>";
	$str .="</table>";
	
	echo $str;
	
	
	
	
	
	
	
	
	?>
    
    
</body>
</html>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<style>
	body{
		background-color:#eee;
		font-size:14px;
		}
	table{
		border-collapse:collapse;
		border-spacing:0;
		width:100%;
		color:#2B2B2B;
		}
	.border{
		border:solid #DADADA 1px;
		background-color:#fff;
		text-align:center;
		}
	.border tr,td{
		border:solid #DADADA 1px;
		padding:10px;
	 	}
	.border tr:nth_child(5){
		text-align:right;
		}
	.border tr:nth_child(6){
		text-align:right;
		}
	.border tr:nth_child(1){
		font-weight:bold;
		}
	span{
		color:red;
		}
</style>

<body>
	
    <?php	
	const zhe =0.8;
	$shui1 = "香蕉";
	$shui2 = "苹果";
	$shui3 = "橘子";
	$num1 = "2";
	$num2 = "1";
	$num3 = "3";
	$jia1 = "7.99";
	$jia2 = "6.89";
	$jia3 = "3.99";
	
	$shui1_zong = $num1*$jia1;
	$shui2_zong = $num2*$jia2;
	$shui3_zong = $num3*$jia3;
	
	$quanbujiage = ($shui1_zong+$shui2_zong+$shui3_zong)*zhe;
	?>
    
	<table border="3">
	<tr align="center">
		<td>商品名称</td>
        <td>购买数量(斤)</td>
        <td>商品价格(元/斤)</td>
	</tr>
    <tr align="center">
		<td>香蕉</td>
        <td><?php echo $num1;?></td>
        <td><?php echo $jia1;?></td>
	</tr>
    <tr align="center">
		<td>苹果</td>
        <td><?php echo $num2;?></td>

        <td><?php echo $jia2;?></td>
	</tr>
    <tr align="center">
		<td>橘子</td>
        <td><?php echo $num3;?></td>
        <td><?php echo $jia3;?></td>
	</tr>
	<tr align="right">
		<td colspan="3">商品折扣：<?php echo zhe;?></td>
	</tr>
    <tr align="right">
		<td colspan="3">打折后购买商品总价格：<?php echo $quanbujiage;?></td>
	</tr>
</table>
	
</body>
</html>