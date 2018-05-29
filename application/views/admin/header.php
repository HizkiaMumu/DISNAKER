<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>AK/1 - DISNAKER</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url('theme/admin/css/bootstrap.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('theme/admin/css/font-awesome.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('theme/admin/css/ace-fonts.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('theme/admin/css/ace.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('theme/admin/css/ace-rtl.css');?>" />

		<link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css');?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/script.js')?>"></script>


	    <script type="text/javascript">
			var base_url='<?=base_url()?>';
		</script>
		
	</head>

	<body class="no-skin">
		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<!-- #section:basics/sidebar.horizontal -->
			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse">
			<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						AK/1 - Disnaker Balikpapan					
					</a>

					<!-- #section:basics/navbar.toggle -->
					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
						<span class="sr-only">Toggle user menu</span>
					</button>

					<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
						<span class="sr-only">Toggle sidebar</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>
					</button>

					<!-- /section:basics/navbar.toggle -->
				</div>
				
				<?php 
				if ($this->uri->segment(2) == 'home' || 
					$this->uri->segment(2) == 'dashboard'){ $a = "active open hover"; }else{ $a ="hover";}
				if ($this->uri->segment(2) == 'pencaker'){ $b = "active open hover"; }else{ $b ="hover";}
				if ($this->uri->segment(2) == 'perusahaan'){ $c = "active open hover"; }else{ $c ="hover";}
				if ($this->uri->segment(2) == 'sekolah'){ $d = "active open hover"; }else{ $d ="hover";}
				if ($this->uri->segment(2) == 'lowongan'){ $e = "active open hover"; }else{ $e ="hover";}
				if ($this->uri->segment(2) == 'menu6'){ $f = "active open hover"; }else{ $f ="hover";}
				if ($this->uri->segment(2) == 'pengaturan'){ $g = "active open hover"; }else{ $g ="hover";}
				if ($this->uri->segment(2) == 'konsultasi'){ $h = "active open hover"; }else{ $h ="hover";} ?>
				<ul class="pull-right nav nav-list">

					<li class="<?=$a;?>">
						<a href="<?php echo base_url('admin/home');?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>

					<li class="<?=$b;?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Pencaker </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
					
						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="<?php echo base_url('admin/pencaker/ak');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									AK/1
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="<?php echo base_url('admin/pencaker/baru');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Input Data
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="<?php echo base_url('admin/pencaker/master');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Master Data
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>


					<li class="<?=$c;?>">
						<a href="<?php echo base_url('menengah');?>">
							<i class="menu-icon fa fa-institution"></i>
							<span class="menu-text"> Menengah Besat </span>
						</a>
					</li>

					<li class="<?=$d;?>">
						<a href="<?php echo base_url('besar');?>">
							<i class="menu-icon fa fa-building"></i>
							<span class="menu-text"> ### </span>
						</a>
					</li>

					<li class="<?=$e;?>">
						<a href="<?=base_url('koperasi')?>">
							<i class="menu-icon fa fa-money"></i>
							<span class="menu-text">Koperasi </span>
						</a>
					</li>

					<li class="<?=$f;?>">
						<a href="<?=base_url('customer')?>">
							<i class="menu-icon fa fa-gears"></i>
							<span class="menu-text"> Pengaturan </span>
						</a>
					</li>

					<li class="<?=$h;?>">
						<a href="<?=base_url('dashboard/logout')?>">
							<i class="menu-icon fa fa-sign-out"></i>
							<span class="menu-text">Logout
							</span>
						</a>
					</li>

				</ul><!-- /.nav-list -->
			</div>