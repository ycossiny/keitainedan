
<script type="text/javascript"><!--
//function rdweb(rweb){   }
// --></script>
<form name="frm2">
<div class="tabbox">
   <ul class="tabs">
      <li class="tab" id="tabA"><a href="#tab1" onclick="FocusTab('tabA','blue'); ChangeTab('tab1'); return false;">料金の見直し</a></li>
      <li class="tab" id="tabB"><a href="#tab2" onclick="FocusTab('tabB','#aaaa00'); ChangeTab('tab2'); return false;">携帯電話価格を含めて比較</a></li>
      <li class="tab" id="tabC"><a href="#tab3" onclick="FocusTab('tabC','red'); ChangeTab('tab3'); return false;">料金明細から比較</a></li>
   </ul>
   <div id="tab1" class="tab">    
	   <table border="1" cellspacing="0" width="800">
	<tr><td width="80" bgcolor="white"><p align="center"><b><font color="red">Step1</font></b></p></td>
        <td width="163" bgcolor="white"><p align="center">どちらか選択</p></td>
        <td colspan="2" bgcolor="white"><p align="left"><input type="radio" name="smartA" value=1 checked>携帯電話</p>
                <p align="left"><input type="radio" name="smartA" value=2>スマートフォン&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="checkboxiphoneA" ;value="checkbox" ; >iPhoneを除く</p></td></tr>
    <tr><td width="80" bgcolor="white"><p align="center"><b><font color="red">Step2</font></b></p></td>
        <td width="163" bgcolor="white"><p align="center">通話時間を入力</p></td>
        <td colspan="2" bgcolor="white"><p align="left">通話時間<input type=text name=talktime size="4">分/月</p>
                <p align="left">家族に通話する割合<input type=text name=family size="3">％(家族が同じ会社の場合のみ入力してください)</p></td></tr>
    <tr><td width="80" rowspan="3" bgcolor="white"><p align="center"><b><font color="red">Step3</font></b></p></td>
        <td width="163" rowspan="3" bgcolor="white"><p align="center">どれか選択</p></td>
        <td width="258" bgcolor="#FFFFCC"><p><input type="radio" name="frdweb" value=1 onClick=frdweb1(this)>メール、ウェブを利用<b>しない</b>[<a href="http://www.geocities.jp/m0m0n0k1/sample/p.html">?</a>]</p></td>
        <td rowspan="3" id="webcell" bgcolor = "#FFFF99"><span id="webcellr"><p>ウェブ&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=paketnumber size="9">パケット/月</p>
	通/月</p></span></td></tr>
    <tr><td width="258" bgcolor="#FFFF99"><p><input type="radio" name="frdweb" value=2 onClick=frdweb1(this) checked>メール、ウェブを利用する[<a href="http://www.geocities.jp/m0m0n0k1/sample/p.html">?</a>]</p></td></tr>
    <tr><td width="258" bgcolor="#FFFF66"><p><input type="radio" name="frdweb" value=3 onClick=frdweb1(this)>パケットを定額の上限まで使用</p></td></tr>
    <tr><td width="80" bgcolor="white"><p align="center" ><b><font color="red">Step4</font></b></p></td>
        <td colspan="3" bgcolor="white"><p><input type="checkbox" name="checkbox01" ;value="checkbox" ; >請求書郵送を利用する[<a href="http://www.geocities.jp/m0m0n0k1/sample/yuu.html">?</a>]</p></td></tr>
    <tr><td width="80" bgcolor="white"><p align="center" ><b><font color="red">Step4</font></b></p></td>
        <td colspan="3" bgcolor="white"><p align="left"><input type=button value="計算    (このボタンを押して結果を見て下さい)" onClick=jump("calculation",0)></p></td></tr>
</table>
<script type="text/javascript"><!--
google_ad_client = "pub-7756269339496082";
//468x60, 作成済み 07/11/07
google_ad_slot = "2522412410";
google_ad_width = 468;
google_ad_height = 60;
//--></script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
   </div>
   <div id="tab2" class="tab">
 <table border="1" cellspacing="0">
	<tr><td width="80" bgcolor="white"><p align="center"><b><font color="red">Step1</font></b></p></td>
        <td width="163" bgcolor="white"><p align="center">どちらか選択</p></td>
        <td colspan="2" bgcolor="white"><p align="left"><input type="radio" name="smartB" value=1 checked>携帯電話</p>
                <p align="left"><input type="radio" name="smartB" value=2>スマートフォン&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="checkboxiphoneB" ;value="checkbox" ; >iPhoneを除く</p></td></tr>
	<tr><td width="80" bgcolor="white"><p align="center"><b><font color="red">Step2</font></b></p></td>
        <td width="163" bgcolor="white"><p align="center">通話時間を入力</p></td>
        <td colspan="2" bgcolor="white"><p align="left">通話時間<input type=text name=talktime02 size="4">分/月</p>
                <p align="left">家族に通話する割合<input type=text name=family02 size="3">％(家族が同じ会社の場合のみ入力してください)</p></td></tr>
    <tr><td width="80" rowspan="3" bgcolor="white"><p align="center"><b><font color="red">Step3</font></b></p></td>
        <td width="163" rowspan="3" bgcolor="white"><p align="center">どれか選択</p></td>
        <td width="258" bgcolor="#FFFFCC"><p><input type="radio" name="frdweb2" value=1 onClick=frdweb1(this)>メール、ウェブを利用<b>しない</b>[<a href="http://www.geocities.jp/m0m0n0k1/sample/p.html">?</a>]</p></td>
        <td rowspan="3" id="webcell2" bgcolor = "#FFFF99"><span id="webcellr2"><p>ウェブ&nbsp;<input type=text name=paketnumber02 size="9">パケット/月</p>
                                                                             <p>メール送受信数 &nbsp;<input type=text name=mailnumber02 size="4">通/月</p></span></td></tr>
    <tr><td width="258" bgcolor="#FFFF99"><p><input type="radio" name="frdweb2" value=2 onClick=frdweb1(this) checked>メール、ウェブを利用する[<a href="http://www.geocities.jp/m0m0n0k1/sample/p.html">?</a>]</p></td></tr>
    <tr><td width="258" bgcolor="#FFFF66"><p><input type="radio" name="frdweb2" value=3 onClick=frdweb1(this)>パケットを定額の上限まで使用</p></td></tr>
    <tr><td width="80" bgcolor="white"><p align="center"><b><font color="red">Step4</font></b></p></td>
        <td width="163" bgcolor="white"><p align="center">購入予定の携帯電話の値段を入力[<a href="http://www.geocities.jp/m0m0n0k1/sample/kak.html">?</a>]</p></td>
        <td bgcolor="white" colspan="2"><p>○<input type=text name=yeark size="6" value=2>年<input type=text name=monthk size="6" value=2>ヶ月使うつもり</p>
        <p>○<font color="#000080">ドコモ　一括<input type=text name=kvaluedo size="8" style="color: #000080">円(バリューコース)</font></p>
        <p>○<font color="#FF6600">au　一括<input type=text name=kvalueau2 size="6" style="color: #FF6600">円(シンプルコース)</font></p>
        <p>○<font color="#666666"><b>SoftBank 新スーパーボーナス 分割金[<a href="http://www.geocities.jp/m0m0n0k1/sample/kak.html">?</a>]</b></font><input type=text name=kvaluesb size="8" style="color: #666666; font-weight: bold"><font color="#666666"><b>円/月&times;24ヶ月</b>&nbsp;<b>月月割</b></font><input type=text name=kvaluetoku size="6" style="color: #666666; font-weight: bold"><b><font color="#666666">円/月</font></b>(ディズニーモバイル含む)</p>

</td></tr>
    <tr><td width="80" bgcolor="white"><p align="center" ><b><font color="red">Step5</font></b></p></td>
        <td colspan="3" bgcolor="white"><p><input type="checkbox" name="checkbox02" ;value="checkbox" ; >請求書郵送を利用する[<a href="http://www.geocities.jp/m0m0n0k1/sample/yuu.html">?</a>]</p></td></tr>
    <tr><td width="80" bgcolor="white"><p align="center" ><b><font color="red">Step6</font></b></p></td>
        <td colspan="3" bgcolor="white"><p align="left"><input type=button value="計算    (このボタンを押して結果を見て下さい)" onClick=jump("calculation",1)></p></td></tr>

</table>      
   </div>
   <div id="tab3" class="tab">
<table border="1" cellspacing="0">
	<tr><td width="80" bgcolor="white"><p align="center"><b><font color="red">Step1</font></b></p></td>
        <td width="163" bgcolor="white"><p align="center">どちらか選択</p></td>
        <td colspan="2" bgcolor="white"><p align="left"><input type="radio" name="smartC" value=1 checked onClick=liChange('frm2',0,'list1','list2','list3','list4')>携帯電話</p>
                <p align="left"><input type="radio" name="smartC" value=2 onClick=liChange('frm2',0,'list1','list2','list3','list4')>スマートフォン&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="checkboxiphoneC" ;value="checkbox" ; >iPhoneを除く</p></td></tr>	
    <tr><td width="80" bgcolor="white" rowspan="4"><p align="center"><b><font color="red">Step2</font></b></p></td>
        <td width="350" bgcolor="white" rowspan="4"><p align="center">あなたが現在契約しているのは？</p></td>
        <td colspan="2" bgcolor="white"><p align="left"><select name="list1" onchange="liChange('frm2',0,'list1','list2','list3','list4')"><option value="defult">▼会社を選んでください</option>
  <option value="0">ドコモ</option>  <option value="1">au</option>  <option value="2">SoftBank</option></select></p></td></tr>
    <tr><td colspan="2" bgcolor="white"><p align="left"><select name="list2" onchange="liChange('frm2',1,'list1','list2','list3','list4')">  <option value="defult">▼料金割引を選んでください</option></select></p></td></tr>
    <tr><td colspan="2" bgcolor="white"><p align="left"><select name="list3" onchange="liChange('frm2',2,'list1','list2','list3','list4')">  <option value="defult">▼料金プランを選んでください</option></select>プラン</p></td></tr>  
    <tr><td colspan="2" bgcolor="white"><p align="left"><select name="list4" onchange="liChange('frm2',3,'list1','list2','list3','list4')">  <option value="defult">▼パケット割引を選んでください</option></select></p></td></tr>
    <tr><td width="80" bgcolor="white"><p align="center"><b><font color="red">Step3</font></b></p></td>
        <td width="350" bgcolor="white"><p align="center">あなたが1ヶ月に使用している通話料金は？</p></td>
        <td colspan="2" bgcolor="white"><p align="left">通話料金<input type=text name=talkp size="5" style="color:blue">円/月 (税込み)</p>
        <p align="left">家族に通話する割合<input type=text name=family03 size="3">％</p></td></tr>
    <tr><td width="80" rowspan="3" bgcolor="white"><p align="center"><b><font color="red">Step4</font></b></p></td>
        <td width="163" rowspan="3" bgcolor="white"><p align="center">どれか選択</p></td>
        <td width="258" bgcolor="#FFFFCC"><p><input type="radio" name="frdweb3" value=1 onClick=frdweb1(this)>メール、ウェブを利用<b>しない</b>[<a href="http://www.geocities.jp/m0m0n0k1/sample/p.html">?</a>]</p></td>
        <td rowspan="3" id="webcell3" bgcolor = "#FFFF99"><span id="webcellr3"><p>ウェブ&nbsp;<input type=text name=paketnumber03 size="9">パケット/月</p>
		<p>メール送受信数 &nbsp;<input type=text name=mailnumber03 size="4">通/月</p></span></td></tr>
	<tr><td width="258" bgcolor="#FFFF99"><p><input type="radio" name="frdweb3" value=2 onClick=frdweb1(this) checked>メール、ウェブを利用する[<a href="http://www.geocities.jp/m0m0n0k1/sample/p.html">?</a>]</p></td></tr>
    <tr><td width="258" bgcolor="#FFFF66"><p><input type="radio" name="frdweb3" value=3 onClick=frdweb1(this)>パケットを定額の上限まで使用</p></td></tr>
    <tr><td width="80" bgcolor="white"><p align="center" ><b><font color="red">Step5</font></b></p></td>
        <td colspan="3" bgcolor="white"><p><input type="checkbox" name="checkbox03" ;value="checkbox" ; >請求書郵送を利用する[<a href="http://www.geocities.jp/m0m0n0k1/sample/yuu.html">?</a>]</p></td></tr>
    <tr><td width="80" bgcolor="white"><p align="center" ><b><font color="red">Step5</font></b></p></td>
        <td colspan="3" bgcolor="white"><p align="left"><input type=button value="計算    (このボタンを押して結果を見て下さい)" onClick=jump("calculation",2)></p></td></tr>
</table>
   </div>
</div>

