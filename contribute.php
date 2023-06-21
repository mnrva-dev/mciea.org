
<html>
<head>
<title>投稿-中国仪器仪表学会测量控制与仪器仪表工程师资格认证</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="keywords" content="中国仪器仪表学会,测量控制与仪器仪表工程师资格认证,企业综合自动化培训">
<meta name="description" content="中国仪器仪表学会、测量控制与仪器仪表工程师资格认证、企业综合自动化培训">
<link href="/templates/default/style/default/style.css" rel="stylesheet" type="text/css">
</head>
<body >
<a name="top">
<!--页面头部信息-->
<table width="778"  border="0" align="center" cellpadding="0" cellspacing="0" class="headtop">
  <tr>
    <td class="black"><a href="/rss.php" target="_blank" title=" RSS 订阅 "><img src="/images/rss.gif" border="0"></a></td>
    <td align="right" class="black">
<a href="/member.php?action=reg" class="white">注册</a> | <a href="/member.php?action=login" class="white">登录</a> | <a href="/member.php?action=manage" class="white">控制面板</a> 
<!--
| <a href="/member.php?action=list" class="white">会员列表</a>
-->
| <a href="/search.php" class="white">搜索</a> | <a href="/contribute.php" class="white">投稿</a> | <a href="/guestbook.php?action=add" class="white">在线报名</a>
　</td>
  </tr>
</table>
<!--网站LOGO，banner位-->
<table width="778" height="70" border="0" align="center" cellpadding="0" cellspacing="0" class="white">
<tr>
<td width="188" align="center"><a href="/">
<img src="/data/uploadfile/200607/20060719151410679.jpg" border="0">
</a>
</td>
<td width="490" align="center"><p><img src="http://www.mciea.org/data/uploadfile/200607/20060719151915879.gif"><a href="http://www.9466.cn/" target=_blank></a></p></td>
<td width="100" align="center">
□ <a id="StranLink">繁体中文</a><br>
□ <a href="#" onClick="this.style.behavior= 'url(#default#homepage)';this.setHomePage ('http://www.mciea.org');">设为首页</a><br>
□ <a href="#" onclick="window.external.addFavorite('http://www.mciea.org','中国仪器仪表学会测量控制与仪器仪表工程师资格认证')">加入收藏</a>
</td>
</tr>
</table>
<!--导航条位置-->
<table width="778"  border="0" align="center" cellpadding="0" cellspacing="0" class="menus">
  <tr>
    <td align="center"><a href="/" class="mainmenu">首页</a> | <a href='/data/news/' target='_self' title='' class="mainmenu">新闻</a>
| <a href='/data/file/' target='_self' title='' class="mainmenu">政策文件</a>
| <a href='/data/struct/' target='_self' title='' class="mainmenu">组织机构</a>
| <a href='/data/q_a/' target='_self' title='' class="mainmenu">问题与解答</a>
| <a href='/data/training/' target='_self' title='' class="mainmenu">培训信息</a>
| <a href='/data/cis/' target='_self' title='' class="mainmenu">中国仪器仪表学会</a>
| <a href='/data/certificate/' target='_self' title='' class="mainmenu">证书查询</a>
| <a href='http://bbs.mciea.org' target='_bank' title='' class="mainmenu">工程师论坛</a>
| <a href='http://www.mciea.org/guestbook.php?action=add' target='_self' title='' class="mainmenu">在线报名</a>
 | <a href="/data/special/" class="mainmenu">专题</a> | <a href="/mypage.php?action=picture" class="mainmenu">图片文章</a></td>
  </tr>
</table>
<table width="778"  border="0" align="center" cellpadding="0" cellspacing="0" class="white">
  <tr>
    <td height="5"></td>
  </tr>
<script language="JavaScript">
done = 0;
step = 2
function anim(yp,yk)
{
if(document.layers) document.layers["napis"].top=yp;
else  document.all["napis"].style.top=yp;
if(yp>yk) step = -2
if(yp<60) step = 2
setTimeout('anim('+(yp+step)+','+yk+')', 50);  //设置文字的升降速度
}
function start()
{
if(done) return
done = 1;
if(navigator.appName=="Netscape") {
document.napis.left=innerWidth/2 - 145;
anim(60,innerHeight - 60)
}
else {
napis.style.left=11;
anim(60,document.body.offsetHeight - 60)
}
}
</script>
<div id="napis" style="position: absolute;top: -50;color: green;font-family:宋体;font-size:70pt;">
<p>
<a href="http://www.cipsea.com/bbs/thread.php?fid=38">企业综合自动化火热报名！</a>
</p></div>
<script language="JavaScript">
setTimeout('start()',1);
</script>

</table>
<script language = 'JavaScript'>
function ruselinkurl(){
  if(document.myform.uselinkurl.checked==true){
    document.myform.linkurl.disabled=false;
     article.style.display='none';
  }else{
    document.myform.linkurl.disabled=true;
    article.style.display='';
  }
}
</script>

<script language=JavaScript>

function doChange(objText, objDrop){
if (!objDrop) return;
var str = objText.value;
var arr = str.split("|");
var nIndex = objDrop.selectedIndex;
objDrop.length=1;
for (var i=0; i<arr.length; i++){
objDrop.options[objDrop.length] = new Option(arr[i], arr[i]);
}
objDrop.selectedIndex = nIndex;
}

// 表单提交检测
function doCheck(){

// 检测表单的有效性
// 如：标题不能为空，内容不能为空，等等....
        if (document.myform.catid.value=='0'){
            alert('指定的栏目不允许添加文章！只允许在其子栏目中添加文章。');
            document.myform.catid.focus();
            return false;
        }
if (myform.title.value=="") {
alert("对不起，标题不能为空！");
                document.myform.title.focus();
return false;
}
if (frames.message.document.body.innerHTML=="") {
alert("对不起，文章内容不能为空！");
return false;
}
   return true;  
}

</script>
<body>
<table width="778"  border="0" cellpadding="3" cellspacing="1"  align="center">
  <tr>
    <td height="25" bgcolor="#f3f3f3" align="center"><strong>欢迎投稿</strong></td>
  </tr>
</table>

<table width="778" border="0" cellpadding="2" cellspacing="1" bgcolor="#ffffff" align="center" class="white">
   <form action="?submit=1" method="post" name="myform" onsubmit="return doCheck();">
    <tr> 
      <td width="20%" align="right" >所属栏目 </td>
      <td  width="80%">
<select name='catid'>
<option value='0'>请选择</option>
<option value='1'  >新闻</option>
<option value='2'  >政策文件</option>
<option value='0'  >组织机构</option>
<option value='8'  >&nbsp;├领导小组</option>
<option value='9'  >&nbsp;├办公室</option>
<option value='10'  >&nbsp;├评审委员会</option>
<option value='11'  >&nbsp;├教材编审与考试委员会</option>
<option value='12'  >&nbsp;├培训考试中心</option>
<option value='13'  >&nbsp;└MCIEA领导人简介</option>
<option value='4'  >问题与解答</option>
<option value='5'  >培训信息</option>
<option value='0'  >中国仪器仪表学会</option>
<option value='17'  >&nbsp;├学会信息</option>
<option value='15'  >&nbsp;├理事简介</option>
<option value='16'  >&nbsp;└专家委员会</option>
<option value='6'  >证书查询</option>
</select>
<font color='#FF0000'>*</font>
</td>
    </tr>
    <tr> 
      <td align="right" >所属专题 </td>
      <td >
