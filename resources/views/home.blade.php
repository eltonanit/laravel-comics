@extends('layouts.app')

@section('content')
<div id="jumbotron">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="comics-container">
        <div class="row">
        <div class="col-12">
            SPAZIO FUMETTI
        </div>
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-12 col-md-3 col-lg-2">
                <div class="card border-0">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        {{ $comic['title'] }}
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
    
</div>
@endsection