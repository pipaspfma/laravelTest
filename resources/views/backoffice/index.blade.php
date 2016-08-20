@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Settings</h1>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
            </div>
            <div class="item">
                <img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
            </div>
            <div class="item">
                <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <hr class="featurette-divider">


    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/settings/update') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="upload_file" class="control-label col-sm-3">Upload File</label>
            <div class="col-sm-9">
                <input class="form-control" type="file" name="image" id="upload_file">
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