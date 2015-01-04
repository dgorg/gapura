<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php if($menu_title){ echo $menu_title." | "; } ?>DukungGuruku</title>
	<link rel="icon" type="image/png" href="<?php echo $this->template->get_theme_path(); ?>/img/favicon.png"> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
	
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->template->get_theme_path(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->template->get_theme_path(); ?>/css/bootstrap-glyphicons.css" rel="stylesheet">
     <link href="<?php echo $this->template->get_theme_path(); ?>/css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php echo $this->template->get_theme_path(); ?>/style.css" rel="stylesheet">
    

  </head>
  <body>
	<header class="full">
		<div class="container">
			<div id="logo" class="pull-left"><a href="<?php echo site_url(); ?>" title="Dukung Guruku"><img src="<?php echo $this->template->get_theme_path(); ?>/img/logo_dukungguruku.png" alt="" /></a></div>
			<nav class="pull-left visible-lg">
				<div class="topmenu pull-left"><a href="<?php echo site_url(); ?>about" title=""><span>APA &amp; SIAPA</span><br/>dukung guruku</a></div>
				<div class="topmenu pull-left"><a href="<?php echo site_url(); ?>how" title=""><span>BAGAIMANA</span><br/>kami bekerja</a></div>
				<div class="topmenu pull-left"><a href="<?php echo site_url(); ?>project" title=""><span>MULAI</span><br/>mendukung</a></div>	
				<div class="topmenu pull-right"> 
					<input type="text" class="input-medium search-query" placeholder=" search"><br/>
					Temukan di 
					<a href="https://www.facebook.com/DukungGuruku" title="Facebook" target="_blank"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_fb.png" alt="" /></a> 
					<a href="https://twitter.com/DukungGuruku" title="Twitter" target="_blank"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_tw.png" alt="" /></a> 
					<a href="http://instagram.com/dukungguruku" title="Instagram" target="_blank"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_ig.png" alt="" /></a> 
					<a href="https://plus.google.com/104803844997032729584" title="Google+" target="_blank"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_go.png" alt="" /></a> 
				<!--	<a href="youtube.com" title="Youtube" target="_blank"><img src="<?php echo $this->template->get_theme_path(); ?>/img/icon_yt.png" alt="" /></a> -->
				</div>
				<!--
				<div class="topmenu pull-left">
					<?php if($this->session->userdata('logged_in')) { ?>
					<div class="login_profpic"><a href="#" title="Login"><img src="<?php echo $this->session->userdata('profile_picture'); ?>" alt="" width="50px"/></a></div>
					<div class="login_box_blue"><a href="#" title="Login"><b><?php echo $this->session->userdata('first_name'); ?></b></a></div>
					<div class="login_box_red"><a href="<?php echo site_url(); ?>login/logout" title="Daftar">Sign Out</a></div>
					<?php }else{ ?>
					<a href="<?php echo site_url(); ?>login" title="Login"><img src="<?php echo $this->template->get_theme_path(); ?>/img/btn_login.png" alt="" /></a><br/>
					<a href="<?php echo site_url(); ?>login" title="Daftar"><img src="<?php echo $this->template->get_theme_path(); ?>/img/btn_daftar.png" alt="" /></a>
					<?php } ?>
				</div>
				-->
			</nav>
			<div class="clearfix"></div>
		</div>
	</header>
	<!-- END OF HEADER -->
	
	<?php echo $template['body']; ?>
	
	<!-- FOOTER -->
      <footer>
		<div class="container">
		
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="footer_menu col-lg-4">
							<ul><b>APA &amp; SIAPA</b><br/>
								<!--<li><a href="<?php echo site_url(); ?>about" title="">Kenapa DukungGuruku?</a></li>-->
								<li><a href="<?php echo site_url(); ?>about" title="">Tentang Dukungguruku</a></li>
								<li><a href="<?php echo site_url(); ?>about/mekanisme" title="">Mekanisme</a></li>
								<li><a href="<?php echo site_url(); ?>how" title="">Bagaimana Kami Bekerja</a></li>
								<li><a href="<?php echo site_url(); ?>about/tim" title="">Tim</a></li>
								<li><a href="<?php echo site_url(); ?>how/mitra" title="">Mitra</a></li>
								<li><a href="<?php echo site_url(); ?>how/faq" title="">Tanya-Jawab</a></li>
								<li><a href="<?php echo site_url(); ?>how/kontak" title="">Hubungi Kami</a></li>
							</ul>
						</div>
						<div class="footer_menu col-lg-4">
							<ul><b>PROJECT</b><br/>
								<li><a href="<?php echo site_url(); ?>project" title="">Sedang Berjalan</a></li>
								<li><span class="grey-footer">Ajukan Sekolah (Segera!)</span></li>
								<li><span class="grey-footer">Panduan Proyek<span></li>
								<li><span class="grey-footer">Menjadi Relawan<span></li>
								<li><span class="grey-footer">Menjadi Donatur Khusus<span></li>
								<li><a href="<?php echo site_url(); ?>how/mitra" title="">Bukan kontribusi perorangan?</a></li>
								<li><a href="<?php echo site_url(); ?>project/konfirmasi" title="">Konfirmasi Donasi</a></li>
							</ul>
						</div>
						<div class="footer_menu col-lg-4">
							<ul><b>UPDATE</b><br/>
								<li><a href="#" title="">Blog</a></li>
								<li><a href="#" title="">Berita</a></li>
								<li><a href="#" title="">Newsletter</a></li>
								<li><a href="https://www.facebook.com/DukungGuruku" title="Facbook" target="_blank">Facebook</a></li>
								<li><a href="https://twitter.com/DukungGuruku" title="Twitter" target="_blank">Twitter</a></li>
								<li><a href="https://plus.google.com/104803844997032729584" title="Instagram" target="_blank">Google+</a></li>
								<li><a href="http://instagram.com/dukungguruku" title="Instagram" target="_blank">Instagram</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer_menu col-lg-4">
					<b>INTERAKSI DENGAN KAMI</b><br/>
					<!-- Facebook  Like -->
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=625140124184640";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
                    </script>
					<!-- End Facebook  Like -->					
					<div class="fb-like-box" data-href="http://facebook.com/dukungguruku" data-width="292" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
					
			</div>
		
			
		</div>
	  </footer>
	  <div id="copyright"> <div class="container"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p class="pull-right"><a href="#">^top</a></p>
			<p>&copy; 2014  &middot; DukungGuruku  &middot; Web by <a href="http://www.kotakwarnastudio.com" title="Kotakwarna Studio" target="_blank">Kotakwarna Studio</a></p>
	   </div></div></div>
    </div><!-- /.container -->



    <!-- Bootstrap core JavaScript 
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $this->template->get_theme_path(); ?>/js/jquery.js"></script>
    <script src="<?php echo $this->template->get_theme_path(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->template->get_theme_path(); ?>/js/holder.js"></script>
    <script src="<?php echo $this->template->get_theme_path(); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php echo $this->template->get_theme_path(); ?>/js/jquery.countdown.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$('.carousel').carousel({
			  interval: 7000
			});
			$('#myTab a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			});
			
			$('.countdown').countdown('2014/08/09', function(event) {
				$(this).html(event.strftime(
					'<div class="home_last_project_counter_time">%D<br/><span>HARI</span></div>' +
					'<div class="home_last_project_counter_time">%H<br/><span>JAM</span></div>' + 
					'<div class="home_last_project_counter_time">%M<br/><span>MENIT</span></div>' 
				));
			});
			
			$('.countdown2').countdown('2014/10/01', function(event) {
				$(this).html(event.strftime(
					'<div class="home_last_project_counter_time">%D<br/><span>HARI</span></div>' +
					'<div class="home_last_project_counter_time">%H<br/><span>JAM</span></div>' + 
					'<div class="home_last_project_counter_time">%M<br/><span>MENIT</span></div>' 
				));
			});
			
			$('.sidecountdown1').countdown('2014/08/09', function(event) {
				$(this).html(event.strftime(
					'<b>%D</b> Hari <b>%H</b> Jam <b>%M</b> Menit' 
				));
			});
			
			$('.sidecountdown2').countdown('2014/10/01', function(event) {
				$(this).html(event.strftime(
					'<b>%D</b> Hari <b>%H</b> Jam <b>%M</b> Menit' 
				));
			});
			
			$('.bxslider').bxSlider({
 				 mode: 'fade',
				pagerType:'full'
			});
		   
		});
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-52810504-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>