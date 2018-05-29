<link rel="stylesheet" href="<?=base_url('assets/css/cropper.min.css');?>">
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
    <!-- PAGE CONTENT BEGINS -->
    <div class="row">

        <div class="col-sm-8">
            <?=form_open(base_url('umkm/add'),'class="form-horizontal"')?>
            <!-- #section:elements.tab -->
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active">
                        <a data-toggle="tab" href="#umum" aria-expanded="false">
                            <i class="green ace-icon fa fa-user bigger-120"></i>
                            Keterangan Umum
                        </a>
                    </li>

                    <li class="">
                        <a data-toggle="tab" href="#pendidikan" aria-expanded="false">
                            <i class="green ace-icon fa fa-certificate bigger-120"></i>
                            Data Pendidikan
                        </a>
                    </li>

                    <li class="">
                        <a data-toggle="tab" href="#pekerjaan" aria-expanded="false">
                            <i class="green ace-icon fa fa-cogs bigger-120"></i>
                            Data Pekerjaan
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="umum" class="tab-pane fade in active">
                        <p>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">NIK</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" name="nama_usaha" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="nama_pengusaha" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tempat Lahir</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="jenis_usaha">
                                </div>
                                <label class="col-sm-2 control-label">Tanggal Lahir</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="modal_usaha">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                                <div class="col-sm-3">
                                  <select>
                                      <option value="1">Laki-laki</option>
                                      <option value="2">Perempuan</option>
                                  </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-9">
                                  <textarea name="alamat" class="form-control"></textarea>
                                </div>
                            </div>

                            <br>

                             <div class="form-group">
                                <label class="col-sm-2 control-label">Kecamatan</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="model" name="kecamatan">
                                    <option value=''>--pilih--</option>
                                    <?php 
                                        foreach ($kecamatan as $kcmt) { 
                                    echo '<option value="'.$kcmt->id_kecamatan.'">'.$kcmt->nama_kecamatan.'</option>';
                                     } ?>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-2 control-label">Kelurahan</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="prefix" name="kelurahan">
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-2 control-label">No. Telp</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="telp" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Agama</label>
                                <div class="col-sm-3">
                                  <select class="form-control" name="agama">
                                      <option value="1">Islam</option>
                                      <option value="2">Kristen</option>
                                      <option value="3">Protestan</option>
                                      <option value="4">Budha</option>
                                      <option value="5">Hindu</option>
                                  </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kewarganegaraan</label>
                                <div class="col-sm-3">
                                  <select class="form-control" name="warganegara">
                                      <option value="1">Indonesia</option>
                                      <option value="2">Asing</option>
                                  </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Berat Badan</label>
                                <div class="col-sm-1">
                                  <input type="text" class="form-control" name="berat" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tinggi Badan</label>
                                <div class="col-sm-1">
                                  <input type="text" class="form-control" name="tinggi" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cacat Badan</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="tinggi" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cacat Lain</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="tinggi" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status Menikah</label>
                                <div class="col-sm-3">
                                  <select class="form-control" name="status">
                                      <option value="1">Lajang</option>
                                      <option value="2">Menikah</option>
                                  </select>
                                </div>
                            </div>



                        </p>
                    </div>

                    <div id="pendidikan" class="tab-pane fade">
                        <p>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pend. Formal</label>
                                <div class="col-sm-3">
                                  <select class="form-control" name="pend_formal">
                                      <option value="1">Tidak Sekolah</option>
                                      <option value="2">SD</option>
                                      <option value="2">SLTP</option>
                                      <option value="2">SLTA</option>
                                      <option value="2">Diploma</option>
                                      <option value="2">Sarjana</option>
                                  </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jenis Pendidikan</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="nama_usaha" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tahun Lulus</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="nama_pengusaha" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pend. Non Formal</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="nama_pengusaha" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Penyelenggara</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Kursus</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Bahasa Yang dikuasai</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <hr>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><b>Riwayat Pendidikan Formal</b></label>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">SD/Sederajat</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">SLTP/Sederajat</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">SLTA/Sederajat</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">SM/D-II/D-III</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Akta II</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Akta III</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">S/Pasca/Akta IV</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>


                            <hr>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><b>Riwayat Pendidikan Non Formal</b></label>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">1</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">2</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">3</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="penyelenggara" value="" >
                                </div>
                            </div>



                        </p>
                    </div>

                    <div id="pekerjaan" class="tab-pane fade">
                        <p>Data Riwayat Pekerjaan</p>
                    </div>
                </div>
            </div>

            <!-- /section:elements.tab -->
        </div><!-- /.col -->

        <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">
                        <i class="ace-icon fa fa-tint"></i>Input Pencari Kerja</h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="clearfix">
                            <label for="colorpicker1">No.Registrasi</label>
                        </div>
                        <div class="control-group">
                            <input class="col-sm-12" type="text">
                        </div>

                        <div class="clearfix">
                            <label for="colorpicker1">Tanggal</label>
                        </div>
                        <div class="control-group">
                            <input class="col-sm-12" type="text">
                        </div>

                        <div class="clearfix">
                            <label for="colorpicker1">No. Pencaker</label>
                        </div>
                        <div class="control-group">
                            <input class="col-sm-12" type="text">
                        </div>
                        <div class="clearfix">
                            <div class="col-sm-4">
                            <a href="#" data-toggle="modal" data-jenis='FILE_SCAN_SP' data-title="Surat Permohonan" class="upload btn btn-primary btn-xs" data-target="#uploadModal" >Ambil Foto</a></td>
                        </a>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>


    </div><!-- /.row -->