<select name='specialid' id='specialid'>
<option value='0'>不属于任何专题</option>
<option value='1'>MCIEA证书</option>


</select>
</td>
    </tr>
    <tr> 
      <td align="right" >标题</td>
      <td width="90%" >
<input name='title' type='text' id='title' value='' size='50' maxlength='100'>
    </td>
    </tr>
    <tr> 
      <td align="right" >关键词 </td>
      <td ><input name="keywords" type="text" id="keywords" size="30"> 多个关键词之间请用半角逗号“,”隔开</td>
    </tr>
    <tr> 
      <td align="right" >作者 </td>
      <td ><input name='author' type='text' id='author' value='' size='30' maxlength='30'></td>
    </tr>
    <tr> 
      <td align="right" >E-mail </td>
      <td ><input name='authoremail' type='text' id='authoremail' value='' size='30' maxlength='30'></td>
    </tr>
    <tr> 
      <td align="right" >来源 </td>
      <td >
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
              <tr><td width='40%'>网站名称 <input name='copyfromname' type='text' id='copyfromname' value='' size='15' maxlength='50'></td><td > 网站地址 <input name='copyfromurl' type='text' id='copyfromurl' value='' size='30' maxlength='200'>   </td></tr>
</table>
</td>
    </tr>
    <tr> 
      <td align="right" >内容摘要 </td>
      <td >
    <textarea name="description" cols="64" rows="5"></textarea>
    </td>
    </tr>
    <tr> 
      <td align="right" >内容 </td>
      <td>
                <input type=hidden name=originalfilename>
        <input type=hidden name=savefilename>
        <input type=hidden name=savepathfilename>
<textarea name="content" style="display:none"></textarea>

<script language="javascript">
function fortable()
{

  var arr = showModalDialog("/editor/dialog/table.htm", "", "dialogWidth:25em; dialogHeight:12em; status:0");
  if (arr != null){
  var tmp=arr.split("*");
  row=tmp[0];
  col=tmp[1];
  var string;
  string="<table style='WIDTH: "+tmp[2]+"px;' border="+tmp[3]+" bgcolor="+tmp[6]+" cellspacing="+tmp[5]+" cellpadding="+tmp[4]+">";
  for(i=1;i<=row;i++){
  string=string+"<tr>";
  for(j=1;j<=col;j++){
  string=string+"<td>&nbsp;</td>";
  }
  string=string+"</tr>";
  }
  string=string+"</table>";
  content=message.document.body.innerHTML;
  content=content+string;
  message.document.body.innerHTML=content;
  }
  else message.focus();
}

function swf()
{
  var arr = showModalDialog("/editor/dialog/flash.htm", "", "dialogWidth:30em; dialogHeight:10em; status:0;help:0");
  
  if (arr != null){
  var ss;
  ss=arr.split("*")
  path=ss[0];
  row=ss[1];
  col=ss[2];
  var string;
string="<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000'  codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0' width="+row+" height="+col+"><param name=movie value="+path+"><param name=quality value=high><embed src="+path+" pluginspage='http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' width="+row+" height="+col+"></embed></object>"
  content=message.document.body.innerHTML;
  content=content+string;
   message.document.body.innerHTML=content;
  }
  else message.focus();
}

function wmv()
{
  var arr = showModalDialog("/editor/dialog/media.htm", "", "dialogWidth:30em; dialogHeight:10em; status:0;help:0");
  
  if (arr != null){
  var ss;
  ss=arr.split("*")
  path=ss[0];
  row=ss[1];
  col=ss[2];
  var string;
//string="<object classid='clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95' width="+row+" height="+col+"><param name=Filename value="+path+"><param name='BufferingTime' value='5'><param name='AutoSize' value='-1'><param name='AnimationAtStart' value='-1'><param name='AllowChangeDisplaySize' value='-1'><param name='ShowPositionControls' value='0'><param name='TransparentAtStart' value='1'><param name='ShowStatusBar' value='1'></object>"

string="<EMBED src="+path+" width="+row+" height="+col+" type=audio/x-pn-realaudio-plugin console='Clip1' controls='IMAGEWINDOW,ControlPanel,StatusBar' autostart='true'></EMBED>"
  content=message.document.body.innerHTML;
  content=content+string;
   message.document.body.innerHTML=content;
  }
  else message.focus();
}


function rm()
{
  var arr = showModalDialog("/editor/dialog/rm.htm", "", "dialogWidth:30em; dialogHeight:10em; status:0;help:0");
  
  if (arr != null){
  var ss;
  ss=arr.split("*")
  path=ss[0];
  row=ss[1];
  col=ss[2];
  var string;
//string="<object classid='clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA' width="+row+" height="+col+"><param name='CONTROLS' value='ImageWindow'><param name='CONSOLE' value='Clip1'><param name='AUTOSTART' value='-1'><param name=src value="+path+"></object><br><object classid='clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA'  width="+row+" height=60><param name='CONTROLS' value='ControlPanel,StatusBar'><param name='CONSOLE' value='Clip1'></object>"

string="<EMBED src="+path+" width="+row+" height="+col+" type=audio/x-pn-realaudio-plugin console='Clip1' controls='IMAGEWINDOW,ControlPanel,StatusBar' autostart='true'></EMBED>"

  content=message.document.body.innerHTML;
  content=content+string;
   message.document.body.innerHTML=content;
  }
  else message.focus();
}


function pic()
{
  var arr = showModalDialog("/editor/dialog/pic.htm", "", "dialogWidth:30em; dialogHeight:15em; status:0;help:0");
  
  if (arr != null){
  var ss;
  ss=arr.split("*")
  a=ss[0];
  b=ss[1];
  c=ss[2];
  d=ss[3];
  e=ss[4];
  f=ss[5];
  g=ss[6];
  h=ss[7];
  i=ss[8];
  
  var str1;
str1="<img src='"+a+"' alt='"+b+"'"
if(d.value!='')str1=str1+"width='"+d+"'"
if(e.value!='')str1=str1+"height='"+e+"' "
str1=str1+" border='"+i+"' align='"+h+"' vspace='"+f+"' hspace='"+g+"'  style='"+c+"'"
str1=str1+">"
  content=message.document.body.innerHTML;
  content=content+str1;
   message.document.body.innerHTML=content;
  }
  else message.focus();
}

function FIELDSET()
{
  var arr = showModalDialog("/editor/dialog/fieldset.htm", "", "dialogWidth:25em; dialogHeight:10em; status:0;help:0");
  
  if (arr != null){
  var ss;
  ss=arr.split("*")
  a=ss[0];
  b=ss[1];
  c=ss[2];
  d=ss[3];
  var str1;
str1="<FIELDSET "
str1=str1+"align="+a+""
str1=str1+" style='"
if(c.value!='')str1=str1+"color:"+c+";"
if(d.value!='')str1=str1+"background-color:"+d+";"
str1=str1+"'><Legend"
str1=str1+" align="+b+""
str1=str1+">标题</Legend>内容</FIELDSET>"
  content=message.document.body.innerHTML;
  content=content+str1;
   message.document.body.innerHTML=content;
  }
  else message.focus();
}

