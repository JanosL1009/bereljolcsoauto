@extends('layouts.app')

@section('head-seo')
    <title>Bérelj olcsón autót</title>
    <meta name="description" content="Olcsó autóbérlés, autókölcsönzés Budapesten! Bérelhető autóink között találhat Mercedest, Fordot, Opelt, Peugeot, Suzukit és sok más márkát, valamint kategóriát!"/>
    <meta name="keywords" content="autóbérlés budapest,autókölcsönzés,autókölcsönzés Budapeset,bérautó,bérautó Budapest"/>

    <meta name="author" content="Berelj olcsó Autót 2020">
    <meta name="robots" content="index,follow" />
    <link rel=”canonical” href=”https://www.bereljolcsoautot.hu/” />
    <meta name="og:site_name" content="www.bereljolcsoautot.hu"/>
    <meta name="og:type" content="Autóbérlés, bérautó, olcsó autókölcsönzés Budapest"/>



    @endsection

@section('head-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js"></script>
<style>

</style>
@endsection

@section('content')
<div class="mt-n4" style="width:100%; height:612px" data-simple-slider>
    <img src="https://www.bereljolcsoautot.hu/images/slider-03.jpg"/>
    <img src="https://www.bereljolcsoautot.hu/images/slider-02.jpg"/>
    <img src="https://www.bereljolcsoautot.hu/images/slider-05.jpg"/>
  </div>

  <div class="row">
    <section class="col-6 col-md-6 mt-3">
        <div class="card container justify-content-center">
            <h1 class="wh"><strong>ÜDVÖZÖLJÜK A BÉRELJ OLCSÓ AUTÓT OLDALÁN!</strong></h1>
            <p class="lead" style="font-size: 21px;">Amennyiben szeretne kedvező áron, <strong>olcsón autót bérelni Budapesten</strong>, vagy csak érdeklődik a  <strong>bérautók </strong> és az  <strong>autóbérlés </strong> iránt, forduljon hozzánk Bizalommal.</p>
        </div>
    </section>
    <section class="col-6 col-md-6 mt-3">
        <div class="card container justify-content-center">
            <p   style="color: #efefef;">Ha az <strong>autókölcsönzés</strong> folyamata érdekli is szívesen állunk rendelkezésére.</p>
            <p  style="color: #efefef;">Célunk, hogy lehető legegyszerűbbé tegyük az <strong>autóbérlés</strong> menetét, és hogy az olyan fogalmak, mint az <strong>olcsó autóbérlés, autókölcsönzés</strong> a gyakorlatban is megvalósulhassanak.</p>
            <img src="{{asset('kepek/bereljolcsoautot-autoberles-berauto-2020.jpg')}}" width="200px" alt="autobérlés-budapesten" title="Bérelj olcsó autót és már adjuk a kulcsot!">
        </div>
    </section>
  </div>

  <div class="row">
    <section class="col-12 col-md-12 mt-3">
        <div class="card " style="padding-left: 5%;">
           <h2 class="text-uppercase">Autót bérelne? roduljon hozzánk!</h2>
           <p> Kérjük, tekintse meg  <strong>bérautó </strong> kínálatunkat, válassza ki az Önnek leginkább megfelelő <strong>bérautót</strong>, majd online rendelőnkön, vagy mailben küldje el foglalását a szükséges adatok megadásával.</p>
                <p>
                    Természetesen bármilyen kérdése merülne fel az <strong>autókölcsönzéssel</strong> kapcsolatosan, telefonos ügyfélszolgálati számunkon kollégáink teljes körű felvilágosítással szolgálnak az <strong>autóbérlés</strong> folyamatát illetően.
                </p>
                <p >
                    <strong>Bérautóink az autókölcsönzés</strong> igényének elküldése (foglalási űrlap), illetve telefonos egyeztetése után díjmentesen átvehetőek telephelyünkön, vagy adott esetben kiszállítjuk az Önök által megadott címre Budapesten, minimális térítés ellenében.
                </p>
                <p >
                    Az <strong>autóbérléshez</strong> szükséges iratok felsorolását az <strong>Autóbérlés feltételei</strong> menüpontban találja.
                </p>

                <p >
                    A bérleti díj illetve az egyéb költségek rendezése a <strong>bérautó</strong> átvételekor történik, amikor is kollégáink készséggel állnak rendelkezésükre bármilyen, az <strong>autóbérléssel</strong> és a <strong>bérautóval</strong> - akár utólagosan felmerülő – kéréssel, kérdéssel kapcsolatosan.
                </p>
                <p >
                    Ezek után Önnek nincs is más dolga, mint hogy éljen az <strong>autóbérlés</strong> általi lehetőségekkel, és élvezze az autókölcsönzés kínálta előnyöket.
                </p>
                <p>
                Bízva abban, hogy Önt is hamarosan a <strong>Bérelj Olcsó Autót</strong> elégedett ügyfelei közt köszönthetjük,
                </p>
                <p >
                Üdvözlettel:
                </p>

            <p>A <strong>Bérelj Olcsó Autót</strong> csapata</p>
        </div>
    </section>

  </div>

  <script>
    simpleslider.getSlider();
  </script>
@endsection
