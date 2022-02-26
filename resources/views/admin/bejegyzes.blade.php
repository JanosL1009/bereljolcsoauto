@extends('layouts.app')

@section('head-seo')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- include summernote css/js -->

@section('content')

<div class="row">
    <div class="col-12">
        <a href="{{route('bejegyzes.letrehozas')}}" class="btn btn-warning float-right" style="margin-right: 20%;">Bejegyzés létrehozás</a>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <h1>Bejegyzések kezelése</h1>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Cím</th>
                          <th scope="col">Létrehozás ideje</th>
                          <th>Műveletek</th>
                        </tr>
                      </thead>

                      <tbody class="table-light">

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center"><a href=""><ion-icon name="eye"></ion-icon></a></td>
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