<script type="text/javascript"><!--
// --></script>
<br>
<a name="calculation"></a>
<h2>●計算結果</h2>
<table style="line-height:150%;" border="1" cellspacing="0">
 <tr><td><p align="center">順位</p></td>
 <td width="90" height="18"><p>&nbsp;</p></td>
 <td width="85" height="18"><p>&nbsp;</p></td>
 <td width="200" ><p align="center">月額料金（税込み）</td>
 <td width="200" ><input type=text name=yearkou size="2">年<input type=text name=monthkou size="3">ヶ月の支払い総額（税込み）[<a href="http://www.geocities.jp/m0m0n0k1/sample/sum.html">?</a>]</td>
 <td width="200" ><p align="center">プラン名</p></td>
<td width="200"><p align="center"><a href="http://www.geocities.jp/m0m0n0k1/itiran/paket.html">パケット割引</a></p></td></tr>
</form>
<form name=d method="POST" action="http://cgi.geocities.jp/m0m0n0k1/cgi/all2.pl" target="_blank">  
<tr><td bgcolor="#CCFFFF"><p align="center"><input type=text name=rank size="1">位</p></td><td height="13" bgcolor="#CCFFFF"><p align="center"><a href="http://www.geocities.jp/m0m0n0k1/itiran/docomo/">ドコモ</a>
<br><select name="listd" onchange="liChanged('listd')">
  <option value="0">最安プラン</option>  <option value="1">バリューコース</option><option value="2">ベーシックコース</option></p></td>
<td bgcolor="#CCFFFF"><p align="center"><div id="d"><input type=text  name=company><input type=text  name=name><input type=text name=basic><input type=text name=free><input type=text name=pakew><input type=text name=talk><input type=text name=paket><input type=text name=web><input type=text name=yuu><input type=text name=planname><input type=text name=pakename></div>
<INPUT type="submit" name="submit" value="内訳を見る"></p></td>
<td bgcolor="#CCFFFF"><p align="center"><input type=text name=price value="↑[計算]をクリックしてください">円/月</p></td>
<td bgcolor="#CCFFFF"><p align="center"><input type=text name=pricesum>円</p></td>
<td bgcolor="#CCFFFF"><p align="center"><input type=text name=namewari size="35"><br><select name="listd2" onchange="liChanged('listd2')">  <option value="defult">▼指定できます</option>  </select>プラン</p></td>
<td bgcolor="#CCFFFF"><p align="center"><select name="listd3" onchange="liChanged('listd3')">  <option value="defult">▼指定できます</option>  </select></p></td>
</tr>
</form>

<form name=aw method="POST" action="http://cgi.geocities.jp/m0m0n0k1/cgi/all2.pl" target="_blank">
<tr><td bgcolor="#FFFF99"><p align="center"><input type=text name=rank size="1">位</p></td><td height="13" bgcolor="#FFFF99"><p align="center"><a href="http://www.geocities.jp/m0m0n0k1/itiran/au/">au WIN</a>
<br><select name="lista" onchange="liChanged('lista')">
  <option value="0">最安プラン</option>  <option value="1">フルサポートコース</option><option value="2">シンプルコース</option></p></td>
<td height="48" bgcolor="#FFFF99"><p align="center"><div id="aw"><input type=text  name=company><input type=text  name=name><input type=text name=basic><input type=text name=free><input type=text name=pakew><input type=text name=talk><input type=text name=paket><input type=text name=web><input type=text name=yuu><input type=text name=planname><input type=text name=pakename></div>
<INPUT type="submit" name="submit" value="内訳を見る"></p></td>
<td bgcolor="#FFFF99"><p align="center"><input type=text name=price>円/月</p></td>
<td bgcolor="#FFFF99"><p align="center"><input type=text name=pricesum>円</p></td>
<td bgcolor="#FFFF99"><p align="center"> <input type=text name=namewari size="35"><br><select name="lista2" onchange="liChanged('lista2')">  <option value="defult">▼指定できます</option>  </select>プラン</td>
<td bgcolor="#FFFF99"><p align="center"><select name="lista3" onchange="liChanged('lista3')">  <option value="defult">▼指定できます</option></select></p></td></tr></form>

<FORM name=sb method="POST" action="http://cgi.geocities.jp/m0m0n0k1/cgi/all2.pl" target="_blank">
<tr><td bgcolor="#CCCCCC"><p align="center"><input type=text name=rank size="1">位</p></td><td height="13" bgcolor="#CCCCCC"><p align="center";><a href="http://www.geocities.jp/m0m0n0k1/itiran/softbank/">SoftBank最安</a><br><input type=text  name=iphone></p></td>
<td  bgcolor="#CCCCCC"><p align="center"><div id="sb"><input type=text  name=company><input type=text name=basic><input type=text name=free><input type=text name=pakew><input type=text name=talk><input type=text name=paket><input type=text name=web><input type=text name=yuu><input type=text name=planname><input type=text name=pakename></div>
<INPUT type="submit" name="submit" value="内訳を見る"></p></td>
<td bgcolor="#CCCCCC"><p align="center"><input type=text name=price>円/月</p></td>
<td bgcolor="#CCCCCC"><p align="center"><input type=text name=pricesum>円</p></td>
<td bgcolor="#CCCCCC"><p align="center"><input type=text  name=name><br>
<input type=text name=namewari size="35"><br><select name="lists2" onchange="liChanged('lists2')">  <option value="defult">▼指定できます</option>  </select>プラン</p></td>
<td bgcolor="#CCCCCC"><p align="center"><select name="lists3" onchange="liChanged('lists3')">  <option value="defult">▼指定できます</option>  </select></p></td></tr>
</form>

<FORM name=sele method="POST" action="http://cgi.geocities.jp/m0m0n0k1/cgi/all2.pl" target="_blank">
<tr><td><p align="center"><input type=text name=rank size="1">位</p></td><td height="23"><p align="center">自由に選択<br>
<select name="list1" onchange="liChange('sele',0,'list1','list2','list3','list4')"><option value="defult">▼会社を選んでください</option>
  <option value="0">ドコモ</option>  <option value="1">au</option>  <option value="2">SoftBank</option></select><br>
  <select name="list2" onchange="liChange('sele',1,'list1','list2','list3','list4')">  <option value="defult">▼料金プランを選んでください</option>
  </select></p></td>
<td><p align="center"><div id="sele"><input type=text  name=company><input type=text  name=name><input type=text name=basic><input type=text name=free><input type=text name=pakew><input type=text name=talk><input type=text name=paket><input type=text name=web><input type=text name=yuu><input type=text name=planname><input type=text name=pakename></div>
<INPUT type="submit" name="submit" value="内訳を見る"></p></td>
<td><p align="center"><input type=text name=price value="←選択してください">円/月</p></td>
<td><p align="center"><input type=text name=pricesum>円</p></td>
<td><p align="center"> <input type=text name=namewari size="35"><br><select name="list3" onchange="liChange('sele',2,'list1','list2','list3','list4')">  <option value="defult">▼指定できます</option>  </select>プラン</p></td>
<td><p align="center"><select name="list4" onchange="liChange('sele',3,'list1','list2','list3','list4')">  <option value="defult">▼指定できます</option>  </select></p></td></tr>
</form>

<FORM name=yourplan method="POST" action="http://cgi.geocities.jp/m0m0n0k1/cgi/all2.pl" target="_blank">
<tr><td><p align="center"><input type=text name=rank size="1">位</p></td><td height="23"><p align="center">あなたの現在の料金<br>
<input type=text name=outcompany><br>
<select name="listplan" ><option value="defult">-</option></select></td>
<td><p align="center"><div id="yourplan"><input type=text  name=company><input type=text  name=name><input type=text name=basic><input type=text name=free><input type=text name=pakew><input type=text name=talk><input type=text name=paket><input type=text name=web><input type=text name=yuu><input type=text name=planname><input type=text name=pakename></div>
<INPUT type="submit" name="submit" value="内訳を見る"></p></td>
<td><p align="center"><input type=text name=price value="←選択してください">円/月</p></td>
<td><p align="center"><input type=text name=pricesum>円</p></td>
<td><p align="center"> <input type=text name=namewari size="35"><br><select name="list3" ><option value="defult">-</option></select></p></td>
<td><p align="center"><select name="list4" ><option value="defult">-</option></select></p></td></tr>
</form>

</table>
<br><br><a name="tool"></a>
<FORM name=se>

<input type=button value="シミュレーション結果を見る" onClick=jump("calculation","no")><br>
<h2>●さらに詳しく比較</h2>
    契約年数<input type=text name=year>年<br><br>
    家族にメールする割合<input type=text name=familym size="5">％<br><br>
    ●SoftBank(ホワイトプラン) au(プランZ)のみ<br>
    <font color="#666666"><b><i>自社携帯への通話の割合（家族を除く）</i></b></font><input type=text name=talkg value="20" size="4">％<br>
    <font color="#666666"><b><i>21時～1時に通話する割合</i></b></font><input type=text name=talkwh value="30" size="4">％<br><br>
    <font color="#666666"><b><i>受信メールのうちSMSまたは128文字以下の割合</i></b></font><input type=text name=mailratio value="30" size="4"><font color="#666666">％(<b>SoftBank</b>のみ)</font><br><br>
<input type=button value="シミュレーション結果を見る" onClick=jump("calculation","no")><br>
</font><br>
</form> 
<script language="JavaScript">

<!--
var tabname = 'tabA'
var rdweb1 = 2;

   function FocusTab(tabname0,tabcolor) {
     //tabname0はローカル変数
      // タブの色
      // 全部グレイに
      document.getElementById('tabA').style.backgroundColor = 'gray';
      document.getElementById('tabB').style.backgroundColor = 'gray';
      document.getElementById('tabC').style.backgroundColor = 'gray';
      // 指定箇所のみ色を変更
      if(tabname0) {
         document.getElementById(tabname0).style.backgroundColor = tabcolor;
      }
      tabname = tabname0;
      if(tabname=="tabA"){rdwebname="frdweb";}//パケットのラジオボタンの名前を代入
      else if(tabname=="tabB"){rdwebname="frdweb2";}
      else if(tabname=="tabC"){rdwebname="frdweb3";}
      if(tabname=="tabA"){smartname="smartA";}//スマートフォン選択のラジオボタンの名前を代入
      else if(tabname=="tabB"){smartname="smartB";}
      else if(tabname=="tabC"){smartname="smartC";}
   }
   // タブボックスの中身
   function ChangeTab(tabname0) {
   //tabname0はローカル変数
      // 全部消す
      document.getElementById('tab1').style.display = 'none';
      document.getElementById('tab2').style.display = 'none';
      document.getElementById('tab3').style.display = 'none';
      // 指定箇所のみ表示
      if(tabname0) {
         document.getElementById(tabname0).style.display = 'block';
      }

   }

      // デフォルトのタブを選択
   FocusTab('tabA','blue');
   ChangeTab('tab1');

var radio,yuuin,yuuau,yuuauin,aus,aus2,auf,monthk,kvalue,ausimple,kvaluetoku;
var msg=0,yuu=0,talktime=0;
var chn,spb,hp;
var selev, iphone;
var talk,mailratio,h,i,j,k,i2=0,price1,namet,namet2,talkwh,talkg,talkv,familym,family,webin,mail0;

var namepox,price1ox,nameox,year,year3;
var price1b,nameb,namepb,wari;
var namepwh,price1wh,namewh;
var namepg,price1g, nameg;
var namepv,price1v,namev;
var namepax,price1ax,nameax;
var price1d,named,namepd;
var n,company,mbratio;
var rdwebname="frdweb";
var smartname="smartA",smart0;
var outcompany;
var price=new Array(20)
for (i=0; i<10; i++){price[i]=new Array(20)}
var namep=new Array(20)
for (i=0; i<10; i++){namep[i]=new Array(20)}
var ratioax=new Array(5)
for (i=0; i<10; i++){ratioax[i]=new Array(10)}
var pake3=new Array(10) //くりこし
for (i=0; i<10; i++){pake3[i]=new Array(10)}
var pakesum=new Array(20) //パケット計算
for (i=0; i<20; i++){pakesum[i]=new Array(20)}
var mail7=new Array(20) //パケット割引無料分
for (i=0; i<20; i++){mail7[i]=new Array(20)}
var mail4=new Array(20) //パケット割引加入でオトク
for (i=0; i<20; i++){mail4[i]=new Array(20)}
var mail2=new Array(20) //料金
for (i=0; i<20; i++){mail2[i]=new Array(20)}
var selenamep=new Array(50) //セレクトメニューパケット割引名
for (i=0; i<50; i++){selenamep[i]=new Array(15)}
/*var selename=new Array(50) //セレクトメニュー料金名
for (i=0; i<50; i++){selename[i]=new Array(15)}*/
var basic = new Array(50)
for (i=0; i<50; i++){basic[i]=new Array(15)}
var basicname = new Array(50)
for (i=0; i<50; i++){basicname[i]=new Array(15)}
var free = new Array(50)
for (i=0; i<50; i++){free[i]=new Array(15)}
var talkprice = new Array(50)
for (i=0; i<50; i++){talkprice[i]=new Array(15)}

var mail=new Array(10)
var free2=new Array(20)
var mail3=new Array(10)
var web=new Array
var paket=new Array(10)
var mail72=new Array(10)
var mail73=new Array(10)
var Long=new Array
var paket2=new Array(10) //pakesum
var company2=new Array(10)
var talk = new Array
var ratio = new Array(12)
var ratio2 = new Array(12)
var basic2 = new Array

