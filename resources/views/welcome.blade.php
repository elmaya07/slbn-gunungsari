<!DOCTYPE html>
<html lang="en" ng-app="commentApp">
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

    <style>
        .comment-section {
    max-height: 1000px;
    overflow-y: auto;
    padding-right: 10px; /* Untuk mencegah isi komentar menyentuh scrollbar */
    margin-bottom: 50px
}

 /* Popup Box at Bottom Right */
.popup-box-bottom-right {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 300px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 15px;
    z-index: 9999;
    visibility: hidden; /* Initially hidden */
    opacity: 0;
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
}

/* Popup Content */
.popup-box h5 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #333;
}

.popup-box p {
    font-size: 0.9rem;
    margin-bottom: 15px;
    color: #555;
}

.popup-box .btn {
    padding: 8px 15px;
    font-size: 0.9rem;
    border: none;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

.popup-box .btn:hover {
    background-color: #0056b3;
}

/* Close Button */
.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    font-size: 1.2rem;
    color: #333;
    cursor: pointer;
}

.close-btn:hover {
    color: red;
}

/* Show Popup */
.popup-box-bottom-right.show {
    visibility: visible;
    opacity: 1;
}


    </style>

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" ng-controller="CommentController">

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
                        <li><a class="nav-link" href="#box-profil">Profil</a></li>
                        <li><a class="nav-link" href="#box-kegiatan">Galleri</a></li>
                        <li><a class="nav-link" href="#box-info">Informasi Terkini</a></li>
						<li><a class="nav-link" href="#box-info">Kontak Kami</a></li>
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
                   @if (count($banner)>0)
                        @foreach ($banner as $row)
                        <div class="pogoSlider-slide" style="background-image:url({{asset('gambar/'.$row->gambar)}});background-position:center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="slide_text">

                                            <div style="display: flex;gap:100px;">
                                            <img src="{{asset('gambar/logo/logo.png')}}" style="width:150px"/>
                                           <div style=" background-color: rgba(0,0,0,0.7);color: black;padding: 0 5px; border-radius:5px">
                                            <h4>{{$row->text1}}</h4>
                                            <h3><span span class="theme_color"  style="color: white;"> {{$row->text2}}
                                              </span><br>{{$row->text3}}  </h3>
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
                        @endforeach
                   @endif

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
                        <img src="{{asset('gambar/foto-bersama.jpeg')}}" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding" id="box-kegiatan">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Galeri </span>Kegiatan</h2>
                        </div>
					  </div>
                </div>

                @if(count($kegiatan)>0)

                @foreach ($kegiatan as $item)

                <div class="col-md-4">
                    <div class="full blog_img_popular">

                       <img class="img-responsive" src="{{asset('gambar/'.$item['gambar'])}}" style="aspect-ratio:1/1;margin-bottom:10px" alt="#" />
					 <center>  <b>{{$item['deskripsi']}}</b></center>
                    </div>
                </div>
                @endforeach
                @endif
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


    <div class="section layout_padding padding_bottom-0" id="box-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span>Event </span></h2>
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
                                  @if (count($video))
                                      @foreach ($video as $item)
                                       @if ($item['type']=="local")

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="full blog_img_popular">
                                                <video controls  style="margin-bottom: 20px;width:100%">
                                                    <source src="{{asset('video/'.$item['file'])}}"  type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        </div>

                                        @endif

                                        @if ($item['type']=="instagram")
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="full blog_img_popular">
                                             <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="14" style="width: 100%; max-width: 540px;">
                                                 <a href="{{$item['file']}}" target="_blank"></a>
                                             </blockquote>
                                             </div>
                                         </div>
                                        @endif

                                        @if ($item['type']=="youtube")
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="full blog_img_popular">
                                             <iframe
                                            style="width: 100%"
                                            height="350"
                                             src="https://www.youtube.com/embed/{{$item['file']}}"
                                             title="YouTube video player"
                                             frameborder="0"
                                             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                             allowfullscreen>
                                         </iframe>
                                             </div>
                                         </div>
                                        @endif

                                     @endforeach
                                     @endif

                                 x
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


    <div class="section layout_padding padding_bottom-0" id="box-info">
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
                                  @if (count($blog))
                                      @foreach ($blog as $item)
                                      <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                           <img class="img-responsive" src="{{asset('gambar/'.$item['gambar'])}}" style="margin-bottom: 20px" alt="#" />
                                           <center><b>{{$item['judul']}}</b></center>
                                           <p>{{$item['deskripsi']}}</p>
                                         </div>
                                     </div>

                                      @endforeach
                                  @endif
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



                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <!-- Comment Form -->
                                <div class="card mb-2">
                                    <div class="card-header bg-primary text-white">
                                        <h5>Tulis Komentar</h5>
                                    </div>
                                    <div class="card-body">
                                        <form ng-submit="submitComment()">
                                            <div class="mb-1">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="name" ng-model="newComment.name" placeholder="Nama" required>
                                            </div>
                                            <div class="mb-1">
                                                <label for="comment" class="form-label">Komen</label>
                                                <textarea class="form-control" id="comment" ng-model="newComment.comment" rows="3" placeholder="Tulis komentar" required></textarea>
                                            </div>
                                            <input type="hidden" ng-model="newComment.parent_id">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Comments Section -->
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">
                                        <h5>Komentar</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted text-center" ng-if="comments.length === 0">
                                            No comments yet. Be the first to comment!
                                        </p>
                                        <div ng-repeat="comment in comments" class="d-flex mb-1">
                                            <!-- Avatar -->
                                            <div class="me-3">
                                                <img src="https://t3.ftcdn.net/jpg/06/33/54/78/360_F_633547842_AugYzexTpMJ9z1YcpTKUBoqBF0CUCk10.jpg" alt="Avatar" class="rounded-circle" width="50" height="50">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <strong>@{{ comment.name }}</strong>
                                                    <small class="text-muted">@{{ comment.timestamp | date: 'short' }}</small>
                                                </div>
                                                <p>@{{ comment.comment }}</p>
                                                <div>
                                                    <button class="btn btn-sm btn-outline-primary me-2" ng-click="reply(comment.id)">Reply</button>
                                                    {{-- <button class="btn btn-sm btn-outline-secondary">Like</button> --}}
                                                </div>
                                                <!-- Replies -->
                                                <div class="mt-2 ps-4 border-start" ng-if="comment.replies.length > 0">
                                                    <div ng-repeat="reply in comment.replies" class="d-flex mb-3">
                                                        <!-- Avatar for Reply -->
                                                        <div class="me-3">
                                                            <img src="https://t3.ftcdn.net/jpg/06/33/54/78/360_F_633547842_AugYzexTpMJ9z1YcpTKUBoqBF0CUCk10.jpg" alt="Avatar" class="rounded-circle" width="40" height="40">
                                                        </div>
                                                        <!-- Reply Content -->
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <strong>@{{ reply.name }}</strong>
                                                                <small class="text-muted">@{{ reply.timestamp | date: 'short' }}</small>
                                                            </div>
                                                            <p>@{{ reply.comment }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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
    <div class="section contact_section mt-5" style="background:#12385b;">
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
    <footer class="footer-box" id="box-profil">
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


    <div id="adPopup" class="popup-box-bottom-right">
        <div class="popup-box">
            <button class="close-btn" onclick="closePopup()">×</button>
            <div class="popup-content">
                <h5>Promo awal tahun!</h5>
                <p>Silahkan cek shopee kami, klink link berikut</p>
                <a href="https://shopee.co.id/" class="btn btn-primary">Buka Shopee</a>
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
    <script async src="//www.instagram.com/embed.js"></script>
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


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script>
    // AngularJS App
    const app = angular.module('commentApp', []);

    app.controller('CommentController', ['$scope', '$http', function ($scope, $http) {
        $scope.comments = []; // Array to store comments
        $scope.newComment = {
            name: '',
            comment: '',
            parent_id: null
        };

        // Fetch comments from the server
        $scope.fetchComments = function () {
            $http.get('/api/comments').then(function (response) {
                $scope.comments = response.data;
            }, function (error) {
                console.error('Error fetching comments:', error);
            });
        };

        // Submit new comment
        $scope.submitComment = function () {
            $http.post('/api/comments', $scope.newComment).then(function (response) {
                $scope.fetchComments(); // Refresh comments
                $scope.newComment = { name: '', comment: '', parent_id: null }; // Reset form
            }, function (error) {
                console.error('Error submitting comment:', error);
            });
        };

        // Reply to a comment
        $scope.reply = function (parentId) {
            $scope.newComment.parent_id = parentId; // Set parent_id for reply
            document.getElementById('name').focus(); // Focus on the name input
        };

        // Initialize comments
        $scope.fetchComments();
    }]);

    // Function to show the popup
function showPopup() {
    document.getElementById('adPopup').classList.add('show');
}

// Function to close the popup
function closePopup() {
    document.getElementById('adPopup').classList.remove('show');
}

// Automatically show the popup after 3 seconds (optional)
setTimeout(showPopup, 3000);
</script>
</body>

</html>
