@extends('layouts.app')


@section('head-seo')
    <title>Bérelj olcsón autót</title>
    <meta name="description" content="Szeretne autót bérelni? Ismerje meg milyen feltételekkel veheti igénybe szolgáltatásainkat honlapunkon! Bérelhető autóink között találhat Mercedest, Fordot, Opelt, Peugeot, Suzukit és sok más márkát, valamint kategóriát!"/>
    <meta name="keywords" content="autóbérlés budapest,autókölcsönzés,autókölcsönzés Budapeset,bérautó,bérautó Budapest,autó bérlés, gépjármű bérlés, autó kölcsönzés, gépjármű kölcsönzés"/>

    <meta name="author" content="Berelj olcsó Autót 2020">
    <meta name="robots" content="index,follow" />
    <link rel=”canonical” href=”https://www.bereljolcsoautot.hu/” />
    <meta name="og:site_name" content="www.bereljolcsoautot.hu"/>
    <meta name="og:type" content="Autóbérlés, bérautó, olcsó autókölcsönzés Budapest"/>

    <meta name="subject" content="Autóbérlés, bérautó, olcsó autókölcsönzés Budapesten">

@endsection

@section('head-script')
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-sm-12 col-xs-12">
        <div class="card" style="padding-left: 17%;">
                {!! $oldal->tartalom !!}

        </div>



    </div>

    <div class="col-12 col-md-6 col-sm-12 col-xs-12">
        <div class="accordion" id="accordionExample" style="color: #000;">
            <div class="card" style="background-color: #FFF;color:#000;">

              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" style="color: #000;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Magánszemély esetén:
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ul style="list-style:none">
                        <li style="color: black;"><i class="fa fa-caret-right list-task"></i>személyi igazolvány vagy útlevél</li>
                        <li style="color: black;"><i class="fa fa-caret-right list-task"></i>érvényes jogosítvány</li>
                        <li style="color: black;"><i class="fa fa-caret-right list-task"></i>lakcímkártya</li>

                        <li style="color: black;"><i class="fa fa-caret-right list-task"></i>min. egy éves jogosítvány és ugyanennyi vezetői tapasztalat</li>
                    </ul>

                    </div>
              </div>
            </div>

            <div class="card" style="background-color: #FFF;color:#000;">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" style="color: #000;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Cég esetén:
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <ul style="list-style:none">
                        <li style="color: black;"><i class="fa fa-caret-right list-task"></i>cégkivonat</li>
                        <li style="color: black;"><i class="fa fa-caret-right list-task"></i>aláírási címpéldány</li>
                        <li style="color: black;"><i class="fa fa-caret-right list-task"></i>az aláíró személyes okmányai</li>
                    <ul></div>
              </div>
            </div>

          </div>
    </div>
</div>
@endsection


