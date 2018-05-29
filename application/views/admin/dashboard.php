<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			<div class="row">
                <div class="col-lg-12">
                    <p><br><br><br><br><br></p>
                    <h3 class="center">
                    <span class="center">Haii.. <?=$this->encryption->decrypt($this->session->userdata('username'));?><br>
                   Anda login sebagai : <?=$this->encryption->decrypt($this->session->userdata('jenis_pengguna'));?></span> 
                   <br><br><br>
                    <br>
                   
                </div>
            </div>
		</div>
	</div>
</div>