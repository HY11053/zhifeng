// 商务通弹出图片链接
//var myswt_center_2013="<img src='http://ganxi.gansudaily.com.cn/templets/default/swtimgs/shangwutong88.gif'  width='437' height='270' usemap='#swt_center' border='0'/><map name='swt_center'><area  shape='rect' coords='402,6,432,36' href='javascript:;'  onclick='LR_RefuseChat();LR_HideInvite();return false;' /><area shape='rect' coords='169,198,292,243' href="javascript:void(0);"  onclick='openZoosUrl();LR_HideInvite();return false;'/></map>";   
var myswt_center_2013="<img src='http://ganxi.gansudaily.com.cn/templets/default/swtimgs/shangwutong88.gif'  width='437' height='270' usemap='#swt_center' border='0'/><map name='swt_center'><area  shape='rect' coords='402,6,432,36' href='javascript:;'  onclick='LR_RefuseChat();LR_HideInvite();return false;' /><area shape='poly' coords='3,3,400,7,401,34,433,37,433,266,5,268' href='javascript:;'  onclick='openZoosUrl();LR_HideInvite();return false;' /></map>";  
/*
document.writeln('<script language="javascript" src="http://pv.sohu.com/cityjson?ie=utf-8"></script>');
if(returnCitySN["cip"]=='223.4.6.14'){
      window.location.href="http://www.baidu.com/"; 
}
*/
var LiveAutoInvite0='';
var LiveAutoInvite1='';
var LrinviteTimeout=1;
var LR_next_invite_seconds = 3;
//商务通弹出图片
document.writeln('<script language="javascript" src="http://swt.ucc.cn/LR/Chatpre.aspx?id=MDV13016069&lng=cn&r=ucc2&p=ucc2swt"></script>');
function updateSwt() {
    var center = document.getElementById("LRfloater1");
    if (center) {
        if (center.innerHTML.indexOf('http://ganxi.gansudaily.com.cn/templets/default/swtimgs/shangwutong88.gif') == -1) {
            center.innerHTML = myswt_center_2013;
        }
    }
}
function updateLrf(){
    var test = document.getElementById("LRfloater1");
    if (test) {
        test.style.top = "42%";
    }
}
window.setInterval("updateSwt()", 100);
window.setInterval("updateLrf()", 100);



function online(){
    //上午通弹窗代码
    var e = 'anniu';
    if(arguments.length == 1){
        e = arguments[0];
    }
    var url = 'http://swt.ucc.cn/LR/Chatpre.aspx?id=MDV13016069&lng=cn&r=ucc2&p=ucc2swt';
    url = url + '&e=' + e + '&p=' + encodeURIComponent(location.href);
    window.open(url, 'news' + Math.round( Math.random() * 1000000 ));
    return false;
}



// JavaScript Document
document.writeln('<style type="text/css">');
document.writeln('html,body{ height:100%}');
document.writeln('.mydiv {');
document.writeln('background-color: #fff;');
document.writeln('border: 1px solid #ccc;');
document.writeln('text-align: center;');
document.writeln('font-size: 12px;');
document.writeln('font-weight: bold;');
document.writeln('z-index:9999;');
document.writeln('width:486px;');
document.writeln('height:518px;');
document.writeln('left:50%;/*FF IE7*/');
document.writeln('top: 50%;/*FF IE7*/');
document.writeln('margin-left:-243px!important;');
document.writeln('margin-top:-236px!important;');
document.writeln('margin-top:0px;');
document.writeln('position:fixed!important;/*FF IE7*/');
document.writeln('position:absolute;/*IE6*/');
document.writeln('_top:       expression(eval(document.compatMode &&');
document.writeln('            document.compatMode==\'CSS1Compat\') ?');
document.writeln('            documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :/*IE6*/');
document.writeln('            document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);/*IE5 IE5.5*/');
document.writeln('');
document.writeln('}');
document.writeln('');
document.writeln('');
document.writeln('.tcbga {');
document.writeln('background-color:#000;');
document.writeln('width: 100%;');
document.writeln('height: 100%;');
document.writeln('left:0;');
document.writeln('top:0;/*FF IE7*/');
document.writeln('filter:alpha(opacity=50);/*IE*/');
document.writeln('opacity:0.5;/*FF*/');
document.writeln('z-index:9998;');
document.writeln('');
document.writeln('position:fixed!important;/*FF IE7*/');
document.writeln('position:absolute;/*IE6*/');
document.writeln('');
document.writeln('_top:       expression(eval(document.compatMode &&');
document.writeln('            document.compatMode==\'CSS1Compat\') ?');
document.writeln('            documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :/*IE6*/');
document.writeln('            document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);/*IE5 IE5.5*/');
document.writeln('');
document.writeln('}');
document.writeln('');
document.writeln('.tanchuceng{ width:466px; padding:10px; background-color:#fff;  text-align:left; }');
document.writeln('');
document.writeln('.tanchuceng_js{ height:240px; text-align:center; background:url(/swtimgs/tc_jst.jpg) no-repeat center 10px;}');
document.writeln('.tanchuceng_js a{ background:url(/swtimgs/tc_close.jpg) no-repeat; width:17px; height:17px; display:block; float:right; text-indent:-9999px;}');
document.writeln('.tanchu_form{ border:1px solid #d9d9d9; height:256px;}');
document.writeln('');
document.writeln('.tanchu_form h3{ background:url(/swtimgs/tc_form_wz.jpg) no-repeat; height:38px; font-size:14px; text-indent:-9999px;}');
document.writeln('');
document.writeln('');
document.writeln('.tanchu_form  ul{ padding-left:20px; padding-top:16px;}');
document.writeln('.tanchu_form  ul li{height:24px; padding-bottom:12px; overflow:hidden;}');
document.writeln('.tanchu_form ul li strong{  font-size:12px; font-weight:bold;  float:left; color:#333; line-height:24px; width:126px; padding-right:4px; text-align:right;}');
document.writeln('.tanchu_form ul li span{ background:url(/swtimgs/text2.jpg) no-repeat; width:190px; height:24px; padding:0 5px; float:left;}');
document.writeln('.tanchu_form ul li span input{ width:190px; height:24px; line-height:24px; border:none; background:none;}');
document.writeln('.tanchu_form ul li em{ font-style:normal; color:#fd0000; float:left; font-weight:bold; padding-left:6px; font-weight:bold; line-height:24px;}');
document.writeln('.tanchu_form ul li div.textarea1{ float:left; background:url(/swtimgs/textarea2.jpg) no-repeat; width:190px; height:50px; padding:5px;}');
document.writeln('.tanchu_form ul li div.textarea1 textarea{ width:190px; height:50px; border:none; background:none;}');
document.writeln('.buttonh34,.buttonh341{width:102px; height:34px; line-height:34px; border:none; font-weight:bold; float:left; cursor:pointer; color:#333;}');
document.writeln('.buttonh34{ background:url(/swtimgs/buttonh34.jpg) no-repeat; }');
document.writeln('.buttonh341{ background:url(/swtimgs/buttonh34.jpg) no-repeat 0 -34px; }');
document.writeln('.yinshixy{ text-align:right; padding-right:10px; font-weight:100;}');
document.writeln('.yinshixy a{ color:#333;}');
document.writeln('');
document.writeln('</style>');
document.writeln('<script type="text/javascript">');
document.writeln('function showDiv(){');
document.writeln('document.getElementById(\'popDiv\').style.display=\'block\';');
document.writeln('document.getElementById(\'tcbga\').style.display=\'block\';');
document.writeln('}');
document.writeln('');
document.writeln('function closeDiv(){');
document.writeln('document.getElementById(\'popDiv\').style.display=\'none\';');
document.writeln('document.getElementById(\'tcbga\').style.display=\'none\';');
document.writeln('}');
document.writeln('');
document.writeln('</script>');
document.writeln('<div id="popDiv" class="mydiv" style="display:none;">');
document.writeln('');
document.writeln('<div class="tanchuceng">');
document.writeln('  <div class="tanchuceng_js"><span><a href="javascript:void(0)" onclick="closeDiv()">关闭</a></span></div>');
document.writeln('  <div class="tanchu_form">');
document.writeln('');
document.writeln('');
document.writeln('          <h3>请如实填写以下信息（填写留言直接获取）</h3>');
document.writeln('      <iframe id=\'BdBPIframe\' name=\'BdBPIframe\' style=\'display:none;\'></iframe>');
document.writeln('      <form id=\'BdBPForm\' target=\'BdBPIframe\' accept-charset=\'utf-8\' method=\'post\' action=\'http://qiao.baidu.com/v3/?module=default&controller=index&action=doMess&siteid=4515959\'>');
document.writeln('          <ul>');
document.writeln('              <li><strong>姓名：</strong><span><input type="text" name=\'bd_bp_messName\' /></span><em>*</em></li>');
document.writeln('              <li><strong>电话：</strong><span><input type="text" name=\'bd_bp_messPhone\' /></span><em>*</em></li>');
document.writeln('              <li style="height:60px;"><strong>地址：</strong><div class="textarea1"><textarea name=\'bd_bp_messText\'></textarea></div><em>*</em></li>');
document.writeln('');
document.writeln('              <li style="height:34px; padding-bottom:0;"><strong>&nbsp;</strong><input type="submit" value="提交留言" class="buttonh34"  onmouseover="this.className=\'buttonh341\'"  onmouseout="this.className=\'buttonh34\'"/><em style="line-height:34px;">快递费已付过</em></li>');
document.writeln('          </ul>');
document.writeln('      </form>');
document.writeln('<div class="yinshixy"><a href="/yinsibaohu/" target="_blank">隐私保护</a></div>');
document.writeln('      </div>');
document.writeln('</div>');
document.writeln('</div>');
document.writeln('<div id="tcbga" class="tcbga" style="display:none;"></div>');

document.writeln('<style type="text/css">');
document.writeln('* html .weixina{position:absolute;top:expression(eval(document.documentElement.scrollTop)); margin-top:60px; }');
document.writeln('.weixina{position:fixed; _position:absolute; left:5px; top:60px;z-index:9999;}');
document.writeln('</style>');
document.writeln('<div id="weixina" class="weixina">');
document.writeln('<img src=\'http://ganxi.gansudaily.com.cn/templets/default/swtimgs/weixina.gif\'  width=\'139\' height=\'467\'  border=\'0\' usemap="#Map"/>');
//document.writeln('<map name="Map" id="Map"><area shape="rect" coords="8,60,130,184"  href="javascript:void(0);" onClick="online()"/><area shape="rect" coords="8,388,135,427"  href="javascript:void(0);" onClick="online()"/><area shape="rect" coords="119,0,138,21" href="javascript:void(0);" onclick="document.getElementById(\'weixina\').style.display=\'none\'" /></map>');
document.writeln('<map name="Map" id="Map"><area shape="rect" coords="119,0,138,21" href="javascript:void(0);" onclick="document.getElementById(\'weixina\').style.display=\'none\'" /><area shape="poly" coords="3,4,117,3,116,21,134,23,139,464,2,463" href="javascript:void(0);" onClick="online()" /></map>');
document.writeln('</div>');
document.writeln('</div>');


function LXBhide(){
    $('body').find('#LXB_CONTAINER_SHOW,#qiao-icon-wrap').hide();
}
setInterval('LXBhide()',100)
