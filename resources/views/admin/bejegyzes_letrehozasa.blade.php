@extends('layouts.app')

@section('head-seo')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<!-- froala editor -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
@section('content')



<div class="row">
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <h1>Bejegyzés létrehozása</h1>

                <form method="post" action="{{ route('bejegyzes.letrehozas.post')}}">
                    @csrf
                    <div class="form-group">
                        <label for="cim">Cím</label>
                        <input type="text" class="form-control" id="cim" name="cim">
                     </div>

                     <div class="form-group">
                        <label for="tartalom">Tartalom</label>
                        <textarea id="example"  name="editordata"></textarea>
                     </div>

                     <div class="form-group">
                        <label for="cim">Státusz</label>
                        <select id="status" name="status"  class="form-control">
                            <option value="0" selected>Piszkozat</option>
                            <option value="1">Élő</option>
                        </select>
                     </div>

                     <div class="form-group">
                        <label for="cim">SEO kulcsszavak</label>
                        <input type="text" class="form-control" id="seokeys" name="seokeys">
                     </div>

                     <div class="form-group">
                        <label for="cim">SEO leírás (röviden! max.5 mondat)</label>
                        <input type="text" class="form-control" id="seodesc" name="seodesc">
                     </div>

                     <div class="form-group">
                        <input type="submit" class="btn btn-warning" value="Létrehozás">
                     </div>
                </form>


            </div>

        </div>
        <div class="pages">

        </div>

    </div>
</div>

<script>
    var editor = new FroalaEditor('#example',{
    height: 500
  });
</script>
@endsection
