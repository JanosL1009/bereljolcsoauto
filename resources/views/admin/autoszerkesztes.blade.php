@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                          <th scope="col">Autó</th>
                          <th scope="col">Művelet</th>

                        </tr>
                      </thead>

                      <tbody class="table-light">
                            @foreach($autok as $auto)
                                <tr>
                                    <td>{{$auto->autonev}}</td>
                                    <td><a href="{{route('Auto.Modositas',[ "AutoID" => $auto->id])}}">Módosítás</a></td>
                                </tr>
                            @endforeach

                      </tbody>

                </table>
            </div>

        </div>
        <div class="pages">
            {{$autok->links()}}
        </div>

    </div>
</div>

@endsection