</div>
&amp;
<style type="text/css">
.modal-ku {
    width: 1000px;
    background-color: #333333;
    margin: auto;
}
</style>

<!-- line modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog modal-ku">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="modalLabel">Pengambilan Foto AK/1</h4>
        </div>
        <div class="modal-body">
            <div style="min-height: 350px;" style="float:left;">
            <div class="row">
                <div class="col-sm-4">
                    <div id="webcamera" style="margin-bottom: 10px; margin-right: 20px; float: left;"></div>
                    <div class="clearfix"></div>
                     <input type="button" class="btn btn-sm btn-success pull-right" value="Capture Picture" 
                        id="CapturePicture" style="margin-top: 5px; margin-right:30px">
                </div>

                <div class="col-sm-4">
                    <div id="Captured" style="margin-bottom: 10px;"></div>
                    <input type="button" class="btn btn-success btn-sm" value="Discard Photo" id="DiscardPhoto" style="display: none;">
                    <input type="button" class="btn btn-success btn-sm" value="Crop Photo" id="CropPhoto" style="display: none;">
                    <input type="button" class="btn btn-success btn-sm" value="Accept Cropped Image" id="AcceptCropped" style="display: none;">
                    <input type="button" class="btn btn-success btn-sm" value="Undo Cropping" id="UndoCropped" style="display: none;">
                </div>

                    
                <div class="col-sm-4">
                    <h4>Basic Image Adjustments</h4>
                    <hr />
                    <form id="silderInput">
                        <label for="sharpen">Sharpness</label>
                        <input id="sharpen" name="sharpen" type="range" min="0" max="100" value="0" disabled="true">

                        <label for="contrast">Contrast</label>
                        <input id="contrast" name="contrast" type="range" min="-100" max="100" value="0" disabled="true">

                        <div class="FilterSetting">
                            <label for="contrast">brightness</label>
                            <input type="range" id="brightness" name="brightness" min="-100" max="100" step="1" value="0" data-filter="brightness" disabled="true">
                            <span class="FilterValue"></span>
                        </div>
                    </form>
                    <input type="button"  id="undoAll" class="btn btn-success btn-sm" disabled="true" value="Undo All Adjustments">
                    
                </div>           
            </div>
            </div>
        </div>


        <div class="modal-footer wizard-actions">
            <button class="btn btn-primary btn-sm btn-next" data-last="Finish" id="ExportPhoto" style="display: none;" onClick="save()">
                Next
                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
            </button>

            <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                <i class="ace-icon fa fa-times"></i>
                Cancel
            </button>
        </div>
    </div>
  </div>
</div>
    
