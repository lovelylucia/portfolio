<?
if (!defined("_GNUBOARD_")) exit; // ���� ������ ���� �Ұ� 

include_once('../g5/common.php');
include_once(G5_PATH."/lib/latest.lib.php");

$tab_img = G5_URL."/tab_img"; //�̹��� ���

$tab_width = "360"; //�Ǹ޴� ��

$tab_bo1 = "notice"; //ó�� ��µ� �Խ��� ID
$tab_bo2 = "QnA"; //�ι�° �Խ��� ID
$tab_bo3 = "freeboard"; //����° �Խ��� ID
$tab_bo4 = "faq"; //�׹�° �Խ��� ID
?>

<script language="javascript">
function tab_img_change(t){
	   for(var i = 1; i <= 4; i++) {
		 img = document.getElementById('tab_bar'+i);
		 img.src = "<?=$tab_img?>/tab"+i+"_off.gif";   
		  eval("document.getElementById('tab_view"+i+"')").style.display="none";

		 if ( t == i ) {
		  img.src = "<?=$tab_img?>/tab"+i+"_on.gif"; 
		  eval("document.getElementById('tab_view"+i+"')").style.display="";
		 }         
	   }     
	}
</script>

<table width='<?=$tab_width?>' cellpadding=0 cellspacing=0 border=0>
<tr>
	<td width=74 background='<?=$tab_img?>/tabbar_bg.gif'><a href="<?=G5_BBS_URL?>/board.php?bo_table=<?=$tab_bo1?>"><img id="tab_bar1" style="cursor:pointer;" onMouseOver="tab_img_change(1)" src="<?=$tab_img?>/tab1_off.gif" width="74" height="26" border="0"></a>
	</td>
	<td width=74 background='<?=$tab_img?>/tabbar_bg.gif'><a href="<?=G5_BBS_URL?>/board.php?bo_table=<?=$tab_bo2?>"><img id="tab_bar2" style="cursor:pointer;" onMouseOver="tab_img_change(2)" src="<?=$tab_img?>/tab2_off.gif" width="74" height="26" border="0"></a>
	</td>
	<td width='<?=$tab_width-296?>' background='<?=$tab_img?>/tabbar_bg.gif' style='padding-top:3px;'></td>	
</tr>
<tr>
	<td colspan='5'>
        <div id="tab_view1">
           <?=latest('tab_latest',$tab_bo1, 4, 30); //������̴� �ֽű� ��Ų���� ������ ?>
        </div>
        <div id="tab_view2" style="display: none">
           <?=latest('tab_latest',$tab_bo2, 4, 30);?>
        </div>
        <div id="tab_view3" style="display: none">
           <?=latest('tab_latest',$tab_bo3, 4, 30);?>
        </div>
        <div id="tab_view4" style="display: none">
           <?=latest('tab_latest',$tab_bo4, 4, 30);?>
        </div>
	</td>
</tr>
</table>
<script>
tab_img_change(1);
</script>