function iframe()
{
  var arr = showModalDialog("/editor/dialog/iframe.htm", "", "dialogWidth:30em; dialogHeight:13em; status:0;help:0");
  
  if (arr != null){
  var ss;
  ss=arr.split("*")
  a=ss[0];
  b=ss[1];
  c=ss[2];
  d=ss[3];
  e=ss[4];
  f=ss[5];
  g=ss[6];
  var str1;
str1="<iframe src='"+a+"'"
str1+=" scrolling="+b+""
str1+=" frameborder="+c+""
if(d!='')str1+=" marginheight="+d
if(e!='')str1+=" marginwidth="+e
if(f!='')str1+=" width="+f
if(g!='')str1+=" height="+g
str1=str1+"></iframe>"
  content=message.document.body.innerHTML;
  content=content+str1;
   message.document.body.innerHTML=content;
  }
  else message.focus();
}

function hr()
{
  var arr = showModalDialog("/editor/dialog/hr.htm", "", "dialogWidth:30em; dialogHeight:12em; status:0;help:0");
  
  if (arr != null){
  var ss;
  ss=arr.split("*")
  a=ss[0];
  b=ss[1];
  c=ss[2];
  d=ss[3];
  e=ss[4];
  var str1;
str1="<hr"
str1=str1+" color='"+a+"'"
str1=str1+" size="+b+"'"
str1=str1+" "+c+""
str1=str1+" align="+d+""
str1=str1+" width="+e
str1=str1+">"
  content=message.document.body.innerHTML;
  content=content+str1;
   message.document.body.innerHTML=content;
  }
  else message.focus();
}





function IsDigit()
{
  return ((event.keyCode >= 48) && (event.keyCode <= 57));
}

//Function to format text in the text box
function FormatText(command, option){
	
  	frames.message.document.execCommand(command, true, option);
  	frames.message.focus();
}

//Function to add image
function AddImage(){	
	imagePath = prompt('请输入图片地址', 'http://');				
	
	if ((imagePath != null) && (imagePath != "")){					
		frames.message.document.execCommand('InsertImage', false, imagePath);
  		frames.message.focus();
	}
	frames.message.focus();			
}

//Function to clear form
function ResetForm(){

	if (window.confirm('确认要清空对话框内容?')){
	 	frames.message.document.body.innerHTML = ''; 
	 	return true;
	 } 
	 return false;		
}

//Function to open pop up window
function openWin(theURL,winName,features) {
  	window.open(theURL,winName,features);
}

function setMode(newMode)
{
  bTextMode = newMode;
  var cont;
  if (bTextMode) {
    cleanHtml();
    cleanHtml();

    cont=message.document.body.innerHTML;
    message.document.body.innerText=cont;
  } else {
    cont=message.document.body.innerText;
    message.document.body.innerHTML=cont;
  }
  message.focus();
}

function cleanHtml()
{
  var fonts = message.document.body.all.tags("FONT");
  var curr;
  for (var i = fonts.length - 1; i >= 0; i--) {
    curr = fonts[i];
    if (curr.style.backgroundColor == "#ffffff") curr.outerHTML	= curr.innerHTML;
  }

}

function help()
{
    var helpmess;
    helpmess="---------------填写帮助---------------\r\n\r\n"+
         "1.请不要发表有危险性的脚本。\r\n\r\n"+
         "2.如果要书写源代码，请选中\r\n\r\n"+
         "　查看HTML源代码书写.\r\n\r\n"+
         "3.需要你自己运行,才能看效果.\r\n\r\n"+
         "4.如果书写js，尽量不要在这儿书写.\r\n\r\n";
    alert(helpmess);
}


function na_select_form (fname, type_name) 
{
  document.forms[fname].elements[type_name].select()
  document.forms[fname].elements[type_name].focus()
}

