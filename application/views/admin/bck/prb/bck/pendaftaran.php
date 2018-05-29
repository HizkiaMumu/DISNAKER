    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>
            PKB
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Data Perusahaan PKB
            </small>
        </h1>

        <hr>
        <table id="table" class="table table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>No. SK Pendaftaran</th>
                    <th>Masa Berlaku</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($items as $item){
                ?>
                <tr>
                  <td><?=$no?></td>
                  <td><?=$item['NPERUSAHAAN']?></td>
                  <td><?=$item['no_pengesahan']?></td>
                  <td><?=$item['masa_berlaku_awal']?></td>
                  <td>
                    <a href='<?=base_url("admin/pkb/detail/".$item['id_pkb_pendaftaran'])?>'>Edit</a> | 
                    <a href='<?=base_url("admin/pkb/cetakpkb/".$item['id_pencatatan_pkb'])?>'>Cetak</a>
                  </td>
                </tr>
                <?php
                $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

<script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript">

var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable();


});

</script>