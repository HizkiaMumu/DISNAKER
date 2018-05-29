<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Disnaker Kota Balikpapan</title>
	<!--pageMeta-->

	<!-- Lib CSS -->
	<link href="<?=base_url('themes/custom/css/rgen_min.css');?>" rel="stylesheet">
	<link href="<?=base_url('themes/custom/css/default.css');?>" rel="stylesheet">
	<link href="<?=base_url('themes/custom/css/style_1.css');?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--[if IE 9 ]><script src="js/ie-matchmedia.js"></script><![endif]-->


	</head>
	<body>

		<div class="col-md-2"></div><!-- // END : column //  -->
		<div class="col-md-8 align-c">
			<br><br><br><br>

			<div class="pos-rel -mr-t-40 mr-b-micro">
				<span class="sq60 iconbox rd txt-white fs20 bg-default bdr-5 shadow-mini bdr-white">
					<a href="<?=base_url();?>"><i class="fa fa-home"></i></a>
				</span>
			</div>


			<div class="pd-mini bg-white shadow-medium rd-6 bdr-3 bdr-default" data-rgen-sm="pd-30">
				<h3 class="title small">Registrasi Pencari Kerja</h3>
				 <form class="form-horizontal" action="<?=base_url('login/save');?>">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Nama </label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="email" name="nama" placeholder="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">No. KTP </label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="pwd" name="ktp" placeholder=" ">
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Email </label>
				    <div class="col-sm-8">
				      <input type="email" class="form-control" name="email" placeholder=" ">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Password </label>
				    <div class="col-sm-6">
				      <input type="password" class="form-control" name="password" placeholder=" ">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-3">
				      <button type="submit" class="btn btn-default">Kirim Registrasi</button>
				    </div>
				  </div>
				</form> 
			</div>
		</div><!-- // END : column //  -->
		<div class="col-md-4"></div>
		<div class="row">
		<div class="col-md-12">
		<br><br><br>


<!--
	************************************************************
	* Footer
	************************************************************ -->
	<footer class="pos-rel bg-dark2">
		<div class="container typo-light pos-rel z2 align-c">
			<p class="mr-b-10">Dinas Ketenagakerjaan</p>
			<!--=======================================
			=            Social icon links            =
			========================================-->
			<div class="align-c mr-tb-20" itemscope="" itemtype="http://schema.org/Organization">
				<a target="_blank" itemprop="sameAs" href="https://www.facebook.com/rgenesisart/" class="sq40 fs18 bg-glass-light-01 mr-4 rd iconbox btn-white"><i class="fa fa-facebook"></i></a>
				<a target="_blank" itemprop="sameAs" href="https://twitter.com/rgenesisart" class="sq40 fs18 bg-glass-light-01 mr-4 rd iconbox btn-white"><i class="fa fa-twitter"></i></a>
				<a target="_blank" itemprop="sameAs" href="https://plus.google.com/+RGenesis" class="sq40 fs18 bg-glass-light-01 mr-4 rd iconbox btn-white"><i class="fa fa-google"></i></a>
				<a target="_blank" itemprop="sameAs" href="https://www.youtube.com/channel/UC6zqsNIOeHQUODHcP70fx8w" class="sq40 fs18 bg-glass-light-01 mr-4 rd iconbox btn-white"><i class="fa fa-youtube"></i></a>
				<a target="_blank" itemprop="sameAs" href="http://r-genesis-art.tumblr.com/" class="sq40 fs18 bg-glass-light-01 mr-4 rd iconbox btn-white"><i class="fa fa-tumblr"></i></a>
				<a target="_blank" itemprop="sameAs" href="https://dribbble.com/rgenesis" class="sq40 fs18 bg-glass-light-01 mr-4 rd iconbox btn-white"><i class="fa fa-dribbble"></i></a>
				<a target="_blank" itemprop="sameAs" href="https://medium.com/@rgenesis" class="sq40 fs18 bg-glass-light-01 mr-4 rd iconbox btn-white"><i class="fa fa-medium"></i></a>
			</div>

			<p class="align-c mr-0">Jl. Jend. Sudirman No. 02 RT. 010 Kelurahan Klandasan Ulu
			<br>Kecamatan Balikpapan Kota - Kota Balikpapan 76112</p>
		</div>
	</footer>
	<!-- ************** END : Footer section **************  -->

</div>

	</body>
</html>