var yuu2=new Array
var web2=new Array
var outname= new Array;
var outprice= new Array
var outpricesum= new Array;
var outplanname=new Array
var outpakename=new Array;
var outbasic=new Array;
var outfree=new Array;
var outpaket=new Array;
var outtalk=new Array;
var outpakew=new Array;
var outweb=new Array;
var outyuu=new Array;
var namewari=new Array
var warip=new Array
var j2=new Array
var talkratio=new Array
var vpake="defult",vpakey="defult";
var v,vy;
var v1="defult",v1y="defult";
var v2="defult",v2y="defult";
var v3="defult",v3y="defult",v30="defult";
var v4="defult",v4y="defult",v40="defult";

var inh="defult";
var inhy="defult";
var d1="defult"
var a1="defult"
var dp="defult"
var dpk="defult"
var ap="defult"
var apk="defult"
var sp="defult"
var spk="defult"
//var wp="defult"
//var wpk="defult"

var mainCa = new Array();
  var subCa  = new Array();
  var openTr = new Array();
var  D,S,A,/*Wi,WiP,*/G,P,X,Wh,HB,SO,E,EP,/*WiP,WiSP,*/DP,AXP,WhP,OP,BP,HBP,AP,AEP,DEP,OXW,OW,AW,AX,DB,B,BV,AS,OEP,ARRMAX;
D=0;A=1;S=2;/*Wi=3;Dis=4;*/
DB=10;
AS=11;AW=12;AX=13;
SO=14;G=15;X=16;Wh=17;;BV=18;B=19;OXW=20;OW=21;
/*WiPl=22;*/

DP=30;DEP=39;
AP=38;AEP=31;AXP=32;
OP=33;BP=34;WhP=35;OXP=40;OWP=41;OEP=42;
/*WiSP=36;*/
/*WiP=37;*/
P=OXW;E=AS;
ARRMAX=42;//配列の最大値を入力
EP=43;

//WEBの色切り替え
   function openfmax(id){document.getElementById( id ).style.visibility = 'visible';}
   function closefmax(id){document.getElementById( id ).style.visibility = 'hidden';}
	function frdweb1(rdweb){

  	var rdweb0=rdweb.value;
  	if(tabname=="tabA"){
    rdid="webcell";
    rdidinputbox="webcellr";
  }

  else if(tabname=="tabB"){
    rdid="webcell2";
    rdidinputbox="webcellr2";
  }

  else if(tabname=="tabC"){
    rdid="webcell3";
    rdidinputbox="webcellr3";
  } 

   if (rdweb0==2){ document.getElementById(rdid).style.backgroundColor = "#FFFF99";openfmax(rdidinputbox);}
   else {document.getElementById(rdid).style.backgroundColor = "white";closefmax(rdidinputbox);}
}

function selearray() {

  //ドコモ
    mainCa[D]=3;
    subCa[D]=new Array(),openTr[D]=new Array();
    subCa[D][0]="defult",openTr[D][0]="▼料金プランを選んでください";
    subCa[D][1]="0",openTr[D][1]="旧プラン";
    subCa[D][2]="2",openTr[D][2]="バリューコース";
    subCa[D][3]="1",openTr[D][3]="ベーシックコース";
	
    //au
    mainCa[A]=3;
    subCa[A]=new Array(),openTr[A]=new Array();
    subCa[A][0]="defult",openTr[A][0]="▼料金プランを選んでください";
    subCa[A][1]="0",openTr[A][1]="WIN 旧プラン";
    subCa[A][2]="1",openTr[A][2]="WIN フルサポートコース";
    subCa[A][3]="2",openTr[A][3]="WIN シンプルコース";

    //SoftBank
    mainCa[S]=8;
    subCa[S]=new Array(),openTr[S]=new Array();
    subCa[S][0]="defult",openTr[S][0]="▼料金プランを選んでください";
    subCa[S][1]="0",openTr[S][1]="ホワイトプラン";
    subCa[S][2]="1",openTr[S][2]="オレンジプランWX";
    subCa[S][3]="2",openTr[S][3]="ブループラン";
    subCa[S][4]="4",openTr[S][4]="ブループランバリュー";
    subCa[S][5]="5",openTr[S][5]="シンプルオレンジ";
    subCa[S][6]="6",openTr[S][6]="オレンジプランX(受付終了)";
    subCa[S][7]="7",openTr[S][7]="オレンジプランW(受付終了)";
    subCa[S][8]="3",openTr[S][8]="ゴールドプラン";

//    subCa[S][9]="8",openTr[S][9]="ハッピーボーナス(主)(受付終了)";
//    subCa[S][10]="9",openTr[S][10]="ハッピーボーナス(副)(受付終了)";

database2();

 

 for(slai=10;slai<=22;slai++) { selectplan(slai)} 

  //パケット割引サービス

  for (slai=30;slai<=ARRMAX;slai++) {

    mainCa[slai]=Long[slai]+1;

    subCa[slai]=new Array(),openTr[slai]=new Array();

    subCa[slai][0]="defult",openTr[slai][0]=" ";

    for(j=0; j<=Long[slai]; j++){subCa[slai][j+1]=j;openTr[slai][j+1]=selenamep[slai][j];}

  }



  //パケット割引サービス au win プランE
  mainCa[EP]=0;
  subCa[EP]=new Array(),openTr[EP]=new Array();
  subCa[EP][0]="defult",openTr[EP][0]="_";


/*
//"年間契約+長期割引"
mainCa[18]=2;
subCa[18]=new Array(),openTr[18]=new Array();
subCa[18][0]="defult",openTr[18][0]="▼";
subCa[18][1]="0",openTr[18][1]="加入しない";
subCa[18][2]="1",openTr[18][2]="メール放題";

//"長期割引";

  mainCa[19]=0;
subCa[19]=new Array(),openTr[19]=new Array();
subCa[19][0]="defult",openTr[19][0]="-----";
*/

}//selearray

function selectplan(sepn) {
  //sepmainCa=プラン数
  //sepn=通し番号
  //mainCa[sepn]=mainCaN[sepn]*1;
  subCa[sepn]=new Array(),openTr[sepn]=new Array();
  subCa[sepn][0]="defult",openTr[sepn][0]="";
  for(i=0; i<mainCa[sepn]; i++){subCa[sepn][i+1]=i;openTr[sepn][i+1]=basicname[sepn][i];}
}

