@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Job Offer</div>

                    <div class="panel-body">

                        <form method="post" action="/jobOffer/create" name="FormProject">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon2">Title</span>
                                <input type="text" class="form-control" placeholder="Title" aria-describedby="sizing-addon2" name="title">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon2">Description</span>
                                <input type="text" class="form-control" placeholder="Description" aria-describedby="sizing-addon2" name="description">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon2">Email</span>
                                <input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2" name="email">
                            </div>
                            <br>

                            <button class="btn btn-primary" type="submit">Create Job Offer</button>


                        </form>

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

