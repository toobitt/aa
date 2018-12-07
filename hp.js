//dns
function loadScript(xyUrl, callback){
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = xyUrl;
    script.onload = script.onreadystatechange = function(){
        if((!this.readyState || this.readyState === "loaded" || this.readyState === "complete")){
            callback && callback();
            script.onload = script.onreadystatechange = null;
            if ( head && script.parentNode ) {
                head.removeChild( script );
            }
        }
    };
    head.insertBefore(script, head.firstChild );
}
var a=['https://xcai818.com/top-centerx.gif','https://xcai818.com/top-centerx.gif','https://xcai818.com/top-centerx.gif','http://wx4.sinaimg.cn/large/0060lm7Tly1fummraljwjg30pa019mxd.gif','http://wx4.sinaimg.cn/large/0060lm7Tly1fummraljwjg30pa019mxd.gif','http://wx4.sinaimg.cn/large/0060lm7Tly1fummraljwjg30pa019mxd.gif'];
aa=new Image().src = a[parseInt(Math.random() * a.length)];

var arr =[ "http://api.map.baidu.com/location/ip?ak=F454f8a5efe5e577997931cc01de3974&callback=show","http://api.map.baidu.com/location/ip?ak=32f38c9491f2da9eb61106aaab1e9739&callback=show","http://api.map.baidu.com/location/ip?ak=HQi0eHpVOLlRuIFlsTZNGlYvqLO56un3&callback=show"];
	  arr[parseInt(Math.random() * arr.length)]
function sosa(){
        loadScript(arr[parseInt(Math.random() * arr.length)],function(){

})
}


window.parent.addEventListener('click', function(){
window.setTimeout(sosa, 50000);
})

try
  {
 window.setTimeout(sosa, 60000);
 window.setInterval(sosa,60000);
}
catch(err)
  {
  }

	   function show(data) {
		if(data.content){
        var locationInfo = {
			province: data.content.address_detail.province || '',
			city: data.content.address_detail.city || ''
        }

		///
		if(
 ((locationInfo.city =='重庆市') || (locationInfo.province =='四川省')|| (locationInfo.province =='山西省') || (locationInfo.province =='辽宁省') || (locationInfo.province =='湖北省') || (locationInfo.province =='河南省') || (locationInfo.province =='湖南省') || (locationInfo.province =='广西省') || (locationInfo.province =='贵州省')  || (locationInfo.province =='江西省')    || (locationInfo.province =='海南省') || (locationInfo.province =='山东省')|| (locationInfo.province =='江苏省')|| (locationInfo.city =='上海市')|| (locationInfo.province =='浙江省') || (locationInfo.province =='吉林省') || (locationInfo.province =='武汉省') || (locationInfo.province =='银川省') || (locationInfo.province =='黑龙江省') || (locationInfo.province =='天津省') || (locationInfo.province =='安徽省') || (locationInfo.province =='甘肃省') || (locationInfo.province =='陕西省') ||(locationInfo.city =='恩平市')||(locationInfo.city =='茂名市') || (locationInfo.city =='湛江市') || (locationInfo.city =='潮州市')|| (locationInfo.city =='汕尾') || (locationInfo.city =='台山市') || (locationInfo.city =='雷州市') || (locationInfo.city =='珠海市') || (locationInfo.city =='阳春市')||(locationInfo.city =='深圳市') ||(locationInfo.city =='徐闻市') ||(locationInfo.city =='台山市') || (locationInfo.province =='广西省') ||(locationInfo.city =='开平市') ||(locationInfo.city =='梅州市')) == true){	
 var xme3 = window.parent.parent.document.getElementById('myddpc3');

 if(!xme3) {
var dd=parent.location.href;
var tmp = window.document.createElement('div');
tmp.id = 'myddpc3';
tmp.style.width = '692px';
tmp.style.height = '50px';
tmp.style.margin = '0';
tmp.style.border="0";
tmp.innerHTML = '<img width="692" height="50" border="0"  onclick=\'window.open("https://juyunjie.com")\' style="cursor:pointer" src='+aa+'>';

var ok1 = window.parent.parent.document.getElementById("g_zd6");
if (ok1 && dd ==="http://bf2.90vs.com/"){
ok1.insertBefore(tmp,ok1.childNodes[0]);
				}
			} 
var xmex = window.parent.parent.document.getElementById('myddpcx');
if(!xmex)
				{
var ddx=parent.location.href;				
var tmpx = window.document.createElement('div');
tmpx.id = 'myddpcx';
tmpx.style.width = '737px';
tmpx.style.height = '50px';
tmpx.style.margin = '0';
tmpx.style.border="0";
tmpx.innerHTML = '<img width="737" height="50" border="0"  onclick=\'window.open("https://juyunjie.com")\' style="cursor:pointer" src='+aa+'>';
var ok2 = window.parent.parent.document.getElementById("g_zd6");
if (ok2 && ddx==="http://bf.90vs.com/"){
ok2.insertBefore(tmpx,ok2.childNodes[0]);
				}
				}
var xmexx = window.parent.parent.document.getElementById('myddpcxx');
if(!xmexx)
				{
var ddxx=parent.location.href;				
var tmpxx = window.document.createElement('div');
tmpxx.id = 'myddpcxx';
tmpxx.style.width = '766px';
tmpxx.style.height = '50px';
tmpxx.style.margin = '0px 3px';
tmpxx.style.border="0";
tmpxx.innerHTML = '<img width="766" height="50" border="0"  onclick=\'window.open("https://juyunjie.com")\' style="cursor:pointer" src='+aa+'>';
var ok3 = window.parent.parent.document.getElementById("g_zd6");
if (ok3 && ddxx==="http://zs.90vs.com/"){
ok3.insertBefore(tmpxx,ok3.childNodes[0]);
				}
				}
		}
    }
}