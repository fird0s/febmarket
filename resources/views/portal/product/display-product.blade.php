


<!DOCTYPE HTML>
<html>

<head>
    <title>{{ $product->product_name }}|{{Config::get('app.title')}}</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="{{ $product->product_name }}" />
    <meta name="description" content="{{ strip_tags(str_limit($product->information_product, 30)) }}">
    <meta name="author" content="{{ $store->store_name }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>

    <!-- Facebook Meta -->
    <meta property="fb:app_id"       content="514632702050782" />
    <meta property="og:type"          content="ecommerce" />
    <meta property="og:title"         content="{{ $product->product_name }}|{{Config::get('app.title')}}" />
    <meta property="og:description"   content="{{ strip_tags(str_limit($product->information_product, 30)) }}" />
    <meta property="og:image"         content="{{ asset('media/product') }}}/{{ unserialize($product->images)[0] }}" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@keudee">
    <meta name="twitter:creator" content="@keudee">
    <meta name="twitter:title" content="{{ $product->product_name }}|{{Config::get('app.title')}}">
    <meta name="twitter:image" content="{{ asset('media/product') }}}/{{ unserialize($product->images)[0] }}">
    <meta name="twitter:label1" content="Fashion">
    <meta name="twitter:data1" content="Kategori">
    <meta name="twitter:label2" content="Rp. {{ number_format($product->price_product, 0, ".", ".") }}">
    <meta name="twitter:data2" content="Harga">

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
        .product-info-price {
            font-size: 23px;
        }
        .sidebar-left {
            margin-right : 0px;
        }

        .tabbable >.nav {
            border-radius: 5px 5px 0px 0px;
            border: 0px solid #d9d9d9;
            background: white;
            border-bottom: 1px solid #d9d9d9;
        }

        .tabbable .tab-content {
            border: 1px solid white;
        }
    </style>

</head>


