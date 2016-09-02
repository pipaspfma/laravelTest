@extends('layouts.app')

@section('content')

    @if(!empty($typeMessage))

        <div class="alert @if($typeMessage == 1) alert-success @elseif($typeMessage == 2) alert-danger @endif" role="alert" id="m">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ $message }}
        </div>

    @endif


    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Job Offers</div>
                        @if(!empty($jobOffers))
                            @foreach($jobOffers as $jobOffer)
                                <a href="/jobOffer/{{ $jobOffer->id }}"> {{ $jobOffer->title }} </a> <br>
                            @endforeach
                        @else
                            You don't have any Job Offer Active.
                        @endif

                        <a href="/jobOffer/create">Create New Job Offer</a>
                    <div class="panel-body">


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

