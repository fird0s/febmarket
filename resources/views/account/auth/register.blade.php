<!DOCTYPE HTML>
<html>

<head>

  <title>Register | {{Config::get('app.title')}}</title>
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

    <style type="text/css">
        .btn--block {
display: block;
text-align: center;
width: 100%;}
    .line-through {
border-top: 1px solid #DDDDDD;
margin: 20px 0;
position: relative;
text-align: center;
}
.line-through span {
background: #f2f2f2;
padding: 0 10px;}

.muted {
color: #999999;
}
.line-through p {
position: absolute;
text-align: center;
top: -13px;
width: 100%;}
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
                             <img style="width:130px; margin-left:10px;" src="/static/img/logos/keudee.png" alt="Keudee" title="Keudee - Temukan Apapun di Aceh" />
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
                                <a href="{{{ route('auth_login' )}}}"><i class="fa fa-sign-in"></i>Login</a>
                            </li>
                            <li>
                                <a href="{{{ route('register' )}}}"><i class="fa fa-edit"></i>Register</a>
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
                            <input name="q" class="form-control" type="text" placeholder="Laptob" />
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
            <div class="row col-xs-offset-2" >
                <div class="col-md-3">
                    <aside class="sidebar-left">
                        <ul class="nav nav-pills nav-stacked nav-arrow">

                            <li>
                                <a href="{{{ route('auth_login') }}}"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                            </li>
                            <li class="active">
                                <a href="{{{ route('register') }}}"><i class="fa fa-edit fa-fw"></i> Register</a>
                            </li>

                        </ul>
                        <br>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="row">


                        <div class="col-md-7">
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
                          <form action="{{ route('register')}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
      								       <div class="form-group">
      				                    <label>Nama Pemilik</label>
      				                    <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            	  <input type="text" class="form-control" name="seller_name" required="" autofocus="">
                                          </div>
      				                </div>
                                      <div class="form-group">
      				                    <label>Nama Kedai</label>
      				                       <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-shopping-cart"></i></div>
      				                      	  <input type="text" class="form-control" name="store" required="">
                                             </div>
      				                </div>
      				                <div class="form-group">
      				                    <label>Email </label>
      				                    <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
      				                    	  <input type="email" name="email" class="form-control" required="">
                                          </div>
      				                </div>
                              <div class="form-group">
      				                    <label>NO HP </label>
      				                    <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-phone"></i></div>
      				                    	  <input type="text" name="phone" class="form-control" required="">
                                          </div>
      				                </div>
      				                <hr>
      				                <div class="form-group">
      				                    <label>Password </label>
      				                    <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-key"></i></div>
      				                    	  <input type="password" pattern=".{5,}" title="Minimal 5 karakter" name="password" class="form-control" required="">
                                          </div>

      				                </div>
      				                <div class="form-group">
      				                    <label>Tulis Password Lagi </label>
      				                    <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-key"></i></div>
      				                    	  <input type="password" pattern=".{5,}" title="Minimal 5 karakter" name="re_password" class="form-control" required="">
                                          </div>
      				                </div>
      				                 <input type="submit" value="Daftar sekarang" class="btn btn-primary">

                          </form>
                       </div>



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

        <!-- Custom scripts -->
        <script src="{{{ asset('/static/js/custom.js') }}}" ></script>
        <script src="{{{ asset('/static/js/mystyles.js') }}}" ></script>
    </div>
</body>

</html>
