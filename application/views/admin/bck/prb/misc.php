<style type="text/css">
.tabelku {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 12px;
		font-weight: bold;
	}
tr {
}
td {
	padding: 5px;
	border: 1px solid #CCCCCC;
}
#cons{
	text-align:right;
}
#trans{
	text-align:center;
}
</style>

    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            CSA
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                MISCELLANEOUS
            </small>
        </h1>

        <hr>
		<div class="col-sm-12">
			<br>
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('prb/summary');?>">
			<table width="1000" border="0"  cellspacing="1">	
			    <tr bgcolor="#FF9900" >
			      <td class="tabelku" rowspan="2" align="center" scope="col">No</td>
			      <td rowspan="2" scope="col">Description</td>
			      <td colspan="5" align="center" scope="col">Quantity</td>
			      <td rowspan="2" align="center" scope="col">Unit Price</td>
			    </tr>
			    <tr class="tabelku" bgcolor="#FF9900" >
			      <td align="center">Unit</td>
			      <td align="center">PM250</td>
			      <td align="center">PM500</td>
			      <td align="center">PM1000</td>
			      <td align="center">PM2000</td>
			    </tr>
			    <!-- <tr>
			      <td align="center">1</td>
			      <td>CONSUMABLES</td>
			      <td align="center">lot</td>
			      <td align="center"><input name="M1PM250" type="text" id="cons" size="7" value="<?=number_format($labor_PM250,'0',',','.');?>"/></td>
			      <td align="center"><input name="M1PM500" type="text" id="cons" size="7" value="<?=number_format($labor_PM500,'0',',','.');?>"/></td>
			      <td align="center"><input name="M1PM1000" type="text" id="cons" size="7" value="<?=number_format($labor_PM1000,'0',',','.');?>"/></td>
			      <td align="center"><input name="M1PM2000" type="text" id="cons" size="7" value="<?=number_format($labor_PM2000,'0',',','.');?>"/></td>
			      <td align="center"><input name="M1Price" type="text" id="cons" size="12" value="1"/></td>
			    </tr> -->
			    <tr>
			      <td align="center">1</td>
			      <td>CONSUMABLES</td>
			      <td align="center">lot</td>
			      <td align="center"><input name="M1PM250" type="text" id="cons" size="7" value="<?=$labor_PM250;?>"/></td>
			      <td align="center"><input name="M1PM500" type="text" id="cons" size="7" value="<?=$labor_PM500;?>"/></td>
			      <td align="center"><input name="M1PM1000" type="text" id="cons" size="7" value="<?=$labor_PM1000;?>"/></td>
			      <td align="center"><input name="M1PM2000" type="text" id="cons" size="7" value="<?=$labor_PM2000;?>"/></td>
			      <td align="center"><input name="M1Price" type="text" id="cons" size="12" value="1"/></td>
			    </tr>
			    <tr>
			      <td align="center">2</td>
			      <td>TRANSPORT</td>
			      <td align="center">km</td>
			      <td align="center"><input name="M2PM250" type="text" id="trans" size="7" /></td>
			      <td align="center"><input name="M2PM500" type="text" id="trans" size="7" /></td>
			      <td align="center"><input name="M2PM1000" type="text" id="trans" size="7" /></td>
			      <td align="center"><input name="M2PM2000" type="text" id="trans" size="7" /></td>
			      <td align="center"><input name="M2Price" type="text" id="cons" size="12" /></td>
			    </tr>
			    <tr>
			      <td align="center">3</td>
			      <td>ACCOMMODATION</td>
			      <td align="center">day</td>
			      <td align="center"><input name="M3PM250" type="text" id="trans" size="7" /></td>
			      <td align="center"><input name="M3PM500" type="text" id="trans" size="7" /></td>
			      <td align="center"><input name="M3PM1000" type="text" id="trans" size="7" /></td>
			      <td align="center"><input name="M3PM2000" type="text" id="trans" size="7" /></td>
			      <td align="center"><input name="M3Price" type="text" id="cons" size="12" /></td>
			    </tr>
			  </table>
  			<br>
  			<button type="submit" name="submit" class="btn btn-primary btn-sm">Next</button>
		</div>
	</div>
</div>
