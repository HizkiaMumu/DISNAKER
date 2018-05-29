<div id="global">
    <div class="container-fluid cm-container-white">
        <h1>
            Partlist
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                <?php echo $model.' - '.$prefix; ?>
                <a href="<?=base_url('partlist');?>" class="btn btn-danger btn-sm pull-right">back</a>
            </small>
        </h1>
        <hr>

		<div class="col-sm-12">
			<br>
			<table id="table" class="table table-bordered display">
                <thead>
                    <tr>
                        <th>No</th>
    					<th>group</th>
    					<th>Part Number</th>
                        <th>Description</th>
                        <th>Price</th>
    					<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no=1; 
                    foreach ($partlist as $data) { ?>
                    <tr>
                    <td><?=$no;?></td>
                    <td><?=$data->grup;?></td>
                    <td><?=$data->part_number;?></td>
                    <td><?=$data->description;?></td>
                    <td align="right"><?=number_format($data->price,'0',',','.');?></td>
                    <td></td>
                    </tr>
                    
                <?php $no++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
