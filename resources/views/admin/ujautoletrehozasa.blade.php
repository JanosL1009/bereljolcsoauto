@extends('layouts.app')

@section('head-script')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')
<style>
    .ck-content{height: 500px;}
</style>
<div class="container">
    <div class="row">
        <div class="col-6 col-md-6 ">
            <h3>Új autó felvitele</h3>
            <form class="" action="{{url('admin/ujautofelvitele_feldolgozo')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Auto elnevezése">Autó neve, típusa:</label>
                    <input type="text" class="form-control" id="autonev" name="autonev">
                </div>
                <div class="form-group">
                    <label for="Auto ára">Ár:</label>
                    <input type="number" class="form-control" id="autoara" name="autoara">
                </div>
                <div class="form-group">
                    <label for="Ajtók száma">Ajtók száma:</label>
                    <input type="number" class="form-control" id="ajtokszama" name="ajtokszama">
                </div>
                <div class="form-group">
                    <label for="Üzemanyag">Üzemanyag:</label>
                    <select  class="form-control" id="uzemanyag" name="uzemanyag">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="0">benzin</option>
                        <option value="1">dízel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Elektromos ablakemelő">Elektromos ablakemelő:</label>
                    <select  class="form-control" id="ablakemelo" name="ablakemelo">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="1">van</option>
                        <option value="0">nincs</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Klíma">Klíma:</label>
                    <select  class="form-control" id="klima" name="klima">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="1">van</option>
                        <option value="0">nincs</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Sebességváltó">Sebességváltó:</label>
                    <select  class="form-control" id="sebvalto" name="sebvalto">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="1">automata</option>
                        <option value="0">manuális</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Sebességváltó">Állapot:</label>
                    <select  class="form-control" id="allapot" name="allapot">
                        <option disabled selected value="">-- Válassz --</option>
                        <option value="1">aktív</option>
                        <option value="0">inaktív</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Kép feltöltés">Kép feltöltés:</label>
                   <input type="file" id="kep" name="kep" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Kép feltöltés">Leírás: </label>
                    <textarea id="editor" name="editor" rows="20" cols="20"></textarea>
                </div>
                <div class="form-group">
                   <input type="submit" id="feltolt" name="feltolt" class="btn btn-danger">
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