<script src="<?=base_url('assets/js/cropper.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/webcam.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/caman.full.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery-ui.min.js');?>"></script>

        <!-- Code to handle taking the snapshot and displaying it locally -->
        <script language="JavaScript">
            Webcam.set({
                // live preview size
                width : 320,
                height : 240,

                // device capture size
                dest_width : 320,
                dest_height : 240,

                // final cropped size
                crop_width : 320,
                crop_height : 240,

                // format and quality
                image_format : 'jpeg',
                jpeg_quality : 90
            });

            Webcam.attach('#webcamera');

            function take_snapshot() {
                // take snapshot and get image data
                Webcam.snap(function(data_uri) {
                    // display results in page
                    document.getElementById('Captured').innerHTML = '<img id="camanedit" src="' + data_uri + '"/>';
                });
            }


            $(document).on("click", "#webcamera", function() {
                $("#CapturePicture").trigger("click");
            });

            function save() {

                Caman('#camanedit', function() {
                    this.render(function() {

                        var image = this.toBase64();
                        saveToServer(image);
                        //alert("sukses");
                        location.reload();

                    });

                });
            }

            function saveToServer(image) {
              var base_url='<?=base_url()?>';
                $.ajax({
                    url : base_url+'ajaxfoto/poto',
                    data : "data=" + encodeURIComponent(image),
                    type : "POST",
                    contentType : "application/x-www-form-urlencoded",
                    success : function(result) {
                        console.log(result);
                    }
                });
            }


            $(document).ready(function() {

                $('input[type=range]').change(applyFilters1);

                function applyFilters1() {
                    var sharpen = parseInt($('#sharpen').val());
                    var cntrst = parseInt($('#contrast').val());
                    var brightness = parseInt($('#brightness').val());

                    Caman('#camanedit', function() {
                        this.revert(false);
                        this.sharpen(sharpen);
                        this.contrast(cntrst);
                        this.brightness(brightness);
                        this.render();
                    });
                }


                $(document).on("click", "#DiscardPhoto", function() {
                    $(this).hide();
                    $("#CropPhoto").hide();
                    $("#Captured").hide();
                    $("#ExportPhoto").hide();

                    $("#brightness").val("0");
                    $("#contrast").val("0");
                    $("#sharpen").val("0");
                    $("#undoAll").prop("disabled", true);

                });
                $(document).on("click", "#CapturePicture", function() {

                    $("#Captured").show();
                    $("#DiscardPhoto").show();
                    $("#CropPhoto").show();
                    take_snapshot();

                    $("#brightness").prop("disabled", false);
                    $("#contrast").prop("disabled", false);
                    $("#sharpen").prop("disabled", false);
                    $("#undoAll").prop("disabled", false);
                    $("#ExportPhoto").show();
                    caman = Caman('#camanedit');
                });

                $(document).on("click", "#CropPhoto", function() {

                    $("#UndoCropped").show();
                    $("#AcceptCropped").show();
                    $("#DiscardPhoto").hide();
                    $("#CropPhoto").hide();

                    var image = document.querySelector('#camanedit');
                    var minAspectRatio = 0.5;
                    var maxAspectRatio = 1.5;
                    cropper = new Cropper(image, {
                        ready : function() {
                            var cropper = this.cropper;
                            var containerData = cropper.getContainerData();
                            var cropBoxData = cropper.getCropBoxData();
                            var aspectRatio = cropBoxData.width / cropBoxData.height;
                            var newCropBoxWidth;

                            if (aspectRatio < minAspectRatio || aspectRatio > maxAspectRatio) {
                                newCropBoxWidth = cropBoxData.height * ((minAspectRatio + maxAspectRatio) / 2);

                                cropper.setCropBoxData({
                                    left : (containerData.width - newCropBoxWidth) / 2,
                                    width : newCropBoxWidth
                                });
                            }
                        },
                        cropmove : function() {
                            var cropper = this.cropper;
                            var cropBoxData = cropper.getCropBoxData();
                            var aspectRatio = cropBoxData.width / cropBoxData.height;

                            if (aspectRatio < minAspectRatio) {
                                cropper.setCropBoxData({
                                    width : cropBoxData.height * minAspectRatio
                                });
                            } else if (aspectRatio > maxAspectRatio) {
                                cropper.setCropBoxData({
                                    width : cropBoxData.height * maxAspectRatio
                                });
                            }
                        }
                    });
                });

                $(document).on("click", "#UndoCropped", function() {
                    $(this).hide();
                    $("#AcceptCropped").hide();
                    $("#DiscardPhoto").show();
                    $("#CropPhoto").hide();
                    cropper.clear();

                });

                $(document).on("click", "#undoAll", function() {
                    $("#brightness").val("0");
                    $("#contrast").val("0");
                    $("#sharpen").val("0");

                    Caman('#camanedit', function() {
                        this.revert(true);

                    });
                });

                $(document).on("click", "#AcceptCropped", function() {
                    $(this).hide();
                    $("#UndoCropped").hide();
                    $("#DiscardPhoto").show();
                    $("#CropPhoto").show();

                    var cropped = cropper.getCroppedCanvas().toDataURL('image/jpeg');

                    document.getElementById('Captured').innerHTML = '<img id="camanedit" src="' + cropped + '"/>';

                });

                $('#accordion').accordion({
                    collapsible : true
                });

                $('button').button();

                var rotation = 0;

                function applyFilters() {
                    caman.revert(false);

                    $('.slider').each(function() {
                        var op = $(this).attr('id');
                        var value = $(this).data('val');

                        if (value === 0) {
                            return;
                        }

                        caman[op](value);
                    });
                }

                function resetFilters() {
                    $('.slider').each(function() {
                        var op = $(this).attr('id');

                        $('#' + op).slider('option', 'value', $(this).attr('data-val'));
                    });
                }


                $('.slider').each(function() {
                    var op = $(this).attr('id');

                    $('#' + op).slider({
                        min : $(this).data('min'),
                        max : $(this).data('max'),
                        val : $(this).data('val'),
                        change : function(e, ui) {
                            $('#v-' + op).html(ui.value);
                            $(this).data('val', ui.value);

                            if (e.originalEvent === undefined) {
                                return;
                            }

                            applyFilters();
                            caman.render();
                        }
                    });
                });

                $('#rotate-cw').click(function() {
                    rotation += 90;
                    caman.rotate(90);
                    applyFilters();
                    caman.render();
                });

                $('#rotate-ccw').click(function() {
                    rotation -= 90;
                    caman.rotate(-90);
                    applyFilters();
                    caman.render();
                });

                $('#resize').click(function() {
                    caman.resize({
                        width : $('#resize-w').val(),
                        height : $('#resize-h').val()
                    });
                    applyFilters();
                    caman.render();
                });

                $('#crop').click(function() {
                    caman.crop($('#crop-w').val(), $('#crop-h').val(), $('#crop-x').val(), $('#crop-y').val());
                    applyFilters();
                    caman.render();
                });

                $('.preset').click(function() {
                    resetFilters();
                    var preset = $(this).data('preset');
                    caman.revert(true);
                    caman[preset]();
                    caman.render();
                });

                $('#undoAll').click(function() {
                    caman.reset();
                    caman.render();
                    resetFilters();
                });

                $('#save').click(function() {
                    window.open(caman.toBase64());
                });

                // document.onmousedown = function disableclick(event) {
                //  if (event.button == 2) {
                //      alert("Klik kanan tidak diijinkan.\n\nThank you. :)");
                //      return false;
                //  }
                // };
                //Disable Function Keys, ALT & CTRL
                $(document).on("keydown", function(e) {
                    e = e || window.event;
                    //Get event
                    var c = e.which || e.keyCode;
                    //Get key code
                    switch (c) {
                    case 113:
                    case 114:
                    case 115:
                    case 116:
                    case 117:
                    case 118:
                    case 119:
                    case 120:
                    case 121:
                    case 122:
                    case 123:
                        e.preventDefault();
                        e.stopPropagation();
                        alert("Test.\n\nThank you. :)");
                        break;
                    }
                    if (e.ctrlKey) {
                        alert("Test.\n\nThank you. :)");
                    }
                    if (e.altKey) {
                        alert("Test.\n\nThank you. :)");
                    }
                });

            });

        </script>


<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>

<script type="text/javascript">
$(document).ready(function(){

    $('#model').change(function(){
        var model = $(this).val();
        $.ajax({
            type: 'POST',
            url: base_url+'ajax/ambilkelurahan',
            data: 'model='+model,
            success: function(response){
                //alert(response);
                $('#prefix').html(response);
            }
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
    })
})

</script>

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css">

<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
