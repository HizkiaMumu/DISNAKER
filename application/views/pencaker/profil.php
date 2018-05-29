	<div id="section-content">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 blok-pencaker">
				<?php echo form_open(site_url('pencaker/profil'), array('class' => 'form-horizontal', 'role' => 'form')); ?>

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
                        <a data-toggle="tab" href="#pendidikan" aria-expanded="false" id="tombolTabPendididkan">
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
                                  <input type="text" class="form-control" name="nik" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="nama" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tempat Lahir</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="tempat_lhr">
                                </div>
                                <label class="col-sm-2 control-label">Tanggal Lahir</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tangal_lhr">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                                <div class="col-sm-3">
                                  <select class="form-control" name="jenis_kel">
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
                                  <select class="form-control" id="model" name="kode_kec">
                                    <option value=''>--pilih--</option>
                                    <option value="1">Balikpapan Timur</option><option value="2">Balikpapan Selatan</option><option value="3">Balikpapan Tengah</option><option value="4">Balikpapan Utara</option><option value="5">Balikpapan Barat</option><option value="6">Balikpapan Kota</option>                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-2 control-label">Kelurahan</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="prefix" name="kode_kel">
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-2 control-label">No. Telp</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="no_telp" value="" >
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
                                  <select class="form-control" name="warga">
                                      <option value="1">Indonesia</option>
                                      <option value="2">Asing</option>
                                  </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Berat Badan</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="berat_badan" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tinggi Badan</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tinggi_badan" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cacat Badan</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="cacat_badan" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cacat Lain</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="cacat_lain" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status Menikah</label>
                                <div class="col-sm-3">
                                  <select class="form-control" name="status_kawin">
                                      <option value="1">Lajang</option>
                                      <option value="2">Menikah</option>
                                  </select>
                                </div>
                            </div>

														<div class="form-group">
															<div class="col-sm-2"></div>
															<div class="col-sm-3">
																<button type="button" id="tombolNext" class="btn btn-primary">Selanjutnya</button>
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
                                  <input type="text" class="form-control" name="kode_jenis" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tahun Lulus</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_lulus" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pend. Non Formal</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="pend_non_formal" value="" >
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
                                  <input type="text" class="form-control" name="lama_kursus" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Bahasa Yang dikuasai</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="bahasa" value="" >
                                </div>
                            </div>

                            <hr>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><b>Riwayat Pendidikan Formal</b></label>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">SD/Sederajat</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="pend_sd" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_sd" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">SLTP/Sederajat</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="pend_sltp" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_sltp" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">SLTA/Sederajat</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="pend_slta" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_slta" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">SM/D-II/D-III</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="pend_sm" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_sm" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Akta II</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="pend_akta2" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_akta2" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Akta III</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="pend_akta3" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_akta3" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">S/Pasca/Akta IV</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" name="pend_pasca" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_pasca" value="" >
                                </div>
                            </div>


                            <hr>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><b>Riwayat Pendidikan Non Formal</b></label>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">1</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="kursus1" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_kursus1" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">2</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="kursus2" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_kursus2" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label">3</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="kursus3" value="" >
                                </div>
                                <label class="col-sm-1 control-label">Tahun</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" name="tahun_kursus3" value="" >
                                </div>
                            </div>

														<div class="form-group">
															<div class="col-sm-1"></div>
															<div class="col-sm-3">
																<button type="submit" class="btn btn-primary">Submit</button>
															</div>
														</div>

                        </p>
                    </div>

                    <div id="pekerjaan" class="tab-pane fade">
                        <p>Data Riwayat Pekerjaan</p>
                    </div>
                </div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>

		$(document).ready(function(){

			$("#tombolNext").on("click", function(){ // klik tombol next
				$("#tombolTabPendididkan").trigger('click'); // buka tab pendidikan
				window.scrollTo(0,0); // go to top
			});

		});

	</script>
