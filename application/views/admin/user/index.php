    <div id="global">
      <div class="container-fluid cm-container-white">
        <h1>Data Admin
            <small><i class="ace-icon fa fa-angle-double-right"></i>Disnaker</small>
            <a href="<?php echo base_url('admin/user/add'); ?>"  class="btn btn-primary btn-sm pull-right"> Tambah Admin</a>
        </h1>
        <hr></hr>
        <table class="table table-bordered table-hover table-striped md-data-table " id="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NAMA LENGKAP</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>STATUS</th>
                    <th>LOGIN TERAKHIR</th>
                    <th>ADMINISTRATOR</th>
                    <th>PILIHAN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($items as $item) {
                  ?>
                  <tr class="">
                      <td style="text-align:center"><?=$no?></td>
                      <td><?=$item['surname']?></td>
                      <td><?=$item['username']?></td>
                      <td><?=$item['email']?></td>
                      <td><?=$item['status']?></td>
                      <td><?=$item['last_login']?></td>
                      <td style="text-align:center;"><?=($item['is_admin'])?'<img src="'.base_url().'/assets/img/sf/sign-check.svg" width="24" height="24">':'<img src="'.base_url().'/assets/img/sf/sign-error.svg" width="24" height="24">'?></td>
                      <td>
                        <div class="dropdown">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilihan
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li><a href="<?=base_url("admin/user/modify/{$item['id']}")?>">Edit</a></li>
                        <li><a href="#" onclick="app_confirm('<?=base_url('admin/user/block/'.$item['id'].'/')?><?=($item['status']=='AKTIF')?'1':'0'?>','Apakah Yakin Ingin Blokir Data Ini?')" ><?=($item['status']=='AKTIF')?'Blokir':'Aktifkan'?></a></li>
                        <li><a href="#" onclick="app_confirm('<?=base_url('admin/user/delete/'.$item['id'])?>','Apakah Yakin Ingin Menghapus Data Ini?')" >Hapus</a></li>

                        </ul>
                        </div>
                      </td>
                  </tr>
                  <?php
                  $no++;
                }
                ?>
            </tbody>
        </table>
      </div>
      <footer class="cm-footer"><span class="pull-right">&copy;</span></footer>
    </div>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript">

var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable();


});
  
</script>