<body>


    <div class="global-wrap">


        <!-- //////////////////////////////////
	//////////////MAIN HEADER/////////////
	////////////////////////////////////-->
        <div class="top-main-area text-center">
            <div class="container">
                <a href="/" class="logo mt5">
                            <img style="width: 130px;" src="/static/img/logos/keudee.png" alt="Keudee" title="Keudee - Temukan Apapun di Aceh" />
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
                        <div class="sidebar-box">
                            <h5>Produk Sejenis</h5>
                            <ul class="thumb-list">

                              @foreach ($product_similar as $data)
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
                    <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                        <h3>Add a Review</h3>
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="e.g. John Doe" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" placeholder="e.g. jogndoe@gmail.com" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Review</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Rating</label>
                                <ul class="icon-list icon-list-inline star-rating" id="star-rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="fotorama"   data-keyboard="true" data-transition="crossfade" data-thumbwidth="60" data-autoplay="4000" data-thumbheight="60" data-width="100%" data-maxheight="500" data-hash="false" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="100" data-thumbwidth="100">
                              @foreach ( unserialize($product->images) as $images)
                              <img src="{{{ asset('media/product') }}}/{{ $images }}" href="{{{ asset('media/product') }}}/{{ $images }}">
                              @endforeach
                            </div>
                        </div>
                        <div class="col-md-5">

                            <div class="product-info box">
                                <h3>{{ $product->product_name }}</h3>
                                <p class="product-info-price" style="letter-spacing: -1px; ">Rp. {{ number_format($product->price_product, 0, ".", ".") }}</p>
                                <ul class="list-inline">
                                    <li>
                                        @if ($product->condition == 0)
                                        <i class="fa fa-star fa-fw"></i> Baru
                                        @else
                                        <i class="fa fa-star fa-fw"></i> Bekas
                                        @endif
                                    </li>

                                    <li>
                                        <i class="fa fa-map-marker fa-fw"></i>{{ $location->city }}
                                    </li><br>
                                </ul>

                                <!-- <a href="#buy-dialog" class="btn btn-small btn-info popup-text" data-effect="mfp-move-from-top" style="width:100%;"><i style="font-size: 17px;" class="fa fa-shopping-cart fa-fw"></i> BELI</a> -->
                                <!-- <a href="#tab-3" class="btn btn-small btn-info" data-effect="mfp-move-from-top" style="width:100%;"><i style="font-size: 17px;" class="fa fa-shopping-cart fa-fw"></i> BELI</a> -->


                            </div>

                            <div class="gap gap-mini"></div>

                            <div class="product-info" style="margin-left:-30px;">
                                <ul class="product-share">
                                    <li><b>Bagikan : </b> </li>
                                    <li>
                                        <a class="fa fa-facebook" target="_blank" onclick="window.open('https://facebook.com/sharer/sharer.php?u=127.0.0.1:8000/p/asdsadas-vnwfvizwe2','_blank','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no, scrollbars=yes, resizable=yes, width=800, height=600');"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-twitter" target="_blank" onclick="window.open('https://twitter.com/home?status=asdsadas - 127.0.0.1:8000/p/asdsadas-vnwfvizwe2','_blank','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no, scrollbars=yes, resizable=yes, width=800, height=600');"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-google-plus" ></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-pinterest" ></a>
                                    </li>
                                </ul>
                            </div>

                            <!-- POPUP BELI -->


                            <!-- LOGIN REGISTER LINKS CONTENT -->
                            <div id="buy-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix container">
                                <i class="fa fa-sign-in dialog-icon"></i>
                                <h3>Keranjang Belanja</h3>

                                <form class="dialog-form" method="POST" action="/login_ajax">

                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="cart-item-image" src="/Applications/XAMPP/xamppfiles/htdocs/kedaia/media/products/thumbnails/5824131edda025117f9eb8eb/poeR2T6h20.jpg">
                                    </div>
                                    <div class="col-md-9">

                                          <div class="thumb-list-item-caption">
                                            <h5 class="thumb-list-item-title">asdsadas</h5>
                                            </h5>
                                            <p>@ Rp. 145.000.000</p>
                                        </div>
                                    </div>

                                    <div class="gap gap-mini"></div>
                                    <hr style="margin-left: 13px; margin-right: 13px; margin-top: -3px;">



                                    <dl class="dl-horizontal" style="margin-left: 13px;
                                    margin-right: 13px;">

                                     <dt style="text-align:left;">Penjual</dt>
                                      <dd class="text-success" style="text-align:right;">
                                          <a target="blank" href="#">fird0s Store</a>
                                      </dd>
                                      <br>


                                      <dt style="text-align:left; padding-top: 5px;">Jumlah Produk</dt>
                                          <div class="text-right">
                                          <select  name="quantity" class="form-control selectpicker show-tick quantity_product" data-live-search="true" >

                                          </select>

                                          <!-- <input type="number" data-price="145000000" style="width:50px;" max="3" min="1" value="1" class="form-group quantity_product" > -->
                                          </div>


                                      <dt style="text-align:left;">Biaya Kirim</dt>
                                      <dd class="text-success" style="text-align:right;">Belum termasuk</dd>
                                      <br>

                                      <dt style="text-align:left; padding-top: 5px;">Total Harga Produk</dt>
                                      <dd style="text-align:right;" class="">
                                          <div class="input-group">
                                              <div class="input-group-addon">Rp.</div>
                                                <input class="form-control price_result" name="price_product" maxlength="50" value="145.000.000" type="text" readonly="">
                                              </div>
                                      </dd>


                                    </dl>
                                    <hr style="margin-left: 13px; margin-right: 13px;">


                                </div>


                                    <a href="/shopping_cart/buy/58441b87dda025712b814459" value="Masuk" class="btn btn-primary"> Lanjut ke Pembayaran <i class="fa fa-chevron-right"></i></a>


                                    <ul class="dialog-alt-links">
                                      <li><a href="#">Tambah Barang Lain</a></li>
                                    </ul>


                                </form>
                            </div>
                            <div class="product-info box" style="margin-top: 25px;">
                                <h5><b>PENJUAL</b></h5>
                                            <div style="text-align:center;">

                                            @if ($store->store_logo)
                                            <img style="width: 100px; height: 80px; " src="{{{ asset('media/logo') }}}/{{ $store->store_logo }}" class="img-circle img-rounded">
                                            @else()
                                            <img style="width: 100px; height: 80px; " src="/static/img/no-avatar.gif" class="img-circle img-rounded">
                                            @endif

                                        <h3 class="show-product-brand-name" style="margin-top:20px;">
                                            <a href="" style="text-decoration:underline;">{{ $store->store_name }}
                                            </a>
                                        </h3>

                                        <ul class="list-inline" style="margin-top: 5px;">
                                            <li><i class="fa fa-map-marker fa-fw"></i>{{ $location->city }}</li>
                                            <li><i class="fa fa-phone fa-fw"></i> {{$store->phone}}</li>
                                        </ul>

                                        </div>


                                <ul class="list-inline" style="margin-top: 3px; text-align:center;">
                                    <li><small>Bergabung Sejak <b>{{ date('d F, Y', strtotime($store->created_at)) }}</b>.</small></li><br>
                                    <li><small>Terakhir Online <b>{{ date('d F, Y', strtotime($store->updated_at)) }}</b></small>.</li>
                                </ul>
                                <!--
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" style="width:100%;" class="btn btn-success btn-small">14 FEEDBACK </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" style="width:100%;" class="btn btn-default btn-small"><i class="fa fa-fw fa-envelope-o" style="color: red;"> </i> KIRIM PESAN </a>
                                    </div>
                                </div>
                                -->
                            </div>

                            <div class="gap gap-mini"></div>

                        </div>
                    </div>
                    <div class="gap gap-mini"></div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Informasi Produk </a>
                            </li>

                            <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-truck"></i>Pembayaran dan Pengiriman </a>
                            </li>

                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-comment"></i>Diskusi Produk</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                                {!! $product->information_product !!}
                            </div>
                            <div class="tab-pane fade" id="tab-3">

                                {!! $product->sent_and_payment !!}

                            </div>

                            <div class="tab-pane fade" id="tab-4">
                            <div class="fb-comments" mobile="auto-detect" data-numposts="5" data-width="100%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="gap gap-small"></div>
                </div>
            </div>

        </div>


        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT/////////
	////////////////////////////////////-->



        <!-- //////////////////////////////////
	//////////////MAIN FOOTER//////////////
	////////////////////////////////////-->

        <footer class="main">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row row-wrap">
                        <div class="col-md-3">
                            <a href="/">
                                <img style="width: 110px; margin-left: 0px;" src="/static/img/logos/keudee.png" alt="Keudee - Temukan Apapun di Aceh" title="Keudee - Temukan Apapun di Aceh" class="logo">
                            </a>
                            <ul class="list list-social">
                                <li>
                                    <a class="fa fa-facebook box-icon" href="https://www.facebook.com/Keudee-Aceh-401440216719461/" target="blank" data-toggle="tooltip" title="Facebook"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter box-icon" href="https://twitter.com/keudee" target="blank" data-toggle="tooltip" title="Twitter"></a>
                                </li>
                                <li>
                                    <a class="fa fa-flickr box-icon" href="https://flickr.com" target="blank" data-toggle="tooltip" title="Flickr"></a>
                                </li>
                                <li>
                                    <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                                </li>
                            </ul>
                            <p>Keudee merupakan pasar online terbesar di Aceh, Setiap individu dapat berjualan dan mengelola toko online mereka secara mudah dan gratis. Jual beli jadi lebih menyenangkan. Punya toko online?</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Berlangganan Berita</h4>
                            <div class="box">
                                <form>
                                    <div class="form-group mb10">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <p class="mb10">Anda akan mendapatkan email promo dan informasi penting lainnya.</p>
                                    <input type="submit" class="btn btn-primary" value="Berlangaanan" />
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Informasi Umum</h4>
                            <li><a href="/page/tentang.html">Tentang Kami</a></li>
                            <li><a href="/konfirmasi/">Konfirmasi Pembayaran</a></li>
                            <li><a href="#">Kebijakan Privasi</a></li>
                             <li><a href="/page/syarat-dan-ketentuan-layanan.html">Syarat dan Ketentuan Layanan</a></li>
                             <li><a href="/blogs/">Blog dan Artikel</a></li>
                             <li><a href="/page/kontak.html">Layanan Kontak</a></li>
                             <li><a href="/page/faq.html">FAQ (Pertanyaan yang sering diajukan</a></li>
                        </div>
                        <div class="col-md-3">
                            <h4>Artikel Terbaru</h4>
                            <ul class="thumb-list">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Copyright 2015, {{Config::get('app.title')}}</p>
                        </div>
                        <div class="col-md-6 col-md-offset-2">
                            <div class="pull-right">
                                <ul class="list-inline list-payment">
                                    <li>
                                        <img src="/static/img/logos/bank/bank-aceh.jpg" alt="Bank Aceh" title="Bank Aceh" />
                                    </li>
                                    <li>
                                        <img src="/static/img/logos/bank/bank-bni.png" alt="Bank BNI" title="Bank BNI" />
                                    </li>
                                    <li>
                                        <img src="/static/img/logos/bank/bank-mandiri.png" alt="Bank Mandiri" title="Bank Mandiri" />
                                    </li>
                                    <li>
                                        <img src="/static/img/logos/bank/Bank-BRI.png" alt="Bank BRI" title="Bank BRI" />
                                    </li>
                                    <li>
                                        <img src="/static/img/logos/bank/bank-bca.jpg" alt="Bank BCA" title="Bank BCA" />
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //////////////////////////////////
	//////////////END MAIN  FOOTER/////////
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

        <!-- Custom scripts -->
        <script src="/static/js/custom.js"></script>
        <script src="/static/js/mystyles.js"></script>
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
    </div>
</body>

</html>
