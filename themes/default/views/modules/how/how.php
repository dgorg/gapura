<?php 
	$donation_required = 13407500;
	//$donation_accept = 8839852;
	$donation_accept = 13407500;
	$donation_percent = ceil($donation_accept/$donation_required*100);
	$donation_people = 18;
?>
  
	<!-- INTRO -->
	<section id="tutorial-intro" class="full">	
		<div class="container">
			<div id="tutorial-caption" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="intro_caption_text"><br/><br/>
					<h1>Pastikan dukungan Anda sampai ke mereka.</h1>
					<p>Pelajari 3+2 langkah mudah dalam memberikan dukungan melalui dukungguruku.org. Siapapun Anda pasti bisa melakukannya. </p>
					
				</div>	
			</div>	
		</div>			
	</section>	

	<!-- INTRO STEP -->
	<section class="visible-lg">
		<div class="container">
			<div id="tutorial-step">
            <div style="display:none;">
				<a href="" title="" class="step"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_tutorial1.png" /></a>
				<a href="" title="" class="step"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_tutorial2.png" /></a>
				<a href="" title="" class="step"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_tutorial3.png" /></a>
				<a href="" title="" class="step"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_tutorial4.png" /></a>
				<a href="" title="" class="step"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_tutorial5.png" /></a>
			</div>
            </div>
		</div>
	</section>
 
	<!-- TUTORIAL PILIH PROJECT -->
	 <section id="tutorial-project" class="full">
		<div class="container">
        <!--slider-->
        	<ul class="bxslider">
                <li>
                <div id="tutorial-text">
                    <div id="row">
                        <div class="col-lg-6 col-xs-12">
                            <h1>Pilih Project</h1><p>Pilih project yang sedang berjalan untuk disumbang. Anda bisa langsung menyumbang dengan klik tombol } DUKUNG atau membaca proposal lengkapnya dengan.</p>
                        </div>
                        <div class="col-lg-6 visible-lg">
                            <img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_tutorial_project.png" />
                        </div>
                    </div>
                </div>
                </li>
                <!--separator-->
                <li>
                <div id="tutorial-text">
                    <div id="row">
                        <div class="col-lg-6 col-xs-12">
                            <h1>Tentukan Nilai Dukungan</h1><p>Ada berbagai macam nominal yang bisa dipilih sebagai satuan donasi Anda; dari 5000 - 10.000.000,- Jika dukungan Anda melebihi angka di atas, silakan langsung menghubungi project@dukungguruku.org.</p>
                        </div>
                        <div class="col-lg-6 visible-lg" style="position:relative; top:60px; left:100px;">
                            <img src="<?php echo $this->template->get_theme_path(); ?>/img/ico_rp.png" />
                        </div>
                    </div>
                </div>
                </li>
				<li>
                <div id="tutorial-text">
                    <div id="row">
                        <div class="col-lg-6 col-xs-12" >
                            <h1>Lengkapi Data</h1><p>Agar dukungan Anda bisa kami proses, anda diharuskan untuk 
