<?php echo validation_errors(); ?>
    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            INPUT DATA
            <small><i class="ace-icon fa fa-angle-double-right"></i>UMKM</small>
        </h1>

        <hr>
		<div class="col-sm-8">
			<br>
			<?=form_open(base_url('umkm/add'),'class="form-horizontal"')?>
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Nama Usaha</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" name="nama_usaha" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Nama Pemilik</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" name="nama_pengusaha" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Jenis Usaha</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" name="jenis_usaha">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Jumlah Modal</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="modal_usaha">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Alamat</label>
			    <div class="col-sm-6">
			      <textarea class="form-control" name="alamat_usaha"></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Kecamatan</label>
			    <div class="col-sm-4">
			      <select class="form-control" id="model" name="kecamatan">
			      	<option value=''>--pilih--</option>
			      	<?php 
			      		foreach ($kecamatan as $kcmt) { 
			      	echo '<option value="'.$kcmt->id_kecamatan.'">'.$kcmt->nama_kecamatan.'</option>';
			      	 } ?>
			      </select>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Kelurahan</label>
			    <div class="col-sm-4">
			      	<select class="form-control" id="prefix" name="kelurahan">
						<option value='0'>--pilih--</option>
					</select>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">No. Izin</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="no_izin" value="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Tanggal Izin</label>
			    <div class="col-sm-2">
			      <input type="text" class="form-control tanggal" name="tgl_izin" value="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Akhir Berlaku</label>
			    <div class="col-sm-2">
			      <input type="text" class="form-control tanggal" name="tgl_akhir" value="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Keterangan</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="keterangan" value="">
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
