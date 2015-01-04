<?php 
	$donation_required = 13407500;
	//$donation_accept = 8839852;
	$donation_accept = 8989352;
	$donation_percent = ceil($donation_accept/$donation_required*100);
	$donation_people = 19; 
?>
    
    <section id="intro" class="full">	
		<div class="container"> 
			<div id="intro_caption" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="intro_caption_text">
					<h1>Dukung Guru cerdaskan Indonesia.</h1>
					<img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_dg.png" alt="" class="pull-left"/><p>Guru bertanggung jawab menciptakan kondisi belajar mengajar demi terciptanya iklim yang baik. Kita bisa membantu mereka.</p>
				</div>
			</div>	
		</div>		
	</section>

	<section id="home_project" class="full">		
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="home_last_project pad10">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="home_last_project_photo"><a href="<?php echo site_url(); ?>project" title="Lihat proyek ini"><img src="<?php echo $this->template->get_theme_path(); ?>/assets/project/dukungguruku_project_1b.jpg" alt=""/></a></div>
							<div class="home_last_project_counter">
								<div class="countdown"></div>
								<div class="home_last_project_counter_start pull-left">Project Start:<br/><span class="cyan">September 2014</span></div>
							</div>
							
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="home_last_project_title"><h3><a href="<?php echo site_url(); ?>project" title="Lihat proyek ini">Ruang kelas yang aman dan nyaman untuk mendukung kegiatan belajar mengajar.</a></h3></div>
							<div class="home_last_project_location"><span class="glyphicon glyphicon-map-marker"></span> <span>SDN Pasir Gintung 11, Lebak, Banten</span></div>
							<div class="progress">
							  <div class="progress-bar progress-bar-danger" style="width: <?php echo $donation_percent;?>%"></div>
							</div>
							<div class="progress_nominal"><?php echo $donation_percent;?>% of Rp 13.407.500</div>
							<!--<a href="<?php echo site_url(); ?>project" class="btn btn-success btn-xs">} DUKUNG</a> -->
							<form method="post" action="https://my.ipaymu.com/process.htm" target="new">
									<input type="hidden" name="action" value="donation">
									<input type="hidden" name="member" value="dukungindonesiaku">
									<input type="hidden" name="product" value="3002">
									<!--<input type="submit" class="btn btn-success btn-xs" value="} DUKUNG" />-->
							<a href="<?php echo site_url(); ?>project" class="btn btn-default btn-xs">DETAIL PROYEK</a>
							</form>	
						</div>
					</div>
				</div></div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="home_last_project pad10">
					<div class="row">
						<div class="col-lg-6 col-sm-6 col-xs-12">
							<div class="home_last_project_photo"><a href="<?php echo site_url(); ?>project/project2" title="Lihat proyek ini"><img src="<?php echo $this->template->get_theme_path(); ?>/assets/project/dukungguruku_project_2b.jpg" alt=""/></a></div>
							<div class="home_last_project_counter">
								<div class="countdown2"></div>
								<div class="home_last_project_counter_start pull-left">Project Start:<br/><span class="cyan">1 Februari 2015</span></div>
							</div>
							
						</div>
						<div class="col-lg-6 col-sm-6 col-xs-12">
							<div class="home_last_project_title"><h3><a href="<?php echo site_url(); ?>project/project2" title="Lihat proyek ini">Pembuatan Lapangan sebagai sarana olahraga dan upacara yang memadai.</a></h3></div>
							<div class="home_last_project_location"><span class="glyphicon glyphicon-map-marker"></span> <span>SDN Pasir Gintung 11, Lebak, Banten</span></div>
							<div class="progress">
							  <div class="progress-bar progress-bar-danger" style="width: 0%"></div>
							</div>
							<div class="progress_nominal">0% of Rp 16.390.000</div>
							<!--<a class="btn btn-success btn-xs">} DUKUNG</a> -->
							<!--<form method="post" action="https://my.ipaymu.com/process.htm" target="new">
									<input type="hidden" name="action" value="donation">
									<input type="hidden" name="member" value="dukungindonesiaku">
									<input type="hidden" name="product" value="3002">
									<input type="submit" class="btn btn-success btn-xs" value="} DUKUNG" /> 
							</form>-->
							<a href="<?php echo site_url(); ?>project/project2" class="btn btn-default btn-xs">DETAIL PROYEK</a>
						</div>
					</div>
				</div></div>
			</div>
		</div>
	</section>

	<!-- DAFTAR SEKOLAH 
	<section>
		<div class="container">
			<div id="home_daftar_sekolah" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="blue">DAFTAR SEKOLAHKU</h2>
				<a href="<?php echo site_url(); ?>login" title="" class="btn btn-info btn-small"><span class="glyphicon glyphicon-user"></span> LOGIN</a> atau <a href="<?php echo site_url(); ?>login" title="" class="btn btn-danger btn-small"><span class="glyphicon glyphicon-plus"></span> DAFTAR</a> untuk melihat sekolah mana saja yang telah Anda bantu. </div>
		</div>		
	</section>
    -->
	<!-- FEATURED IN 
	<section >
		<div class="container">
			<div id="home_featured_in" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="blue">FEATURED IN</h2>
				<a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/featured1.jpg" /></a> 
				<a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/featured2.jpg" /></a> 
				<a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/featured3.jpg" /></a> 
				<a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/featured4.jpg" /></a> 
				<a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/featured1.jpg" /></a> 
				<a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/featured2.jpg" /></a> 
				<a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/featured3.jpg" /></a> 
				<a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/featured4.jpg" /></a> 
				<a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/featured1.jpg" /></a> 
			</div>
		</div>
	</section>
	-->
	<!-- TESTIMONI 
	<section id="home_testimoni">
		<div class="container">
			<div id="row">
				<div class="testimoni col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="testimoni_text"><p>"Ceritanya testimoni siapa gitu biar keren aja ditaro disini. kalo Belon ada yaudah di ilangin aja dulu si bar ini xD Kan kalo ada testimoni jadi banyak orang yang tau gitu kesannya."</p></div>
					<div class="testimoni_photo pull-left"><img src="<?php echo $this->template->get_theme_path(); ?>/img/testimoni_photo.jpg" alt=""/></div>
					<div class="testimoni_author pull-left">Shafiq Pontoh<br/><span>Id berkibar, Indonesia Berkebun</span></div>
				</div>
				<div class="testimoni col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="testimoni_text"><p>"Ceritanya testimoni siapa gitu biar keren aja ditaro disini. kalo Belon ada yaudah di ilangin aja dulu si bar ini xD Kan kalo ada testimoni jadi banyak orang yang tau gitu kesannya."</p></div>
					<div class="testimoni_photo pull-left"><img src="<?php echo $this->template->get_theme_path(); ?>/img/testimoni_photo.jpg" alt=""/></div>
					<div class="testimoni_author pull-left">Shafiq Pontoh<br/><span>Id berkibar, Indonesia Berkebun</span></div>
				</div>
			</div>
		</div>
	</section>
	-->
