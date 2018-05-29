    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            Part List
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Upload Part List
            </small>
        </h1>

        <hr>
		<div class="col-sm-6">
			<br>
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('partlist/simpan');?>">
			
			  	<div class="form-group" >
		          <label class="col-md-3 control-label" for="name">Model</label>
		          <div class="col-md-7">
		            <input id='model' name='model' type="text" class="form-horizontal" >
		          </div>
		        </div>

		        <div class="form-group" >
		          <label class="col-md-3 control-label" for="name">Prefix</label>
		          <div class="col-md-7">
		            <input id='prefix' name='prefix' type="text" class="form-horizontal">
		          </div>
		        </div>

		        <div class="form-group" >
		          <label class="col-md-3 control-label" for="name">Upload</label>
		          <div class="col-md-7">
		            <input id='filepart' name='filepart' type="file" >
		          </div>
		        </div>

			  
			  <div class="form-group">
			    <label class="col-sm-3 control-label"></label>
			    <div class="col-sm-8">
			      <button type="submit" name="submit" class="btn btn-primary btn-sm">Upload</button>
			    </div>
			  </div>

			</form>
		</div>
	</div>
</div>
