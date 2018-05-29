<style type="text/css">
<!--
.tebal {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.huruf {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.hurufputih {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
}
-->
</style>
    <div id="global">
      <div class="container-fluid cm-container-white">
       <br>
		<?php $i=1;
		foreach ($csa_prb as $datae) { ?>
			
		<div class="col-sm-6">
			<table width="750" id="table" class="table table-bordered display" cellpadding="5" cellspacing="1" bgcolor="#999999">
			<col width="102">
				<col width="89" span="4">

				<tr height="20">
				    <td width="150" height="20" bgcolor="#FFCC00" class="huruf">MODEL :</td>
				    <td colspan="2" bgcolor="#FFCC00" class="huruf"><?=$model[$i];?> - <?=$prefix[$i];?></td>
				    <td width="150" bgcolor="#FFCC00" class="huruf">SN : </td>
				    <td width="150" bgcolor="#FFCC00" class="huruf"><?=$eSeN[$i];?></td>
				</tr>

				<tr height="20">
				    <td height="20" bgcolor="#FFCC00" class="huruf">Start Date</td>
				    <td colspan="4" bgcolor="#FFCC00" class="huruf"><?=$start_date[$i];?></td>
				</tr>

				<tr height="20">
				    <td height="20" bgcolor="#000066" class="hurufputih"><span class="style1">Est Start SMU</span></td>
				    <td bgcolor="#000066" class="hurufputih"><span class="style1"><?=$last_smu[$i];?></span></td>
				    <td colspan="2" align="center" bgcolor="#000066" class="hurufputih"><span class="style1">Est Daily Utilization</span><span class="style1"></span></td>
				    <td bgcolor="#000066" class="hurufputih"><span class="style1"><?=$daily_utilizations[$i];?></span></td>
				</tr>

				<tr height="20">
				    <td width="150" height="20" bgcolor="#E2E2E2" class="huruf">PM Type</td>
				    <td width="150" align="center" bgcolor="#E2E2E2" class="huruf"> PM 250 </td>
				    <td width="150" align="center" bgcolor="#E2E2E2" class="huruf"> PM 500 </td>
				    <td width="150" align="center" bgcolor="#E2E2E2" class="huruf"> PM 1000 </td>
				    <td width="150" align="center" bgcolor="#E2E2E2" class="huruf"> PM 2000 </td>
				</tr>

				<tr height="20">
				    <td height="20" bgcolor="#E2E2E2" class="huruf">Parts</td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($part_PM250[$i]['subtot'],'0',',','.');?></td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($part_PM500[$i]['subtot'],'0',',','.');?></td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($part_PM1000[$i]['subtot'],'0',',','.');?></td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($part_PM2000[$i]['subtot'],'0',',','.');?></td>
				</tr>

				<tr height="20">
				    <td height="20" bgcolor="#E2E2E2" class="huruf">Misc.</td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($misc_250[$i],'0',',','.');?></td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($misc_500[$i],'0',',','.');?></td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($misc_1000[$i],'0',',','.');?></td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($misc_2000[$i],'0',',','.');?></td>
				</tr>

				<tr height="20">
				    <td height="20" bgcolor="#E2E2E2" class="huruf">Labors</td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($labour[$i]['a'],'0',',','.');?></td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($labour[$i]['b'],'0',',','.');?></td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($labour[$i]['c'],'0',',','.');?></td>
				    <td align="right" bgcolor="#FFFFFF" class="huruf"><?=number_format($labour[$i]['d'],'0',',','.');?></td>
				</tr>

				<tr height="20">
				    <td height="20" bgcolor="#E2E2E2" class="huruf">Total per Event</td>
				    <td align="right" bgcolor="#E2E2E2" class="huruf"><?=number_format($subtot_250[$i],'0',',','.');?></td>
				    <td align="right" bgcolor="#E2E2E2" class="huruf"><?=number_format($subtot_500[$i],'0',',','.');?></td>
				    <td align="right" bgcolor="#E2E2E2" class="huruf"><?=number_format($subtot_1000[$i],'0',',','.');?></td>
				    <td align="right" bgcolor="#E2E2E2" class="huruf"><?=number_format($subtot_2000[$i],'0',',','.');?></td>
				</tr>

				<tr height="20">
				    <td height="20" bgcolor="#E2E2E2" class="huruf">Est Total Event</td>
				    <td align="center" bgcolor="#E2E2E2" class="huruf"><?=$PM250[$i];?></td>
				    <td align="center" bgcolor="#E2E2E2" class="huruf"><?=$PM500[$i];?></td>
				    <td align="center" bgcolor="#E2E2E2" class="huruf"><?=$PM1000[$i];?></td>
				    <td align="center" bgcolor="#E2E2E2" class="huruf"><?=$PM2000[$i];?></td>
				</tr>

				<tr height="20">
				    <td height="20" bgcolor="#E2E2E2" class="huruf">Total Cost</td>
				    <td align="right" bgcolor="#E2E2E2" class="huruf"><?=number_format($total_250[$i],'0',',','.');?></td>
				    <td align="right" bgcolor="#E2E2E2" class="huruf"><?=number_format($total_500[$i],'0',',','.');?></td>
				    <td align="right" bgcolor="#E2E2E2" class="huruf"><?=number_format($total_1000[$i],'0',',','.');?></td>
				    <td align="right" bgcolor="#E2E2E2" class="huruf"><?=number_format($total_2000[$i],'0',',','.');?></td>
				</tr>

				<tr height="20">
				    <td height="20" bgcolor="#000066" class="hurufputih">Total</td>
				    <td colspan="4" align="left" bgcolor="#FFCC00" class="huruf"><?=number_format($grandtot[$i],'0',',','.');?></td>
			  	</tr> 
			</table>
			</div>
		<?php $i++; } ?>

			<row>
			<div class="col-sm-7"></div>
			<div class="col-sm-4">
				<div class="form-group">
				    <div class="col-sm-8">
				      <a href="<?=base_url('prb/prb');?>" class="btn btn-primary btn-sm">ADD UNIT</a>
				      <a href="<?=base_url('prb/finish/'.$this->uri->segment(3));?>" class="btn btn-danger btn-sm">FINISH</a>
				    </div>
			  	</div>
			  </div>
			  </row>
		</div>
	</div>
