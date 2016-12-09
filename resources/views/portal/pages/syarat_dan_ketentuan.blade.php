


<!DOCTYPE HTML>
<html>

<head>
    <title>Syarat dan Ketentuan Layanan | {{Config::get('app.title')}} </title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{{ asset('/static/css/boostrap.css') }}}" type="text/css">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="{{{ asset('/static/css/font_awesome.css') }}}">
    <!-- Bootstrap Tagsinput-->
    <link rel="stylesheet" href="{{{ asset('/static/library/bootstrap-tagsinput/src/bootstrap-tagsinput.css')}}} ">
    <!-- Bootstrap Fileinput-->
    <link rel="stylesheet" href="{{{ asset('/static/library/bootstrap-fileinput/css/fileinput.min.css') }}}">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{{ asset('/static/library/bootstrap-select/dist/css/bootstrap-select.min.css') }}}">
    <!-- Icheck -->
    <link href="{{{ asset('/static/library/icheck/skins/minimal/minimal.css') }}}" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="{{{ asset('/static/library/carousel/owl-carousel/owl.carousel.css') }}}" rel="stylesheet">
    <link href="{{{ asset('/static/library/carousel/owl-carousel/owl.theme.css') }}}" rel="stylesheet">
    <!-- Magnific-Popup -->
    <link rel="stylesheet" href="{{{ asset('/static/library/Magnific-Popup/dist/magnific-popup.css') }}}" type="text/css">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="{{{ asset('/static/css/styles.css') }}}">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
  <![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="{{{ asset('/static/css/mystyles.css') }}}">
    <link rel="shortcut icon" href="{{{ asset('/static/img/logos/favicon.ico') }}}" />

    </style>
</head>

<body>


    <div class="global-wrap">

        <!-- MAIN HEADER -->
        <div class="top-main-area text-center">
            <div class="container">
                <a href="/" class="">
                            <img style="width:130px; margin-left:10px;" src="/static/img/logos/keudee.png" alt="Kedaia" title="Keudee - Temukan Apapun di Aceh" />
                        </a>
            </div>
        </div>
        <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- MAIN NAVIGATION -->
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                <li><a href="/">Beranda</a> </li>
                                <li><a>Tentang</a>
                                    <ul>

                                        <li><a href="{{ route('page_about') }}">{{Config::get('app.title')}}</a>
                                        </li>
                                        <li><a href="{{ route('page_syarat_dan_ketentuan') }}">Syarat dan Ketentuan Layanan</a>
                                        </li>

                                    </ul>
                                </li>

                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('page_faq') }}">Faq</a></li>
                                <li><a href="{{ route('page_contact') }}">Kontak</a></li>
                            </ul>
                        </nav>
                        <!-- END MAIN NAVIGATION -->
                    </div>
                    <div class="col-md-6">
                        <!-- LOGIN REGISTER LINKS -->
                        <ul class="login-register">

                          @if($auth != 'false')
                          <li>
                              <a href="{{{ route('account_profile') }}}"><i class="fa fa-user"></i>Hi, {{{ $user->name }}}</a>
                          </li>
                          <li>
                              <a href="{{{ route('account_logout') }}}">
                              <i class="fa fa-sign-out"></i>Log Out</a>
                          </li>
                          @elseif ($auth == 'false')
                          <li>
                              <a href="{{{ route('auth_login') }}}"><i class="fa fa-sign-in"></i>Login</a>
                          </li>
                          <li>
                              <a href="{{{ route('register') }}}"><i class="fa fa-edit"></i>Register</a>
                          </li>
                          @endif

                        </ul>
                    </div>
                </div>
            </div>
        </header>



        <!-- END LOGIN REGISTER LINKS CONTENT -->




        <!-- PAGE TITLE -->
        <!-- <div class="top-title-area">
            <div class="container">
                <h1 class="title-page"></h1>
            </div>
        </div> -->
        <!-- END PAGE TITLE -->

       <form action="/search/" method="GET" class="search-area form-group search-area-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 clearfix">
                        <label><i class="fa fa-search"></i><span>Saya mencari</span>
                        </label>
                        <div class="search-area-division search-area-division-input">
                            <input name="q" class="form-control" type="text" placeholder="Laptop" />
                        </div>
                    </div>
                    <div class="col-md-3 clearfix">
                        <label><i class="fa fa-map-marker"></i><span>di</span>
                        </label>
                        <div class="search-area-division search-area-division-location">
                            <input class="form-control" type="text" placeholder="Banda Aceh" />
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END SEARCH AREA -->

        <div class="gap"></div>


        <!-- //////////////////////////////////
    //////////////END MAIN HEADER//////////
    ////////////////////////////////////-->


        <!-- //////////////////////////////////
    //////////////PAGE CONTENT/////////////
    ////////////////////////////////////-->



        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <article class="post">
                        <div class="post-inner">
                            <h4 class="post-title">Syarat & Ketentuan</h4>
                            <div class="post-meta"></div><br>

                            <b>Syarat & Ketentuan Penggunaan</b>
                            <div class="entry-content" itemprop="articleBody">
                    						<p>Kebijakan privasi yang dimaksud di <b>FebMarket</b> adalah acuan yang mengatur dan melindungi penggunaan data dan informasi penting para pengguna situs <b>FebMarket</b>. Data dan informasi yang telah dikumpulkan pada saat mendaftar, mengakses dan menggunakan layanan di <b>FebMarket</b>, seperti alamat e-mail, nomor telepon, foto, gambar, dan lain-lain.<br>
                                Kebijakan – kebijakan tersebut di antaranya:</p>
                                <ul>
                                <li><b>FebMarket</b> melindungi segala informasi yang diberikan pengguna pada saat pendaftaran, mengakses, dan menggunakan seluruh layanan <b>FebMarket</b>.</li>
                                <li><b>FebMarket</b> melindungi segala hak pribadi yang muncul atas informasi mengenai suatu produk yang ditampilkan oleh pengguna layanan <b>FebMarket</b>, baik berupa berupa foto, username, logo, dan lain-lain.</li>
                                <li><b>FebMarket</b> berhak menggunakan data dan informasi para pengguna situs demi meningkatkan mutu dan pelayanan di <b>FebMarket</b>.</li>
                                <li><b>FebMarket</b> tidak bertanggung jawab atas pertukaran data yang dilakukan sendiri di antara pengguna situs.<br>
                                <b>FebMarket</b> hanya dapat memberitahukan data dan informasi yang dimiliki oleh para pengguna situs bila diwajibkan dan/atau diminta oleh institusi yang berwenang&nbsp; berdasarkan ketentuan hukum yang berlaku, perintah resmi dari pengadilan, dan/atau perintah resmi dari instansi/aparat yang bersangkutan.</li>
                                <li>Pengguna situs <b>FebMarket</b> dapat berhenti berlangganan beragam informasi promo terbaru dan penawaran eksklusif (unsubscribe) jika tidak ingin menerima informasi tersebut.</li>
                                </ul>

                    					</div>

                        </div>
                    </article>
                    <div class="gap"></div>
                </div>
                <div class="col-md-3">
                    <aside class="sidebar-right hidden-phone">
                        <div class="sidebar-box">
                            <ul class="icon-list blog-category-list">
                            <h4>{{Config::get('app.title')}}</h4>

                                <li>
                                    <a href="{{ route('page_about') }}">
                                        <i class="fa fa-angle-right"></i>Tentang {{Config::get('app.title')}}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('page_faq') }}">
                                        <i class="fa fa-angle-right"></i>Faq (Pertanyaan yang sering diajukan)
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('page_contact') }}">
                                        <i class="fa fa-angle-right"></i>Kontak
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('page_syarat_dan_ketentuan') }}">
                                        <i class="fa fa-angle-right"></i>Syarat dan Ketentuan Layanan
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="sidebar-box">
                            <h5>Artikel Terbaru</h5>
                            <ul class="thumb-list">




                            </ul>
                        </div>

                        <div class="sidebar-box">
                            <h5>Produk Popular</h5>
                            <ul class="thumb-list">
                              @foreach ($product_popular as $data)
                              <li>
                                  <a href="{{ route('display_product', ['slug' => $data->slug_url]) }}">
                                      <img src="{{{ asset('media/product') }}}/{{ unserialize($data->images)[0] }}" alt="" />
                                  </a>
                                  <div class="thumb-list-item-caption">
                                      <h5 class="thumb-list-item-title">
                                      <a href="{{ route('display_product', ['slug' => $data->slug_url]) }}">{{{ $data->product_name }}}</a>
                                      </h5>
                                      <p>Rp. {{ number_format($data->price_product, 0, ".", ".") }}</p>
                                  </div>
                              </li>
                              @endforeach
                            </ul>
                        </div>

                    </aside>


                </div>
            </div>

        </div>


        <!-- //////////////////////////////////
    //////////////END PAGE CONTENT/////////
    ////////////////////////////////////-->



        <!-- MAIN FOOTER -->


        @include('account/module/footer')

        <!-- END FOOTER -->




        <!-- Scripts queries -->
        <script src="{{{ asset('/static/js/jquery.js') }}}" ></script>
        <script src="{{{ asset('/static/js/boostrap.min.js') }}}" ></script>
        <script src="{{{ asset('/static/js/countdown.min.js') }}}" ></script>
        <script src="{{{ asset('/static/js/flexnav.min.js') }}}" ></script>
        <script src="{{{ asset('/static/js/magnific.js') }}}" ></script>
        <script src="{{{ asset('/static/js/tweet.min.js') }}}" ></script>
        <script src="{{{ asset('/static/js/fitvids.min.js') }}}" ></script>
        <script src="{{{ asset('/static/js/mail.min.js') }}}" ></script>
        <script src="{{{ asset('/static/js/ionrangeslider.js') }}}" ></script>
        <script src="{{{ asset('/static/js/icheck.js') }}}" ></script>
        <script src="{{{ asset('/static/js/fotorama.js') }}}" ></script>
        <script src="{{{ asset('/static/js/card-payment.js') }}}" ></script>
        <script src="{{{ asset('/static/js/owl-carousel.js') }}}" ></script>
        <script src="{{{ asset('/static/js/masonry.js') }}}" ></script>
        <script src="{{{ asset('/static/js/nicescroll.js') }}}" ></script>
        <script src="{{{ asset('/static/library/icheck/icheck.js') }}}" ></script>
        <script src="{{{ asset('/static/library/ckeditor/ckeditor.js') }}}" ></script>
        <script src="{{{ asset('/static/library/bootstrap-fileinput/js/fileinput.min.js') }}}" ></script>
        <script src="{{{ asset('/static/library/carousel/owl-carousel/owl.carousel.min.js') }}}" ></script>
        <script src="{{{ asset('/static/library/bootstrap-tagsinput/src/bootstrap-tagsinput.js') }}}" ></script>

        <script type="text/javascript" src="{{{ asset('/static/library/Magnific-Popup/dist/jquery.magnific-popup.min.js') }}}" ></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>

        <script src="{{{ asset('/static/js/custom.js') }}}" ></script>
        <script src="{{{ asset('/static/js/mystyles.js') }}}" ></script>

    </div>
</body>

</html>