function liChanged(elName) {



 if (elName =="listd") {var p1=document.d.elements[elName];
 d1=p1.options[p1.selectedIndex].value;
 }
 if (elName =="lista") {var p2=document.aw.elements[elName];
 a1=p2.options[p2.selectedIndex].value;
 }

 if (elName =="listd2") {
   var p3=document.d.elements[elName];
   dp=p3.options[p3.selected</maincaalue;
   dpk="defult";
 }

 else if (elName =="listd3") {
   var p4=document.d.elements[elName];
   dpk=p4.options[p4.selectedIndex].value;
 }

 else if (elName =="lista2") {
   var p5=document.aw.elements[elName];
   ap=p5.options[p5.selectedIndex].value;
   apk="defult";
 }

 else if (elName =="lista3") {
   var p6=document.aw.elements[elName];
   apk=p6.options[p6.selectedIndex].value;
 }

 else if (elName =="lists2") {
   var p7=document.sb.elements[elName];
   sp=p7.options[p7.selectedIndex].value;
   spk="defult";
 }

 else if (elName =="lists3") {
   var p8=document.sb.elements[elName];
   spk=p8.options[p8.selectedIndex].value;
 }

  /*else if (elName =="listw2") {
   var p9=document.w.elements[elName];
   wp=p9.options[p9.selectedIndex].value;
 }*/

 /*else if (elName =="listw3") {
   var p10=document.w.elements[elName];
   wpk=p10.options[p10.selectedIndex].value;
 }
 */

 func2()

}

function liChange(formName,flag,elName,elSubName,elplan,elpake) {

var lih,liv1,liv2,liv3,liv4,liv,livpake;

if (formName=="frm2") {lih=inhy;liv=vy;livpake=vpakey;liv1=v1y;liv2=v2y;liv3=v3y;liv4=v4y;}

else {lih=inh;liv=v;livpake=vpake;liv1=v1;liv2=v2;liv3=v3;liv4=v4;}

selearray()

  //データを仮置き場に読み込み

  var p1=document.forms[formName].elements[elName];

  var p2=document.forms[formName].elements[elSubName];

  var p3=document.forms[formName].elements[elplan];

  var p4=document.forms[formName].elements[elpake];  

//変更があった項目をvに代入

//v="undefined"

  if (flag=="0") liv1=p1.options[p1.selectedIndex].value;

  else if(flag=="1") liv2=p2.options[p2.selectedIndex].value;

  else if(flag=="2")  {liv3=p3.options[p3.selectedIndex].value;}

  else if(flag=="3")  {liv4=p4.options[p4.selectedIndex].value;}

  //else  v="defult"

  if (liv!="defult"){ //料金プランの選択肢作製

//セレクトメニュー会社の読み取り

  if(formName=="frm2"){

    if(liv1==0) outcompany="ドコモ";

    else if (liv1==1) outcompany="au";

    else if (liv1==2) outcompany="SoftBank";

    else  outcompany="?";

    

  }


    if (flag=="0"){

	  for (i=0;i<=mainCa[liv1];i++) p2.options[i]=new Option(openTr[liv1][i],subCa[liv1][i]);

      p2.options.length=mainCa[liv1]+1;

      p2.selectedIndex=0;

    liv2="defult";

	  liv3="defult";

	  liv4="defult";

	  p3.options[0]=new Option("▼指定できます","defult");

	  p3.options.length=1;

      p3.selectedIndex=0;

	  p4.options[0]=new Option("▼指定できます","defult");

	  p4.options.length=1;

      p4.selectedIndex=0;

colorselect("white","list1",formName)

	  colorselect("red","list2",formName)

    liglobal(formName,liv,livpake,liv1,liv2,liv3,liv4);//セレクトした項目liv1をグローバル変数に代入

	  if(mainCa[liv1]==0) flag="1"

    }

    if(flag=="1"){ //料金プランの選択肢作製その2

      colorselect("white","list2",formName)

      if ( mainCa[liv1]==0) liv2=0;

      liv3="defult";

      liv4="defult";

      if(liv1==0){liv=DB; livpake=DP;}

      else if(liv1==1){

        if(liv2==5 || liv2==6){liv=AX; livpake=AXP}

        else if (liv2==2){ liv=AS;  livpake=AP;}

        else{ liv=AW;  livpake=AP;}

      }

      else if(liv1==2){

        if(liv2==0){liv=Wh; livpake=WhP}//ホワイト

        else if(liv2==3){liv=G; livpake=WhP}//ゴールド

		    else if(liv2==5){liv=SO; livpake=OP}//シンプルオレンジ

        else if(liv2==6){liv=X; livpake=OXP}//オレンジX

        else if(liv2==8 || liv2==9){liv=HB; livpake=HBP;}//ハピボ

		    else if(liv2==1){liv=OXW; livpake=OP;}//オレンジW WX

        else if(liv2==7){liv=OW; livpake=OWP;}//オレンジW WX

		    else {liv=B; livpake=BP;}//ブルー

	  }

	 /* else if(liv1==3) {liv=WiPl; livpake=WiP;}*/

	  /*else if(liv1==4) {liv=Wh; livpake=WhP;}*/

    liglobal(formName,liv,livpake,liv1,liv2,liv3,liv4);

    vsele(formName);

    if(formName=="sele") {

	    outsele(formName,"list3",liv,liv3,outplanname[inh]);//vseleの計算結果を反映させるため、livではなくinhとする

	    outsele(formName,"list4",livpake,liv4,outpakename[inh]);

    }

else{

  	  outsele(formName,"list3",liv,liv3,outplanname[lih]);

  	  outsele(formName,"list4",livpake,liv4,outpakename[lih]);

    }

	}

	else if(flag=="2"){ //料金プランの指定

		liv4="defult";

    liglobal(formName,liv,livpake,liv1,liv2,liv3,liv4);

    if(formName=="sele") {

      vsele(formName);

      outsele(formName,"list4",livpake,liv4,outpakename[inh])

    }

    else{

      vsele(formName);

      outsele(formName,"list4",livpake,liv4,outpakename[inhy])

    }

    if (liv4!="defult") colorselect("white","list4",formName);

    if (liv3!="defult") colorselect("white","list3",formName)

	}

	else if(flag=="3"){ //パケ割の指定

      liglobal(formName,liv,livpake,liv1,liv2,liv3,liv4);

	  if(formName=="sele"){

	    if (mainCa[liv]>0) openTr[liv][0]=outplanname[lih];

	    for (i=0;i<=mainCa[liv];i++) {p3.options[i]=new Option(openTr[liv][i],subCa[liv][i]);}

	    p3.options.length=mainCa[liv]+1;

      p3.selectedIndex=0;

      vsele(formName);

	  }

   if (liv4!="defult") {colorselect("white","list4",formName);}

	}

  }

else{ //初期値入力

  liv1="defult";

	liv2="defult";

	liv3="defult";

	liv4="defult";

	vsele(formName)

  }

}



function outsele(formName,list00,m,m0,name0) {

	var p0=document.forms[formName].elements[list00];

	if (name0==undefined) {}

	else if (name0.match("_,") && list00=='list4') {m = AEP;}

		else if(name0.match("_.") && list00=='list4')m=OEP;

		else if(name0.match(".,") && list00=='list4') m=DEP;



 if(formName=="frm2" && m0=="defult" && mainCa[m]>0) {

   openTr[m][0]="▼選択してください";

   colorselect("red",list00,formName)

 }

 else if (formName=="frm2"){}

 else if (mainCa[m]>0) {openTr[m][0]=name0+"(最安)";colorselect("white",list00,formName);}

 else colorselect("white",list00,formName)

 for (i=0;i<=mainCa[m];i++) p0.options[i]=new Option(openTr[m][i],subCa[m][i]);

 p0.options.length=mainCa[m]+1;

 p0.selectedIndex=0;

 }

function colorselect(color,listName,formName) {

  if(color=="red") document.forms[formName].elements[listName].style.backgroundColor="#FF9999";

  else document.forms[formName].elements[listName].style.backgroundColor="white";

}



function liglobal(formName,liv,livpake,liv1,liv2,liv3,liv4) {//ローカル変数→グローバル変数

  if (formName=="frm2") {v1y=liv1;v2y=liv2;v3y=liv3;v4y=liv4;vy=liv;vpakey=livpake;}

  else {v1=liv1;v2=liv2;v3=liv3;v4=liv4;v=liv;vpake=livpake;}

}

function vsele(formName) {

  inhy="3"+v1y+v2y;

  inh="1"+v1+v2;

  if(v2y=="defult" || v1y=="defult"){inhy="defult";}

  if(v2=="defult" || v1=="defult"){inh="defult";}

  func2()

}

kisyu()

function funcstart(inputNo2){

dp="defult"

dpk="defult"

ap="defult"

apk="defult"

sp="defult"

spk="defult"

wp="defult"

wpk="defult"

//inputNo=inputNo2;

v3="defult";v4="defult";

if (tabname=="tabC"){

  outyousele('yourplan','list3',vy,v3y);

  outyousele('yourplan','list4',vpakey,v4y);

  outyousele('yourplan','listplan',v1y,v2y);

  if ((v4y>0 || outpakename[inhy]=="_" || outpakename[inhy]=="E_")&& document.getElementsByName( rdwebname )[ 0 ].checked == true) {document.getElementsByName( rdwebname )[ 1 ].checked = true}//パケット割引はパケット加入必須

}

func2()

//計算ボタンを押した場合、セレクトメニューを初期化する。

  if(inh!="defult"){

    if(v30=="defult") outsele('sele',"list3",v,v3,outplanname[inh])

    else colorselect("white","list3","frm2")

    if(v40=="defult") outsele('sele',"list4",vpake,v4,outpakename[inh])

    else colorselect("white","list4","frm2")

  }

}

function outyousele(formName,list00,m,m0){//あなたの料金セレクトメニューの出力

   var p00=document.forms[formName].elements[list00];

   var m1=m0*1+1;

   p00.options[0]=new Option(openTr[m][m1],subCa[m][m1]);

   p00.options.length=1;

   p00.selectedIndex=0;

}

unction jump(n,n2){

location.hash=n;

if(n2<3) funcstart(n2)

else funcstart()

}



function paketcalculate(pac2,pacj,pacnamep,pacpaketratio,pacmax,pacmin,mailprice, paketnum){



  selenamep[pac2][pacj]=pacnamep;

  namep[pacj][i]=pacnamep;

  paket[pacj]=paketnumber*1*pacpaketratio;

  mail[pacj]=mailprice*pacpaketratio/0.2;

  if(paketnum !=0){//パケットし放題max

  	pakesum[pacj][i]=func5_2(free2[i],talk[i],paket[pacj],mail[pacj],pacmax,pacmin,pacpaketratio,paketnum);

    mail7[pacj][i]=0;

	

  }

  else if(pacmax==0){//パケットパック

    pakesum[pacj][i]=func6(free2[i],talk[i],paket[pacj],mail[pacj],pacmin);

    mail7[pacj][i]=pacmin;

  }

  else {//パケット定額

    pakesum[pacj][i]=func5(free2[i],talk[i],paket[pacj],mail[pacj],pacmax,pacmin,pacpaketratio)

    mail7[pacj][i]=0;

  }

}

function paketcalculate2(pac2n){//pac2=セレクトメニュー配数

 if(pac2n==AEP){free2[i]=free[AS][i];}

 else if(pac2n==DEP){free2[i]=free[DB][i];}

 /*else if(pac2n==WiSP){free2[i]=free[WiPl][i];}*/

 else if(pac2n==OEP){free2[i]=free[SO][i];}

 else {free2[i]=free[pac2n][i];}

 

  if(pac2n==Wh || pac2n==G){

    pac2=WhP;

	if (smart0 == 1 && iphone == 1) {

		paketcalculate(pac2,0,"__",  1, 5201, 5201,0,0)

		paketcalculate(pac2, 1,"パケットし放題フラット(iPhone)", 1, 4410 / 1.05, 4410 / 1.05, mail0, 0)

		paketcalculate(pac2, 2, "パケットし放題(iPhone)", 0.08, 4410 / 1.05, 1029 / 1.05, mail0, 0)

		n = 2;

	}

	else if (smart0 == 1) {

		paketcalculate(pac2,0,"__",  1, 5201, 5201,0,0)

		paketcalculate(pac2, 1,"パケットし放題フラット", 1, 5200, 5200, mail0, 0)

		paketcalculate(pac2, 2, "パケットし放題S", 0.08, 5700, 390 / 1.05, mail0, 0)

		n = 2;

	}

	else {

		//paketcalculate(pacn,j,namep,pacpaketratio,パケット定額(無料通話付き),パケット上限(ない場合は0),下限,mail料金(加入しない場合),下限とパケット数が一致しない場合入力、一致する場合は0)

		paketcalculate(pac2, 0, "加入しない", 0.2, 0, 0, mail0, 0)

		paketcalculate(pac2, 1, "パケットし放題", 0.08, 4200, 980, mail0, 0)

		paketcalculate(pac2, 2, "パケットし放題フラット", 0.1, 4200, 4200, mail0, 0)

		paketcalculate(pac2, 3, "パケットし放題S", 0.1, 4200, 390 / 1.05, mail0, 0)

		n = 3;

	}

    Long[pac2]=n;

  }

  else if(pac2n==X){

    pac2=OXP;

    paketcalculate(pac2,0,"加入しない",0.1,0,0,mail0,0)

    paketcalculate(pac2,1,"パケットし放題",0.08,4200,980,mail0,0)

    n=1;

    Long[pac2]=n;

  }

else if(pac2n==OW){

    pac2=OWP;

    paketcalculate(pac2,0,"加入しない",0.2,0,0,mail0,0)

    paketcalculate(pac2,1,"パケットし放題",0.08,4200,980,mail0,0)

    n=1;

    Long[pac2]=n;

  }

  else if(pac2n==OEP){

  	if (smart0 == 0) {

		pac2n = SO;

		pac2 = OEP;

		paketcalculate(pac2,0,"__",  0.2, 4201, 1,0,0)

		paketcalculate(pac2, 1, "オレンジE専用_.", 0.1, 4200, 0, 0, 0)

        paketcalculate(pac2,2,"ダミー(選択できません)_.",  0.2, 9000, 9000,0,0)

		paketcalculate(pac2, 3, "ダミー(選択できません)_.", 0.2, 9000, 9000, 0, 0)

		paketcalculate(pac2, 4, "ダミー(選択できません)_.", 0.2, 9000, 9000, 0, 0)		

		n=1;

	}

	else{

	  pac2n = SO;

      pac2 = OEP;

      paketcalculate(pac2,0,"__",  0.1, 5701, 1,0,0)

      paketcalculate(pac2, 1,"パケットし放題フラット", 1, 5200, 5200, mail0, 0)

      paketcalculate(pac2, 2, "パケットし放題S_.", 0.08, 5700, 390 / 1.05, mail0,0)

      paketcalculate(pac2,3, "オレンジE専用_.", 0.1, 5700, 0, 0,0)

	  n=3

	}	 

   Long[pac2]=n;

 }

  else if(pac2n==SO || pac2n==OXW){

    pac2=OP;

    //paketcalculated(pacn,j,namep,pacpaketratio,パケット上限(ない場合は0),下限,mail料金(加入しない場合))

	if (smart0 == 1) {

		paketcalculate(pac2,0,"__",  1, 5201, 5201,0,0)

		paketcalculate(pac2, 1,"パケットし放題フラット", 1, 5200, 5200, mail0, 0)

		paketcalculate(pac2, 2, "パケットし放題S", 0.08, 5700, 390 / 1.05, mail0, 0)

		n = 2;

	}

else {

		paketcalculate(pac2, 0, "加入しない", 0.1, 0, 0, mail0, 0)

		paketcalculate(pac2, 1, "パケットし放題", 0.08, 4200, 980, mail0, 0)

		paketcalculate(pac2, 2, "パケットし放題フラット", 0.1, 4200, 4200, mail0, 0)

		paketcalculate(pac2, 3, "パケットし放題S", 0.1, 4200, 390 / 1.05, mail0, 0)

		paketcalculate(pac2, 4, "パケット定額", 0.05, 4200, 2000, mail0, 0)

		n = 4;

	}

Long[pac2] = n;

}

 else if(pac2n==B || pac2n==BV){

   pac2=BP;

   if (smart0 == 0) {

   	paketcalculate(pac2, 0, "加入しない", 0.2, 0, 0, mail0, 0)

   	paketcalculate(pac2, 1, "パケットし放題", 0.08, 4200, 980, mail0, 0)

   	paketcalculate(pac2, 2, "パケットし放題フラット", 0.1, 4200, 4200, mail0, 0)

   	paketcalculate(pac2, 3, "パケットし放題S", 0.1, 4200, 390 / 1.05, mail0, 0)

   	paketcalculate(pac2, 4, "パケット10", 0.1, 0, 1000, mail0, 0)

   	paketcalculate(pac2, 5, "パケット30", 0.05, 0, 3000, mail0, 0)

   	paketcalculate(pac2, 6, "パケット60", 0.02, 0, 6000, mail0, 0)

   	paketcalculate(pac2, 7, "パケット90", 0.015, 0, 9000, mail0, 0)

   	paketcalculate(pac2, 8, "パケット定額", 0.2, 3900, 3900, mail0, 0)

   	n = 8;

   }

   else{

		paketcalculate(pac2,0,"__",  1, 5201, 5201,0,0)

		paketcalculate(pac2, 1,"パケットし放題フラット", 1, 5200, 5200, mail0, 0)

		paketcalculate(pac2, 2, "パケットし放題S", 0.08, 5700, 390 / 1.05, mail0, 0)

		n=2;

   }

   Long[pac2]=n;

 }

else if(pac2n==AS || pac2n==AW){

   pac2=AP;

   if (smart0 == 0) {

   	paketcalculate(pac2, 0, "加入しない", 0.2, 0, 0, mail0, 0)

   	paketcalculate(pac2, 1, "ダブル定額スーパーライト", 0.1, 4200, 390 / 1.05, mail0, 0)

   	paketcalculate(pac2, 2, "ダブル定額ライト", 0.08, 4200, 1000, mail0, 0)

   	paketcalculate(pac2, 3, "ダブル定額", 0.05, 4200, 2000, mail0, 0)

   	n = 3;

   }

   else {

   	paketcalculate(pac2, 0, "加入しない", 0.2, 0, 0, mail0, 0)

   	paketcalculate(pac2, 1, "ダブル定額スーパーライト", 0.1, 5700, 390 / 1.05, mail0, 0)

   	paketcalculate(pac2, 2, "ダブル定額ライト", 0.08, 5700, 1000, mail0, 0)

   	paketcalculate(pac2, 3, "ダブル定額", 0.05, 5700, 2000, mail0, 0)

  	paketcalculate(pac2, 4, "ISフラット", 0.05, 5200, 2000, mail0, 0)		   

   	n = 4;

   }

   Long[pac2]=n;

 }

 else if(pac2n==AEP){

 pac2n=AS;

 pac2=AEP;

 if (smart0 == 0) {

 	    paketcalculate(pac2,0,"__",  0.1, 4200, 0, 0, 0)//J=0は"加入しない"でweb=0

		paketcalculate(pac2, 1, "パケット定額(Eプラン専用)_,", 0.1, 4200, 0, 0, 0)

 　      paketcalculate(pac2,2,"ダミー(選択できません)_,",  0.2, 9000, 9000,0,0)

		paketcalculate(pac2, 3, "ダミー(選択できません)_,", 0.2, 9000, 9000, 0, 0)

		n = 1;

		Long[pac2] = n;

	}

else {

 	paketcalculate(pac2,0,"__",  0.1, 5700, 0, 0, 0)//J=0は"加入しない"でweb=0

 	paketcalculate(pac2, 1, "パケット定額(Eプラン専用)_,", 0.1, 5700, 0, 0, 0)

	paketcalculate(pac2, 2, "ISフラット_,", 0.05, 5200, 2000, mail0, 0)

	paketcalculate(pac2, 3, "ダミー(選択できません)_,", 0.2, 9000, 9000, 0, 0)

	paketcalculate(pac2, 4, "ダミー(選択できません)_,", 0.2, 9000, 9000, 0, 0)		





		n = 2;

		Long[pac2] = n;

	}	

 }

else if(pac2n==DEP){//docomo

  pac2n=DB;

 pac2=DEP;

 if(smart0==0){

     paketcalculate(pac2,0,"__",                       0.08, 4200, 0,   0,0)

     paketcalculate(pac2,1,"パケ・ホーダイ シンプル.,",     0.08, 4200, 0,   0,0)

     paketcalculate(pac2,2,"ダミー(選択できません).,",  0.2, 9000, 9000,0,0)

     paketcalculate(pac2, 3, "ダミー(選択できません).,", 0.2, 9000, 9000, 0, 0)

 　  paketcalculate(pac2,4,"ダミー(選択できません).,",  0.2, 9000, 9000,0,0)

	 paketcalculate(pac2, 5, "ダミー(選択できません).,", 0.2, 9000, 9000, 0, 0)

 　  paketcalculate(pac2,6,"ダミー(選択できません).,",  0.2, 9000, 9000,0,0)

	 paketcalculate(pac2, 7, "ダミー(選択できません).,", 0.2, 9000, 9000, 0, 0)

   n=1;   

   Long[DEP]=n;

 	}

	else {

     paketcalculate(pac2,0,"__",                       0.08, 5700, 0,   0,0)

     paketcalculate(pac2,1,"パケ・ホーダイ シンプル.,",     0.08, 5700, 0,   0,0)

	 paketcalculate(pac2, 2, "パケホーダイ フラット.,", 0.2, 5200, 5200, mail0, 0)

     paketcalculate(pac2, 3, "ダミー(選択できません).,", 0.2, 9000, 9000, 0, 0)

   n=2;   

   Long[DEP]=n;

	}

 }

 

 else if(pac2n==AX){

   pac2=AXP;

   paketcalculate(pac2,0,"加入しない",     (0.15*9+0.27*8)/17,  0,    0, mail0*0.2/((0.15*9+0.27*8)/17),0)

   paketcalculate(pac2,1,"パケット割",     0.1, 0,    1000, mail0*0.2/0.1*0.7,0)

   n=1;

   Long[pac2]=n;

 }

 else if(pac2n==DB){

   pac2=DP;

     if (smart0 == 1) {

	 	paketcalculate(pac2, 0, "加入しない", 0.2, 0, 0, mail0, 0)

	 	paketcalculate(pac2, 1, "パケホーダイ ダブル", 0.08, 5700, 390 / 1.05, mail0, 0)

		paketcalculate(pac2, 2, "パケホーダイ ダブル2", 0.052, 5700, 2000, mail0, 0)

	 	paketcalculate(pac2, 3, "パケホーダイ フラット", 0.2, 5200, 5200, mail0, 0)

	 		n = 3;

			 Long[pac2]=n;

		 }

else{

	 	paketcalculate(pac2, 0, "加入しない", 0.2, 0, 0, mail0, 0)

	 	paketcalculate(pac2, 1, "パケホーダイ ダブル", 0.08, 4200, 390 / 1.05, mail0, 0)

		paketcalculate(pac2, 2, "パケホーダイ ダブル2", 0.052, 4200, 2000, mail0, 0)

	 	paketcalculate(pac2, 3, "パケット10(受付終了)", 0.1, 0, 1000, mail0, 0)

	 	paketcalculate(pac2, 4, "パケット30(受付終了)", 0.05, 0, 3000, mail0, 0)

	 	paketcalculate(pac2, 5, "パケット60(受付終了)", 0.02, 0, 6000, mail0, 0)

	 	paketcalculate(pac2, 6, "パケット90(受付終了)", 0.015, 0, 9000, mail0, 0)

	 	paketcalculate(pac2, 7, "旧パケホーダイ(受付終了)", 0.2, 3900, 3900, mail0, 0)

	 	if (v4 > 1 || v4y > 1 || dpk > 1) 

	 		n = 7;

	 	else 

	 		n = 2;

			Long[pac2]=7;

	 	

	 }

  

 }

 /*else if(pac2n==WiPl){

 pac2=WiP

   paketcalculate(pac2,0,"加入しない",     0.02,  0,    0, mail0,0)

   paketcalculate(pac2,1,"データ定額", 0.01, 6000, 1000, mail0,0)

   paketcalculate(pac2,2,"リアルインターネットプラス",     0.2,  2000,    2000, mail0,0)

   n=2;

   Long[pac2]=n;

 }*/

 /*else if(pac2n==WiSP){

 pac2n=WiPl;

 pac2=WiSP;

   paketcalculate(pac2,0,"_",     0.08,  2800/1.05,    0,mail0,0)

   paketcalculate(pac2,1,"_",     0.08,  2800/1.05,    0,mail0,0)

   paketcalculate(pac2,2,"_",     0.08,  2800/1.05,    0,mail0,0)

   n=2;

   Long[pac2]=-1;

 }*/



}

unction database(dan,dai,dabasic,dabasicname,dafree,datalkprice){

  basic[dan][dai]=dabasic;  basicname[dan][dai]=dabasicname;      free[dan][dai]=dafree;talkprice[dan][dai]=datalkprice;

  //selename[dan][dai]=dabasicname;

  if (mainCa[dan]==undefined){mainCa[dan]=1;}

  else if (dai>=mainCa[dan]) mainCa[dan]=dai+1;

}

function database2(){

  dan=SO

  //database(dan,i,basic,basicname,free,talkprice)

    database(dan,0,2425/1.05,"シンプルL",0,10)

    database(dan,1,850/1.05,"シンプルS",0,30)

	database(dan,2,780/1.05,"シンプルE",0,40)

  dan=OXW

  //database(dan,i, basic,  basicname,  free,   talkprice)

  database(dan,  0, 14800,  "LL",       12000,  15)

  database(dan,  1, 9300,  "L",         6300,   24)

  database(dan,  2, 6400,  "M",         4050,   28)

  database(dan,  3, 4500,  "S",         2000,   32)

  database(dan,  4, 3400,  "SS",        1000,   40)

    

  dan=B

  database(B,  0, 14400,  "LL",       11000,  14)

  database(B,  1, 9400,  "L",         6000,   20)

  database(B,  2, 6400,  "M",         4000,   28)

  database(B,  3, 4400,  "S",         2000,   36)

  database(B,  4, 3400,  "SS",        1000,   40)

  

  dan=BV

  database(BV,  0, 14400-1600,  "LL",       11000,  14)

  database(BV,  1, 9400-1600,  "L",         6000,   20)

  database(BV,  2, 6400-1600,  "M",         4000,   28)

  database(BV,  3, 4400-1600,  "S",         2000,   36)

  database(BV,  4, 3400-1600,  "SS",        1000,   40)

 

  dan=Wh

  database(Wh,  0, 980/1.05,  "ホワイトプラン",       0,  40)

  database(Wh,  1, 980/1.05*2,  "Wホワイト",         0,   20)

  

  dan=G

  database(G,  0, 9600/1.05,  "ゴールドプラン",       0,  40)

  

  dan=OW

  database(OW,  0, 14800,  "LL",       12000,  15)

  database(OW,  1, 9300,  "L",         6300,   24)

  database(OW,  2, 6400,  "M",         4050,   28)

  database(OW,  3, 4500,  "S",         2000,   32)

  database(OW,  4, 3400,  "SS",        1000,   40)

  

  dan=X

  database(X,  0, 12300,  "ビジネス",       8400,  20)

  database(X,  1, 7300,  "スタンダード",         4500,   30)

  database(X,  2, 3780,  "エコノミー",         2000,   40)

  database(X,  3, 3280,  "ライト",         600,   60)

  

  dan=AW

  database(AW,  0, 15000,  "LL",       12000,  15)

  database(AW,  1, 9500,  "L",         6300,   24)

  database(AW,  2, 6600,  "M",         4050,   28)

  database(AW,  3, 4700,  "S",         2000,   32)

  database(AW,  4, 3600,  "SS",        1000,   40)

  

  dan=AS

  database(AS,  0, 14070/1.05,  "LL",       12000,  15)

  database(AS,  1, 8295/1.05,  "L",         6300,   24)

  database(AS,  2, 5250/1.05,  "M",         4050,   28)

  database(AS,  3, 3255/1.05,  "S",         2000,   32)

  database(AS,  4, 1961/1.05,  "SS",        1000,   40)

  database(AS,  5, 1560/1.05,  "E_",        0,   40)

  database(AS,  6, 1960/1.05,  "Z",        0,   40)

  dan=AX

  database(AX,  0, 15000,  "LL",       12000,  15)

  database(AX,  1, 9500,  "L",         6300,   24)

  database(AX,  2, 6600,  "M",         4050,   28)

  database(AX,  3, 4700,  "S",         2000,   32)

  database(AX,  4, 3600,  "SS",        1000,   40)

an=DB

  database(DB,  0, 14500+yuuin,  "LL",       11000,  15)

  database(DB,  1, 9500+yuuin,  "L",         6000,   20)

  database(DB,  2, 6500+yuuin,  "M",         4000,   28)

  database(DB,  3, 4500+yuuin,  "S",         2000,   36)

  database(DB,  4, 3500+yuuin,  "SS",        1000,   40)

  database(DB,  5, 3135/1.05+yuuin,  "シンプル_",        0,   40)



}

function func3(){

 database2();

var low

if(radio>=0){}

else{radio=0}

aus=aus2;

company=3;



yuu=yuuin;

/*シンプルオレンジ*/

year3=0;

n=3;k=2;

kvalue=kvaluesb*24

if(msg==1){wari="家族割引";}

else{wari="";}



for(i=0; i<=k; i++){

 basic2[i]=basic[SO][i];

 free2[i]=free[SO][i];

 talkprice[SO][i]=talkprice[SO][i]*(1-family*0.3);//tabC通話料金→通話時間への変換時に家族割引を考慮する

 talk[i]=talktime*talkprice[SO][i];



 if (i == 2) {

 	mail0 = 0;

	paketcalculate2(OEP)

 }

 else {

 	mail0 = mailnumber * (1 - mailratio * 0.5 * (1 - familym) - familym) * 3;

	paketcalculate2(SO)

 }

 

ratio[year3]=1;kvaluetoku3=0;

if(kvaluetoku3<0){kvaluetoku3=0}

funcnsb(SO)

func4(SO)

}

conclusion(SO,"シンプルオレンジ",25,sp,spk)

/*オレンジXW*/

n=2



k=4

if(msg==1){wari="新・自分割引+家族割引";}

else{wari="新・自分割引";}

ratio[0]=0.5;



for(i=0; i<=k; i++){

 talkprice[OXW][i]=talkprice[OXW][i]*(1-family*0.3);

 talk[i]=talktime*talkprice[OXW][i];

   mail0=mailnumber*(1-mailratio*0.5*(1-familym)-familym)*3;

free2[i]=free[OXW][i];

basic2[i]=basic[OXW][i]*ratio[0];

 

 paketcalculate2(OXW)



kvaluetoku3=kvaluetoku;

if(kvaluetoku3<0){kvaluetoku3=0}

funcnsb(OXW)

func4(OXW)

}

seach="学割";

if(basicname[OXW][i2].match(seach)){

 if(msg==0){wari="学生割引"}

 else{wari="学生割引+家族割"}

 basicname[OXW][i2]=RegExp.leftContext

}

conclusion(OXW,"オレンジWX",21,sp,spk)

/*ブループラン*/

n=6;k=4

h=25;

ratio[0]=0.5;

if(msg==1){wari="家族割引MAX50";}

else{wari="自分割引50"}



mail0=mailnumber*(1-mailratio*0.5*(1-familym)-familym)*3;



for(i=0; i<=k; i++){

talkprice[B][i]=talkprice[B][i]*(1-family*0.3)

talk[i]=talktime*talkprice[B][i]



 paketcalculate2(B)



basic2[i]=basic[B][i]*ratio[0];

kvaluetoku3=kvaluetoku;

if(kvaluetoku3<0){kvaluetoku3=0}



funcnsb(B)

func4(B)

}

conclusion(B,"ブループラン",22,sp,spk)

/*ブループランバリュー*/

h=26;n=6;k=4;

 for(i=0; i<=k; i++){

 

 paketcalculate2(BV)

 basic2[i]=basic[BV][i]*ratio[0];

  kvaluetoku3=0;

  if(kvaluetoku3<0){kvaluetoku3=0}

  funcnsb(BV)

  func4(BV)

 }

 

conclusion(BV,"ブループランバリュー",24,sp,spk)





/*ホワイトプラン*/

n=1;k=1

h=20;wari=""

basic2[0]=basic[Wh][0];basic2[1]=basic[Wh][1];



if(msg==1){basicname[Wh][0]="家族割引"; basicname[Wh][1]="Wホワイト+家族割引";}

talk[0]=talkg+family



mail0=talkg+familym;

if(mail0>1){mail0=0;}

else{mail0=mailnumber*(1-mailratio*0.5*(1-familym-talkg)-familym-talkg)*3;}

for(i=0; i<=k; i++){

paketcalculate2(Wh)

talkprice[Wh][i]=talkprice[Wh][i]*(1-talkg*(1-talkwh)*(1-family)-family);

talk[i]=talktime*talkprice[Wh][i];

ratio[0]=1;kvaluetoku3=kvaluetoku

funcnsb(Wh)

func4(Wh)

}

conclusion(Wh,"ホワイトプラン",20,sp,spk)

//company=4;

//conclusion(Wh,"ホワイトプラン",40,sp,spk)

namewari[h]=outplanname[h];

outplanname[h]="----";

//h=40;

//namewari[h]=outplanname[h];

//outplanname[h]="----";

//company=3;



/*ゴールドプラン*/n=1;k=0;

year3=year;

wari=""

i=0

h=27;

var talkgp0

var talkgp=talkwh*(familym+talkg)*talktime

if(talkgp>200){talkgp0=talkgp-200}

else{talkgp0=0}

talk[0]=talkprice[G][0]*(talktime*(1-talkg-family)+talkgp0);

talkprice[G][0]=talk[0]/talktime;

//alert(talk[0])

ratio[0]=0.63;ratio[1]=0.63;ratio[2]=0.60;ratio[3]=0.56;

ratio[4]=0.53;ratio[5]=0.49;ratio[6]=0.46;ratio[7]=0.42;

ratio[8]=0.39;ratio[9]=0.35;ratio[10]=0.32;ratio[11]=0.3;

basic2[0]=basic[G][0]*ratio[year];

 mail0=mailnumber*(1-mailratio*0.5*(1-familym-talkg)-familym-talkg)*3;

 paketcalculate2(G)

kvaluetoku3=kvaluetoku;

funcnsb(G)

func4(G)

conclusion(G,"ゴールドプラン",23,sp,spk)

inhsb=23

if(outpricesum[20]==0){}

else{

  if(tabname=="tabB"){k=25;}

  else{k=23;}

  for(h=20; h<=k; h++){

    if(outpricesum[inhsb]>outpricesum[h]) inhsb=h

 }

}



output("sb",inhsb,sp,spk)

 if(msg==1){wari="+家族割引";}

 else{wari="新・自分割引";}



/*オレンジW*/n=2;k=4;

year3=0;

ratio[0]=0.50;



if(spb==1){if(yearox==11){basic[OW][5]=1500/ratio[year];}}

for(i=0; i<=k; i++){

 talkprice[OW][i]=talkprice[OW][i]*(1-family*0.3)

 talk[i]=talktime*talkprice[OW][i]

 mail0=mailnumber*(1-mailratio*0.5*(1-familym)-familym)*3;



 basic2[i]=basic[OW][i]*ratio[0];

 paketcalculate2(OW)



 kvaluetoku3=kvaluetoku;

 funcnsb(OW)

 func4(OW)

}

conclusion(OW,"オレンジW",27,sp,spk)





/*オレンジX*/n=1;

k=3

 if(msg==1){wari="新・自分割引+家族割引";}

 else{wari="新・自分割引";}



for(i=0; i<=k; i++){

  talkprice[X][i]=talkprice[X][i]*(1-family*0.3)

  talk[i]=talktime*talkprice[X][i]

  mail0=mailnumber*(1-mailratio*0.5*(1-familym)-familym)*3;

basic2[i]=basic[X][i]*ratio[0];

paketcalculate2(X)

kvaluetoku3=kvaluetoku;

funcnsb(X)

func4(X)



}

conclusion(X,"オレンジX",26,sp,spk)



 

company=1;

aus=aus2;

if(radio==2 || radio==0){yearax=year;yearaw=year;}

else{yearax=1;yearaw=1;}





/*au ＷＩＮ*/n=3;k=4;

kvalue=kvalueau+ausimple

kvalue2=kvalue

price[0][0]=talktime*110000+10000000;

yuu=yuuauin;

familyratio=0.3;

  if(msg==1) wari="誰でも割+家族割";

  else{wari="誰でも割";}

ratio[0]=0.50;



for(i=0; i<=k; i++){

 basic2[i]=basic[AW][i]*ratio[0];

 talkprice[AW][i]=talkprice[AW][i]*(1-family*familyratio)

 talk[i]=talktime*talkprice[AW][i]

 mail0=mailnumber*2.2

 paketcalculate2(AW)
 
  funccl(AW,kvalue2)

 func4(AW)

}

conclusion(AW,"au WIN フルサポート",11,ap,apk)

namewari[211]="フルサポート "+namewari[211]

price[j2[i2]][i2]="----"

conclusion(AW,"au WIN 従来プラン",10,ap,apk)

outpricesum[10]="----"

outpricesum[110]="----"

outpricesum[210]="----"



company=2;





/*au 1Ｘ*/n=1;

yuu=yuuauin;

ratio[0]=0.50;



for(auk=0; auk<=1; auk++){

  kvaluesim=kvalueau2;

  if(auk==0){

   kvalue2=kvalue;

   //database(dan,i, basic,  basicname,  free,   talkprice)

  database(AX,  0, 15000,  "LL",       12000,  15)

  database(AX,  1, 9500,  "L",         6300,   24)

  database(AX,  2, 6600,  "M",         4050,   28)

  database(AX,  3, 4700,  "S",         2000,   32)

  database(AX,  4, 3600,  "SS",        1000,   40)



  }

else if(auk==1){

   yuu=yuuauin;

   kvalue2=kvaluesim;

  database(AX,  0, 14070/1.05,  "LL",       12000,  15)

  database(AX,  1, 8295/1.05,  "L",         6300,   24)

  database(AX,  2, 5250/1.05,  "M",         4050,   28)

  database(AX,  3, 3255/1.05,  "S",         2000,   32)

  database(AX,  4, 1961/1.05,  "SS",        1000,   40)

  }

    

  for(i=0; i<=k; i++){

   talkprice[AX][i]=talkprice[AX][i]*(1-family*familyratio);

   talk[i]=talktime*talkprice[AX][i];

   mail0=mailnumber*1.89;

   

    

    if(mailnumber+paketnumber==0){n=0;}

	else n=1;

      paketcalculate2(AX)



    basic2[i]=basic[AX][i]*ratio[0];

    funccl(AX,kvalue2)

    func4(AX)

  }

    

  if(auk==0){conclusion(AX,"1x フルサポート",15,ap,apk);     conclusion(AX,"au 1x 最安プラン",13,ap,apk)  }

  else conclusion(AX,"au 1X シンプルコース",16,ap,apk)

  

}

if(outpricesum[16]<outpricesum[15]) conclusion(AX,"au 1x 最安プラン",13,ap,apk)





/*au winシンプル新*/

n=3

k=6;

//割引サービス名と家族通話割引率の算出

if(msg==1){wari="誰でも割+家族割 シンプルコース";}

else{wari="誰でも割 シンプルコース";}



familyratio=1;

kvalue=kvalueau+ausimple

kvalue2=kvaluesim

price[0][0]=talktime*110000+10000000;

yuu=yuuauin;

if(msg==1){wari="誰でも割+家族割";}

else{wari="誰でも割";}

ratio[0]=0.50;



for(i=0; i<=k; i++){

 if (i == 6) {

 	talkprice[AS][i] = talkprice[AS][i] * (1 - talkg * (1 - talkwh) * (1 - family) - family);

 	talk[i] = talktime * talkprice[AS][i];

 	mail0 = talkg + familym;

 	if (mail0 > 1) {mail0 = 0;}

 	else {mail0 = mailnumber * (1 - mailratio * 0.5 * (1 - familym - talkg) - familym - talkg) * 3;	}

 }

 else { 

 	talkprice[AS][i] = talkprice[AS][i] * (1 - family * familyratio);

 	talk[i] = talktime * talkprice[AS][i];

 	mail0 = mailnumber * 2.2;

  	}

 basic2[i]=basic[AS][i]*ratio[0];

 

 

 if (i==5) paketcalculate2(AEP);

 else paketcalculate2(AS);

 funccl(AS,kvalue2)

 func4(AS)

}

conclusion(AS,"au WIN シンプルプラン",12,ap,apk)

namewari[212]="シンプルプラン "+namewari[212]

if(a1==0 || a1=="defult"){

if(outpricesum[12]<outpricesum[11]) inhau=12;

else inhau=11;

}

else if(a1==1) inhau=11;

else if(a1==2) inhau=12

else inhau=10;

output("aw",inhau,ap,apk)





company=0;

/*ドコモ*/n=5;k=5;

kvalue=kvaluedo

ratio[0]=0.5;

familyratio=1;

if(msg==1){wari="ファミ割MAX50";}

else{wari="ひとりでも割引50";}

mail0=mailnumber*3.7*(1-familym);



for(l=0; l<=1; l++){



  if(l==1) kvalue=kvaluedo

  else{

	  if(kvalue<kvaluedo2) kvalue=0

	  else kvalue=kvalue-kvaluedo2

  } 

for(i=0; i<=k; i++){



      if(l==1) {

      if(i==4) basic2[i]=980/1.05;//SSプランは980円

      else basic2[i]=(basic[DB][i]-1600)*0.5;

    }

 	  else {basic2[i]=basic[DB][i]*0.5;

    talkprice[DB][i]=talkprice[DB][i]*(1-family*familyratio);//tabC通話料金→通話時間への変換時に家族割引を考慮する。ループでtalkprice0[DB][i]の値が変わるためl==0の場合のみ計算

    talk[i]=talktime*talkprice[DB][i];

    }

    if (i==5) paketcalculate2(DEP);

    else paketcalculate2(DB);

  yuu=0;

  funccl(DB,kvalue)

  func4(DB)  

 }

 

 //alert(basic2[0])

 yuu=(100-yuuin)*ratio[0];

 if(l==0){ddk=price[j2[i2]][i2];

  if(monthk<25){price[j2[i2]][i2]=price[j2[i2]][i2]+600*(24-monthk)}

  conclusion(DB,"ドコモ ベーシックコース",1,dp,dpk)

  namewari[201]="ベーシック "+namewari[201]

  price[j2[i2]][i2]=ddk-kvalue;

  conclusion(DB,"ドコモ 従来プラン",0,dp,dpk)

  outpricesum[0]="----"

  outpricesum[100]="----"

  outpricesum[200]="----"

  namewari[200]="従来プラン "+namewari[200]

 }

 else conclusion(DB,"ドコモ バリューコース",2,dp,dpk)

 namewari[202]="バリュー "+namewari[202]

}

if (d1 == 3) inhd=0

else if (d1 == 1) inhd=2

else if (d1 == 2) inhd=1

else if (outpricesum[1]<outpricesum[2]) inhd=1

else inhd=2

output("d",inhd, dp, dpk)









}

function func4(if4){

j2[i]=0;

 for(j=0; j<=n; j++){

  pake3[j][i]=mail7[j][i]+free[if4][i]-talk[i]-mail[j]-paket[j];

  if(mail7[j][i]==0 && namep[j][i]!="加入しない") pake3[j][i]=free[if4][i]-talk[i];

  //if(basicname[if4][i]=="E_" || basicname[if4][i]=="シンプル_") j2[i]=1;

  //if (namep[0][i]=="_") j2[i]=0;//willcom新定額

  /*else*/ 

  if(j==0 && namep[j][i]=="__"){j2[i]=1;}//Eプランの"加入しないを最安にしない"

  else if(j==0) {j2[i]=0;pakesum[j2[i]][i]=mail[0]+paket[0];}

  else if(price[j][i]<price[j2[i]][i]) j2[i]=j;

  else if(price[j][i]==price[j2[i]][i] && pake3[j][i]>pake3[j2[i]][i]) j2[i]=j;

 }/*for j*/

 if(i==0) i2=i;

 else if(price[j2[i]][i]<price[j2[i2]][i2]) i2=i;

 else if(price[j2[i]][i]==price[j2[i2]][i2] && pake3[j2[i]][i]>pake3[j2[i2]][i2]){i2=i;}

}/*func4*/



/*パケット定額*/

 function func5(f,t,m,p,high,low,r){

 m=m+p;

if(f-t<0){

  if(m>high){m=high;}

  else if(m<low){m=low;}

}

else{

  if(m>high){m=high-t+f}

  else if(m<low){m=low-t+f}

  else{m=m-t+f}

}

return m;

}

function func5_2(f,t,m,p,high,low,r,pn){

 m=m+p;

 var low2=pn*r;

if(f-t<0){

  

  if (m < low2) m = low;

  else {

  	m = m - low2 + low;

  	if (m > high) m = high;

  }

}

else{  

  if(m<low2) m=low-t+f;

  else{

  	m=m-low2+low-t+f;

	if (m > high) m = high - t + f;

	}

}

return m;

}



/*パケットパック*/

 function func6(f,t,p,m,low){

 p=m+p;

if(t+p-f<low){p=f-t+low}

return p;

}

/*スパボ*/

 function funcnsb(sbi){

 for(j=0; j<=n; j++){

  if(mailnumber+paketnumber==0</low==0 && websele==1){web[j]=0;}

  else {web[j]=300;}

  mail4[j][i]=pakesum[0][i]-pakesum[j][i];

  mail2[j][i]=basic[sbi][i]*ratio[year3]-free[sbi][i]+talk[i]+pakesum[j][i]+web[j]+yuu;

  var basicsb=basic[sbi][i]*ratio[year3];

  

  if(kvaluetoku3==0)kvaluetoku4=0;//シンプルオレンジ等月月割対象外はバリュープログラムも対象外

  else if (j==2 && kvalue/24>kvaluetoku3+600/1.05){kvaluetoku4=kvaluetoku3+600/1.05;}//パケットし放題フラットは月々割600円増

  else if(j==2 && kvalue/24<=kvaluetoku3+600/1.05){kvaluetoku4=kvalue/24;}

  else if(j==1 && kvalue/24>kvaluetoku3+300/1.05){kvaluetoku4=kvaluetoku3+300/1.05;}//パケットし放題は月々割300円増し

  else if (j==1 && kvalue/24<=kvaluetoku3+300/1.05){kvaluetoku4=kvalue/24;}

  else {kvaluetoku4=kvaluetoku3;}

  

  if(mail2[j][i]-kvaluetoku4-basicsb<0){kvaluetoku2=basicsb;}

  else{kvaluetoku2=mail2[j][i]-kvaluetoku4;}

  

  if(monthk<=2){

   price[j][i]=(functax(kvalue)+functax(mail2[j][i])*monthk)/1.05;

  }

  else if(monthk<26){

   price[j][i]=(functax(kvaluetoku2)*(monthk-2)+functax(kvalue)+functax(mail2[j][i])*2)/1.05

  }

  else{price[j][i]=(functax(kvaluetoku2)*24+functax(kvalue)+functax(mail2[j][i])*(monthk-24))/1.05

  }

  if(mail7[j][i]==0){}

  else{pakesum[j][i]=mail[j]+paket[j];}

 }

 

}

/*料金計算*/

 function funccl(fci,kvalue0){

 	var tokuwari;

	for(j=0; j<=n; j++){

	 	if (smart0 == 1 && fci == AS && tabname=="tabB") {

			if (namep[j][i] == "ISフラット" || namep[j][i] =="ダブル定額" || namep[j][i] == "ISフラット_,") {

				tokuwari = 2000 / 1.05;

			namep[j][i]=namep[j][i]+" 毎月割";

			}

			else tokuwari =0;

		}

		//else if(fci==DB && j>0){tokuwari=1000}

		else 

			tokuwari = 0;

  

 

  if( mailnumber+paketnumber==0 && j==0 && websele==1){web[j]=0;}

  else {web[j]=300;}

  mail4[j][i]=pakesum[0][i]-pakesum[j][i];

  mail2[j][i]=basic2[i]-free[fci][i]+talk[i]+web[j]+yuu+pakesum[j][i];

  if(mail2[j][i] < tokuwari) tokuwari=mail2[j][i];

  if(mail7[j][i]==0){}

  else{pakesum[j][i]=mail[j]+paket[j];}

  if(monthk<25){price[j][i]=kvalue0+functax(mail2[j][i]-tokuwari)/1.05*monthk;}

  else price[j][i]=kvalue0+functax(mail2[j][i])/1.05*monthk-functax(tokuwari)/1.05*24;



  }

 }

/*消費税および切捨て*/

 function functax(p){

p=p*1.05;

p=p-p%1;

return p;

}

 function funckiri(p){

p=p-p%1;

return p;

}



function output(formName,outh,plan, pak){

  if(outh=="defult"){

    document.forms[formName].company.value=""

    document.forms[formName].name.value="";

    document.forms[formName].namewari.value=""

    document.forms[formName].planname.value="";

    document.forms[formName].pakename.value=""

    document.forms[formName].pricesum.value=""

    document.forms[formName].price.value="-----"

    document.forms[formName].paket.value="";

    document.forms[formName].free.value="";

    document.forms[formName].basic.value="";

    document.forms[formName].talk.value="";

    document.forms[formName].pakew.value="";



    document.forms[formName].web.value="";

    document.forms[formName].yuu.value="";

  }

  else{

	 if(plan!="no"){//seleおよびyourplanは除外する

      plh=outh%10

      conp=(outh-outh%10)/10

      if(conp==0){listname2='listd2';listname3='listd3';

         v02=DB;

        if (outplanname[outh*1+200]=="シンプル_") {vpake2=DEP;}//Eプランはパケット割引に加入できない

        else vpake2=DP;

      }

      else if(conp==1){listname2='lista2';listname3='lista3';

        if (plh==1) v02=P;

        else v02=AS;

        if (outplanname[outh*1+200]=="E_") {vpake2=AEP;} //Eプランはパケット割引に加入できない

        else vpake2=AP;

      }

else if(conp==2){listname2='lists2';listname3='lists3';

	    if (outplanname[outh*1+200]=="シンプルE") {v02=SO; vpake2=OEP; }//Eプランはパケット割引に加入できない

        else if(plh==0){v02=Wh; vpake2=WhP}//ホワイト

        else if(plh==3){v02=G; vpake2=WhP}//ゴールド

		else if(plh==5){v02=SO; vpake2=OP}//シンプルオレンジ

        else if(plh==6){v02=X; vpake2=OXP}//オレンジX

		    else if(plh==7){v02=OW; vpake2=OWP}//オレンジW

        else if(plh==1){v02=OXW; vpake2=OP}//オレンジWX

		    else {v02=B; vpake2=BP}//ブルー

      }

/*      else if(conp==4) {v02=Wh; vpake2=WhP;}

      else if(conp==3) {

	  	listname2='listw2';listname3='listw3';v02=WiPl;

		if (outpakename[outh*1+200]=="_") {vpake2=WiSP;  pak="defult";} //新プランはパケット割引に加入できない

	    else if(plh>0 && plh<5) {vpake2=WiSP;  pak="defult";} //新プランはパケット割引に加入できない

        else vpake2=WiP;

	  }*/

      outh=outh*1+200;

 

      if(plan=="defult"){

       var d2=document.forms[formName].elements[listname2];

        //dv2=d2.options[d2.selectedIndex].value;

        if (mainCa[v02]>0) openTr[v02][0]=outplanname[outh]+"(最安)";

        for (i=0;i<=mainCa[v02];i++) d2.options[i]=new Option(openTr[v02][i],subCa[v02][i]);

        d2.options.length=mainCa[v02]+1;

        d2.selectedIndex=0;

      }

      var d3=document.forms[formName].elements[listname3];

      if(mainCa[vpake2]>0 && d3.options.length==1){pak="defult";}

      if(pak=="defult"){

        d3=document.forms[formName].elements[listname3];

        //dv3=d3.options[d3.selectedIndex].value;

        if (mainCa[vpake2]>0) openTr[vpake2][0]=outpakename[outh]+"(最安)";

        for (i=0;i<=mainCa[vpake2];i++) d3.options[i]=new Option(openTr[vpake2][i],subCa[vpake2][i]);

        d3.options.length=mainCa[vpake2]+1;

        d3.selectedIndex=0;

      }

/*else if(conp<4){

        var d2=document.forms[formName].elements[listname2];

        //dv2=d2.options[d2.selectedIndex].value;

        if (mainCa[v02]>0) openTr[v02][0]=outplanname[outh];

        for (i=0;i<=mainCa[v02];i++) d2.options[i]=new Option(openTr[v02][i],subCa[v02][i]);

        d2.options.length=mainCa[v02]+1;

        d2.selectedIndex=0;

      }*/

      

    }

    document.forms[formName].company.value=company2[outh];

    document.forms[formName].name.value=outname[outh];

    document.forms[formName].namewari.value=namewari[outh]

    document.forms[formName].planname.value=outplanname[outh];

    document.forms[formName].pakename.value=outpakename[outh];

    if (outpricesum[outh]=="----") document.forms[formName].pricesum.value="----"

    else if(tabname=="tabB") document.forms[formName].pricesum.value=functax(outpricesum[outh])

    else document.forms[formName].pricesum.value="----";

    document.forms[formName].price.value=functax(outprice[outh])

    document.forms[formName].paket.value=functax(outpaket[outh]);

    document.forms[formName].free.value=functax(outfree[outh]);



    document.forms[formName].basic.value=functax(outbasic[outh]);

    document.forms[formName].talk.value=functax(outtalk[outh]);

    document.forms[formName].pakew.value=functax(outpakew[outh]);

    document.forms[formName].web.value=web2[outh];

    document.forms[formName].yuu.value=functax(Math.abs(yuu2[outh]));

  }

   

 }
 
 /*conclusion*/

function conclusion(coni,p,h,ip,ipk){



company2[h]=company

namewari[h]=wari;

outname[h]=p;

outplanname[h]=basicname[i2];

outpakename[h]=namep[j2[i2]][i2]

outpricesum[h]=price[j2[i2]][i2];

outpaket[h]=pakesum[j2[i2]][i2];

outfree[h]=free[coni][i2];

outbasic[h]=basic2[i2];

outtalk[h]=talk[i2];

outprice[h]=mail2[j2[i2]][i2];

outpakew[h]=mail7[j2[i2]][i2];

yuu2[h]=yuu;

web2[h]=web[j2[i2]];

if (h ==inh*1-100 && v40== "defult" && v30== "defult") {v0="go";v3=i2; v4=j2[i2];}

  else if (h ==inh*1-100 && v40== "defult") {v0="go"; v4 = j2[v3];}

  else if (h ==inh*1-100 && v30== "defult") {v0="go"; v3 = i2;}

  else if (h ==inh*1-100) {v0="go";}

  else v0="stop"



if (v0=="go"){

  company2[inh]=company

  namewari[inh]=wari;

  outname[inh]=p;

  outplanname[inh]=basicname[coni][v3];

  outpakename[inh]=namep[v4][v3]

  outpricesum[inh]=price[v4][v3];

  outpaket[inh]=pakesum[v4][v3];

  outfree[inh]=free[coni][v3];

  outbasic[inh]=basic2[v3];

  outtalk[inh]=talk[v3];

  outprice[inh]=mail2[v4][v3];

  outpakew[inh]=mail7[v4][v3];

  yuu2[inh]=yuu;

  web2[inh]=web[v4];

  talkratio[inh]=talkprice[coni][v3];

  if(v4!=0 && v4!="defult" && rdweb1==1)  document.getElementsByName( rdwebname )[ 1 ].checked = true;

}



if (h ==inhy*1-300 && v4y== "defult" && v3y== "defult") {v0="go";v3y=i2; v4y=j2[i2];}

else if (h ==inhy*1-300 && v4y== "defult") {v0="go"; v4y = j2[v3y];}

else if (h ==inhy*1-300 && v3y== "defult") {v0="go"; v3y = i2;}

else if (h ==inhy*1-300) {v0="go";}

else v0="stop"

if (v0=="go"){

  company2[inhy]=company

  namewari[inhy]=wari;

  outname[inhy]=p;

  outplanname[inhy]=basicname[coni][v3y];

  outpakename[inhy]=namep[v4y][v3y]

  outpricesum[inhy]=price[v4y][v3y];

  outpaket[inhy]=pakesum[v4y][v3y];

  outfree[inhy]=free[coni][v3y];

  outbasic[inhy]=basic2[v3y];

  outtalk[inhy]=talk[v3y];

  outprice[inhy]=mail2[v4y][v3y];

  outpakew[inhy]=mail7[v4y][v3y];

  yuu2[inhy]=yuu;

  web2[inhy]=web[v4y];

  talkratio[inhy]=talkprice[coni][v3y];

}

if (ip =="defult" && ipk =="defult") {ip=i2; ipk=j2[i2]}

else if (ipk =="defult") {ipk = j2[ip]}

else if (ip =="defult") {ip = i2}

 h3=h*1+200;

  company2[h3]=company

  namewari[h3]=wari;

  outname[h3]=p;

  outplanname[h3]=basicname[coni][ip];

  outpakename[h3]=namep[ipk][ip]

  outpricesum[h3]=price[ipk][ip];

  outpaket[h3]=pakesum[ipk][ip];

  outfree[h3]=free[coni][ip];

  outbasic[h3]=basic2[ip];

  outtalk[h3]=talk[ip];

  outprice[h3]=mail2[ipk][ip];

  outpakew[h3]=mail7[ipk][ip];

  yuu2[h3]=yuu;

  web2[h3]=web[ipk];

if(ipk!=0 && rdweb1==1) {document.getElementsByName( rdwebname )[ 1 ].checked = true;}



}



function conclusion2(){

company2[h]=""

namewari[h]="";

outname[h]="加入できない"

outplanname[h]="";

outpakename[h]=""

outpricesum[h]="加入できない"

outprice[h]="加入できない";

outpaket[h]=0;

outfree[h]=0;

outbasic[h]=0;

outtalk[h]=0;

outpakew[h]=0;

yuu2[h]=0;

web2[h]=0;

}

/*アラーム割合*/

function funcal2(nun,alr,formName,listName){

  nun=Fulltohalf(nun)

  alr=alr+"数字で入力してください。"

if(nun>=0){colorselect("white",listName,formName)}

else{nun=0;alert(alr);colorselect("red",listName,formName)}

return nun*1;

}

 function funcal(nun,alr,formName,listName){

 nun=Fulltohalf(nun)

 alr=alr+"数字で入力してください。"

 if(nun<0){nun=0;alert(alr);colorselect("red",listName,formName)}

 else colorselect("white",listName,formName)

 if(nun<=100){nun=nun/100;}

 else{nun=100;alert(alr);colorselect("red",listName,formName)}

 return nun;

}

/*携帯電話価格入力*/

function kisyu() {

  document.frm2.kvaluedo.value=20000;

  document.frm2.kvalueau2.value=20000;

  

  document.frm2.kvaluesb.value=980;

  document.frm2.kvaluetoku.value=980

}

/*メイン*/

function func2(){



if(document.getElementsByName( rdwebname )[ 0 ].checked == true){rdweb1=1;}//パケットラジオボックス読み取り

else if(document.getElementsByName( rdwebname )[ 1 ].checked == true){rdweb1=2;}

else {rdweb1=3;}



if(document.getElementsByName( smartname )[ 1 ].checked == true){smart0=1;}//スマートフォン　ラジオボックス読み取り

else {smart0=0;}





v30=v3;v40=v4;//func3()を二回参照する。そのときv3v4は書き換わるので、書き換わらない数字としてv30v40を設定する

  aus2=1;

  talkpp="stop";

  websele=rdweb1;

  if(tabname=="tabA"){

    talktime=document.frm2.talktime.value;

    talktime=funcal2(talktime,"「通話時間」が正しくありません。","frm2","talktime")

    family=document.frm2.family.value;

    family=funcal(family,"「家族に通話する割合」が正しくありません。","frm2","family")

    if(rdweb1==1){mailnumber=0;paketnumber=0;yuuau=0;}

    else if(rdweb1==3){paketnumber=100000000; mailnumber=0;yuuau=50;}

    else {

      mailnumber=document.frm2.mailnumber.value;

      paketnumber=document.frm2.paketnumber.value;

      mailnumber=funcal2(mailnumber,"「メール数」が正しくありません。","frm2","mailnumber")

      paketnumber=funcal2(paketnumber,"「パケット数」が正しくありません。","frm2","paketnumber")

	  yuuau=50;

    }

    if(document.frm2.checkbox01.checked==false){yuuin=0;yuuauin=-20;}

    else{yuuin=100;yuuauin=yuuau;}

	if(document.frm2.checkboxiphoneA.checked==false){iphone=1;}

    else{iphone=0;}



    

    monthk=1;

    yeark=0;

  }

else if(tabname=="tabB"){

    talktime=document.frm2.talktime02.value;

    talktime=funcal2(talktime,"「通話時間」が正しくありません。","frm2","talktime02");

    family=document.frm2.family02.value;

    family=funcal(family,"「家族に通話する割合」が正しくありません。","frm2","family02");

    if(rdweb1==1){mailnumber=0;paketnumber=0;yuuau=0;}

    else if(rdweb1==3){paketnumber=100000000; mailnumber=0;yuuau=50;}

    else {

      mailnumber=document.frm2.mailnumber02.value

      paketnumber=document.frm2.paketnumber02.value

      mailnumber=funcal2(mailnumber,"「メール数」が正しくありません。","frm2","mailnumber02")

      paketnumber=funcal2(paketnumber,"「パケット数」が正しくありません。","frm2","paketnumber02")

	  yuuau=50;

    }

    /*携帯年数*/

    yeark=document.frm2.yeark.value

    yeark=funcal2(yeark,"「今購入した携帯電話の年数」が正しくありません。","frm2","yeark")

    monthk=document.frm2.monthk.value

    monthk=funcal2(monthk,"「今購入した携帯電話の月」が正しくありません。","frm2","monthk")



    if(document.frm2.checkbox02.checked==false){yuuin=0;yuuauin=-20;}

    else{yuuin=100;yuuauin=yuuau;}

	if(document.frm2.checkboxiphoneB.checked==false){iphone=1;}

    else{iphone=0;}

	

  }

  else if(tabname=="tabC"){

    talkp=document.frm2.talkp.value;

    talkp=funcal2(talkp,"「通話料金」が正しくありません。","frm2","talkp")

    if(inhy!="defult") talkpp="go";

    else {colorselect("red","list1","frm2")}

    monthk=1;

    yeark=0;

    family=document.frm2.family03.value;

    family=funcal(family,"「家族に通話する割合」が正しくありません。","frm2","family03");

    if(rdweb1==1){mailnumber=0;paketnumber=0;yuuau=0;}

    else if(rdweb1==3){paketnumber=100000000; mailnumber=0;yuuau=50;}

    else {

      mailnumber=document.frm2.mailnumber03.value

      paketnumber=document.frm2.paketnumber03.value

      mailnumber=funcal2(mailnumber,"「メール数」が正しくありません。","frm2","mailnumber03")

      paketnumber=funcal2(paketnumber,"「パケット数」が正しくありません。","frm2","paketnumber03")

	  yuuau=50;

    }

    /*携帯年数*/

    if(document.frm2.checkbox03.checked==false){yuuin=0;yuuauin=-20;}

    else{yuuin=100;yuuauin=yuuau;}

	if(document.frm2.checkboxiphoneC.checked==false){iphone=1;}

    else{iphone=0;}

	

  } 

/*家族*/

familym=document.se.familym.value;





familym=funcal(familym,"「家族にメールする割合」が正しくありません。","se","familym")



if(family+familym!=0){msg=1;}

else{msg=0;}



 spb=0;

 talkwh=document.se.talkwh.value;

 talkg=document.se.talkg.value;

 

 mailratio=document.se.mailratio.value

 talkg=funcal(talkg,"「自社携帯への通話の割合」が正しくありません。","se","talkg")

 talkwh=funcal(talkwh,"「21時～1時に通話する割合」が正しくありません。","se","talkwh")

 mailratio=funcal(mailratio,"「受信メールのうちSMSまたは128文字以下の割合」が正しくありません。","se","mailratio")

 

/*年数*/

year=document.se.year.value

 if(year>11){year=11}

 else if(year>0){year=year-year%1}

 year=funcal2(year,"「契約年数」が正しくありません。","se","year")

 

 if(year<=0){year=1}

 year2=year

 if(year2>4){year2=4}





/*携帯価格*/

if(tabname=="tabB"){

monthk=yeark*12+monthk*1;

document.frm2.yearkou.value=(monthk-monthk%12)/12;

document.frm2.monthkou.value=monthk%12

 kvalueau2=document.frm2.kvalueau2.value;

 kvaluedo=document.frm2.kvaluedo.value;

 kvaluesb=document.frm2.kvaluesb.value;

// kvaluew=document.frm2.kvaluew.value;

 

 if(monthk==0){monthk=0.0001}

 

 kvaluedo=funcal2(kvaluedo,"「ドコモ携帯電話の価格」が正しくありません。","frm2","kvaluedo")/1.05; 

 kvaluesb=funcal2(kvaluesb,"「SoftBank携帯電話の価格」が正しくありません。","frm2","kvaluesb")/1.05;

 kvalueau2=funcal2(kvalueau2,"「au携帯電話の価格」が正しくありません。","frm2","kvalueau2")/1.05;

 kvaluetoku=document.frm2.kvaluetoku.value;

 kvaluetoku=funcal2(kvaluetoku,"「特別割引」が正しくありません。","frm2","kvaluetoku")/1.05

// kvaluetokuw=document.frm2.kvaluetokuw.value;

// kvaluetokuw=funcal2(kvaluetokuw,"「W-Value割引」が正しくありません。","frm2","kvaluetokuw")/1.05

 kvalueau=kvalueau2

 kvaluedo2=kvaluedo

 

 /*解約*/

 if(monthk<12){ausimple=16000;}

 else if(monthk<18){ausimple=12000;}

 else if(monthk<24){ausimple=6000;}

 else{ausimple=0;}

}

else{

 kvaluesb=0;

 kvaluetoku=0;

 ausimple=0;

 kvaluedo=0;

 kvalueau=0;

 kvalueau2=0;

 //kvaluew=0;

 //kvaluetokuw=0;

 kvaluedo2=0;

}

selearray()

func3();

selearray()

if (talkpp=="go"){talktime=talkp/talkratio[inhy]/1.05;}

func3();

//h=21



//ipone表示

if(document.sb.pakename.value=="パケットし放題フラット(iPhone)")document.sb.iphone.value="iPhone";

else if (smart0 == 1) document.sb.iphone.value="android";

else document.sb.iphone.value="携帯電話";

output("sele",inh,"no","no")

if (tabname=="tabC"){output("yourplan",inhy,"no","no")}

else{document.yourplan.price.value="----";}

if (tabname=="tabC") document.yourplan.outcompany.value=outcompany;

if (tabname=="tabB") {var arr0=new Array(functax(outpricesum[inhd+200]),functax(outpricesum[inhau+200]),functax(outpricesum[inhsb+200]),functax(outpricesum[30]),functax(outpricesum[inh]),functax(outpricesum[inhy]));}

else {var arr0=new Array(functax(outprice[inhd+200]),functax(outprice[inhau+200]),functax(outprice[inhsb+200]),functax(outprice[30]),functax(outprice[inh]),functax(outpricesum[inhy]));}

var rank0=rank(arr0)

if (rank0[0]!="no") document.d.rank.value=rank0[0]+1;

else document.d.rank.value=" "

if (rank0[1]!="no") document.aw.rank.value=rank0[1]+1;

else document.aw.rank.value=" "

if (rank0[2]!="no") document.sb.rank.value=rank0[2]+1;

else document.sb.rank.value=" "

//if (rank0[3]!="no") document.w.rank.value=rank0[3]+1;

//else document.w.rank.value=" "

if (rank0[4]!="no") document.sele.rank.value=rank0[4]+1;

else document.sele.rank.value=" "

if (rank0[5]!="no") document.yourplan.rank.value=rank0[5]+1;

else document.yourplan.rank.value=" "



}

function Fulltohalf(data){//入力データに全角数字がある場合、半角に変換する

  var char1 = new Array("１","２","３","４","５","６","７","８","９","０");

  var char2 = new Array(1,2,3,4,5,6,7,8,9,0);

  var count,data;

  if(data>0 || data<=0) return data;

  while(data.match(/[０-９]/)){     	

    for(count = 0; count < char1.length; count++) data = data.replace(char1[count], char2[count]);

  }

  return data;

}

function rank(arr){

  

  var i,j,m=0,m0="a",n,n0;

  var k=arr.length;

  var rank0=new Array(k)

  var arr0=new Array(k)

  for(j=0; j<k; j++) {

    rank0[j]="no";

	arr0[j]=arr[j]

	if(arr[j]>0) {}

	else arr[j]="no";

  }

  

  for(j=0; j<k; j++){

    while (arr[m]=="no") {

	  m++;

	  if (m>k) {return rank0;}

	}

    n=m;

	loop1:

    if(m0!="same"){

      for(i=m; i<k; i++){

	    if(j>0){if (arr[i]!="no" && arr0[n0]==arr[i]){m0="same";n=i;break loop1;}}

        if(arr[i]!="no" && arr[n]>arr[i]) n=i

      }

	}

arr[n]="no"

	

    if ( m0=="same") rank0[n]=rank0[n0];

	else rank0[n]=j;

	m0="a";

	n0=n;

	//if (m>k) {return rank0;}

  }

  return rank0;

}

//funcstart()//cgiの時に動作させる

//-->

</script>

<br><br>（注）実際の料金とは結果が変わることがあります。料金は小数点以下を切り捨てています。結果に誤りがございましたらお手数ですが<a href="http://geocities.yahoo.co.jp/gb/sign_view?member=m0m0n0k1">ゲストブック</a>に報告してください。<br>



以下の料金には対応しておりません。<br>

    ポイント。第二世代の携帯電話。ハッピーボーナスの一部プラン。au話すほど割引。Cメール。ショートメール。<br>メールは1通250文字として計算しています。<br><br>                                                                                       

詳しい計算条件やわからないことがあれば<a href="http://www.geocities.jp/m0m0n0k1/samplehelp.html"><b><span style="font-size:12pt;">こちら</span></b></a>をご覧ください。<br>

<a href="http://www.geocities.jp/m0m0n0k1/"><b><span style="font-size:12pt;">携帯電話料金HOME</span></b></a>

