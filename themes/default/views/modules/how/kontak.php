
	<section id="main">
		<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
						<br/><br/><h1 class="blue">Hubungi Kami</h1><br/>
						<u><b>Alamat Kantor:</b></u><br/>
						The Nomad Offices<br/>
						Gedung Equity Lantai 49<br/>
						Jalan Jenderal Sudirman Kav 52-53, SCBD, Jakarta<br/>
						Email : <a href="mailto:halo@dukungguruku.org" title="Email us">halo@dukungguruku.org</a><br/><br/>
						<p>Butuh informasi lebih lanjut? silakan isi form berikut ini untuk mendapatkan informasi lebih lengkap.</p>
						<br/>
					</div>
					<div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
						<br/><br/><br/>
						<form method="post" action="" role="form">
							<?php if($this->session->flashdata('message')){ ?>
									<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button> <?php echo print_message($this->session->flashdata('message')); ?></div>
							<?php } ?>
							<?php echo validation_errors('<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>', '</div>'); ?>
						  
						  <div class="form-group">
							<label for="exampleInputNama">Nama</label>
							<input type="text" name="name" class="form-control" id="exampleInputNama" placeholder="Nama Lengkap">
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						  </div>
						  <div class="form-group">
							<label for="exampleInputTelp">Telp</label>
							<input type="text" name="telp" class="form-control" id="exampleInputTelp" placeholder="Telp / HP">
						  </div>
						  <div class="form-group">
							<label for="exampleInputMsg">Pesan</label>
							<textarea name="message" class="form-control" id="exampleInputMsg" placeholder="" rows="4"></textarea>
						  </div>
						  <button type="submit" class="btn btn-primary">Kirim Pesan</button>
						</form>
						<br/><br/>
					</div>
				</div>
		</div>
	</section>