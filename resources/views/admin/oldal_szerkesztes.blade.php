@extends('layouts.app')

@section('head-script')

<!-- froala editor -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

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
        <div class="col-12 col-md-12 ">
            <h3>Oldal szerkesztés - {{$oldal->oldal_neve}}</h3>
            <form class="" action="{{route('oldal.modositas.post')}}" enctype="multipart/form-data" method="POST">
                @csrf

                <div class="form-group">
                    <label for="tartalom">Tartalom</label>
                    <textarea id="example"  name="editordata">
                        {!! $oldal->tartalom !!}
                    </textarea>
                 </div>

                <div class="form-group">
                    <input type="hidden" id="oldalid" name="oldalid" class="btn btn-danger" value="{{$oldal->id}}">
                   <input type="submit" id="feltolt" name="feltolt" class="btn btn-danger" value="Mentés">
                </div>
            </form>
        </div>
    </div>

</div>


<script>
    var editor = new FroalaEditor('#example',{
    height: 500
  });
</script>

@endsection
