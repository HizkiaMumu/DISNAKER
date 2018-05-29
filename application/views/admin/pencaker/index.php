


    <!-- /section:settings.box -->
        <div class="page-header">
            <h1>
                Tables
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Static &amp; Dynamic Tables
                </small>
            </h1>
        </div><!-- /.page-header -->

		<div class="col-sm-12">
			<br>
			<table id="table" class="table table-bordered display" cellspacing="0" Tambahwidth="100%">
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

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('ajax/ajax_list_umkm')?>",
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

            table.on( 'draw.dt', function () {

          table.column(5, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                //cell.innerHML = "<a href='"+base_url+"index.php/admin/perusahaan/modify/"+cell.innerHTML+"' class='btn btn-info'>Edit</a> <a href='#' onclick='app_confirm(\""+base_url+"index.php/admin/perusahaan/delete/"+cell.innerHTML+"\",\"Apakah Yakin Ingin Menghapus Data Ini?\")' class='btn btn-danger'>Hapus</a>";
                cell.innerHTML = '<div class="dropdown">'+
  '<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
    'Pilihan'+
    '<span class="caret"></span>'+
  '</button>'+
  '<ul class="dropdown-menu" aria-labelledby="dLabel">'+
    '<li><a href="umkm/detail/'+cell.innerHTML+'">Detail</a></li>'+
    '<li><a href="umkm/edit/'+cell.innerHTML+'">Edit</a></li>'+
    '<li><a href="#" onclick="app_confirm(\''+base_url+'umkm/delete/'+cell.innerHTML+'\',\'Apakah Yakin Ingin Menghapus Data Ini?\')" >Hapus</a></li>'+
  '</ul>'+
'</div>';
              } );

        } );

});

</script>