@extends('layouts.app')

@section('content')

    @if(!empty($typeMessage))

        <div class="alert @if($typeMessage == 1) alert-success @elseif($typeMessage == 2) alert-danger @endif" role="alert" id="m">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ $message }}
        </div>

    @endif


    <div class="page-header">
        <h1>Settings</h1>
    </div>

    <hr class="featurette-divider">
    create link, type -> <script language=Javascript src="/promo_link.asp?REF=">  </script>
    <div class="row">

        <div class="col-md-3 column ui-sortable">
        <img height="200" width="200" src="{!! Auth::user()->photo() !!}" alt="">
        </div>
        <div class="col-md-9 column ui-sortable">
            teste
        </div>
    </div>

    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/settings/addLogo') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="upload_file" class="control-label col-sm-3">Change Perfil Photo</label>
            <div class="col-sm-9">
                <input class="form-control" type="file" name="logo" id="upload_file" accept="image/x-png, image/gif, image/jpeg" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Upload
                </button>
            </div>
        </div>
    </form>

    <hr class="featurette-divider">

    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/settings/addCV') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="upload_file" class="control-label col-sm-3">Add CV</label>
            <div class="col-sm-9">
                <input class="form-control" type="file" name="cv" id="upload_file" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Upload CV
                </button>
            </div>
        </div>
    </form>

    <hr class="featurette-divider">

@endsection