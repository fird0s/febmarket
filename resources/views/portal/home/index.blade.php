<!DOCTYPE HTML>
<html>
<head>
    <title>{{Config::get('app.title')}}</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Temukan Apapun di Keudee" />
    <meta name="description" content="Keudee merupakan pasar online terbesar di Aceh, Setiap individu dapat berjualan dan mengelola toko online mereka secara mudah dan gratis. Jual beli jadi lebih menyenangkan. Punya toko online?">
    <meta name="author" content="firdaus, fird0s, Muhammad Firdaus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="Z-2zKZNaQZnqgE1vsHd3U-AvquGBmsKskaG-cAaLR8M" />

    <!-- Facebook Meta -->
    <meta property="fb:app_id"       content="514632702050782" />
    <meta property="og:type"          content="ecommerce" />
    <meta property="og:title"         content="Keudee - Temukan Apapun di Aceh" />
    <meta property="og:description"   content="Keudee merupakan pasar online terbesar di Aceh, Setiap individu dapat berjualan dan mengelola toko online mereka secara mudah dan gratis. Jual beli jadi lebih menyenangkan. Punya toko online?" />
    <meta property="og:image"         content="127.0.0.1:8000/static/img/logos/keudee.png" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@keudee">
    <meta name="twitter:creator" content="@keudee">
    <meta name="twitter:title" content="Keudee - Temukan Apapun di Aceh">
    <meta name="twitter:image" content="127.0.0.1:8000/static/img/logos/keudee.png">
    <meta name="twitter:description" content="Keudee merupakan pasar online terbesar di Aceh, Setiap individu dapat berjualan dan mengelola toko online mereka secara mudah dan gratis. Jual beli jadi lebih menyenangkan. Punya toko online?" />


    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>

    <!-- pace -->
    <script src="{{{ asset('/static/library/pace/pace.min.js') }}} "></script>
    <link href="{{{ asset ('/static/library/pace/themes/blue/pace-theme-flash.css') }}}" rel="stylesheet" />

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

    <style type="text/css">
        .owl-controls .owl-pagination {
            bottom:1px !important;
        }
        .owl-page {
        }

    </style>
</head>
<body>


    <div class="global-wrap">


        <!-- //////////////////////////////////
	//////////////MAIN HEADER/////////////
	////////////////////////////////////-->
        <div class="top-main-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="/" class="">
                            <img style="width:170px;" src="/static/img/logos/keudee.png" alt="Keudee" title="Keudee - Temukan Apapun di Aceh" />
                        </a>
                    </div>
                    <div class="col-md-6 col-md-offset-4">
                        <div class="pull-right">
                            <ul class="header-features">
                                <li><i class="fa fa-phone"></i>
                                    <div class="header-feature-caption">
                                        <h5 class="header-feature-title">{{Config::get('app.phone')}}</h5>
                                        <p class="header-feature-sub-title">24/7 bantuan </p>
                                    </div>
                                </li>
                                <li><i class="fa fa-fw fa-shopping-cart "></i>
                                    <div class="header-feature-caption">
                                        <h5 class="header-feature-title">Gratis Beriklan</h5>
                                        <p class="header-feature-sub-title">Unlimited Features</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-fw fa-plus "></i>
                                    <div class="header-feature-caption">
                                        <a href="/account/profile/">
                                        <h5 class="header-feature-title">Pasang iklan</h5>
                                        <p class="header-feature-sub-title">Tanpa harus Login</p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                <li class="active"><a href="{{ route('home') }}">Beranda</a> </li>
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
                    </div>
                    <div class="col-md-6">
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
                                <a href="/login/"><i class="fa fa-sign-in"></i>Login</a>
                            </li>
                            <li>
                                <a href="/register/"><i class="fa fa-edit"></i>Register</a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- TOP AREA -->

        <div class="top-area">
            <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true" data-nav="true">


              <div>
                <!-- <a href="#"> -->
                    <div class="bg-holder">
                        <img src="{{{ asset('media/slider') }}}/coffee.jpg" />

                    </div>
                <!-- </a> -->
              </div>

                <div>
                  <!-- <a href="#"> -->
                      <div class="bg-holder">
                          <img src="{{{ asset('media/slider') }}}/shoes.jpg" />

                      </div>
                  <!-- </a> -->
                </div>


            </div>
        </div>

        <!-- END TOP AREA -->

        <!-- SEARCH AREA -->
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
                <div class="col-md-3">
                    <aside class="sidebar-left">
                        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                            <li class="active"><a href="{{ route('home') }}"><i class="fa fa-ticket"></i>All</a></li>
                            @foreach ($category as $data)
                            <li><a href="{{ route('category', ['slug_url' => $data->slug_url]) }}"><i class="fa {{{ $data->icon_css_name }}}"></i>{{{ $data->category_name }}}</a></li>
                            @endforeach

                        </ul>
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
                <div class="col-md-9">
                  <div class="row">
                    <!-- SORTING PAGE -->
                    <div class="col-md-3">
                           <div class="product-sort">
                               <span class="product-sort-selected"> urut <b>Tanggal Rilis</b></span>
                               <a href="#" class="product-sort-order fa fa-angle-down"></a>
                               <ul>
                                   <li>
                                       <a href="#">Produk Terbaru</a>
                                   </li>
                                   <li>
                                       <a href="#">Nama Produk</a>
                                   </li>
                                   <li>
                                       <a href="#">Dilihat Terbanyak</a>
                                   </li>
                                   <li>
                                       <a href="#">Harga Tertinggi</a>
                                   </li>
                                   <li>
                                       <a href="#">Harga Terendah</a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       <div class="col-md-2 col-md-offset-7">
                           <div class="product-view pull-right">
                             <a class="fa fa-th-large active"></a>
                             <a class="fa fa-list" href="{{ route('home_thumbnail') }}"></a>
                           </div>
                       </div>
                    </div>
                    <!-- END SORTING PAGE -->
                    <div class="row row-wrap" id="masonry">
                       @foreach ($product as $data)
                        <a class="col-md-3 col-masonry" href="{{ route('display_product', ['slug' => $data->slug_url]) }}">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="{{{ asset('media/product') }}}/{{ unserialize($data->images)[0] }}" title="{{{ $data->price_product }}}" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">{{{ $data->product_name }}}</h5>
                                    <div class="product-meta"><span class="product-time"></span>
                                        <ul class="product-price-list">
                                            <li style="font-size: 13px; color: black;">Rp. {{ number_format($data->price_product, 0, ".", ".") }}</li>
                                        </ul>
                                    </div>
                                    <p class="product-location"><i class="fa fa-map-marker"></i> </p>
                                </div>
                            </div>
                        </a>
                        @endforeach

                    </div>

                    <!-- pagination -->

                </div>
            </div>
            <div class="gap"></div>
        </div>


        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT/////////
	////////////////////////////////////-->



        <!-- //////////////////////////////////
	//////////////MAIN FOOTER//////////////
	////////////////////////////////////-->

        @include('account/module/footer')

	<!--//////////////END MAIN  FOOTER/////////
	////////////////////////////////////-->


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


        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                                ga('create', 'UA-69272814-1', 'auto');
                                ga('send', 'pageview');
        </script>

        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '514632702050782',
              xfbml      : true,
              version    : 'v2.5'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/id_ID/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>

        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
        if (screen.width > 640) {

        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="//v2.zopim.com/?3Rz7brE54POApBWcBvVZUQVcsQ2qd5YY";z.t=+new Date;$.
        type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

        }
        </script>
        <!--End of Zopim Live Chat Script-->
    </div>
</body>

</html>
