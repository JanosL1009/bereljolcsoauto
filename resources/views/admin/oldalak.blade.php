@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                          <th scope="col">Cim</th>
                          <th scope="col">Művelet</th>

                        </tr>
                      </thead>

                      <tbody class="table-light">
                            @foreach($oldalak as $oldal)
                                <tr>
                                    <td>{{$oldal->oldal_neve}}</td>
                                    <td><a href="{{route('oldal.szerkesztes',[ "OldalID" => $oldal->id])}}">Módosítás</a></td>
                                </tr>
                            @endforeach

                      </tbody>

                </table>
            </div>

        </div>


    </div>
</div>

@endsection
