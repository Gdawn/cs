﻿
<style>
*{margin:0px;padding:0px;border:0px;}
#demo1{
height:auto;
text-align:left;
}
#demo2{
height:auto;
text-align:left;
}
#demo1  li{
list-style-type:none;
height:33px;
background:url() no-repeat left center;
text-align:left;
text-indent:15px;
}
#demo2  li{
list-style-type:none;
height:33px;
background:url() no-repeat left center;
text-align:left;
text-indent:15px;
}
</style>
</head>
<div id="demo" style="overflow:hidden;height:185px;width:240px;">
<ul id="demo1">  
<li><a href="/soft/4085.shtml" target="_blank">XP Menu 仿QQ菜单管</a></li><li><a href="/soft/5884.shtml" target="_blank">多层嵌套的一个层展开</a></li>
<li><a href="/soft/1852.shtml" target="_blank">《Java2核心技术卷2:高级</a></li>
<li><a href="/soft/1286.shtml" target="_blank">CSS、HTML教程打包下载 (C</a></li><li><a href="/soft/4216.shtml" target="_blank">《C++ Primer》中文第四版 chm</a></li><li><a href="/soft/3388.shtml" target="_blank">C++工资管理系统(Access)</a></li><li><a href="/soft/2009.shtml" target="_blank">非常牛的左侧栏JS折叠菜单</a></li>
</ul> 
<div id="demo2"></div>
</div> 
<script> 
var speed=40 
var demo=document.getElementById("demo"); 
var demo2=document.getElementById("demo2"); 
var demo1=document.getElementById("demo1"); 
demo2.innerHTML=demo1.innerHTML 
function Marquee(){ 
if(demo2.offsetTop-demo.scrollTop<=0) 
  demo.scrollTop-=demo1.offsetHeight 
else{ 
  demo.scrollTop++ 
} 
} 
var MyMar=setInterval(Marquee,speed) 
demo.onmouseover=function() {clearInterval(MyMar)} 
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
</script> 
