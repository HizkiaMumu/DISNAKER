    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            EDIT DATA
            <small><i class="ace-icon fa fa-angle-double-right"></i>KOPEASI</small>
        </h1>

        <hr>
		<div class="col-sm-8">
			<br>
			<?=form_open(base_url('koperasi/update'),'class="form-horizontal"')?>
			<input type="hidden" name="id_koperasi" value="<?=$koperasi['id_koperasi'];?>" >

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Nama Koperasi</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" name="nama_koperasi" value="<?=$koperasi['nama_koperasi'];?>" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">No Badan Hukum</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" name="no_badan_hukum" value="<?=$koperasi['no_badan_hukum'];?>" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Tgl Badan Hukum</label>
			    <div class="col-sm-2">
			      <input type="text" class="form-control tanggal" name="tgl_badan_hukum" value="<?=$koperasi['tgl_badan_hukum'];?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Pengesahan Oleh</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" name="pengesahan_oleh" value="<?=$koperasi['pengesahan_oleh'];?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Tempat Kedudukan</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="tempat_kedudukan" value="<?=$koperasi['tempat_kedudukan'];?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Pembuat AKTA</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="pembuat_akta" value="<?=$koperasi['pembuat_akta'];?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">No. PAD</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="no_PAD" value="<?=$koperasi['no_PAD'];?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Tanggal PAD</label>
			    <div class="col-sm-2">
			      <input type="text" class="form-control tanggal" name="tgl_PAD" value="<?=$koperasi['tgl_PAD'];?>">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">NPWP</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="NPWP" value="<?=$koperasi['NPWP'];?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-3 control-label"></label>
			    <div class="col-sm-8">
			      <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
			    </div>
			  </div>

			  <br><br><br><br>
			  			  
			<?=form_close()?>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	$('#model').change(function(){
		var model = $(this).val();
		$.ajax({
			type: 'POST',
			url: base_url+'ajax/ambilkelurahan',
			data: 'model='+model,
			success: function(response){
				//alert(response);
				$('#prefix').html(response);
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	})
})

</script>

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css">


<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>







<script type="text/javascript">
var $jqu1 = jQuery.noConflict();
	jQuery(document).ready(function() {

	  $jqu1('.tanggal').datepicker({
	    format: 'dd-mm-yyyy',
	    todayHighlight:'TRUE',
	    autoclose: true,
	  });
	});
</script>
