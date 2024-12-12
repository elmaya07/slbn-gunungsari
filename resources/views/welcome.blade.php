<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>SLBN GUNUGSARI</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('gambar/logo/logo.ico')}}" type="image/x-icon">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('templates/css/bootstrap.min.css')}}" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('templates/css/pogo-slider.min.css')}}" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('templates/css/style.css')}}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('templates/css/responsive.css')}}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('templates/css/custom.css')}}" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    {{-- <div id="preloader">
        <div class="loader">
            <img src="{{asset('templates/images/loader.gif')}}" alt="#" />
        </div>
    </div> --}}
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img style="width:150px;height:auto" src="{{asset('logo.png')}}" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="{{url('/')}}">Beranda</a></li>
                        <li><a class="nav-link" href="#">Profil</a></li>
                        <li><a class="nav-link" href="#">Galleri</a></li>
                        <li><a class="nav-link" href="#">Informasi Terkini</a></li>
						<li><a class="nav-link" href="#">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="search-box">
                    {{-- <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="{{asset('templates/images/search_icon.png')}}" alt="#" />
                    </a> --}}
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url({{asset('gambar/banner6.jpg')}});background-position:center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">

                                        <div style="display: flex;gap:100px;">
                                        <img src="{{asset('gambar/logo/logo.png')}}" style="width:150px"/>
                                       <div style=" background-color: rgba(0,0,0,0.7);color: black;padding: 0 5px; border-radius:5px">
                                        <h4>Official Website</h4>
                                        <h3><span span class="theme_color"  style="color: white;"> SLBN GUNUNGSARI
                                          </span><br>BAURENO, BOJONEGORO  </h3>
                                       </div>
                                      </div>

                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="#">Daftar Sekarang</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="pogoSlider-slide" style="background-image:url({{asset('gambar/banner7.jpg')}});background-position:center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <div style="display: flex;gap:100px">
                                            <img src="{{asset('gambar/logo/logo.png')}}" style="width:150px"/>
                                            <div style=" background-color: rgba(0,0,0,0.7);color: black;padding: 0 5px; border-radius:5px" >
                                            <h4>Official Website</h4>
                                            <h3><span span class="theme_color"  style="color: white"> SLBN GUNUNGSARI
                                            </span><br>BAURENO, BOJONEGORO  </h3>
                                           </div>
                                          </div>

                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="#">Daftar Sekarang</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
	<div class="section tabbar_menu">
	   <div class="container">
	      <div class="row">
		      <div class="col-md-12">
			     <div class="tab_menu">
				    <ul>
					   <li><a href="#"><span class="icon"><img src="{{asset('templates/images/i1.png')}}" alt="#" /></span><span>Tentang Kami</span></a></li>
					   <li><a href="#"><span class="icon"><img src="{{asset('templates/images/i2.png')}}" alt="#" /></span><span>Prestasi</span></a></li>
					   <li><a href="#"><span class="icon"><img src="{{asset('templates/images/i3.png')}}" alt="#" /></span><span>Visi Misi</span></a></li>
					   <li><a href="#"><span class="icon"><img src="{{asset('templates/images/i4.png')}}" alt="#" /></span><span>Struktur</span></a></li>
					   <li><a href="#"><span class="icon"><img src="{{asset('templates/images/i5.png')}}" alt="#" /></span><span>Lokasi</span></a></li>
					   <li><a href="#"><span class="icon"><img src="{{asset('templates/images/i6.png')}}" alt="#" /></span><span>Kontak Kami &nbsp;&nbsp;</span></a></li>

					</ul>
				 </div>
			  </div>
		  </div>
	   </div>
	</div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Sekolah Luar Biasa Negeri</span></h2>
                        </div>
						<div class="full">
						  <p>Gunungsari adalah lembaga pendidikan yang didedikasikan untuk anak-anak dengan kebutuhan khusus, yang terletak di Gunungsari, sebuah wilayah yang dikenal dengan keindahan alamnya dan masyarakat yang ramah. Sekolah ini menyediakan pendidikan yang inklusif bagi siswa-siswa dengan berbagai jenis disabilitas, termasuk disabilitas fisik, intelektual, dan sensorik.</p>
						</div>
						<div class="full">
						   {{-- <a class="hvr-radial-out button-theme" href="#">About more</a> --}}
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full" style="margin-top: 50px">
                        <img src="{{asset('gambar/kegiatan1.jpg')}}" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Galeri </span>Kegiatan</h2>
                        </div>
					  </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                       <img class="img-responsive" src="{{asset('gambar/kegiatan-10.png')}}" alt="#" />
					   <h4>Acara PKK Ibu-ibu</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{asset('gambar/kegiatan-11.png')}}" alt="#" />
						<h4>Acara PKK Ibu-ibu</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{asset('gambar/kegiatan-12.png')}}" alt="#" />
						<h4>Pentas Kesenian</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container" style="padding-bottom: 60px">
            <div class="row" style="padding-top: 100px">
			    <div class="col-md-6">
                    <div class="full float-right_img">
                        <img src="{{asset('gambar/tentang.png')}}" alt="#"  style=" aspect-ratio: 16 / 9; object-fit:cover"/>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2 style="margin: 0;padding:0x"><span>Visi dan Misi</h2>
                        </div>
						<div class="full" style="padding: 20px 0px">
                            <h2>Visi</h2>
                            <p>Mewujudkan Peserta Didik yang Mandiri, Terampil, Cerda, dan Berwawasan Global</p>

                            <h2>Misi</h2>
                            <ol>
                                <li>Mewujudkan lulusan yang unggul dalam bidang keterampilan Vokasional.</li>
                                <li>Membina kemandirian peserta didik melalui kegiatan pembiasaan, kewirausahaan, dan pengembangan diri yang terencana dan berkesinambungan.</li>
                                <li>Mengoptimalkan proses pembelajaran dan bimbingan.</li>
                                <li>Mewujudkan pendidikan yang mengedepankan pendidikan profil pelajar Pancasila.</li>
                                <li>Menjaga kerjasama yang harmonis antar warga sekolah dan lembaga lain yang terkait.</li>
                            </ol>
						</div>
						<div class="full">
						   {{-- <a class="hvr-radial-out button-theme" href="#">Apply</a> --}}
						</div>
                    </div>
                </div>
			</div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    {{-- <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Reaserch</span></h2>
                        </div>
						<div class="full">
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
						  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="#">See More</a>
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img class="img-responsive" src="{{asset('images/img7.png')}}" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span>Informasi </span>Terkini</h2>
                        </div>
					  </div>
                </div>
			  </div>
               <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
									   <div class="full blog_img_popular">
                                          <img class="img-responsive" src="{{asset('gambar/pawai.png')}}" alt="#" />
										  <h4>Pawai Hari Disabilitas</h4>
										  <p>Hari Disabilitas Internasional: Merayakan Keberagaman dan Meningkatkan Kesadaran</p>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="{{asset('gambar/kegiatan-12.png')}}" alt="#" />
										  <h4>Pentas Seni</h4>
										  <p>Pentas seni sekolah adalah acara kreatif dan budaya yang menampilkan beragam talenta siswa dalam berbagai bentuk seni. Acara ini biasanya menjadi wadah ekspresi dan apresiasi terhadap seni musik, tari, teater, dan seni rupa.</p>
										</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>
           </div>
        </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Kontak kami</span></h2>
                        </div>
					  </div>
                </div>
			  </div>
           </div>
        </div>
	<!-- end section -->
	<!-- section -->
    <div class="section contact_section" style="background:#12385b;">
        <div class="container">
               <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12">
				    <div class="full float-right_img" style="padding-top: 90px">
                        <img src="{{asset('gambar/banner7.jpg')}}" alt="#" style="aspect-ratio:16/9">
                    </div>
                 </div>
				 <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
				    <div class="contact_form">
					    <form action="contact.html">
						   <fieldset>
						       <div class="full field">
							      <input type="text" placeholder="NAMA" name="your name" />
							   </div>
							   <div class="full field">
							      <input type="email" placeholder="Email" name="Email" />
							   </div>
							   <div class="full field">
							      <input type="phn" placeholder="Telepon" name="Phone number" />
							   </div>
							   <div class="full field">
							      <textarea placeholder="Pesan"></textarea>
							   </div>
							   <div class="full field">
							      <div class="center"><button>Kirim</button></div>
							   </div>
						   </fieldset>
						</form>
					</div>
                 </div>
               </div>
           </div>
        </div>
	<!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">

		   <div class="row">

		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   {{-- <img src="{{asset('templates/images/footer_logo.png')}}" alt="#" /> --}}
                       <strong style="color: white;font-size:20px">SLBN GUNUNGSARI</strong>
					 </div>
					 <div class="full white_fonts">
					    <p>Sekolah Luar Biasa Negeri
                            Gunungsari adalah lembaga pendidikan yang didedikasikan untuk anak-anak dengan kebutuhan khusus, yang terletak di Gunungsari, sebuah wilayah yang dikenal dengan keindahan alamnya dan masyarakat yang ramah. </p>
					 </div>
				 </div>
			  </div>

			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    {{-- <h3>Quick links</h3>
						    <ul>
							  <li><a href="#">> Join Us</a></li>
							  <li><a href="#">> Maintenance</a></li>
							  <li><a href="#">> Language Packs</a></li>
							  <li><a href="#">> LearnPress</a></li>
							  <li><a href="#">> Release Status</a></li>
							</ul> --}}
						 </div>
				 </div>

				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Terbaru</h3>
							 <p>Dapatkan informasi terbaru dari kami</p>
							 <div class="newsletter_form">
							    <form action="index.html">
								   <input type="email" placeholder="Your Email" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
					</div>

			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Kontak kami</h3>
							 <ul class="full">
							   <li><img src="{{asset('templates/images/i5.png')}}"><span> Jl. Teuku Umar no 344 Desa Pasinan, <br/>Kecamatan Baureno Kabupaten Bojonegoro</span></li>
							   <li><img src="{{asset('templates/images/i6.png')}}"><span>slbnegerigunungsari@gmail.com</span></li>
							   <li><img src="{{asset('templates/images/i7.png')}}"><span>+62 822-4400-8932(Ayu)</span></li>
						 </div>
					</div>

		   </div>

        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2019 design by html.design</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{asset('templates/js/jquery.min.js')}}"></script>
	<script src="{{asset('templates/js/popper.min.js')}}"></script>
    <script src="{{asset('templates/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('templates/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('templates/js/jquery.pogo-slider.min.js')}}"></script>
    <script src="{{asset('templates/js/slider-index.js')}}"></script>
    <script src="{{asset('templates/js/smoothscroll.js')}}"></script>
    <script src="{{asset('templates/js/form-validator.min.js')}}"></script>
    <script src="{{asset('templates/js/contact-form-script.js')}}"></script>
    <script src="{{asset('templates/js/isotope.min.js')}}"></script>
    <script src="{{asset('templates/js/images-loded.min.js')}}"></script>
    <script src="{{asset('templates/js/custom.js')}}"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });

  // start all the timers
  $('.timer').each(count);

  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>
