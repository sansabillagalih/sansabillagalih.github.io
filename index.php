<?php
date_default_timezone_set("Asia/Jakarta");
require "config.php";

if(strtotime($mulai) <= time() AND strtotime($akhir) >= time()){
	$statusDonasi = "aktif";
} else {
	$statusDonasi = "selesai";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags --> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>IWU Lawan Corona</title>
		<meta name="og:title" content="IWU Lawan Corona"/>
		<meta name="og:type" content="website"/>
		<meta name="og:url" content="http://iwu.ac.id/"/>
		<meta name="og:image" content="images/fbheader.png"/>
		<meta name="og:site_name" content="IMDb"/>
		<meta name="og:description" content="Sebuah gerakan yang dibuat oleh Mahasiswa IWU 
		untuk membantu Selamatkan Nyawa Sesama! 
		Gerakan ini dibuat bekerja sama dengan Yayasan IWU Peduli Corona"/>
		<meta name="keywords" content=" corona, donasi, covid19, covid-19"/>
		<meta name="description" content="Sebuah gerakan yang dibuat oleh Mahasiswa IWU 
		untuk membantu Selamatkan Nyawa Sesama! 
		Gerakan ini dibuat bekerja sama dengan Yayasan Yayasan IWU Peduli Sesama"/>
		<meta name="copyright"content="IWU Peduli Corona">
		<meta name="language" content="ID">
		<meta name="robots" content="index,follow" />
		<meta name="designer" content="Galih">
		<meta name="copyright" content="IWU Peduli Corona">
		<meta name="owner" content="IWU Peduli Corona">
		<meta name="url" content="http://iwu.ac.id/">
		<meta name="identifier-URL" content="http://iwu.ac.id/">
		<meta name="coverage" content="Worldwide">
		<meta name="distribution" content="Global">
		<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendors/aos/css/aos.css">
		<link rel="stylesheet" href="vendors/jquery-flipster/css/jquery.flipster.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="images/doctor.png" />
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="images/logos.png" alt="IWU Lawan Corona"  ></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
						<img src="images/logos.png" class="logo-mobile-menu" alt="logo">
						<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
					</div>
					<ul class="navbar-nav ml-auto align-items-center">
						<li class="nav-item active">
							<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#story">Story</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#himbauan">Himbauan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#kasus">Kasus</a>
						</li>
																		<li class="nav-item">
							<a class="nav-link" href="#log">Log Aktifitas</a>
						</li>
						<?php if($statusDonasi == "aktif"){ ?>
						<li class="nav-item">
							<a class="nav-link" href="#donasi">Donasi</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
		<div class="page-body-wrapper">
			<section id="home" class="home">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="main-banner">
								<div class="d-sm-flex justify-content-between">
									<div data-aos="zoom-in-up">
										<div class="banner-title">
										<br><br><br><br>
												<h3 class="font-weight-medium">IWU Lawan Covid19
										</div>
										<?php if($statusDonasi == "selesai"){ ?>
											<p class="mt-3">Terima kasih untuk kalian semua yang telah berdonasi.<br>
												Untuk saat ini  kita berhasil mengumpulkan dana sejumlah :
											</p>
										<?php } else { ?>
										<p class="mt-3">Sebuah gerakan yang dibuat oleh Mahasiswa IWU
											untuk membantu Selamatkan Nyawa Sesama!<br>
											Gerakan ini dibuat bekerja sama dengan IWU Peduli Corona
										</p>
										<?php } ?>
										<h1>Rp.<span class="jumdos">0</span>,-</h1>
										<font size="2.5">(<?=ucfirst(terbilang($jumlahDonasi))." Rupiah";?>)</font><br><br>
										<?php if($statusDonasi == "aktif"){ ?>
										<small>Last update : <?=$updateWaktu;?></small><br>
										<small>Donasi berakhir pada : </small><small id="jangka"></small><br>
										<a href="#donasi" class="btn btn-secondary mt-3">Donasi</a>
										<?php } else { ?>
										<small><br>Semua hasil donasi yang sudah teman-teman berikan akan kita teruskan 
										kepada Yayasan IWU Peduli Corona sebagai relawan dilapangan. Terima kasih  </small>
										<?php } ?>
									</div>
									<div class="mt-5 mt-lg-0">
										<img src="images/people.png" alt="virus" class="img-fluid" data-aos="zoom-in-up">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="our-services" id="story">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="text-dark">Story</h5>
							<h3 class="font-weight-medium text-dark mb-5">Latar Belakang</h3>
						</div>
					</div>
					<p>Di Indonesia, kasus terkonfirmasi positif <b>COVID-19</b> pertama kali terdeteksi pada <br>
						<b>Senin, 13 April 2020</b>. Sejak itu, jumlah yang terkonfirmasi <b>COVID-19</b> semakin bertambah dari hari ke hari. <br>
						Hingga Senin, 13 April 2020, terdapat 4557 orang terinfeksi, 380 orang sembuh, dan 399 orang meninggal dunia.<br><br>
						Sebagai respon terhadap penyebaran <b>COVID-19</b> di Indonesia, <br>
						<b>IWU Lawan Corona</b> bersama <b>Yayasan IWU Peduli Corona</b> di lapangan <br>
						telah menggalang pengumpulan dana publik untuk mencegah penyebaran virus dan melindungi masyarakat.<br><br>
						Saat kita membaca berita tentang virus <b>COVID-19</b>, <br>
						ada banyak dokter, perawat, petugas rumah sakit, dan tenaga medis lainnya yang berjuang di garda terdepan. <br>
						Mereka sedang berusaha menyembuhkan pasien dan memberikan hasil yang maksimal.<br><br>
						Semua hasil donasi yang sudah teman-teman berikan akan kita teruskan kepada <b>Yayasan IWU Peduli Corona</b> <br>
						sebagai relawan dilapangan, <b>IWU Lawan Corona</b> hanyalah penengah dalam gerakan ini.<br><br>
						<b>Ayo teman-teman mari bantu relawan, medis dan pahlawan lainnya yang sedang berjuang <br>
						untuk berantas Virus Corona ini!</b><br>
					</p>
				</div>
			</section>
			<section class="our-process" id="himbauan">
				<div class="container">
					<div class="row">
						<div class="col-sm-6" data-aos="fade-up">
							<h5 class="text-dark">Himbauan</h5>
							<h3 class="font-weight-medium text-dark">Apa yang harus kita lakukan?</h3>
							<h5 class="text-dark mb-3">jaga KEBERSIHAN dan KESEHATAN!</h5>
							<p class="font-weight-medium mb-4"></p>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Cuci tangan dengan sabun dan air mengalir (min. 20 detik)
									atau gunakan hand-sanitizer berbasis alkohol (min. kandungan alkohol 60 %).</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Jangan menyentuh mata, hidung, dan mulut dengan tangan yang belum dicuci</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Saat sakit gunakan masker.</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Tutup mulut dan hidung saat 
									batuk atau bersin dengan tissue. Buang tissue pada tempat sampah.</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Bersihkan dan lakukan disinfeksi secara rutin pada 
									permukaan benda yang sering disentuh.</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Ganti baju dan mandi
sesegera mungkin setiba di
rumah setelah berinteraksi
dengan keramaian atau
fasilitas umum.
</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Usahakan perbanyak konsumsi
makanan bergizi dan air
putih, jaga pola tidur yang
cukup, dan lakukan olahraga
ringan di rumah untuk
membantu menjaga kondisi
tubuh.
</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Usahakan untuk
tetap tinggal di
rumah terutama
saat anda sakit.</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Jauhi keramaian
dan tempattempat umum</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Jangan
berpergian ke
daerah lain jika
tidak mendesak</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Hindari kontak
fisik jika bertemu
dengan orang lain
di luar rumah.
</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Jaga jarak
dengan orang lain
jika terpaksa
berada dalam
antrian atau
kerumunan.</p>
							</div>
						</div>
						<div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<img src="images/doctor.png" alt="idea" class="img-fluid">
						</div>
					</div>
				</div>
			</section>
			<section class="our-projects" id="kasus">
				<div class="container">
					<div class="row mb-5">
						<div class="col-sm-12">
							<div class="d-sm-flex justify-content-between align-items-center mb-2">
								<h3 class="font-weight-medium text-dark ">Jumlah kasus di Indonesia saat ini</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row pt-5 mt-5 pb-5 mb-5">
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
								<img src="images/positif.png" width="25%" alt="satisfied-client" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="scVal">0</span></h4>
									<h5 class="text-dark mb-0">Jumlah Kasus</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
								<img src="images/perawatan.png" width="25%" alt="satisfied-client" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="fpVal">0</span></h4>
									<h5 class="text-dark mb-0">Perawatan</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
								<img src="images/meninggal.png" width="25%" alt="Team Members" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="tMVal">0</span></h4>
									<h5 class="text-dark mb-0">Meninggal</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
								<img src="images/sembuh.png" width="25%" alt="Our Blog Posts" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="bPVal">0</span></h4>
									<h5 class="text-dark mb-0">Sembuh</h5>
								</div>
							</div>
						</div>
						<small>Data besumber dari covid19.go.id</small>
					</div>
				</div>
			</section>
			<?php if($statusDonasi == "aktif"){ ?>
			<section class="testimonial" id="donasi">
				<div class="container">
					<div class="row  mt-md-0 mt-lg-4">
						<div class="col-sm-6 text-white" data-aos="fade-up">
							<p class="font-weight-bold mb-3">Apabila anda ingin berdonasi</p>
							<h3 class="font-weight-medium">Transfer pada<br>rekening berikut</h3>
							<ul class="flipster-custom-nav">
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link" title="0"></a>
								</li>
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link"  title="1"></a>
								</li>
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link active" title="2"></a>
								</li>
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link"  title="3"></a>
								</li>
							</ul>
						</div>
						<div class="col-sm-6" data-aos="fade-up">
							<div id="testimonial-flipster" style="overflow-y:hidden;">
								<ul>
									<li>
										<div class="testimonial-item">
											<img src="images/ovo.png" alt="icon" class="testimonial-icons">
											<p>Apabila ingin berdonasi melalui <b>OVO</b><br>Silahkan transfer pada nomor berikut<br>
												Nomor : <b>085864437985</b>
											</p>
											<h6 class="testimonial-author">An : Galih Sansabilla</h6>
										</div>
									</li>
									<li>
										<div class="testimonial-item">
											<img src="images/gopay.png" alt="icon" class="testimonial-icons">
											<p>Apabila ingin berdonasi melalui <b>Go-Pay</b><br>Silahkan transfer pada nomor berikut<br>
												Nomor : <b>089603545768</b>
											</p>
											<h6 class="testimonial-author">An :Galih Sansabilla</h6>
										</div>
									</li>
									<li>
										<div class="testimonial-item">
											<img src="images/dana.png" alt="icon" class="testimonial-icons">
											<p>Apabila ingin berdonasi melalui <b>Dana</b><br>Silahkan transfer pada nomor berikut<br>
												Nomor : <b>089603545768</b>
											</p>
											<h6 class="testimonial-author">An : Galih Sansabilla</h6>
										</div>
									</li>
									<li>
										<div class="testimonial-item">
											<img src="images/jenius.png" alt="icon" class="testimonial-icons">
											<p>Apabila ingin berdonasi melalui <b>Bank BCA</b><br>Silahkan transfer pada nomor berikut<br>
												Nomor : <b>2780310254</b>
											</p>
											<h6 class="testimonial-author">An : Galih Sansabilla</h6>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php } ?>
			<section class="contactus" id="contact">
				<div class="container">
					<div class="row mb-5 pb-5">
						<div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
							<img src="images/dompet2.png" alt="contact" class="img-fluid">
						</div>
						<div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
							<h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Jumlah Donasi</h3>
							<h5 class="text-dark mb-5">Jumlah donasi OVO, GO-Pay, Dana, Jenius BTPN yang terkumpul</h5>
							<h1>Rp.<span class="jumdos">0</span>,-</h1>
							<font size="3">(<?=ucfirst(terbilang($jumlahDonasi))." Rupiah";?>)</font><br><br>
							<?php if($statusDonasi == "aktif"){ ?>
							<small>Last update : <?=$updateWaktu;?></small><br>
							<small>Donasi berakhir pada : </small><small id="jangka1"></small>
							<?php } else { ?>
							<small>Semua hasil donasi yang sudah teman-teman berikan akan kita teruskan 
							kepada Yayasan IWU Peduli Corona sebagai relawan dilapangan. Terima kasih 🙏</small>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>
			<section class="our-services" id="log">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="text-dark">Log Aktifitas</h5>
							<h3 class="font-weight-medium text-dark mb-5">Kabar terbaru</h3>
						</div>
					</div>
<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Pencairan dana ke IWU Peduli Corona Sebesar Rp.0- <a href="https://iwu.ac.id" class="text-black" target="_blank">Bukti</a> ( 27/03/2020 12:30 WIB )</p><br>
							</div>
							<div class="d-flex justify-content-start mb-3">
																<p class="mb-0">Donasi yang belum disalurkan : Rp.0<br>
								Donasi yang sudah disalurkan ( period 1 ) : Rp.0<br>
								Total Donasi Yang Masuk : Rp.<span class="jumdos">0</span>,-</p>
							</div>
				</div>
			</section>
		</div>
		<footer class="footer">
			<div class="footer-bottom">
				<div class="container">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center">
							
							<p class="mb-0 text-small pt-1">© 2020 <a href="http://iwu.ac.id/" class="text-white" target="_blank">IWU Lawan Corona</a>. All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="vendors/base/vendor.bundle.base.js"></script>
		<script src="vendors/owl.carousel/js/owl.carousel.js"></script>
		<script src="vendors/aos/js/aos.js"></script>
		<script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
		<script>(function($){'use strict';$(function(){$('.owl-carousel-projects').owlCarousel({loop:!0,stagePadding:100,margin:20,nav:!1,responsive:{0:{items:2},600:{items:3},1000:{items:4}}})
var wWidth=$(window).width();var menuWidth=$(".navbar-collapse").width();$(".navbar-toggler").click(function(){$('.collapsing').toggleClass('show');$('body').addClass("sidebar-overlay")});$("#mobile-menu-overlay, .close-menu, .nav-link").click(function(){$('.collapse').toggleClass('show');$('body').removeClass("sidebar-overlay")});$("a.nav-link").on('click',function(event){if(this.hash!==""){event.preventDefault();var hash=this.hash;$('html, body').animate({scrollTop:$(hash).offset().top},800,function(){window.location.hash=hash})}});AOS.init({offset:0,duration:800,easing:'ease-in-quad',delay:100,});$("#testimonial-flipster").flipster({style:'coverflow',spacing:-.9,nav:!1,loop:!0,buttons:!1,});$('.flipster-custom-nav-link').click(function(){var navlinkSelected=parseInt(this.title);$('.flipster-custom-nav-link').removeClass("active");$(this).addClass("active");$("#testimonial-flipster").flipster('jump',navlinkSelected)});$('#toggle-switch').click(function(){if($('#toggle-switch').is(':checked')){$('.monthly').addClass("text-active");$('.yearly').removeClass("text-active");$("#toggle-switch").attr("checked","checked")}else{$('.monthly').removeClass("text-active");$('.yearly').addClass("text-active");$("#toggle-switch").removeAttr("checked")}});function formatNumber(num){return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g,'$1,')}
var jumDonVal=<?=$jumlahDonasi;?>;var isd=<?=$jumlahDonasi-$speed;?>;var timd;function runDon(){timd=setInterval(function(){if(isd>=jumDonVal){clearInterval(timd);return}
$('.jumdos').text(formatNumber(++isd))},1)}
runDon();function upd(){$.getJSON('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/ArcGIS/rest/services/Statistik_Perkembangan_COVID19_Indonesia/FeatureServer/0/query?where=Jumlah_Kasus_Kumulatif%20IS%20NOT%20NULL%20AND%20Jumlah_Pasien_Sembuh%20IS%20NOT%20NULL%20AND%20Jumlah_Pasien_Meninggal%20IS%20NOT%20NULL&outFields=*&orderByFields=Tanggal%20desc&resultRecordCount=2&f=json&fbclid=IwAR0WtY3HaDB_Hx6qjcY8Q2_zj_CTii-x43W3_yleVGpBz6DCrKx8hY5yRuM',function(covid){var maxScVal,maxfPVal,maxtMVal,maxbPVal;maxScVal=covid.features[0].attributes.Jumlah_Kasus_Kumulatif;maxfPVal=covid.features[0].attributes.Jumlah_pasien_dalam_perawatan;maxtMVal=covid.features[0].attributes.Jumlah_Pasien_Meninggal;maxbPVal=covid.features[0].attributes.Jumlah_Pasien_Sembuh;var isc=parseInt($('.scVal').text());var tim;function run(){tim=setInterval(function(){if(isc>=maxScVal){clearInterval(tim);return}
$('.scVal').text(++isc)},1)}
run();var ifP=parseInt($('.fpVal').text());var timfP;function runfP(){timfP=setInterval(function(){if(ifP>=maxfPVal){clearInterval(timfP);return}
$('.fpVal').text(++ifP)},1)}
runfP();var itm=parseInt($('.tMVal').text());var timtM;function runtM(){timtM=setInterval(function(){if(itm>=maxtMVal){clearInterval(timtM);return}
$('.tMVal').text(++itm)},1)}
runtM();var ibP=parseInt($('.bPVal').text());var timbP;function runbP(){timbP=setInterval(function(){if(ibP>=maxbPVal){clearInterval(timbP);return}
$('.bPVal').text(++ibP)},1)}
runbP()})}
upd();setInterval(function(){upd()},300000)})})(jQuery)</script>
		<script>var countDownDate=new Date("<?=$akhir;?>").getTime();var x=setInterval(function(){var now=new Date().getTime();var distance=countDownDate-now;var days=Math.floor(distance/(1000*60*60*24));var hours=Math.floor((distance%(1000*60*60*24))/(1000*60*60));var minutes=Math.floor((distance%(1000*60*60))/(1000*60));var seconds=Math.floor((distance%(1000*60))/1000);document.getElementById("jangka").innerHTML=days+" hari "+hours+" jam "+minutes+" menit "+seconds+" detik ";document.getElementById("jangka1").innerHTML=days+" hari "+hours+" jam "+minutes+" menit "+seconds+" detik ";if(distance<0){clearInterval(x);document.getElementById("jangka").innerHTML="Donasi Berakhir";document.getElementById("jangka1").innerHTML="Donasi Berakhir"}},1000)</script>
	</body>
</html>