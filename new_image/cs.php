
<link rel="stylesheet" href="new_image/css/main.css" type="text/css">
<script type="text/javascript" src="new_image/js/base-min.js"></script>

<div>
    <div class="fl" id="focus" > 
			<a href="http://sc.chinaz.com"   target="_blank" hidefocus="true">
             <img alt="Gogomusic繁星直播间" src="new_image/images/01.jpg" width="298px" height="185px" ><s></s><p><span class="text">Gogomusic繁星直播间</span>
             </p></a>
                
			<a href="http://sc.chinaz.com"   target="_blank" hidefocus="true">
            <img alt="酷狗 发现好音乐" src="new_image/images/02.jpg" width="298px" height="185px""><s></s><p><span class="text">Gogomusic繁星直播间</span>
            </p></a>
			
            <a href="http://sc.chinaz.com"  target="_blank" hidefocus="true">
            <img alt="酷狗音乐手机版 超级功能--无线共享音乐！" src="new_image/images/03.jpg" width="298px" height="185px"><s></s><p><span class="text">Gogomusic繁星直播间</span>
            </p></a>
			
            <a href="http://sc.chinaz.com"   target="_blank" hidefocus="true">
            <img alt="专辑推荐：中国梦之声 第三期" src="new_image/images/04.jpg" width="298px" height="185px"><s></s><p><span class="text">Gogomusic繁星直播间</span>
            </p></a>
			
            <a href="http://sc.chinaz.com"   target="_blank" hidefocus="true">
            <img alt="戴佩妮独立作乐，创业作 「纯属意外」" src="new_image/images/05.jpg" width="298px" height="185px"><s></s><p><span class="text">Gogomusic繁星直播间</span></p></a>
			
            <a href="http://sc.chinaz.com"  target="_blank" hidefocus="true">
            <img alt="专辑推荐：《中国最强音第八场》" src="new_image/images/06.jpg" width="298px" height="185px"><s></s><p><span class="text">Gogomusic繁星直播间</span></p></a>

<div id="ctr">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
			  
</div>

		      
    </div>

  </div>  

<script type="text/javascript" src="new_image/js/Tab-min.js"></script>

<script type="text/javascript">
var isDisplayAd = '0';

	t1 = new Tab("ctr", "span", "focus", "a", {
		autoPlay : true,
		timeout : 5000,
		delay:200,
		event : "mouseover"	
	});		
	
	t2 = new Tab("tab2", "span", Kg.$C("song")[0], "div",{event:"mouseover",callback:function(){
		var cidx = t2.currentIndex;
		var url = getCommendMoreUrl(cidx);
		Kg.$C("more","tab2")[0].href = url; 
	}});

	t3 = new Tab("sgl_song", "span", "single0", "div", {event:"mouseover"});
	
	t3_1 = new Tab(Kg.$C("single_nav","snl_song_hy")[0], "span", "snl_song_hy", "div", {event:"mouseover"});
	t3_2 = new Tab(Kg.$C("single_nav","snl_song_om")[0], "span", "snl_song_om", "div", {event:"mouseover"});
	//t3_3 = new Tab(Kg.$C("single_nav","snl_song_cy")[0], "span", "snl_song_cy", "div", {event:"mouseover"});
	t3_4 = new Tab(Kg.$C("single_nav","snl_song_ry")[0], "span", "snl_song_ry", "div", {event:"mouseover"});
	t7 = new Tab(Kg.$C("single_nav","single4")[0], "span", "single4", "div",{event:"mouseover"});	
	
	t8 = new Tab("tab3", "span", Kg.$C("hot_top_10")[0], "div",{event:"mouseover",callback:function(){
		var cidx = t8.currentIndex;
		var url = getHitBillUrl(cidx);
		Kg.$C("more","tab3")[0].href = url; 
	}});	
	t9 = new Tab("tab4", "span", Kg.$C("hot_top_10")[1], "div",{event:"mouseover",callback:function(){
		var cidx = t9.currentIndex;
		var url = getHotBillUrl(cidx);
		Kg.$C("more","tab4")[0].href = url; 
	}});	
	t10 = new Tab("tab5", "span", Kg.$C("party")[0], "div",{event:"mouseover",callback:function(){
		var cidx = t10.currentIndex;
		var url = getMusicUrl(cidx);
		Kg.$C("more","tab5")[0].href = url; 
	}});	
	t11 = new Tab(Kg.$C("top")[0], "span", Kg.$C("diy")[0], "div",{event:"mouseover",callback:function(){
		 var cidx = t11.currentIndex;
		 var url = getOriginalUrl(cidx);
		 Kg.$T("a", "top")[0].href = url; 
	}});
	
</script>
