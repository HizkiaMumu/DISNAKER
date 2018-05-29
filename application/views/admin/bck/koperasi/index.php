    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            Koperasi
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                master data
                <a href="<?=base_url('koperasi/baru');?>" class="btn btn-primary btn-sm pull-right">Add KOPERASI</a>
            </small>
        </h1>
        <hr>

		<div class="col-sm-12">
			<br>
			<table id="table" class="table table-bordered display" cellspacing="0" Tambahwidth="100%">
            <thead>
                <tr>
                    <th>No</th>
					<th>Nama Koperasi</th>
					<th>No Badan Hukum</th>
                    <th>Pengesahan</th>
					<th>Kedudukan</th>
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
            "url": "<?php echo site_url('ajax/ajax_list_koperasi')?>",
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
                //cell.innerHTML = "<a href='"+base_url+"index.php/admin/perusahaan/modify/"+cell.innerHTML+"' class='btn btn-info'>Edit</a> <a href='#' onclick='app_confirm(\""+base_url+"index.php/admin/perusahaan/delete/"+cell.innerHTML+"\",\"Apakah Yakin Ingin Menghapus Data Ini?\")' class='btn btn-danger'>Hapus</a>";
                cell.innerHTML = '<div class="dropdown">'+
  '<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
    'Pilihan'+
    '<span class="caret"></span>'+
  '</button>'+
  '<ul class="dropdown-menu" aria-labelledby="dLabel">'+
    '<li><a href="koperasi/detail/'+cell.innerHTML+'">Detail</a></li>'+
    '<li><a href="koperasi/edit/'+cell.innerHTML+'">Edit</a></li>'+
    '<li><a href="#" onclick="app_confirm(\''+base_url+'koperasi/delete/'+cell.innerHTML+'\',\'Apakah Yakin Ingin Menghapus Data Ini?\')" >Hapus</a></li>'+
  '</ul>'+
'</div>';
              } );

        } );

});

</script>