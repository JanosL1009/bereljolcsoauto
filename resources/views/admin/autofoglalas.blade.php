@extends('layouts.app')

@section('head-seo')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@section('content')

<div class="row">
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <h1>Foglalások</h1>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                          <th scope="col">Mezőnév</th>
                          <th scope="col">Érték</th>

                        </tr>
                      </thead>

                      <tbody class="table-light">
                        <tr>
                            <td >Foglalás ideje</td>
                            <td >{{$foglalas->created_at}}</td>

                          </tr>

                        <tr>
                            <td >Név</td>
                            <td >{{$foglalas->nev}}</td>

                          </tr>

                          <tr>
                            <td >Anyja neve</td>
                            <td >{{$foglalas->anyjaNeve}}</td>

                          </tr>

                          <tr>
                            <td >Cím</td>
                            <td >{{$foglalas->cim}}</td>

                          </tr>

                          <tr>
                            <td >Lakcímkártya szám</td>
                            <td >{{$foglalas->lakcimKartya}}</td>

                          </tr>

                          <tr>
                            <td >Személyigazolvány szám</td>
                            <td >{{$foglalas->szigszam}}</td>

                          </tr>

                          <tr>
                            <td >Jogosítvány szám</td>
                            <td >{{$foglalas->jogsiszam}}</td>

                          </tr>

                          <tr>
                            <td >Email</td>
                            <td >{{$foglalas->email}}</td>

                          </tr>

                          <tr>
                            <td >Telefon</td>
                            <td >{{$foglalas->telefon}}</td>

                          </tr>

                          <tr>
                            <td >Milyen kategóriájú autót szeretne bérelni:</td>
                            <td >{{$foglalas->kategoria}}</td>

                          </tr>


                          <tr>
                            <td >Melyik naptól szeretné bérelni:</td>
                            <td >{{$foglalas->mikortolberelne}}</td>

                          </tr>

                          <tr>
                            <td >Bérlés időtartama: </td>
                            <td >{{$foglalas->meddig}}</td>

                          </tr>

                          <tr>
                            <td >Hasznalat</td>
                            <td >
                                @if($foglalas->mo_belul == 1)
                                    Magyaroszágon belül
                                @else
                                    Eruópa több országában
                                @endif
                            </td>

                          </tr>

                          <tr>
                            <td >Hol szeretné felvenni</td>
                            <td >{{$foglalas->atvetelHelye}}</td>

                          </tr>

                          <tr>
                            <td >Egyéb igények</td>
                            <td ><p>{{$foglalas->egyebIgeny}}</p></td>

                          </tr>

                      </tbody>

                </table>



            </div>

        </div>
        <div class="pages">

        </div>

    </div>
</div>

@endsection
