<?php echo validation_errors(); ?>
    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            INPUT DATA
            <small><i class="ace-icon fa fa-angle-double-right"></i>MENENGAH</small>
        </h1>

        <hr>
		<div class="col-sm-8">
			<br>
			<?=form_open(base_url('menengah/add'),'class="form-horizontal"')?>
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Nama Perusahaan</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" name="nama_perusahaan" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Alamat</label>
			    <div class="col-sm-6">
			      <textarea class="form-control" name="alamat"></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">No Telp</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" name="no_telp" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Fax</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" name="fax">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">email</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="email">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Jumlah Pekerja</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="jum_pekerja">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Investasi</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="investasi">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Jenis KBLI</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="jenis_kbli">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Keterangan</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="keterangan">
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
