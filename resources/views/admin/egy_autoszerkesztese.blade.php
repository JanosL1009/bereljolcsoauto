@extends('layouts.app')

@section('head-script')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')
<style>
    .ck-content{height: 500px;}
</style>
<div class="container">

    @if ($errors->success->first())
    <div class="alert alert-success" role="alert">
        {{$errors->success->first()}}
      </div>
    @endif
    <div class="row">
        <div class="col-6 col-md-6 ">
            <h3>Új autó felvitele</h3>
            <form class="" action="{{route('Auto.Modositas.Post')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Auto elnevezése">Autó neve, típusa:</label>
                    <input type="text" class="form-control" id="autonev" name="autonev" value="{{$auto->autonev}}">
                </div>
                <div class="form-group">
                    <label for="Auto ára">Ár:</label>
                    <input type="number" class="form-control" id="autoara" name="autoara" value="{{$auto->ara}}">
                </div>
                <div class="form-group">
                    <label for="Ajtók száma">Ajtók száma:</label>
                    <input type="number" class="form-control" id="ajtokszama" name="ajtokszama" value="{{$auto->ajtokSzama}}">
                </div>
                <div class="form-group">
                    <label for="Üzemanyag">Üzemanyag:</label>
                    <select  class="form-control" id="uzemanyag" name="uzemanyag">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="0" @if($auto->uzemanyag == 0 ) selected @endif>benzin</option>
                        <option value="1" @if($auto->uzemanyag == 1 ) selected @endif>dízel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Elektromos ablakemelő">Elektromos ablakemelő:</label>
                    <select  class="form-control" id="ablakemelo" name="ablakemelo">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="1" @if($auto->elektromosAblakEmelo == 1 ) selected @endif>van</option>
                        <option value="0" @if($auto->elektromosAblakEmelo == 0 ) selected @endif>nincs</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Klíma">Klíma:</label>
                    <select  class="form-control" id="klima" name="klima">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="1" @if($auto->klima == 1 ) selected @endif>van</option>
                        <option value="0" @if($auto->klima == 0 ) selected @endif>nincs</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Sebességváltó">Sebességváltó:</label>
                    <select  class="form-control" id="sebvalto" name="sebvalto">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="1" @if($auto->sebessegValto == 1 ) selected @endif>automata</option>
                        <option value="0" @if($auto->klimsebessegValtoa == 0 ) selected @endif>manuális</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Sebességváltó">Állapot:</label>
                    <select  class="form-control" id="allapot" name="allapot">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="1" @if($auto->aktiv == 1 ) selected @endif>aktív</option>
                        <option value="0" @if($auto->aktiv == 0 ) selected @endif>inaktív</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Aktuális kép">Aktuális kép:</label>
                    <img src="{{asset('kepek/'.$auto->kep)}}" class="img-thumbnail">
                    <hr/>
                    <label for="Kép feltöltés">Kép feltöltés:</label>
                   <input type="file" id="kep" name="kep" class="form-control">
                </div>
              <!--  <div class="form-group">
                    <label for="Kép feltöltés">Leírás: </label>
                    <textarea id="editor" name="editor" rows="20" cols="20">

                    </textarea>
                </div> -->
                <div class="form-group">
                    <input type="hidden" id="autoid" name="autoid" class="btn btn-danger" value="{{$auto->id}}">
                   <input type="submit" id="feltolt" name="feltolt" class="btn btn-danger" value="Mentés">
                </div>
            </form>
        </div>
    </div>

</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
