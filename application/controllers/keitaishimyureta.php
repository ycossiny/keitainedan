<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keitaishimyureta extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['page_title'] = '携帯シミュレータ';
        //ヘッダー情報の処理
        
		$this->load->view('header', $data);
       
	}
    public function sort()
	{
        if($array -> sort == '1'){
			$data["smartA"] = "ガラケー";
		}else{
                $data["smartA"] = "iphone";
                if($array -> smartphone == 'checkbox'){
                    $data["checkboxsmartphoneA"] = "スマートフォンを除く";
                }else{
                default;
                }
        }
        $data["user_talktime"] = $array -> talktime;
        $data["user_family"] = $array -> family;
        if($array -> mailweb == '1'){
			$data["frdweb"] = "ウェブ、メールを利用しない";
		}elseif($array -> mailweb == '2'){
            $data["frdweb"] = "ウェブ、メールを利用する";
            if($array -> smartphone == 'checkbox'){
                $data["checkboxsmartphoneA"] = "スマートフォンを除く";
            }else{
            default;
            }
    }
  
    
    
    
    
    
    
        <input type="radio" name="frdweb" value=1 onClick=frdweb1(this)>メール、ウェブを利用<b>しない</b>
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
        
        
	}
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */