@extends('layouts.app')

@section('title', 'Single comic page')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Comic: {{ $comic->title }}
            </h1>
        </div>
    </div>
    <div class="row justify-content-around">
        <article class="card col-12 p-0 m-3">

            <img src="{{ $comic->thumb }}" class="card-img-top w-25" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $comic->title }}
                </h5>
                <h6>
                    ID : {{ $comic->id }}
                </h6>
               
            </div>
            
        </article>
    </div>
</div>

@endsection