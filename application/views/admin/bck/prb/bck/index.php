    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            PKB
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Pengajuan Proses Baru
            </small>
        </h1>

        <hr>
		<div class="col-sm-6">
			<br>
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('prb/hitung');?>">
			
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Model</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="model" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Prefix</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="prefix" value="" >
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
			      <input type="text" class="form-control" name="last_smu_date" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Service Interval</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="service_interval" value="">
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
			      <button type="submit" class="btn btn-primary btn-sm">Calculation</button>
			    </div>
			  </div>

			  <br><br><br><br>
			  			  
			</form>
		</div>


		<div class="col-sm-6">
			<h3>LABOR PM </h3>
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('prb/hitung');?>">
			
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Group</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="model" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Description</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="prefix" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">PM250</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="last_smu" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">PM500</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="last_smu_date" value="" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">PM1000</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="service_interval" value="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">PM2000</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" name="daily_utilizations" value="">
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
			      <button type="submit" class="btn btn-primary btn-sm">Add</button>
			    </div>
			  </div>

			  <br><br><br><br>
			  			  
			</form>
		</div>

		<hr>
		as
	</div>
</div>
