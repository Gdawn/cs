﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>哈尔滨工业大学国防生</title>
<style type="text/css">
*{ margin:0; padding:0;}

body{
	text-align:center;
}
a{
	target:_blank;
}
a img{
	border:0px;
}
</style>
<link href="css/top.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="logo" align="center">
<img src="images/logo.jpg" />
</div>
<div id="index-top">
	<div id="index-top-1"></div>
	<div id="index-top-2"></div>
    <div id="index-top-3"></div>
	<div id="index-div">
        <table  height="28px" width="802px" align="center">
        <tr>
        	<td  id="a-link" align="center">
            <a href="index.php" id="daoh">首页</a>
            </td>
            <td id="a-link" align="center" onMouseMove="show('menu1')" onMouseOut="hide()">
            <a id="daoh">国防生风采</a>
            </td>
              <td id="a-link" align="center" onMouseMove="show('menu1')" onMouseOut="hide()">
            <a id="daoh">主题教育</a>
            </td>
            <td id="a-link" align="center" onMouseMove="show('menu1')" onMouseOut="hide()">
            <a id="daoh">招生选拔</a>
            </td>
            <td id="a-link" align="center" onMouseMove="show('menu1')" onMouseOut="hide()">
            <a id="daoh">选培办建设</a>
            </td>
           <td  id="a-link" align="center">
            <a id="daoh">政策法规</a>
            </td>
            <td  id="a-link" align="center">
            <a id="daoh">峰华报纸</a>
            </td>
            <td id="a-link" align="center" onMouseMove="show('menu1')" onMouseOut="hide()">
            <a id="daoh">国防讲坛</a>
            </td>
            <td  id="a-link" align="center">
            <a id="daoh">内部论坛</a>
            </td>
        </tr>
        </table>
	</div>
</div>
<div id="index-top"  height="28px" width="1003px">
<table height="28px" width="1003px">
	<tr>
    <td width="2%" align="left">
    <img src="images/index-middle-1.jpg" height="24px" width="27px" />
    </td>
    <td width="20%" id="index_date" align="left">
    <?php
	$year=date("Y");
	$mouth=date("n");
	$day=date("j");
	$weekday=date("l");
	echo "$year 年 $mouth 月 $day 日  $weekday";
	?>
    </td>
    <td width="20%" align="left" id="index_date">
    请调整您的计算机日期！
    </td>
    <td width="32%">&nbsp;
    </td>
    <td width="28%" align="center">
    
    <table height="28px" align="center" width="100%">
    <tr>
    <td id="index_date" width="2%">
    <img src="images/index-middle-2.jpg" height="19px" width="12px" />
    </td>
    <td id="index_date" width="20%">
    站内搜索
    </td>
    <td width="140px" align="center" bgcolor="#CCCCCC">
    <form>
    <input type="text" name="keyword" size="16%" maxlength="40" value="" />
    </form>
    </td>
    <td>
    <form action="" method="post">
    <input type="image" name="imagefile" id="imagefile" align="right"
    src="images/index-middle-3.jpg" />
    </form>
    </td>
    
    </tr>
    </table>
    </td>
    </tr>
</table>
</div>
<div width="1003px" id="image-top">
	<table width="1003px">
    <tr>
    <td align="left" width="2%">
    <img src="images/image-1.jpg" />
    </td>
    <td align="left" id="daoh" width="8%">
    新闻图片
    </td>
    <td align="left" width="16%">
    <img src="images/image-2.jpg" />
    </td>
    <td align="left" width="6%">
    <a href=""><img src="images/image-3.jpg" /></a>
    </td>
    <td align="left" width="2%">
    <img src="images/image-1.jpg" />
    </td>
    <td align="left" width="15%" id="daoh">国防生动态
    </td>
    <td align="left" width="20%"><img src="images/image-2.jpg" />
    </td>
    <td align="left" width="8%">
    <a href=""><img src="images/image-3.jpg" /></a>
    </td>
   <td align="left" width="15%" id="message-1">&nbsp;
   
   </td>
   <td align="left" width="">
   <a href=""><img src="images/message-2.png" /></a>
   </td>
    </tr>
	</table>
</div>
<div width="1003px" id="image-top">
<table width="1003px">
<tr>
<td align="left" width="31%">
<?php
 include("new_image/cs.php");
?>
</td>
<td align="left" width="420px" bordercolor="#FFFFFF" style="border:groove">&nbsp;</td>
<td align="left" width="30px">&nbsp;

</td>
<td align="right" width="">
<?php
include("new_image/placard.php");
?>
</td>
</tr>
</table>
</div>
</body>
</html>