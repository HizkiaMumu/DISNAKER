    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            Customer
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                master data
                <a href="" class="btn btn-danger btn-sm pull-right">Add Customer</a>
            </small>
        </h1>
        <hr>

		<div class="col-sm-12">
			<br>
			<table id="table" class="table table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
					<th>Company</th>
					<th>Address</th>
                    <th>Telp</th>
					<th>email</th>
					<th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</div>

<script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>


<script type="text/javascript">

var table;
var base_url = 'satu';

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('customer/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });


});

</script>