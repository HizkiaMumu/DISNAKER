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
        <table id="table" class="table table-bordered display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Perusahaan</th>
                    <th>Nama SP/SB</th>
                    <th>Jenis Pengajuan</th>
                    <th>Status</th>
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
                  <td><?=$item['tanggal']?></td>
                  <td><?=$item['NPERUSAHAAN']?></td>
                  <td><?=$item['NAMA_SP']?></td>
                  <td><?=$item['jenis']?></td>
                  <td><?=($item['status']=='0')?'Belum Diproses':'Proses'?></td>
                  <td>
                    <a href='<?=base_url("admin/pkb/detail/".$item['id_pkb_pendaftaran'])?>'>Detail</a>
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