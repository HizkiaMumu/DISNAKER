    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            CSA
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                New progress
            </small>
        </h1>

        <hr>
		<div class="col-sm-6">
			<br>
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('prb/prb');?>">
			
			  <div class="form-group" <?php if(!empty(form_error('kode_perusahaan')))echo "has-error"; ?>">
	              <label class="col-md-3 control-label" for="name">Company</label>
	              <div class="col-md-7">
	                <input id='kode_perusahaan' name='kode_perusahaan' type="text" class="form-control">
	                <input id='idperusahaan' name='id_perusahaan' type="hidden" class="form-control">
	                <span class="help-block has-error"><?php echo form_error('kode_perusahaan'); ?></span>
	              </div>
	            </div>

	            <div class="form-group" <?php if(!empty(form_error('alamat')))echo "has-error"; ?>>
                      <label class="col-md-3 control-label" for="alamat">Address</label>
                      <div class="col-md-7">
                        <input id="alamat" name="alamat" type="text" class="form-control" disabled>
                        <span class="help-block has-error"><?php echo form_error('alamat'); ?></span>
                      </div>
                    </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Date</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control tanggal" name="tanggal" value="<?=date('d-m-Y');?>" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label"></label>
			    <div class="col-sm-8">
			      <button type="submit" class="btn btn-primary btn-sm">Next</button>
			    </div>
			  </div>

			  <br><br><br><br>
			  			  
			</form>
		</div>
	</div>
</div>

<script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/select2.min.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2-bootstrap.css') ?>">
<script type="text/javascript">
var $jadul = jQuery.noConflict();

$jadul("#kode_perusahaan").select2({

  ajax: {
    url: "<?php echo site_url('prb/ajax_select')?>",
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        q: params, // search term
      };
    },
    results: function (data, params) {
      // parse the results into the format expected by Select2
      // since we are using custom formatting functions we do not need to
      // alter the remote JSON data, except to indicate that infinite
      // scrolling can be used
      console.log(data);
      return {
          results: $.map(data, function (item) {
              return {
                  text: item.NPERUSAHAAN,
                  id: item.IDPERUSAHAAN
              }
          })
      };
    },
    cache: true
  },
  //escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
  minimumInputLength: 1,
  //templateResult: formatRepo, // omitted for brevity, see the source of this page
  //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
});  


$jadul('#kode_perusahaan').on('change', function() {
  $.ajax({
    url: base_url+'prb/get/'+$jadul(this).val(),
    type: 'GET',
    dataType: 'json',
  })
  .done(function(data) {
  	//alert(data.ALAMAT);
    $('#alamat').val(data.ALAMAT);
    $('#idperusahaan').val(data.IDPERUSAHAAN);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});


</script>


<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

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