function checkdata(theform)
{
if (theform.title.value=="")
	{
	  alert("对不起，请输入文章标题！")
	  theform.title.focus()
	  return false
	 }
if (theform.viewhtml.checked == true)
	{
	  alert("对不起，请取消“查看HTML源代码”后再添加！")
	  theform.viewhtml.focus()
	  return false
	 }
}
</script>
<select name="selectFont" onChange="FormatText('fontname', selectFont.options[selectFont.selectedIndex].value);document.form1.selectFont.options[0].selected = true;"  style="font-family: 宋体; font-size: 9pt" onMouseOver="window.status='选择选定文字的字体。';return true;" onMouseOut="window.status='';return true;">
<option selected>选择字体</option>
<option value="宋体">宋体</option>
<option value="楷体_GB2312">楷体</option>
<option value="新宋体">新宋体</option>
<option value="黑体">黑体</option>
<option value="隶书">隶书</option>
<option value="幼圆">幼圆</option>
<OPTION value="Andale Mono">Andale Mono</OPTION> 
<OPTION value=Arial>Arial</OPTION> 
<OPTION value="Arial Black">Arial Black</OPTION> 
<OPTION value="Book Antiqua">Book Antiqua</OPTION>
<OPTION value="Century Gothic">Century Gothic</OPTION> 
<OPTION value="Comic Sans MS">Comic Sans MS</OPTION>
<OPTION value="Courier New">Courier New</OPTION>
<OPTION value=Georgia>Georgia</OPTION>
<OPTION value=Impact>Impact</OPTION>
<OPTION value=Tahoma>Tahoma</OPTION>
<OPTION value="Times New Roman" >Times New Roman</OPTION>
<OPTION value="Trebuchet MS">Trebuchet MS</OPTION>
<OPTION value="Script MT Bold">Script MT Bold</OPTION>
<OPTION value=Stencil>Stencil</OPTION>
<OPTION value=Verdana>Verdana</OPTION>
<OPTION value="Lucida Console">Lucida Console</OPTION>
</select>
<select name="selectColour" onChange="FormatText('ForeColor',selectColour.options[selectColour.selectedIndex].value);document.form1.selectColour.options[0].selected = true;" onMouseOver="window.status='选择选定文字的颜色。';return true;" onMouseOut="window.status='';return true;">
<option value="0" selected>选择文字颜色</option>
<option style="background-color:#F0F8FF;color: #F0F8FF" value="#F0F8FF">#F0F8FF</option>
<option style="background-color:#FAEBD7;color: #FAEBD7" value="#FAEBD7">#FAEBD7</option>
<option style="background-color:#00FFFF;color: #00FFFF" value="#00FFFF">#00FFFF</option>
<option style="background-color:#7FFFD4;color: #7FFFD4" value="#7FFFD4">#7FFFD4</option>
<option style="background-color:#F0FFFF;color: #F0FFFF" value="#F0FFFF">#F0FFFF</option>
<option style="background-color:#F5F5DC;color: #F5F5DC" value="#F5F5DC">#F5F5DC</option>
<option style="background-color:#FFE4C4;color: #FFE4C4" value="#FFE4C4">#FFE4C4</option>
<option style="background-color:#000000;color: #000000" value="#000000">#000000</option>
<option style="background-color:#FFEBCD;color: #FFEBCD" value="#FFEBCD">#FFEBCD</option>
<option style="background-color:#0000FF;color: #0000FF" value="#0000FF">#0000FF</option>
<option style="background-color:#8A2BE2;color: #8A2BE2" value="#8A2BE2">#8A2BE2</option>
<option style="background-color:#A52A2A;color: #A52A2A" value="#A52A2A">#A52A2A</option>
<option style="background-color:#DEB887;color: #DEB887" value="#DEB887">#DEB887</option>
<option style="background-color:#5F9EA0;color: #5F9EA0" value="#5F9EA0">#5F9EA0</option>
<option style="background-color:#7FFF00;color: #7FFF00" value="#7FFF00">#7FFF00</option>
<option style="background-color:#D2691E;color: #D2691E" value="#D2691E">#D2691E</option>
<option style="background-color:#FF7F50;color: #FF7F50" value="#FF7F50">#FF7F50</option>
<option style="background-color:#6495ED;color: #6495ED" value="#6495ED">#6495ED</option>
<option style="background-color:#FFF8DC;color: #FFF8DC" value="#FFF8DC">#FFF8DC</option>
<option style="background-color:#DC143C;color: #DC143C" value="#DC143C">#DC143C</option>
<option style="background-color:#00FFFF;color: #00FFFF" value="#00FFFF">#00FFFF</option>
<option style="background-color:#00008B;color: #00008B" value="#00008B">#00008B</option>
<option style="background-color:#008B8B;color: #008B8B" value="#008B8B">#008B8B</option>
<option style="background-color:#B8860B;color: #B8860B" value="#B8860B">#B8860B</option>
<option style="background-color:#A9A9A9;color: #A9A9A9" value="#A9A9A9">#A9A9A9</option>
<option style="background-color:#006400;color: #006400" value="#006400">#006400</option>
<option style="background-color:#BDB76B;color: #BDB76B" value="#BDB76B">#BDB76B</option>
<option style="background-color:#8B008B;color: #8B008B" value="#8B008B">#8B008B</option>
<option style="background-color:#556B2F;color: #556B2F" value="#556B2F">#556B2F</option>
<option style="background-color:#FF8C00;color: #FF8C00" value="#FF8C00">#FF8C00</option>
<option style="background-color:#9932CC;color: #9932CC" value="#9932CC">#9932CC</option>
<option style="background-color:#8B0000;color: #8B0000" value="#8B0000">#8B0000</option>
<option style="background-color:#E9967A;color: #E9967A" value="#E9967A">#E9967A</option>
<option style="background-color:#8FBC8F;color: #8FBC8F" value="#8FBC8F">#8FBC8F</option>
<option style="background-color:#483D8B;color: #483D8B" value="#483D8B">#483D8B</option>
<option style="background-color:#2F4F4F;color: #2F4F4F" value="#2F4F4F">#2F4F4F</option>
<option style="background-color:#00CED1;color: #00CED1" value="#00CED1">#00CED1</option>
<option style="background-color:#9400D3;color: #9400D3" value="#9400D3">#9400D3</option>
<option style="background-color:#FF1493;color: #FF1493" value="#FF1493">#FF1493</option>
<option style="background-color:#00BFFF;color: #00BFFF" value="#00BFFF">#00BFFF</option>
<option style="background-color:#696969;color: #696969" value="#696969">#696969</option>
<option style="background-color:#1E90FF;color: #1E90FF" value="#1E90FF">#1E90FF</option>
<option style="background-color:#B22222;color: #B22222" value="#B22222">#B22222</option>
<option style="background-color:#FFFAF0;color: #FFFAF0" value="#FFFAF0">#FFFAF0</option>
<option style="background-color:#228B22;color: #228B22" value="#228B22">#228B22</option>
<option style="background-color:#FF00FF;color: #FF00FF" value="#FF00FF">#FF00FF</option>
<option style="background-color:#DCDCDC;color: #DCDCDC" value="#DCDCDC">#DCDCDC</option>
<option style="background-color:#F8F8FF;color: #F8F8FF" value="#F8F8FF">#F8F8FF</option>
<option style="background-color:#FFD700;color: #FFD700" value="#FFD700">#FFD700</option>
<option style="background-color:#DAA520;color: #DAA520" value="#DAA520">#DAA520</option>
<option style="background-color:#808080;color: #808080" value="#808080">#808080</option>
<option style="background-color:#008000;color: #008000" value="#008000">#008000</option>
<option style="background-color:#ADFF2F;color: #ADFF2F" value="#ADFF2F">#ADFF2F</option>
<option style="background-color:#F0FFF0;color: #F0FFF0" value="#F0FFF0">#F0FFF0</option>
<option style="background-color:#FF69B4;color: #FF69B4" value="#FF69B4">#FF69B4</option>
<option style="background-color:#CD5C5C;color: #CD5C5C" value="#CD5C5C">#CD5C5C</option>
<option style="background-color:#4B0082;color: #4B0082" value="#4B0082">#4B0082</option>
<option style="background-color:#FFFFF0;color: #FFFFF0" value="#FFFFF0">#FFFFF0</option>
<option style="background-color:#F0E68C;color: #F0E68C" value="#F0E68C">#F0E68C</option>
<option style="background-color:#E6E6FA;color: #E6E6FA" value="#E6E6FA">#E6E6FA</option>
<option style="background-color:#FFF0F5;color: #FFF0F5" value="#FFF0F5">#FFF0F5</option>
<option style="background-color:#7CFC00;color: #7CFC00" value="#7CFC00">#7CFC00</option>
<option style="background-color:#FFFACD;color: #FFFACD" value="#FFFACD">#FFFACD</option>
<option style="background-color:#ADD8E6;color: #ADD8E6" value="#ADD8E6">#ADD8E6</option>
<option style="background-color:#F08080;color: #F08080" value="#F08080">#F08080</option>
<option style="background-color:#E0FFFF;color: #E0FFFF" value="#E0FFFF">#E0FFFF</option>
<option style="background-color:#FAFAD2;color: #FAFAD2" value="#FAFAD2">#FAFAD2</option>
<option style="background-color:#90EE90;color: #90EE90" value="#90EE90">#90EE90</option>
<option style="background-color:#D3D3D3;color: #D3D3D3" value="#D3D3D3">#D3D3D3</option>
<option style="background-color:#FFB6C1;color: #FFB6C1" value="#FFB6C1">#FFB6C1</option>
<option style="background-color:#FFA07A;color: #FFA07A" value="#FFA07A">#FFA07A</option>
<option style="background-color:#20B2AA;color: #20B2AA" value="#20B2AA">#20B2AA</option>
<option style="background-color:#87CEFA;color: #87CEFA" value="#87CEFA">#87CEFA</option>
<option style="background-color:#778899;color: #778899" value="#778899">#778899</option>
<option style="background-color:#B0C4DE;color: #B0C4DE" value="#B0C4DE">#B0C4DE</option>
<option style="background-color:#FFFFE0;color: #FFFFE0" value="#FFFFE0">#FFFFE0</option>
<option style="background-color:#00FF00;color: #00FF00" value="#00FF00">#00FF00</option>
<option style="background-color:#32CD32;color: #32CD32" value="#32CD32">#32CD32</option>
<option style="background-color:#FAF0E6;color: #FAF0E6" value="#FAF0E6">#FAF0E6</option>
<option style="background-color:#FF00FF;color: #FF00FF" value="#FF00FF">#FF00FF</option>
<option style="background-color:#800000;color: #800000" value="#800000">#800000</option>
<option style="background-color:#66CDAA;color: #66CDAA" value="#66CDAA">#66CDAA</option>
<option style="background-color:#0000CD;color: #0000CD" value="#0000CD">#0000CD</option>
<option style="background-color:#BA55D3;color: #BA55D3" value="#BA55D3">#BA55D3</option>
<option style="background-color:#9370DB;color: #9370DB" value="#9370DB">#9370DB</option>
<option style="background-color:#3CB371;color: #3CB371" value="#3CB371">#3CB371</option>
<option style="background-color:#7B68EE;color: #7B68EE" value="#7B68EE">#7B68EE</option>
<option style="background-color:#00FA9A;color: #00FA9A" value="#00FA9A">#00FA9A</option>
<option style="background-color:#48D1CC;color: #48D1CC" value="#48D1CC">#48D1CC</option>
<option style="background-color:#C71585;color: #C71585" value="#C71585">#C71585</option>
<option style="background-color:#191970;color: #191970" value="#191970">#191970</option>
<option style="background-color:#F5FFFA;color: #F5FFFA" value="#F5FFFA">#F5FFFA</option>
<option style="background-color:#FFE4E1;color: #FFE4E1" value="#FFE4E1">#FFE4E1</option>
<option style="background-color:#FFE4B5;color: #FFE4B5" value="#FFE4B5">#FFE4B5</option>
<option style="background-color:#FFDEAD;color: #FFDEAD" value="#FFDEAD">#FFDEAD</option>
<option style="background-color:#000080;color: #000080" value="#000080">#000080</option>
<option style="background-color:#FDF5E6;color: #FDF5E6" value="#FDF5E6">#FDF5E6</option>
<option style="background-color:#808000;color: #808000" value="#808000">#808000</option>
<option style="background-color:#6B8E23;color: #6B8E23" value="#6B8E23">#6B8E23</option>
<option style="background-color:#FFA500;color: #FFA500" value="#FFA500">#FFA500</option>
<option style="background-color:#FF4500;color: #FF4500" value="#FF4500">#FF4500</option>
<option style="background-color:#DA70D6;color: #DA70D6" value="#DA70D6">#DA70D6</option>
<option style="background-color:#EEE8AA;color: #EEE8AA" value="#EEE8AA">#EEE8AA</option>
<option style="background-color:#98FB98;color: #98FB98" value="#98FB98">#98FB98</option>
<option style="background-color:#AFEEEE;color: #AFEEEE" value="#AFEEEE">#AFEEEE</option>
<option style="background-color:#DB7093;color: #DB7093" value="#DB7093">#DB7093</option>
<option style="background-color:#FFEFD5;color: #FFEFD5" value="#FFEFD5">#FFEFD5</option>
<option style="background-color:#FFDAB9;color: #FFDAB9" value="#FFDAB9">#FFDAB9</option>
<option style="background-color:#CD853F;color: #CD853F" value="#CD853F">#CD853F</option>
<option style="background-color:#FFC0CB;color: #FFC0CB" value="#FFC0CB">#FFC0CB</option>
<option style="background-color:#DDA0DD;color: #DDA0DD" value="#DDA0DD">#DDA0DD</option>
<option style="background-color:#B0E0E6;color: #B0E0E6" value="#B0E0E6">#B0E0E6</option>
<option style="background-color:#800080;color: #800080" value="#800080">#800080</option>
<option style="background-color:#FF0000;color: #FF0000" value="#FF0000">#FF0000</option>
<option style="background-color:#BC8F8F;color: #BC8F8F" value="#BC8F8F">#BC8F8F</option>
<option style="background-color:#4169E1;color: #4169E1" value="#4169E1">#4169E1</option>
<option style="background-color:#8B4513;color: #8B4513" value="#8B4513">#8B4513</option>
<option style="background-color:#FA8072;color: #FA8072" value="#FA8072">#FA8072</option>
<option style="background-color:#F4A460;color: #F4A460" value="#F4A460">#F4A460</option>
<option style="background-color:#2E8B57;color: #2E8B57" value="#2E8B57">#2E8B57</option>
<option style="background-color:#FFF5EE;color: #FFF5EE" value="#FFF5EE">#FFF5EE</option>
<option style="background-color:#A0522D;color: #A0522D" value="#A0522D">#A0522D</option>
<option style="background-color:#C0C0C0;color: #C0C0C0" value="#C0C0C0">#C0C0C0</option>
<option style="background-color:#87CEEB;color: #87CEEB" value="#87CEEB">#87CEEB</option>
<option style="background-color:#6A5ACD;color: #6A5ACD" value="#6A5ACD">#6A5ACD</option>
<option style="background-color:#708090;color: #708090" value="#708090">#708090</option>
<option style="background-color:#FFFAFA;color: #FFFAFA" value="#FFFAFA">#FFFAFA</option>
<option style="background-color:#00FF7F;color: #00FF7F" value="#00FF7F">#00FF7F</option>
<option style="background-color:#4682B4;color: #4682B4" value="#4682B4">#4682B4</option>
<option style="background-color:#D2B48C;color: #D2B48C" value="#D2B48C">#D2B48C</option>
<option style="background-color:#008080;color: #008080" value="#008080">#008080</option>
<option style="background-color:#D8BFD8;color: #D8BFD8" value="#D8BFD8">#D8BFD8</option>
<option style="background-color:#FF6347;color: #FF6347" value="#FF6347">#FF6347</option>
<option style="background-color:#40E0D0;color: #40E0D0" value="#40E0D0">#40E0D0</option>
<option style="background-color:#EE82EE;color: #EE82EE" value="#EE82EE">#EE82EE</option>
<option style="background-color:#F5DEB3;color: #F5DEB3" value="#F5DEB3">#F5DEB3</option>
<option style="background-color:#FFFFFF;color: #FFFFFF" value="#FFFFFF">#FFFFFF</option>
<option style="background-color:#F5F5F5;color: #F5F5F5" value="#F5F5F5">#F5F5F5</option>
<option style="background-color:#FFFF00;color: #FFFF00" value="#FFFF00">#FFFF00</option>
<option style="background-color:#9ACD32;color: #9ACD32" value="#9ACD32">#9ACD32</option>
</select>
<select name="selectbgColour" onChange="FormatText('BackColor',selectbgColour.options[selectbgColour.selectedIndex].value);document.form1.selectbgColour.options[0].selected = true;" onMouseOver="window.status='选择选定文字的背景颜色。';return true;" onMouseOut="window.status='';return true;">
<option value="0" selected>选择文字背景颜色</option>
<option style="background-color:#F0F8FF;color: #F0F8FF" value="#F0F8FF">#F0F8FF</option>
<option style="background-color:#FAEBD7;color: #FAEBD7" value="#FAEBD7">#FAEBD7</option>
<option style="background-color:#00FFFF;color: #00FFFF" value="#00FFFF">#00FFFF</option>
<option style="background-color:#7FFFD4;color: #7FFFD4" value="#7FFFD4">#7FFFD4</option>
<option style="background-color:#F0FFFF;color: #F0FFFF" value="#F0FFFF">#F0FFFF</option>
<option style="background-color:#F5F5DC;color: #F5F5DC" value="#F5F5DC">#F5F5DC</option>
<option style="background-color:#FFE4C4;color: #FFE4C4" value="#FFE4C4">#FFE4C4</option>
<option style="background-color:#000000;color: #000000" value="#000000">#000000</option>
<option style="background-color:#FFEBCD;color: #FFEBCD" value="#FFEBCD">#FFEBCD</option>
<option style="background-color:#0000FF;color: #0000FF" value="#0000FF">#0000FF</option>
<option style="background-color:#8A2BE2;color: #8A2BE2" value="#8A2BE2">#8A2BE2</option>
<option style="background-color:#A52A2A;color: #A52A2A" value="#A52A2A">#A52A2A</option>
<option style="background-color:#DEB887;color: #DEB887" value="#DEB887">#DEB887</option>
<option style="background-color:#5F9EA0;color: #5F9EA0" value="#5F9EA0">#5F9EA0</option>
<option style="background-color:#7FFF00;color: #7FFF00" value="#7FFF00">#7FFF00</option>
<option style="background-color:#D2691E;color: #D2691E" value="#D2691E">#D2691E</option>
<option style="background-color:#FF7F50;color: #FF7F50" value="#FF7F50">#FF7F50</option>
<option style="background-color:#6495ED;color: #6495ED" value="#6495ED">#6495ED</option>
<option style="background-color:#FFF8DC;color: #FFF8DC" value="#FFF8DC">#FFF8DC</option>
<option style="background-color:#DC143C;color: #DC143C" value="#DC143C">#DC143C</option>
<option style="background-color:#00FFFF;color: #00FFFF" value="#00FFFF">#00FFFF</option>
<option style="background-color:#00008B;color: #00008B" value="#00008B">#00008B</option>
<option style="background-color:#008B8B;color: #008B8B" value="#008B8B">#008B8B</option>
<option style="background-color:#B8860B;color: #B8860B" value="#B8860B">#B8860B</option>
<option style="background-color:#A9A9A9;color: #A9A9A9" value="#A9A9A9">#A9A9A9</option>
<option style="background-color:#006400;color: #006400" value="#006400">#006400</option>
<option style="background-color:#BDB76B;color: #BDB76B" value="#BDB76B">#BDB76B</option>
<option style="background-color:#8B008B;color: #8B008B" value="#8B008B">#8B008B</option>
<option style="background-color:#556B2F;color: #556B2F" value="#556B2F">#556B2F</option>
<option style="background-color:#FF8C00;color: #FF8C00" value="#FF8C00">#FF8C00</option>
<option style="background-color:#9932CC;color: #9932CC" value="#9932CC">#9932CC</option>
<option style="background-color:#8B0000;color: #8B0000" value="#8B0000">#8B0000</option>
<option style="background-color:#E9967A;color: #E9967A" value="#E9967A">#E9967A</option>
<option style="background-color:#8FBC8F;color: #8FBC8F" value="#8FBC8F">#8FBC8F</option>
<option style="background-color:#483D8B;color: #483D8B" value="#483D8B">#483D8B</option>
<option style="background-color:#2F4F4F;color: #2F4F4F" value="#2F4F4F">#2F4F4F</option>
<option style="background-color:#00CED1;color: #00CED1" value="#00CED1">#00CED1</option>
<option style="background-color:#9400D3;color: #9400D3" value="#9400D3">#9400D3</option>
<option style="background-color:#FF1493;color: #FF1493" value="#FF1493">#FF1493</option>
<option style="background-color:#00BFFF;color: #00BFFF" value="#00BFFF">#00BFFF</option>
<option style="background-color:#696969;color: #696969" value="#696969">#696969</option>
<option style="background-color:#1E90FF;color: #1E90FF" value="#1E90FF">#1E90FF</option>
<option style="background-color:#B22222;color: #B22222" value="#B22222">#B22222</option>
<option style="background-color:#FFFAF0;color: #FFFAF0" value="#FFFAF0">#FFFAF0</option>
<option style="background-color:#228B22;color: #228B22" value="#228B22">#228B22</option>
<option style="background-color:#FF00FF;color: #FF00FF" value="#FF00FF">#FF00FF</option>
<option style="background-color:#DCDCDC;color: #DCDCDC" value="#DCDCDC">#DCDCDC</option>
<option style="background-color:#F8F8FF;color: #F8F8FF" value="#F8F8FF">#F8F8FF</option>
<option style="background-color:#FFD700;color: #FFD700" value="#FFD700">#FFD700</option>
<option style="background-color:#DAA520;color: #DAA520" value="#DAA520">#DAA520</option>
<option style="background-color:#808080;color: #808080" value="#808080">#808080</option>
<option style="background-color:#008000;color: #008000" value="#008000">#008000</option>
<option style="background-color:#ADFF2F;color: #ADFF2F" value="#ADFF2F">#ADFF2F</option>
<option style="background-color:#F0FFF0;color: #F0FFF0" value="#F0FFF0">#F0FFF0</option>
<option style="background-color:#FF69B4;color: #FF69B4" value="#FF69B4">#FF69B4</option>
<option style="background-color:#CD5C5C;color: #CD5C5C" value="#CD5C5C">#CD5C5C</option>
<option style="background-color:#4B0082;color: #4B0082" value="#4B0082">#4B0082</option>
<option style="background-color:#FFFFF0;color: #FFFFF0" value="#FFFFF0">#FFFFF0</option>
<option style="background-color:#F0E68C;color: #F0E68C" value="#F0E68C">#F0E68C</option>
<option style="background-color:#E6E6FA;color: #E6E6FA" value="#E6E6FA">#E6E6FA</option>
<option style="background-color:#FFF0F5;color: #FFF0F5" value="#FFF0F5">#FFF0F5</option>
<option style="background-color:#7CFC00;color: #7CFC00" value="#7CFC00">#7CFC00</option>
<option style="background-color:#FFFACD;color: #FFFACD" value="#FFFACD">#FFFACD</option>
<option style="background-color:#ADD8E6;color: #ADD8E6" value="#ADD8E6">#ADD8E6</option>
<option style="background-color:#F08080;color: #F08080" value="#F08080">#F08080</option>
<option style="background-color:#E0FFFF;color: #E0FFFF" value="#E0FFFF">#E0FFFF</option>
<option style="background-color:#FAFAD2;color: #FAFAD2" value="#FAFAD2">#FAFAD2</option>
<option style="background-color:#90EE90;color: #90EE90" value="#90EE90">#90EE90</option>
<option style="background-color:#D3D3D3;color: #D3D3D3" value="#D3D3D3">#D3D3D3</option>
<option style="background-color:#FFB6C1;color: #FFB6C1" value="#FFB6C1">#FFB6C1</option>
<option style="background-color:#FFA07A;color: #FFA07A" value="#FFA07A">#FFA07A</option>
<option style="background-color:#20B2AA;color: #20B2AA" value="#20B2AA">#20B2AA</option>
<option style="background-color:#87CEFA;color: #87CEFA" value="#87CEFA">#87CEFA</option>
<option style="background-color:#778899;color: #778899" value="#778899">#778899</option>
<option style="background-color:#B0C4DE;color: #B0C4DE" value="#B0C4DE">#B0C4DE</option>
<option style="background-color:#FFFFE0;color: #FFFFE0" value="#FFFFE0">#FFFFE0</option>
<option style="background-color:#00FF00;color: #00FF00" value="#00FF00">#00FF00</option>
<option style="background-color:#32CD32;color: #32CD32" value="#32CD32">#32CD32</option>
<option style="background-color:#FAF0E6;color: #FAF0E6" value="#FAF0E6">#FAF0E6</option>
<option style="background-color:#FF00FF;color: #FF00FF" value="#FF00FF">#FF00FF</option>
<option style="background-color:#800000;color: #800000" value="#800000">#800000</option>
<option style="background-color:#66CDAA;color: #66CDAA" value="#66CDAA">#66CDAA</option>
<option style="background-color:#0000CD;color: #0000CD" value="#0000CD">#0000CD</option>
<option style="background-color:#BA55D3;color: #BA55D3" value="#BA55D3">#BA55D3</option>
<option style="background-color:#9370DB;color: #9370DB" value="#9370DB">#9370DB</option>
<option style="background-color:#3CB371;color: #3CB371" value="#3CB371">#3CB371</option>
<option style="background-color:#7B68EE;color: #7B68EE" value="#7B68EE">#7B68EE</option>
<option style="background-color:#00FA9A;color: #00FA9A" value="#00FA9A">#00FA9A</option>
<option style="background-color:#48D1CC;color: #48D1CC" value="#48D1CC">#48D1CC</option>
<option style="background-color:#C71585;color: #C71585" value="#C71585">#C71585</option>
<option style="background-color:#191970;color: #191970" value="#191970">#191970</option>
<option style="background-color:#F5FFFA;color: #F5FFFA" value="#F5FFFA">#F5FFFA</option>
<option style="background-color:#FFE4E1;color: #FFE4E1" value="#FFE4E1">#FFE4E1</option>
<option style="background-color:#FFE4B5;color: #FFE4B5" value="#FFE4B5">#FFE4B5</option>
<option style="background-color:#FFDEAD;color: #FFDEAD" value="#FFDEAD">#FFDEAD</option>
<option style="background-color:#000080;color: #000080" value="#000080">#000080</option>
<option style="background-color:#FDF5E6;color: #FDF5E6" value="#FDF5E6">#FDF5E6</option>
<option style="background-color:#808000;color: #808000" value="#808000">#808000</option>
<option style="background-color:#6B8E23;color: #6B8E23" value="#6B8E23">#6B8E23</option>
<option style="background-color:#FFA500;color: #FFA500" value="#FFA500">#FFA500</option>
<option style="background-color:#FF4500;color: #FF4500" value="#FF4500">#FF4500</option>
<option style="background-color:#DA70D6;color: #DA70D6" value="#DA70D6">#DA70D6</option>
<option style="background-color:#EEE8AA;color: #EEE8AA" value="#EEE8AA">#EEE8AA</option>
<option style="background-color:#98FB98;color: #98FB98" value="#98FB98">#98FB98</option>
<option style="background-color:#AFEEEE;color: #AFEEEE" value="#AFEEEE">#AFEEEE</option>
<option style="background-color:#DB7093;color: #DB7093" value="#DB7093">#DB7093</option>
<option style="background-color:#FFEFD5;color: #FFEFD5" value="#FFEFD5">#FFEFD5</option>
<option style="background-color:#FFDAB9;color: #FFDAB9" value="#FFDAB9">#FFDAB9</option>
<option style="background-color:#CD853F;color: #CD853F" value="#CD853F">#CD853F</option>
<option style="background-color:#FFC0CB;color: #FFC0CB" value="#FFC0CB">#FFC0CB</option>
<option style="background-color:#DDA0DD;color: #DDA0DD" value="#DDA0DD">#DDA0DD</option>
<option style="background-color:#B0E0E6;color: #B0E0E6" value="#B0E0E6">#B0E0E6</option>
<option style="background-color:#800080;color: #800080" value="#800080">#800080</option>
<option style="background-color:#FF0000;color: #FF0000" value="#FF0000">#FF0000</option>
<option style="background-color:#BC8F8F;color: #BC8F8F" value="#BC8F8F">#BC8F8F</option>
<option style="background-color:#4169E1;color: #4169E1" value="#4169E1">#4169E1</option>
<option style="background-color:#8B4513;color: #8B4513" value="#8B4513">#8B4513</option>
<option style="background-color:#FA8072;color: #FA8072" value="#FA8072">#FA8072</option>
<option style="background-color:#F4A460;color: #F4A460" value="#F4A460">#F4A460</option>
<option style="background-color:#2E8B57;color: #2E8B57" value="#2E8B57">#2E8B57</option>
<option style="background-color:#FFF5EE;color: #FFF5EE" value="#FFF5EE">#FFF5EE</option>
<option style="background-color:#A0522D;color: #A0522D" value="#A0522D">#A0522D</option>
<option style="background-color:#C0C0C0;color: #C0C0C0" value="#C0C0C0">#C0C0C0</option>
<option style="background-color:#87CEEB;color: #87CEEB" value="#87CEEB">#87CEEB</option>
<option style="background-color:#6A5ACD;color: #6A5ACD" value="#6A5ACD">#6A5ACD</option>
<option style="background-color:#708090;color: #708090" value="#708090">#708090</option>
<option style="background-color:#FFFAFA;color: #FFFAFA" value="#FFFAFA">#FFFAFA</option>
<option style="background-color:#00FF7F;color: #00FF7F" value="#00FF7F">#00FF7F</option>
<option style="background-color:#4682B4;color: #4682B4" value="#4682B4">#4682B4</option>
<option style="background-color:#D2B48C;color: #D2B48C" value="#D2B48C">#D2B48C</option>
<option style="background-color:#008080;color: #008080" value="#008080">#008080</option>
<option style="background-color:#D8BFD8;color: #D8BFD8" value="#D8BFD8">#D8BFD8</option>
<option style="background-color:#FF6347;color: #FF6347" value="#FF6347">#FF6347</option>
<option style="background-color:#40E0D0;color: #40E0D0" value="#40E0D0">#40E0D0</option>
<option style="background-color:#EE82EE;color: #EE82EE" value="#EE82EE">#EE82EE</option>
<option style="background-color:#F5DEB3;color: #F5DEB3" value="#F5DEB3">#F5DEB3</option>
<option style="background-color:#FFFFFF;color: #FFFFFF" value="#FFFFFF">#FFFFFF</option>
<option style="background-color:#F5F5F5;color: #F5F5F5" value="#F5F5F5">#F5F5F5</option>
<option style="background-color:#FFFF00;color: #FFFF00" value="#FFFF00">#FFFF00</option>
<option style="background-color:#9ACD32;color: #9ACD32" value="#9ACD32">#9ACD32</option>
</select>
<select language="javascript"  id="FontSize" title="字号大小" onChange="FormatText('fontsize',this[this.selectedIndex].value);" name="select" onMouseOver="window.status='选择选定文字的字号大小。';return true;" onMouseOut="window.status='';return true;">
<option class="heading" selected>字号 
<option value="7">一号 
<option value="6">二号 
<option value="5">三号 
<option value="4">四号 
<option value="3">五号 
<option value="2">六号 
<option value="1">七号</option>
</select>
<br><img src=/editor/image/s.gif><br>
<img src="/editor/image/selectall.gif" align="absmiddle" border="0" alt="全部选择" onClick="FormatText('selectall')" style="cursor: hand;">
<img src="/editor/image/cut.gif"  align="absmiddle" onClick="FormatText('cut')" style="cursor: hand;" alt="剪切"> 
<img src="/editor/image/copy.gif"  align="absmiddle" onClick="FormatText('copy')" style="cursor: hand;" alt="复制"> 
<img src="/editor/image/paste.gif"  align="absmiddle" onClick="FormatText('paste')" style="cursor: hand;" alt="粘贴"> 		
<img src="/editor/image/del.gif" align="absmiddle" border="0" alt="删除" onClick="FormatText('DELETE')" style="cursor: hand;">
<img src="/editor/image/undo.gif" align="absmiddle" border="0" alt="撤消" onClick="FormatText('undo')" style="cursor: hand;">
<img src="/editor/image/redo.gif" align="absmiddle" border="0" alt="恢复" onClick="FormatText('redo')" style="cursor: hand;">
<img src="/editor/image/bold.gif" align="absmiddle" alt="粗体" onClick="FormatText('bold', '')" style="cursor: hand;"> 
<img src="/editor/image/italic.gif" align="absmiddle" alt="斜体" onClick="FormatText('italic', '')" style="cursor: hand;"> 
<img src="/editor/image/underline.gif" align="absmiddle" alt="下划线" onClick="FormatText('underline', '')" style="cursor: hand;"> 
<img src="/editor/image/Aleft.gif" align="absmiddle" onClick="FormatText('Justifyleft', '')" style="cursor: hand;" alt="左对齐"> 
<img src="/editor/image/Acenter.gif" align="absmiddle" border="0" alt="居中" onClick="FormatText('JustifyCenter', '')" style="cursor: hand;"> 
<img src="/editor/image/Aright.gif" align="absmiddle" onClick="FormatText('JustifyRight', '')" style="cursor: hand;" alt="右对齐"> 
<img src="/editor/image/list.gif" align="absmiddle" border="0" alt="项目符号" onClick="FormatText('InsertUnorderedList', '')" style="cursor: hand;"> 
<img src="/editor/image/num.gif" align="absmiddle" alt="编号" border="0" onClick="FormatText('insertorderedlist', '')" style="cursor: hand;"> 
<img src="/editor/image/outdent.gif" align="absmiddle" onClick="FormatText('Outdent', '')" style="cursor: hand;" alt="回退"> 
<img src="/editor/image/indent.gif" align="absmiddle" border="0" alt="缩进" onClick="FormatText('indent', '')" style="cursor: hand;"> 
<img src="/editor/image/line.gif" align="absmiddle" alt="普通水平线" border="0" onClick="FormatText('InsertHorizontalRule', '')"  style="cursor: hand;">
<img src="/editor/image/sline.gif" align="absmiddle" alt="特殊水平线" border="0" onClick="hr()"  style="cursor: hand;"> 
<br><img src="/editor/image/sup.gif" align="absmiddle" border="0" alt="上标" onClick="FormatText('superscript')" style="cursor: hand;">
<img src="/editor/image/sub.gif" align="absmiddle" border="0" alt="下标" onClick="FormatText('subscript')" style="cursor: hand;">
<img src="/editor/image/clear.gif" align="absmiddle" border="0" alt="删除文字格式" onClick="FormatText('RemoveFormat')" style="cursor: hand;">
<img src=/editor/image/s.gif>
<img src="/editor/image/url.gif" align="absmiddle" border="0" alt="超级链接" onClick="FormatText('createLink')" style="cursor: hand;">
<img src="/editor/image/nourl.gif" align="absmiddle" border="0" alt="取消超级链接" onClick="FormatText('unLink')" style="cursor: hand;">
<img src="/editor/image/fieldset.gif" align="absmiddle" border="0" style="cursor:hand;" alt="插入栏目框" LANGUAGE="javascript" onclick="FIELDSET()">
<img src="/editor/image/htm.gif" align="absmiddle" border="0" style="cursor:hand;" alt="插入网页" LANGUAGE="javascript" onclick="iframe()">
<img src="/editor/image/table.gif" align="absmiddle" border="0" style="cursor:hand;" alt="插入表格" LANGUAGE="javascript" onclick="fortable()">
<img src="/editor/image/flash.gif" align="absmiddle" border="0" style="cursor:hand;" alt="插入FLASH" LANGUAGE="javascript" onclick="swf()">
<img src="/editor/image/wmv.gif" align="absmiddle" border="0" style="cursor:hand;" alt="插入视频文件，支持格式为：avi、wmv、asf" LANGUAGE="javascript" onclick="wmv()">
<img src="/editor/image/rm.gif" align="absmiddle" border="0" style="cursor:hand;" alt="插入RealPlay文件，支持格式为：rm、ra、ram" LANGUAGE="javascript" onclick="rm()">
<img src="/editor/image/img.gif" align="absmiddle" border="0" style="cursor:hand;" alt="插入网上图片，支持格式为：gif、jpg、png、bmp" lANGUAGE="javascript" onclick="pic()">	
<img src="/editor/image/help.gif" align="absmiddle" border="0" style="cursor:hand;" alt="使用帮助" lANGUAGE="javascript" onclick="help()">
<a href="javascript:openWin('/upload.php','upload','toolbar=0,location=0,status=0,menubar=0,scrollbars=0,resizable=0,width=400,height=160')"><img src="/editor/image/upfile.gif" align="absmiddle" border="0" alt="上传文件" style="cursor: hand;" onMouseOver="window.status='使用系统自带的上传程序上传文件';return true;" onMouseOut="window.status='';return true;"></a><input onClick="setMode(this.checked);"type="checkbox" name="viewhtml"  value="ON">查看HTML
<br><img src=/editor/image/s.gif><br>
<script language="javascript">
document.write ('<iframe id="message" width="450" height="300" src="/editor/textarea.htm"></iframe>')
frames.message.document.designMode = "On";
</script>
     </td>
    </tr>
    <tr> 
      <td align="right">标题图片 </td>
      <td >
         <input name='defaultpicurl' type='text' id='defaultpicurl' size='50'> 图片地址<br>
         <select name="picurls" size=1 onchange="javascript:myform.defaultpicurl.value=this.value"><option value=''>无</option></select> 请选择一个作为标题图片
          </td>
    </tr>
    <tr> 
      <td  height="40"></td>
      <td >
               <input type="Submit" name="Submit" value=" 发表 " OnClick="document.myform.content.value = frames.message.document.body.innerHTML;"> &nbsp; 
                <input type="reset" name="Reset" value=" 重置 "> </td>
    </tr>
  </form>
