    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            CSA
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                PRB
            </small>
        </h1>

        <hr>
		<div class="col-sm-6">
			<br>
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('prb/labor');?>">
			<!-- <input type="text" class="form-control" name="id_prb" value="<?=$id_prb;?>" > -->
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Model</label>
			    <div class="col-sm-6">
			      <select class="form-control" id="model" name="model">
			      	<option value=''>--pilih--</option>
			      	<?php foreach ($model as $mdl) { 
			      	echo '<option value="'.$mdl->model.'">'.$mdl->model.'</option>';
			      	 } ?>
			      </select>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Prefix</label>
			    <div class="col-sm-6">
			      	<select class="form-control" id="prefix" name="prefix">
						<option value='0'>--pilih--</option>
					</select>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Serial Number</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="sn" value="" >
			    </div>
			  </div>

			  <hr>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Last SMU</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="last_smu" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Last SMU Date</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control tanggal" name="last_smu_date" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Service Interval</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="service_interval" value="250">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Daily Utilizations</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="daily_utilizations" value="">
			    </div>
			  </div>

			  
			  <div class="form-group">
			    <label class="col-sm-3 control-label"></label>
			    <div class="col-sm-8">
			      <button type="submit" name="submit" class="btn btn-primary btn-sm">Next</button>
			    </div>
			  </div>

			  <br><br><br><br>
			  			  
			</form>
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
			url: 'http://localhost/trakindo/prb/ambil_data',
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
