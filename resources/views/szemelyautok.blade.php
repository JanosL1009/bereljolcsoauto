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

    <style>
        hr{
            color: #fff; background-color: #fff;
        }
        .ar{
            font-size: 24px;
    font-weight: 700;
    margin-bottom: 10px;
    color: black;
        }
        .berauto{width: inherit;} ul {color:#000;}
        .card-xtra{width: 98% !important;}
    </style>

@endsection

@section('head-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js"></script>
<style>

</style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h1>Üdvözöljük leendő Ügyfeleink között!</h1>
<p>Kérjük, a megfelelő <strong>bérautó</strong> kategória ( személyautó vagy kisbusz) kiválasztása után legyen kedves kiválasztani az Önnek leginkább megfelelő <strong>bérautót</strong> az adott kategórián belül, és ennek megfelelően töltse ki az <strong>autóbérlési</strong> űrlapot, mely az Ön <strong>bérautó</strong> típusigényeit tartalmazza</p>
<p>A feltüntetett árak napi bérlés esetén értendőek.</p>
<p>Hosszú távú illetve havi bérlés esetén, kérjük vegye fel velünk a
kapcsolatot telefonon vagy levélben, ahol –típustól és időtartamtól
függően- egyedi árajánlattal szolgálunk az Ön részére.</p>
<p>Köszönettel:</p><p>A Bérelj Olcsó Autót csapata</p>
                </div>
            </div>
            <hr/>


            @foreach($autok as $auto)
            <div class="card card-xtra bg-white m-lg-3" data-id="berelhetoAutoBox" data-enumid="0">
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-4 col-sm-12">
                            <img class="berauto" src="{{asset('kepek/'.$auto->kep)}}" alt="berauto-autokolcsonzes-autoberles-budapest" title="{{$auto->autonev}} - autókölcsönzés, bérautó Budapesten olcsón!"/>
                        </div>
                        <div class=" col-md-8 col-sm-12 bg-white float-right">
                            <h4>
                                @if(isset($auto->Leiras))
                                    <a href="#" title="A {{$auto->autonev}} autó bemutatása, hogy biztos legyen autókölcsönzésében!">{{$auto->autonev}}</a>
                                @else
                                    <a href="#">{{$auto->autonev}} </a>
                                @endif


                            </h4>
                            <p class="ar">{{$auto->ara}} FT/nap <a href="{{url('autoberles-foglalas')}}" class="btn btn-primary float-right" title="Autókölcsönzése - Foglalás">FOGLALÁS</a></p>
                            <hr/>
                            <ul class="list-group list-group-horizontal-md list-group-horizontal-lg" style="width: inherit;">
                                <li  class="list-group-item">ajtók száma: {{$auto->ajtokSzama}}</li>
                                    <li  class="list-group-item">üzemanyag: @if($auto->uzemanyag == 0) {{ __('benzin') }} @else {{ __('dízel') }} @endif</li>
                                    <li  class="list-group-item">elektromos ablakemelő: @if($auto->elektromosAblakEmelo == 0) {{ __('nem') }} @else {{ __('igen') }} @endif</li>
                                    <li  class="list-group-item"> klíma: @if($auto->klima == 0) {{ __('nincs') }} @else {{ __('van') }} @endif</li>
                                    <li  class="list-group-item"> sebességváltó: @if($auto->uzemanyag == 0) {{ __('manuális') }} @else {{ __('automata') }} @endif</li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach




        </div>
        <div class="col-md-3 col-sm-12">
            <h3 id="autoberles-bejegyzesek-cikkek" title="Autóbérlés és autokölcsönzéssel kapcsolatos cikkek">Bejegyzések, cikkek</h3>
            <table>
                <tbody>
                    @foreach ($bejegyzesek as $b)
                        <tr>
                            <td><a href="{{route('Bejegyzes.FrontEnd',['slug' => $b->slug])}}"  class="btn btn-primary">{{$b->cim}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection


