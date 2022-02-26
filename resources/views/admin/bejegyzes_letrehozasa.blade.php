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

                <form method="post">

                    <textarea id="example"  name="editordata"></textarea>

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