</table>

<table width="778"  border="0" align="center" cellpadding="0" cellspacing="0" class="white">
  <tr>
    <td height="1"></td>
  </tr>
</table>



<!--版权信息-->
<table width="778"  border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#f5f5f5">
  <tr>
    <td align="center" bgcolor="#eeeeee">
 ·<a href="/data/page/1.htm" class="pagemenu">关于我们</a> 
 ·<a href="/data/page/2.htm" class="pagemenu">联系方式</a> 
 ·<a href="/data/page/3.htm" class="pagemenu">MCIEA申报表下载</a> 
 ·<a href="/data/page/4.htm" class="pagemenu">在线报名</a> 

   </td>
  </tr>
  <tr>
    <td align="center"><span style="color:#333333 ">中国仪器仪表学会测量控制与仪器仪表工程师资格认证</span></td>
  </tr>
</table>

<table width="778" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#f5f5f5">
  <tr>
    <td  valign="bottom">&nbsp;</td>
    <td  align="center">

    <script language="javascript" src="http://count25.51yes.com/click.aspx?id=258380301&logo=9"></script>
    <script language="JavaScript" charset="gb2312" type="text/javascript" src="http://www1.itsun.com/counter.php?uuid=1474491&style=icon"></script>

     </td>
    <td  valign="bottom" >&nbsp;</td>
  </tr>
</table>


<Script Language=Javascript Src="/include/js/Std_StranJF.Js"></Script>
</body>

</html>


<div class='copyright'><a href='http://www.phpcms.cn' title='点击进入phpcms网站管理系统官方技术支持网站！' target='_blank'><font size='1' face='Arial, Helvetica, sans-serif'>Power by <b>phpcms 2.4</b></font></a></div>