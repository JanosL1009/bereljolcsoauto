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
                          <th scope="col">Név</th>
                          <th scope="col">Email cím</th>
                          <th scope="col">Telefon</th>
                          <th>Foglalás ideje</th>
                          <th>Megtekintés</th>

                        </tr>
                      </thead>

                      <tbody class="table-light">
                            @foreach ($foglalasok as $foglalas)
                            <tr>
                                <td>{{ $foglalas->nev}}</td>
                                <td>{{ $foglalas->email}}</td>
                                <td>{{ $foglalas->telefon}}</td>
                                <td>{{ $foglalas->created_at}}</td>
                                <td class="text-center"><a href="{{route('foglalas.show',[ 'id' => $foglalas->id])}}"><ion-icon name="eye"></ion-icon></a></td>
                            </tr>
                            @endforeach



                      </tbody>

                </table>

                {{ $foglalasok->links() }}

            </div>

        </div>
        <div class="pages">

        </div>

    </div>
</div>

@endsection
