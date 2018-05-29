    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            CSA
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Labor PM
            </small>
        </h1>

        <hr>
		<div class="col-sm-4">
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="">
				<input type="hidden" class="form-control" name="id_prb" value="<?=$id_prb;?>" >
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Group</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name="group" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Description</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name="description" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">PM250</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="PM250" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">PM500</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="PM500" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">PM1000</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="PM1000" value="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">PM2000</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="PM2000" value="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Unit Price</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="unit_price" value="">
			    </div>
			  </div>

			  
			  <div class="form-group">
			    <label class="col-sm-3 control-label"></label>
			    <div class="col-sm-8">
			      <button type="button" id="simpankoreksi" class="btn btn-primary btn-sm">Add</button>
			      <a href="<?=base_url('prb/misc');?>" class="btn btn-danger btn-sm">NEXT</a>
			    </div>
			  </div>

			  <br><br><br><br>
			  			  
			</form>
		</div>




		<div class="col-sm-8">
			<table class="table table-bordered display">
				<thead>
				  <tr>
				    
				    <td>Group</td>
				    <td>Description</td>
				    <td>PM250</td>
				    <td>PM500</td>
				    <td>PM1000</td>
				    <td>PM2000</td>
				    <td>Price</td>
				    <td>#</td>
				  </tr>
				</thead>
				<tbody id="listkoreksi">
				  
				</tbody>
			</table>
		</div>

	</div>
</div>



<script type="text/javascript">
	$(document).ready(function() {
	    $.ajax({
	      url: base_url+'prb/getlabor/'+<?=$this->session->userdata['id_prb'];?>,
	      type: 'POST',
	      dataType: 'JSON'
	    })
	    .done(function(data) {
	         $('#listkoreksi').empty();
	      $.each(data, function(index, val) {
	         /* iterate through array or object */
	         console.log(val);
	         $('#listkoreksi').append('<tr><td>'+val.grup+'</td><td>'+val.description+'</td><td>'+val.PM250+'</td><td>'+val.PM500+'</td><td>'+val.PM1000+'</td><td>'+val.PM2000+'</td><td>'+val.price+'</td><td><button class="hapuskoreksi" data-id="'+val.id_labor+'">Del</button></td></tr>');
	      });
	    });
	  
	});

	/* iterate through array or object */

	$('body').on('click', '.hapuskoreksi', function(event) {
	  event.preventDefault();
	  $.ajax({
	    url: base_url+'prb/hapuslabor',
	    type: 'GET',
	    dataType: 'JSON',
	    data: {id: $(this).data('id')},
	  })
	  .done(function() {
	    $.ajax({
	      url: base_url+'prb/getlabor/'+<?=$this->session->userdata['id_prb'];?>,
	      type: 'POST',
	      dataType: 'JSON'
	    })
	    .done(function(data) {
	      $('#listkoreksi').empty();
	      $.each(data, function(index, val) {
	         
	         console.log(val);
	         $('#listkoreksi').append('<tr><td>'+val.grup+'</td><td>'+val.description+'</td><td>'+val.PM250+'</td><td>'+val.PM500+'</td><td>'+val.PM1000+'</td><td>'+val.PM2000+'</td><td>'+val.price+'</td><td><button class="hapuskoreksi" data-id="'+val.id_labor+'">Del</button></td></tr>');
	      });

	    })
	    .fail(function() {
	      console.log("error");
	    })
	    .always(function() {
	      console.log("complete");
	    });
	    console.log("success");
	  })
	  .fail(function() {
	    console.log("error");
	  })
	  .always(function() {
	    console.log("complete");
	  });
	  
	  /* Act on the event  */
	});


	$('#simpankoreksi').click(function(){
	  $.ajax({
	    url: base_url+'prb/simpanlabor',
	    type: 'POST',
	    dataType: 'JSON',
	    data: {
	    	group: $('input[name="group"]').val(),
	    	description: $('input[name="description"]').val(),
	    	PM250: $('input[name="PM250"]').val(),
	    	PM500: $('input[name="PM500"]').val(),
	    	PM1000: $('input[name="PM1000"]').val(),
	    	PM2000: $('input[name="PM2000"]').val(),
	    	price: $('input[name="unit_price"]').val(),
	    	'id_prb':"<?=$this->session->userdata['id_prb'];?>"},
	  })
	  .done(function() {
	    alert('Data Berhasil di Tambah');
	    $('input[name="group"]').val('');
	    $('input[name="description"]').val('');
	    $('input[name="PM250"]').val('');
	    $('input[name="PM500"]').val('');
	    $('input[name="PM1000"]').val('');
	    $('input[name="PM2000"]').val('');
	    $('input[name="unit_price"]').val('');
	    $.ajax({
	      url: base_url+'prb/getlabor/'+<?=$this->session->userdata['id_prb'];?>,
	      type: 'POST',
	      dataType: 'JSON'
	    })
	    .done(function(data) {
	      $('#listkoreksi').empty();
	      $.each(data, function(index, val) {
	         /* iterate through array or object */
	         console.log(val);
	         $('#listkoreksi').append('<tr><td>'+val.grup+'</td><td>'+val.description+'</td><td>'+val.PM250+'</td><td>'+val.PM500+'</td><td>'+val.PM1000+'</td><td>'+val.PM2000+'</td><td>'+val.price+'</td><td><button class="hapuskoreksi" data-id="'+val.id_labor+'">Del</button></td></tr>');
	      });

	    })
	    .fail(function() {
	      console.log("error");
	    })
	    .always(function() {
	      console.log("complete");
	    });
	    
	    console.log("success");
	  })
	  .fail(function() {
	    console.log("error");
	  })
	  .always(function() {
	    console.log("complete");
	  });
	  
	});


</script>