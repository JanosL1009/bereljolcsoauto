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
                                    <td>
                                        <a href="{{route('Auto.Modositas',[ "AutoID" => $auto->id])}}" class="btn btn-primary">Módosítás</a>
                                        <a href="#" data-toggle="modal" data-target="#carDeleteModal"  class="btn btn-danger" id="{{$auto->id}}" onclick="setID({{$auto->id}})">Törlés</a>
                                    </td>

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

<!-- Modal -->
<div class="modal fade" id="carDeleteModal" tabindex="-1" role="dialog" aria-labelledby="carDeleteModalLabel" aria-hidden="true" style="color: black;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <form action="{{route('Auto.Torles')}}" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="carDeleteModalLabel">Autó törlése</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Biztosan törölni szeretnéd? A törlés után már nem lehet az adatokat helyreállítani!</p>
                <p>Tipp: Ideiglenes autó kivonás esetében, az autó álapotát állítsd "inaktívra", és akkor nem jelenik meg!</p>
              </div>
              <div class="modal-footer">
                  @csrf
                <input type="hidden" id="carid" name="carid" value="0">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Törlés</button>
                <button type="button" class="btn btn-primary">Mégse</button>
              </div>

          </form>

      </div>
    </div>
  </div>

  <script>
      function setID(itemID)
      {
        document.getElementById('carid').value = itemID;
      }
  </script>

@endsection
