<?
if (!defined("_GNUBOARD_")) exit; // ���� ������ ���� �Ұ� 

$latest_width = "360"; //�Ǹ޴� ���� ����
?>
<style>
.la_he {font-family:����;font-size:9pt;color:#636363;line-height:150%;}
</style>
<table width='<?=$latest_width?>' cellpadding='0' cellspacing='0' border='0'>
<tr>
	<td height='3' colspan='3'></td>
</tr>

<? for ($i=0; $i<count($list); $i++) { ?>
<tr>
	<td width='20' height='25' style='padding-left:5px; padding-top:3px;'><img src='<?=$latest_skin_url?>/img/latest_icon.gif' width='9' height='9' border='0'></td>
	<td width='<?=$latest_width-90?>' style='padding-top:3px;' class='la_he'>
<?
    $style = "font-family:����; font-size:9pt; color:#636363;";
    if ($list[$i][icon_new])
    $style = "style='font-family:����; font-size:9pt; color:#006F00;' ";
	$subject = "<span $style>".cut_str($list[$i][subject],30)."</span>"; //���� ���ڼ� �ڸ���

	echo $list[$i][icon_reply] . " ";
	echo "<a href='{$list[$i][href]}' title='{$list[$i][subject]}' onfocus='this.blur()'>{$subject}";

	if ($list[$i][comment_cnt]) 
	echo " <span style='font-size:8pt; color:#9A9A9A;'>{$list[$i][comment_cnt]}</span>";
	echo "</a>";
?>
   </td>
   <td width='70' align='center' class='la_he' style='padding-top:3px;'><span style='font-size:8pt; color:#999999;'><?=$list[$i][datetime]?></span>
   </td>
</tr>
<tr>
	<td height='1' colspan='3' background='<?=$latest_skin_url?>/img/line.gif'></td></tr>
<? } ?>

<? if (count($list) == 0) { ?><tr><td colspan='3' align='center' height='100'><font color='#6A6A6A'>�Խù��� �����ϴ�.</font></td></tr><? } ?>
</tr>
</table>