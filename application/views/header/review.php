 <table width="95%" border="0" cellpadding="0" cellspacing="1" class="blockshadow" >
      <tr>
        <td bgcolor="#f9f7f7"> <table width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr>
            <td colspan="2" bgcolor="#FFFFFF"> <img src="<? echo base_url("images/slide-bar2.gif"); ?>" width="300" height="40" /></td>
          </tr>
	<?

	for($i=0;$i<=3;$i++){
	?>
          <tr>
            <td width="27%" align="left" valign="top"><img src="<? echo base_url("images/profile.jpg"); ?>" alt="" width="50" height="50" /></td>
            <td width="73%" align="left" valign="top"><span class="f1">คุณ atom</span> <span class="f2">ได้ Review<a href="#"> ร้านอาหารส้มตำ Internet</a> เมื่อ 3 ชั่วโมงที่แล้ว</span></td>
          </tr>
           <? } ?>
        </table></td>
      </tr>
    </table>
<?
	echo "<pre>========>";
  print_r($this->data) ;
?> 
