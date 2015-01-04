
	<section id="main">
		<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
						<br/><br/><h1 class="blue">Social Login</h1><br/>
						 <a href="<?php echo $data['login_url']; ?>"><img src="<?php echo $this->template->get_theme_path(); ?>/img/btn_fb_login.png" alt="" class=""/></a>
						<!--
						<form method="post" action="" role="form">
							<?php if($this->session->flashdata('message')){ ?>
									<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button> <?php echo print_message($this->session->flashdata('message')); ?></div>
							<?php } ?>
							<?php echo validation_errors('<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>', '</div>'); ?>
						  
						  <div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						  </div>
						  <div class="form-group">
							<label for="exampleInputTelp">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputTelp" placeholder="Password">
						  </div>
						 <button type="submit" class="btn btn-primary">Login</button>
						</form>
						
						<div id="social-login">							
							 
						</div>-->
						<br/><br/><br/>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
					<!--<div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
						<br/><br/><h1 class="blue">Register</h1><br/>
						<form method="post" action="" role="form">
							<?php if($this->session->flashdata('message')){ ?>
									<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button> <?php echo print_message($this->session->flashdata('message')); ?></div>
							<?php } ?>
							<?php echo validation_errors('<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>', '</div>'); ?>
						  
						  <div class="form-group">
							<label for="exampleInputNama">Nama Lengkap</label>
							<input type="text" name="name" class="form-control" id="exampleInputNama" placeholder="Nama Lengkap">
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						  </div>
						  <div class="form-group">
							<label for="exampleInputTelp">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputTelp" placeholder="Password">
						  </div>
						  <div class="form-group">
							<label for="exampleInputTelp">Konfirmasi Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputTelp" placeholder="Konfirmasi Password">
						  </div>
						  <button type="submit" class="btn btn-primary">Daftar</button>
						</form>
						<br/><br/>
					</div>-->
				</div>
		</div>
	</section>