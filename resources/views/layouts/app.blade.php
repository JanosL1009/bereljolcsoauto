<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <i class="fa fa-deviantart" aria-hidden="true"></i>
    <!-- Scripts -->
    <script src="{{ asset('js/popper.js') }}" defer></script>

    <script src="{{asset('js/app.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    @yield('head-script')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bereljautot.min.css') }}" rel="stylesheet">
    <style>
        body{
            background-color: #0081DF;
        }
        .site-header{
            background-color: rgba(25, 25, 98, 0.9) !important;
        }
        .bg-myColor {background-color: #777;color: #fff;} .nav-link {color: #fff !important;height: 45px !important;}
    </style>


    @yield('head-seo')


</head>
<body class="egyedi_font">
    <div class="sticky-top">
        <header class="site-header" style="padding: 30px;">
            <div class="container sp-cont">
				<div class="row">
                    <div class="col-md-2 col-sm-12">
                        <img src="https://www.bereljolcsoautot.hu/images/berelj-logo.png" alt="berelj-olcson-autot-autoberles-autkolcsonzes-berauto-budapesten" style="max-height: 100px; margin: -10px 20px -10px;">
                    </div>
					<div class="col-md-7 col-sm-12 pt-3" id="FejlecCim">

						<h2> Bérelj Olcsó Autót<span style="font-size:15px"> autóbérlés olcsón, autókölcsönzés Budapesten!</span></h2>


                    </div>
                    <div class="col-md-3 col-sm-12" id="elerhetoseg">
                        <div>
							Telefon: <a href="tel:06707707063">06 70 770 70 63</a><br />
							E-mail: <a href="mailto:bereljolcsonautot@gmail.com">bereljolcsonautot@gmail.com</a>
						</div>
                    </div>
				</div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-myColor pl-5 sticky-top" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">

              <ul class="navbar-nav mr-auto justify-content-center" style="padding-left: 7%;">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Kezdőoldal</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bérelhető autóink
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('berelheto-szemelyautok-autokolcsonzes')}}">Személyautók</a>
                   <!-- <a class="dropdown-item" href="#">Kisbuszok</a> -->
                    <!--<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('a-bereljolcsonautot-autoberles-feltetelei')}}">Autóbérlés feltételei</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{url("autoberles-foglalas")}}">Foglalási űrlap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{url("elerhetoseg")}}">Elérhetőség</a>
                  </li>

                  @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admin menüpontok
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('foglalas.lista')}}">Foglalások</a>
                      <a class="dropdown-item" href="{{url('admin/ujautofelvitele')}}">Új autó felvétele</a>
                      <a class="dropdown-item" href="{{url('admin/autok/lista')}}">Autók szerkesztése</a>
                      <a class="dropdown-item" href="{{route('bejegyzes.lista')}}">Bejegyzések</a>
                      <a class="dropdown-item" href="{{url('loggingout')}}">Kijelentkezés</a>
                      <!--<div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                  </li>
                  @endauth



              </ul>

            </div>
          </nav>


    </div>
        <main class="py-4 mainBody">
            @yield('content')
        </main>

        <div class="row FooterColor" id="pageFooter ">

               <div class="col-md-4 col-sm-12  pt-5">
                    <h4 class="newH4Color pt-2">OLDALAK</h4>
                    <ul class="list-unstyled" id="footerLinks">
                        <li><a class="footerLinkItem" href="#">Kezdőoldal</a></li>
                        <li><a class="footerLinkItem" href="#">Bérelhető autók</a></li>
                        <li><a class="footerLinkItem" href="{{url('a-bereljolcsonautot-autoberles-feltetelei')}}">Autóbérlés feltételei</a></li>
                        <li><a class="footerLinkItem" href="{{url("autoberles-foglalas")}}">Foglalási űrlap</a></li>
                        <li><a class="footerLinkItem" href="#">Adatvédelmi tájékoztató</a></li>
                    </ul>
               </div>
               <div class="col-md-4  col-sm-12 pt-5">
                    <h4  class="newH4Color">ELÉRHETŐSÉG</h4>
                    <h5 class="footerLinkItem" style="font-size: 15px;padding-left: 30%;"><i class="fa fa-home" style="font-size:24px" title="Bérel olcsó autót irodája! Autóbérlés, autókölcsönzés Budapesten a Fehérvári úton!"></i>Bérelj olcsó autót!</h5>
                    <p class="footerLinkItem" style="padding-left: 30%;">1106 Budapest,</p>
                    <p class="mt-0" style="padding-left: 30%;color:#000;">Fehérvári út 108-112</p>
                </div>
                <div class="col-md-4  col-sm-12 pt-5">
                    <div class=" justify-content-center">
                        <h4  class="newH4Color">Kövess minket Facebookon! </h4>
                        <a href="https://www.facebook.com/bereljolcsonautot"  target="_blank"  title="Csatlakozz a Bérelj olcsón autót Facebook oldalához!">
                            <img  src="{{asset('kepek/facebook-social-media-fb-logobereljolcsoaoautot-autoberles-2020.webp')}}" alt="berelj-olcson-autot-facebbok-oldal-linkje-autoberles-budapest" title="Csatlakozz a Bérelj olcsón autót Facebook oldalához!" width="45px" height="45px">
                        </a>
                    </div>

                        <hr>
                        <h5 class="newH4Color">Bérelhető autóink</h5>
                        <p style="color: #000;">Opel , Ford, Peugeot, Suzuki, Citroen, Nissan, Toyota, Fiat, Volswagen, Reanult, Mitsubishi autóbérlés.</p>
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
