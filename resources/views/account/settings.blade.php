<!DOCTYPE HTML>
<html>
<head>
    <title>Pengaturan | {{Config::get('app.title')}}</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


</head>



<body>


    <div class="global-wrap">


        <!-- //////////////////////////////////
    //////////////MAIN HEADER/////////////
    ////////////////////////////////////-->
        <div class="top-main-area text-center">
            <div class="container">
                <a href="/" class="">
                            <img style="width:130px;" src="{{{ asset('/static/img/logos/keudee.png') }}}" alt="Keudee" title="Keudee - Temukan Apapun di Aceh" />
                        </a>
            </div>
        </div>
        <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu<span class="touch-button"></span></div>
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                              <li><a href="{{ route('home') }}">Beranda</a> </li>
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
                            <li>
                                <a href="{{{ route('account_profile') }}}"><i class="fa fa-user"></i>Hi, {{{ $user->name }}}</a>
                            </li>
                            <li>
                                <a href="{{{ route('account_logout') }}}">
                                <i class="fa fa-sign-out"></i>Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        <!-- PAGE TITLE -->
        <!-- <div class="top-title-area">
            <div class="container">
                <h1 class="title-page"></h1>
            </div>
        </div> -->
        <!-- END PAGE TITLE -->

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
            <div class="row" >
                <div class="col-md-3">

                  <aside class="sidebar-left">
                      <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                          <li><a href="{{{ route('account_profile') }}}"><i class="fa fa-user"></i>Profil</a>
                          </li>
                          <li><a href="{{{ route('account_social_media') }}}"><i class="fa fa-bullhorn"></i>Social Media</a>
                          </li>
                          <li class="active"><a href="{{{ route('account_settings') }}}"><i class="fa fa-truck"></i>Pengaturan</a>
                      </ul>
                  </aside>
                  <aside class="sidebar-left">
                      <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                          <li><a href="{{{ route('account_product') }}}"><i class="fa fa-file-text-o"></i>Semua Produk</a>
                          </li>
                          <li><a href="{{{ route('account_add_product') }}}"><i class="fa fa-plus"></i>Tambah Produk</a>
                          </li>
                      </ul>
                  </aside>
                  <aside class="sidebar-left">
                      <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                          <li><a href="{{{ route('account_change_pwd') }}}"><i class="fa fa-unlock"></i>Ganti Password</a>
                          </li>
                      </ul>
                  </aside>


                </div>
                <div class="col-md-9">
                  @if (Session::has('success'))
                  <div class="alert alert-success">
                    {{Session::get('success')}}
                  </div>
                  @endif
                  @if (Session::has('error'))
                  <div class="alert alert-danger">
                    {{Session::get('error')}}
                  </div>
                  @endif

                    <div class="row">



              <form action="{{ route('account_settings') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div id="googleMap" style="margin: 2px 20px 18px 20px;;width:840;height:300px;"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="region">Kota/Kabupaten</label>
                        <select name="region" class="form-control">
                        @foreach ($list_city as $data)
                          <option value="{{ $data->id }}" @if($store->city == $data->id) selected @endif>{{{ $data->city }}}</option>
                        @endforeach
                        </select>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label>Bank Pembayaran</label>
                              <select name="bank_account" title="BCA" class="form-control selectpicker show-tick">
                                <option value="1">Bank Aceh</option>
                                <option value="2">BNI</option>
                                <option value="3">Mandiri</option>
                                <option value="4">BRI</option>
                                <option value="5">BCA</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group" style="">
                           <label>No. Rekening</label>
                           <input type="text" name="payment_number" value="{{ $store->payment_number }}"  class="form-control">
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-6">
                          <label>Latitude</label>
                          <input type="text" name="latitude" value="{{ $store->map_latitude }}" class="form-control account_latitude" readOnly="true">
                      </div>
                      <div class="col-md-6">
                          <label>Longtitude</label>
                          <input type="text" name="longtitude" value="{{ $store->map_longtitude }}"  class="form-control account_longtitude" readOnly="true">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div style="margin-top: 15px;">
                           <label>Ganti Gambar Cover</label><br>
                           <label for="header_image" data-toggle="tooltip" title="Rekomendasi ukuran 852x235" class="btn btn-default"><i class="fa fa-file-photo-o fa-fw"></i> Ganti Gambar Cover </label>
                            <input type="file" id="header_image" name="image_header" class="btn btn-default" style="display:none;" accept="image/x-png, image/gif, image/jpeg" >
                        </div>
                      </div>

                      <div class="col-md-6" style="margin-top: 15px;">
                          <label>Lihat Gambar</label>
                          <a href="#display_author_image" class="btn btn-default btn-info popup-text" data-effect="mfp-move-from-top"><i class="fa fa-eye fa-fw"></i> Lihat Gambar Cover</a>
                      </div>


                       <!-- POP UP IMAGE -->
                       <div id="display_author_image" class="mfp-with-anim mfp-hide mfp-dialog clearfix container">

                         <h4>Gambar Header</h4>
                         <hr>

                         @if ($store->image_header)
                         <img style="" src="{{{ asset('media/image_header') }}}/{{ $store->image_header }}" class="img-circle img-rounded">
                         @else()
                         <img style="width: 100px; height: 80px; " src="{{{ asset('/static/img/no-avatar.gif') }}}" class="img-circle img-rounded">
                         @endif


                         <hr>

                       </div>



                    </div>

                  </div>

                    <div class="gap gap-mini"></div>

                  <div class="form-group" style="margin-left:15px;margin-right:15px;">
                            <label>Pengiriman dan Pembayaran :
                              <a href="#" data-toggle="tooltip" title="Pengiriman dan Pembayaran"  class="fa fa-question-circle"> </a>
                            </label>
                            <textarea rows="3" name="sent_and_payment" maxlength="200" class="form-control ckeditor">{{ $store->sent_and_payment }}</textarea>
                        </div>
                    <input type="submit" value="Simpan Pengaturan" class="btn btn-primary"style="margin-left:15px;">
                  </form>








                    </div>
                    <div class="gap"></div>
                </div>
            </div>

        </div>


        <!-- //////////////////////////////////
    //////////////END PAGE CONTENT/////////
    ////////////////////////////////////-->



        <!-- //////////////////////////////////
    //////////////MAIN FOOTER//////////////
    ////////////////////////////////////-->

        @include('account/module/footer')

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

    <script type="text/javascript" src="{{{ asset('/static/library/Magnific-Popup/dist/jquery.magnific-popup.min.js') }}}" ></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script src="{{{ asset('/static/js/custom.js') }}}" ></script>
    <script src="{{{ asset('/static/js/mystyles.js') }}}" ></script>


    <!-- Custom scripts -->
    <script src="{{{ asset('/static/library/bootstrap-select/dist/js/bootstrap-select.min.js') }}}" ></script>
        <script>
            $(document).ready(function(){
              $('input').iCheck({
                checkboxClass: 'icheckbox_minimal',
                radioClass: 'iradio_minimal',
                increaseArea: '20%' // optional
              });
            });
        </script>
    </div>
</body>

</html>
