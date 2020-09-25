<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


 <i class="fa fa-deviantart" aria-hidden="true"></i>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    @yield('head-script')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bereljautot.css') }}" rel="stylesheet">
    <style>
        .site-header{
            background-color: rgba(25, 25, 98, 0.9) !important;
        }
        .bg-myColor {background-color: #777;color: #fff;} .nav-link {color: #fff !important;}
    </style>


    @yield('head-seo')


</head>
<body class="egyedi_font">
    <div class="topfixed fixed-top">
        <header class="site-header">
            <div class="container sp-cont">
				<div class="row">
					<div class="col-md-12">

						<h2 class="margin-top10"> <img src="https://www.bereljolcsoautot.hu/images/berelj-logo.png" style="max-height: 100px; margin: -10px 20px -10px;"><strong>Bérelj Olcsó Autót</strong> <span style="font-size:15px"> autóbérlés olcsón, autókölcsönzés Budapesten!</span></h2>
                        <p></p>
						<div class="azonnali">
							Telefon: <a href="tel:06707707063">06 70 770 70 63</a><br />
							E-mail: <a href="mailto:bereljolcsonautot@gmail.com">bereljolcsonautot@gmail.com</a>
						</div>
					</div>
				</div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-myColor ">
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto justify-content-center">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Kezdőoldal</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bérelhető autóink
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Személyautók</a>
                    <a class="dropdown-item" href="#">Kisbuszok</a>
                    <!--<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('a-bereljolcsonautot-autoberles-feltetelei')}}">Autóbérlés feltételei</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Foglalási űrlap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Elérhetőség</a>
                  </li>
              </ul>

            </div>
          </nav>
    </div>
        <main class="py-4 mainBody" style="margin-top:15%;">
            @yield('content')
        </main>

        <div class="row FooterColor" id="pageFooter ">

               <div class="col-4 col-md-4 pt-5">
                    <h4 class="newH4Color pt-2">OLDALAK</h4>
                    <ul class="list-unstyled" id="footerLinks">
                        <li><a class="footerLinkItem" href="#">Kezdőoldal</a></li>
                        <li><a class="footerLinkItem" href="#">Bérelhető autók</a></li>
                        <li><a class="footerLinkItem" href="{{url('a-bereljolcsonautot-autoberles-feltetelei')}}">Autóbérlés feltételei</a></li>
                        <li><a class="footerLinkItem" href="#">Foglalási űrlap</a></li>
                        <li><a class="footerLinkItem" href="#">Adatvédelmi tájékoztató</a></li>
                    </ul>
               </div>
               <div class="col-4 col-md-4 pt-5">
                    <h4  class="newH4Color">ELÉRHETŐSÉG</h4>
                    <p>
                        <svg class="bi" width="32" height="32" fill="currentColor">

                        </svg>
                    </p>
                </div>
                <div class="col-4 col-md-4 pt-5">
                    <h4  class="newH4Color">FACEBOOK</h4>
                </div>

        </div>

        @yield('ga-remarketing')

        @yield('ga-map')

        @yield('ga-code')

        <script type="text/javascript">
            window.cookieconsent_options = {"message":"Weboldalunk használatával jóváhagyod a cookie-k (sütik) használatát. Szolgáltatásunk igéynbe vételével személyes adataidat Mi kezeljük majd, melyről tájékoztatót a GDPR-nek megfelelően itt találsz:","dismiss":"Elfogadom","learnMore":"További információk","link":window.location.origin + "/adatvedelmi-tajekoztato.php","theme":"dark-bottom","target":"_blank"};
         </script>

        <script type="text/javascript" src="{{asset('js/cookieconsent.min.js')}}"></script>

</body>
</html>
