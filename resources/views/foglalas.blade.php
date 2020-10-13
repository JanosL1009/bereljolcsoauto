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
                            <h1 class="text-uppercase">Foglalási űrlap</h1>
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                            <form class="col-12 col-md-12" action="{{url('autoberles-kolcsonzes-urlap')}}" method="POST" enctype="application/x-www-form-urlencoded">
                                  {{ csrf_field() }}
                                <div class="form-group">
                                      <input type="text" id="Nev" name="Nev" class="form-control" placeholder="Név*">
                                  </div>
                                  <div class="form-group">
                                    <input type="text" id="AnyjaNeve" name="AnyjaNeve" class="form-control" placeholder="Anyja neve*">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="Cim" name="Cim" class="form-control" placeholder="Cím*">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="LakcimSzam" name="LakcimSzam" class="form-control" placeholder="Lakcímkártya szám*">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="SzemIgSzam" name="SzemIgSzam" class="form-control" placeholder="Személyigazolvány szám*">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="JogsiSzam" name="JogsiSzam" class="form-control" placeholder="Jogosítvány szám*">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="Email" name="Email" class="form-control" placeholder="Email*">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="tartHely" name="tartHely" class="form-control" placeholder="Tartózkodási hely*">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="SzulIdo" name="SzulIdo" class="form-control" placeholder="Születési idő*">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="SzulHely" name="SzulHely" class="form-control" placeholder="Születési hely*">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="telefon" name="telefon" class="form-control" placeholder="Telefon*">
                                </div>

                                <div class="form-group">
                                    <input type="text" id="autokategoria" name="autokategoria" class="form-control" placeholder="Milyen kategóriájú autót szeretne bérelni?*">
                                </div>

                                <div class="form-group">
                                    <input type="text" id="berlesNapja" name="berlesNapja" class="form-control" placeholder="Kérem adja meg mely naptól szeretné bérelni az autót?*">
                                </div>

                                <div class="form-group">
                                    <input type="text" id="berlesIdotartama" name="berlesIdotartama" class="form-control" placeholder="Milyen időtartamra szeretné bérelni az autót?*">
                                </div>
                                <div class="form-group">
                                    <select class="form-control input-lg" name="hasznalat">
                                        <option value="1" selected>Kizárólag Magyarország határain belül szeretném használni az autót</option>
                                        <option value="0">Európa több országában is szeretném használni az autót</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="autoAtvevesHelye" name="autoAtvevesHelye" class="form-control" placeholder="Hol szeretné felvenni az autót?*">
                                </div>

                                <div class="form-group">
                                    <textarea cols="6" rows="8" name="Comments" class="form-control input-lg" placeholder="Egyéb igények"></textarea>
                                 </div>


                                 <div class="form-group">
                                    <input type="submit" value="FOGLALÁS" style="background-color: #FBC02D;color: #fff; border-style: none; border-radius: 3px;font-size: 20px;padding: 5px;margin-left: 45%;">
                                </div>
                            </form>
                    </div>
                </div>
        </section>
    </div>


@endsection