melengkapi data pembayaran. Untuk mempersingkat langkah, silakan login terlebih dahulu.</p>
                        </div>
                        <div class="col-lg-6 visible-lg" style="position:relative; top:-10px; left:100px;">
                            <img src="<?php echo $this->template->get_theme_path(); ?>/img/ico_data.png" />
                        </div>
                    </div>
                </div>
                </li>
                <!--separator-->
                <li>
                <div id="tutorial-text">
                    <div id="row">
                        <div class="col-lg-6 col-xs-12" >
                            <h1>Konfirmasi Dukungan</h1><p>Anda akan mendapatkan e-mail untuk mengkonfirmasi apakah anda telah melakukan pembayaran melalui channel yang Anda pilih. Dukungan yang telah Anda berikan akan di proses 2x24 jam. Selain bisa memantau apakah dukungan telah selesai kami proses pada menu STATUS di profil. Bukti akan kami kirimkan melalui e-mail.</p>
                        </div>
                        <div class="col-lg-6 visible-lg" style="position:relative; top:0px; left:100px;">
                            <img src="<?php echo $this->template->get_theme_path(); ?>/img/ico_mail.png" />
                        </div>
                    </div>
                </div>
                </li>
                <!--separator-->
                 <li>
                <div id="tutorial-text">
                    <div id="row">
                        <div class="col-lg-6 col-xs-12" >
                            <h1>Report Balanced</h1><p>Semua dukungan anda terekam. Anda bisa mendukung kembali project yang sama sekalipun dn melihat datanya di profil Anda. Jika pembangunan sekolah telah berjalan, anda dapat mengakses report dari pembangunan sekolah ini.</p>
                        </div>
                        <div class="col-lg-6 visible-lg" style="position:relative; top:0px; left:100px;">
                            <img src="<?php echo $this->template->get_theme_path(); ?>/img/ico_final.png" />
                        </div>
                    </div>
                </div>
                </li>
                <!--separator-->
            </ul>
          <!--end off slider-->   
		</div>
	</section>
	
	<section>
		<div class="container">
			<div id="payment-caption" class="row">
				<div class="col-lg-12 col-xs-12">
					<h1>Dukungguruku.org menerima donasi melalui berbagai cara:</h1>
					<p>Kapanpun, dimanapun.</p>
				</div>				
			</div>		
			<div id="payment-step" align="center" class="aligncenter">
				<div class="tutorial-payment"><a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_transfer.png" class="img-responsive"/><br/>TRANSFER</a></div>
				<div class="tutorial-payment"><a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_paypal.png" class="img-responsive"/><br/>PAYPAL</a></div>				
				<div class="tutorial-payment"><a href="" title=""><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_pulsa.png"class="img-responsive" /><br/>PULSA</a></div>
			</div>
		</div>
	</section>
	
	<!-- DUKUNG SEKARANG -->
	<section id="tutorial-dukung">
		<div class="container">
		<div id="dukung-caption">
			<h2>Dukung Sekarang</h2>
		</div>		
			<div class="dukung-detail">
				<div class="row col-lg-10 col-lg-offset-1">
						<div class="col-lg-5 col-xs-12">
							<div class="home_last_project_photo"><a href="<?php echo site_url(); ?>project" title="Lihat proyek ini"><img src="<?php echo $this->template->get_theme_path(); ?>/assets/project/dukungguruku_project_1b.jpg" alt=""/></a></div>
							<div class="home_last_project_counter">
								<div class="countdown"></div>
								<div class="home_last_project_counter_start pull-left">Project Start:<br/><span class="cyan">9 Agustus 2014</span></div>
							</div>
							
						</div>
						<div class="col-lg-7  col-xs-12">
							<div class="home_last_project_title"><h3><a href="<?php echo site_url(); ?>project" title="Lihat proyek ini">Ruang kelas yang aman dan nyaman untuk mendukung kegiatan belajar mengajar.</a></h3></div>
							<div class="home_last_project_location"><span class="glyphicon glyphicon-map-marker"></span> <span>SDN Pasir Gintung 11, Lebak, Banten</span></div>
							<div class="progress">
							  <div class="progress-bar progress-bar-danger" style="width: <?php echo $donation_percent; ?>%"></div>
							</div>
							<div class="progress_nominal"><?php echo $donation_percent; ?>% of Rp 13.407.500</div>
							<!--<a class="btn btn-success btn-xs">} DUKUNG</a> -->
							<form method="post" action="https://my.ipaymu.com/process.htm" target="new">
									<input type="hidden" name="action" value="donation">
									<input type="hidden" name="member" value="dukungindonesiaku">
									<input type="hidden" name="product" value="3002">
									<input type="submit" class="btn btn-success btn-xs" value="} DUKUNG" /> 						
							<a href="<?php echo site_url(); ?>project" class="btn btn-default btn-xs">DETAIL PROYEK</a>
							</form>								
						</div>
					</div>
				</div>
		</div>
	</section>
	<section id="question">
		<div class="container">
		<div id="tutorial-question">
		<div class="col-lg-10 col-xs-12">
			<p>Anda punya pertanyaan? Silakan hubungi kami</p>
		</div>
		<div class="col-lg-2 col-xs-12">
			<a href="https://www.facebook.com/DukungGuruku" title="Facebook"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_fb.png" alt="" /></a> 
			<a href="https://www.facebook.com/DukungGuruku" title="Twitter"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_tw.png" alt="" /></a> 
			<a href="mailto:halo@dukungguruku.org" title="Email"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_mail.png" alt="" /></a> 
		</div>		
		</div>
	</section>
