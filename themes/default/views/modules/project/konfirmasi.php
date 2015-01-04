
	<section id="main">
		<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<br/><br/><h1 class="blue">Konfirmasi Donasi</h1><br/>
						<form method="post" action="" class="form-horizontal" role="form">
							<?php if($this->session->flashdata('message')){ ?>
									<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button> <?php echo "Konfirmasi berhasil dikirim. Terima Kasih atas donasi Anda."; ?></div>
							<?php } ?>
							<?php echo validation_errors('<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>', '</div>'); ?>
						  
							<div class="form-group">
								<label for=""  class="col-sm-4 control-label">Nama Lengkap</label>
								<div class="col-sm-8"><input type="text" name="name" class="form-control" id="exampleInputNama" placeholder=""></div>
							</div>
							<div class="form-group">
								<label for=""  class="col-sm-4 control-label">Email</label>
								<div class="col-sm-8"><input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder=""></div>
							</div>
							<div class="form-group">
								<label for=""  class="col-sm-4 control-label">Tanggal Donasi</label>
								<div class="col-sm-8"><input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder=""></div>
							</div>
							<div class="form-group">
								<label for=""  class="col-sm-4 control-label">Nominal Donasi</label>
								<div class="col-sm-8"><input type="text" name="nominal" class="form-control" id="exampleInputEmail1" placeholder=""></div>
							</div>
							<div class="form-group">
								<label for=""  class="col-sm-4 control-label">Nomor Rekening</label>
								<div class="col-sm-8"><input type="text" name="rekening" class="form-control" id="exampleInputEmail1" placeholder=""></div>
							</div>
							<div class="form-group">
								<label for=""  class="col-sm-4 control-label">Nama Bank</label>
								<div class="col-sm-8"><input type="text" name="bank" class="form-control" id="exampleInputEmail1" placeholder=""></div>
							</div>							
							<div class="form-group">
								<label for=""  class="col-sm-4 control-label">Nama Pemilik Rekening</label>
								<div class="col-sm-8"><input type="text" name="pemilik" class="form-control" id="exampleInputEmail1" placeholder=""></div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-8"><button type="submit" class="btn btn-primary">Konfirmasi</button></div>
							</div>
						  
						  <br/> <br/> <br/>
						</form>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

					</div>
				</div>
		</div>
	</section>