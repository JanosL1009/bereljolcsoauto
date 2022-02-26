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
    <div class="row">
        <section class="col-12 col-md-12 d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                            <h1 class="text-uppercase">Foglalásod sikeresen rögzítésre került!</h1>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                            <section>
                                <p>Autó foglalási szándékodat rögzítettük!</p>
                                <p>A foglalásról egy igazoló e-mailt küldünk neked.</p>
                                <p>Ha 10-15 percen belül nem érkezne meg a visszaigazoló e-mail, kéjük ellenőrizd a spam mappát is.
                                    Amennyiben a spam mappában sem található kérjük, hogy telefonon keresztül vedd fel velünk a kapcsolatot
                                    és mi ellenőrzzük a foglalásod sikerességét.
                                </p>
                                <p>Üdvözlettel, </p>
                                <p>a Bérelj olcsón autót csapata</p>
                            </section>
                    </div>
                </div>
        </section>
    </div>


@endsection


